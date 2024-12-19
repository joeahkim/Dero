@extends('layouts.super-admin-app')

@section('title', 'Pending Returns')

@section('content')
<div class="pagetitle">
    <h1>Pending Returns</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('super-admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Returns</li>
        </ol>
    </nav>
</div>
<div class="container-fluid py-4">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Client</th>
                <th>Phone Number</th>
                <th>Car</th>
                <th>Number Plate</th>
                <th>Pickup Date</th>
                <th>Expected Return Date</th>
                <th>Authorized By</th>
                <th>Mark as Returned</th>

            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->client->name }}</td>
                <td>{{ $booking->client->phone_number }}</td>
                <td>{{ $booking->car->make }} {{ $booking->car->model }}</td>
                <td>{{ $booking->car->number_plate }}</td>
                <td>{{ $booking->pickup_date }}</td>
                <td>{{ $booking->return_date }}</td>
                <td>{{ $booking->admin->name }}</td>

                <td>
                    <form method="POST" action="{{ route('bookings.markReturnedWithCheckbox', $booking->id) }}">
                        @csrf
                        @method('PATCH')
                        <input type="checkbox" name="mark_returned" onchange="this.form.submit()">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection