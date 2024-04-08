@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="card">
                    <div class="card-header" style="background-color: #B3BDF2">
                        <h4 class="title-font" style="color: #0420BF">Edit a Customer
                            <a href="{{ url('cust-index') }}" class="btn btn-sm btn-outline-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form action="{{ url('cust-update/' . $customerId) }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" class="form-control" id="emailBox" name="email" value="{{ $customer['email'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="control-label">Password</label>
                                <input type="text" class="form-control" id="passwordBox" name="password" value="{{ $customer['password'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="first_name" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="first_nameBox" name="first_name" value="{{ $customer['first_name'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="middle_name" class="control-label">Middle Name</label>
                                <input type="text" class="form-control" id="middle_nameBox" name="middle_name" value="{{ $customer['middle_name'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="last_name" class="control-label">Last Name</label>
                                <input type="text" class="form-control" id="last_nameBox" name="last_name" value="{{ $customer['last_name'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="birth_date" class="control-label">Birthday</label>
                                <input type="date" class="form-control" id="birth_dateBox" name="birth_date" value="{{ $customer['birth_date'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone_number" class="control-label">Mobile Number</label>
                                <input type="text" class="form-control" id="phone_numberBox" name="phone_number" value="{{ $customer['phone_number'] }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="landline_number" class="control-label">Landline Number</label>
                                <input type="text" class="form-control" id="landline_numberBox" name="landline_number" value="{{ $customer['landline_number'] }}">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update Customer</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
