<!-- resources/views/customers/index.blade.php -->

@extends('layouts.app')

@section('content')


<br>

    <h2>Customer List</h2>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Add Customer</a>



    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->contact_number }}</td>
                    <td>
                        <a href="{{ route('customers.sendPromotionalEmail', $customer) }}" class="btn btn-primary">Send Email</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
