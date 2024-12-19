@extends('layouts.super-admin-app')

@section('title', 'All Cars')

@section('content')
<div class="pagetitle">
    <h1>All Cars</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('super-admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Car</li>
        </ol>
    </nav>
</div>
<div class="container py-4">


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Make</th>
                <th>Model</th>
                <th>Price</th>
                <th>Number Plate</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $car->make }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->price }}</td>
                <td>{{ $car->number_plate }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection