<!-- resources/views/customers/create.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="row pt-5">
        <div class="col-md-3">
            <img class="card-img-top"  src="https://t4.ftcdn.net/jpg/05/21/94/81/360_F_521948178_WUlWgu8X5k2TyHH5bDJDY1tRfJEvz4CN.jpg" alt="customer">
        </div>
        <div class="col-md-7">
            <div class="card text-start">

              <div class="card-body">
                <h4 class="card-title">Add Customer</h4>
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="text" name="contact_number" id="contact_number" class="form-control">
                    </div>
                    <!-- Add other fields here -->
                    <br>
                    <button type="submit" class="btn btn-primary">Add Customer</button>
                    <a href="/customers" class="btn btn-danger">Cancel</a>
                </form>
              </div>
            </div>
        </div>
    </div>



@endsection
