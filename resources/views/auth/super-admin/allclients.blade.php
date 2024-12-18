@extends('layouts.super-admin-app')

@section('title', 'All Clients')

@section('content')
<div class="pagetitle">
    <h1>All Clients</h1>
</div>

<div class="container-fluid py-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Client List</h5>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>ID Number</th>
                        <th>Next of Kin</th>
                        <th>Guarantor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->phone_number }}</td>
                        <td>{{ $client->id_number }}</td>
                        <td>{{ $client->nextOfKin->name ?? 'N/A' }}</td>
                        <td>{{ $client->guarantor->name ?? 'N/A' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection