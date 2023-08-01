<!-- resources/views/customers/edit.blade.php -->

@extends('layouts.app')

@section('content')


    <div class="row pt-5">
        <div class="col-md-3">
            <img class="card-img-top"  src="https://t4.ftcdn.net/jpg/05/21/94/81/360_F_521948178_WUlWgu8X5k2TyHH5bDJDY1tRfJEvz4CN.jpg" alt="customer">
        </div>
        <div class="col-md-7">
            <div class="card text-start">

              <div class="card-body">
                <h4 class="card-title">Edit Customer</h4>
                <form action="{{ route('customers.update', $customer) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $customer->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{ $customer->contact_number }}">
                    </div>
                    <!-- Add other fields here -->

                    <button type="submit" class="btn btn-primary">Update Customer</button>
                    <a href="/customers" class="btn btn-danger">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>

@endsection
