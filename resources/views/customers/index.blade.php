<!-- resources/views/customers/index.blade.php -->

@extends('layouts.app')

@section('content')


<br>

    <h2>Customer List</h2>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">Add Customer</a>



    <table id="customers-table" class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Email Send</th>
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
                        <a href="{{ route('customers.sendPromotionalEmail', $customer) }}" class="btn btn-success">Send Email</a>
                    </td>
                    <td>
                        <a href="{{ route('customers.edit', $customer) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <script>
        // Initialize DataTables
        $(document).ready(function() {
            $('#customers-table').DataTable({
                searchable: true, // Enable searching on all columns
                paging: false,
            });
        });
    </script>


@endsection
