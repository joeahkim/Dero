<!DOCTYPE html>
<html>

<head>
    <title>Booking Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: auto;
        }

        img {
            height: 100px;
        }

        .container-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .header {
            text-align: center;
            flex-grow: 1;
        }

        .header p,
        .header h1 {
            margin: 2px;
        }

        .invoice-container {
            text-align: right;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <table cellspacing="0" cellpadding="0" style="border: none; border-collapse: collapse; width: 100%; text-align: left;">
            <tbody>
                <tr style="border: none;">
                    <!-- Logo -->
                    <td style="border: none; width: 20%; text-align: left; vertical-align: middle;">
                        <img src="{{ public_path('assets/img/favicon.png') }}" alt="Logo" style="width: 100px; height: auto;">
                    </td>

                    <!-- Header Content -->
                    <td style="border: none; width: 60%; text-align: center; vertical-align: top;">
                        <h1 style="margin: 0; padding: 0; font-size: 26px">Derrique Homes and Travels</h1>
                        <p style="margin: 0; padding: 0;">P.O BOX 14854</p>
                        <p style="margin: 0; padding: 0; font-size:14px">Teejay's Arcade, Along Oginga Odinga Avenue</p>
                        <p style="margin: 0; padding: 0;">Nakuru 20100</p>
                        <p style="margin: 0; padding: 0;">0790179020 | derriquehomesandtravels@gmail.com</p>
                    </td>

                    <!-- Invoice Section -->
                    <td style="border: none; width: 20%; text-align: right; vertical-align: middle;">
                        <h4 style="margin: 0; padding: 0;">INVOICE</h4>
                    </td>
                </tr>
            </tbody>
        </table>

        <hr>

        <!-- Client Details -->
        <div class="section">
            <h4>BILL TO</h4>
            <p><strong>Name:</strong> {{ $booking->client->name }}</p>
            <p><strong>Residence:</strong> {{ $booking->client->residence }}</p>
            <p><strong>Phone:</strong> {{ $booking->client->phone_number }}</p>
            <p><strong>Email:</strong> {{ $booking->client->email }}</p>
        </div>

        <!-- Payment Details -->
        <div>
            <h4>PAYMENT RECEIPT</h4>
        </div>
        <br>

        <!-- Booking Details Table -->
        <div>
            <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; text-align: left; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>DESCRIPTION</th>
                        <th>QTY (Days)</th>
                        <th>PRICE PER DAY</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $days = max(1, \Carbon\Carbon::parse($booking->pickup_date)->diffInDays(\Carbon\Carbon::parse($booking->return_date)));
                    $pricePerDay = $booking->amount_paid / $days;
                    @endphp
                    <tr>
                        <td>1</td>
                        <td>{{ $booking->car->make }} {{ $booking->car->model }} ({{ $booking->car->number_plate }})</td>
                        <td>{{ $days }}</td>
                        <td>KES {{ number_format($pricePerDay, 2) }}</td>
                        <td>KES {{ number_format($booking->amount_paid, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: right; font-weight: bold;">GRAND TOTAL</td>
                        <td>KES {{ number_format($booking->amount_paid, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <p>Thank you for your business.</p>
        </div>
        <table cellspacing="0" cellpadding="0" style="border: none; border-collapse: collapse; width: 100%; text-align: left;">
            <tbody>
                <tr style="border: none;">
                    <!-- Payment Instructions -->
                    <td style="border: none; margin: 0; padding: 0;">
                        <h4 style="margin: 0; padding:0;">Payment Instructions</h4>
                        <p style="margin: 0; padding: 0;">DERRIQUE HOMES AND TRAVELS</p>
                        <p style="margin: 0; padding: 0;">0920 636 001</p>
                        <p style="margin: 0; padding: 0;">DIAMOND TRUST BANK</p>
                        <p style="margin: 0; padding-bottom: 5px;">NAKURU BRANCH</p>
                        <p></p>
                        <p style="margin: 0; padding: 0;">MPESA PAYBILL NUMBER</p>
                        <p style="margin: 0; padding: 0;">516600</p>
                        <p style="margin: 0; padding: 0;">ACC NUMBER</p>
                        <p style="margin: 0; padding: 0;">448133</p>
                    </td>

                    <!-- Superadmin Signature -->
                    <td style="border: none; margin: 0; padding: 0; text-align: right;">
                        <h4 style="margin: 0; padding: 0;">For, DERRIQUE HOMES AND TRAVELS</h4>
                        <img src="{{ storage_path('app/public/superadmin/signature.png') }}" alt="Superadmin Signature" width="200" style="margin: 0; padding: 0;">
                        <p style="margin: 0; padding: 0;">AUTHORIZED SIGNATURE</p>
                    </td>
                </tr>
            </tbody>
        </table>


        <!-- Footer Section -->
    </div>
</body>

</html>