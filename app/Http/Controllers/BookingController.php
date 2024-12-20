<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\Car;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Mail\BookingReceiptMail;

class BookingController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all clients and vehicles for the booking form
        $clients = Client::all();
        $cars = Car::all();

        // Return the view with the data
        return view('auth.admin.dashboard', compact('clients', 'cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'car_id' => 'required|exists:cars,id',
            'pickup_date' => 'required|date|after_or_equal:today',
            'return_date' => 'required|date|after_or_equal:pickup_date',
            'amount_paid' => 'required|numeric|min:0',
            'client_signature' => 'required|string',
        ]);

        // Log::info('Client Signature Data:', ['client_signature' => $request->input('client_signature')]);

        try {
            $signatureData = $request->input('client_signature');
            $signatureImage = str_replace('data:image/png;base64,', '', $signatureData);
            $signatureImage = str_replace(' ', '+', $signatureImage);
            $decodedImage = base64_decode($signatureImage);

            if ($decodedImage === false) {
                return redirect()->back()->withErrors(['client_signature' => 'Invalid signature data.']);
            }

            $signatureFileName = uniqid() . '.png';
            $signatureFilePath = 'signatures/' . $signatureFileName;

            Storage::disk('public')->put($signatureFilePath, $decodedImage);

            $booking = Booking::create([
                'client_id' => $validated['client_id'],
                'car_id' => $validated['car_id'],
                'pickup_date' => $validated['pickup_date'],
                'return_date' => $validated['return_date'],
                'amount_paid' => $validated['amount_paid'],
                'admin_id' => Auth::id(),
                'client_signature_path' => $signatureFilePath,
            ]);
            // Generate the PDF
            // Generate the PDF
            $pdfPath = $this->generatePDF($booking);

            // Email the PDF to the client if an email exists
            if (!empty($booking->client->email)) {
                Mail::to($booking->client->email)->send(new BookingReceiptMail($booking, $pdfPath));
            }

            // Return the PDF for download
            return response()->download(Storage::disk('public')->path($pdfPath))->deleteFileAfterSend();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while saving the booking: ' . $e->getMessage()]);
        }
    }

    public function generatePDF(Booking $booking)
    {
        // Generate PDF
        $pdf = Pdf::loadView('pdf.booking-receipt', compact('booking'));

        // Define file path
        $filePath = 'receipts/receipt_' . uniqid() . '.pdf';

        // Save PDF to storage
        Storage::disk('public')->put($filePath, $pdf->output());

        return $filePath;
    }



    public function markReturned(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'actual_return_date' => 'required|date|after_or_equal:' . $booking->pickup_date,
        ]);

        $booking->update([
            'actual_return_date' => $validated['actual_return_date'],
        ]);

        return redirect()->back()->with('success', 'Car marked as returned successfully.');
    }
    public function pendingReturns()
    {
        $bookings = Booking::whereNull('actual_return_date')->get();

        return view('bookings.pending-returns', compact('bookings'));
    }
    public function markReturnedWithCheckbox(Request $request, Booking $booking)
    {
        $booking->update([
            'actual_return_date' => now(),
        ]);

        return redirect()->route('bookings.pendingReturns')->with('success', 'Booking marked as returned successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }
    public function getBookings(Request $request)
    {
        $filter = $request->query('filter', 'today');
        $query = Booking::query();

        // Filter bookings
        if ($filter === 'today') {
            $query->whereDate('pickup_date', now()->toDateString());
        } elseif ($filter === 'this_month') {
            $query->whereMonth('pickup_date', now()->month)
                ->whereYear('pickup_date', now()->year);
        } elseif ($filter === 'this_year') {
            $query->whereYear('pickup_date', now()->year);
        }

        $bookings = $query->get(['client_name', 'phone_number', 'car_name', 'number_plates', 'amount_paid', 'pickup_date', 'authorized_by']);

        return response()->json(['bookings' => $bookings]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
