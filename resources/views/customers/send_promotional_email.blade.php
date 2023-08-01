@extends('layouts.app')

@section('content')
    <h2>Send Promotional Email</h2>

    <form action="{{ route('customers.sendPromotionalEmail', $customer) }}" method="POST">
        @csrf
        <p>Send a promotional email to {{ $customer->name }} at {{ $customer->email }}</p>
        <button type="submit" class="btn btn-primary">Send Email</button>
    </form>
@endsection
