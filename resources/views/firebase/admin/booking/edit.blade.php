@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="card">
                    <div class="card-header" style="background-color: #B3BDF2">
                        <h4 class="title-font" style="color: #0420BF">Edit a Booking
                            <a href="{{ url('book-index') }}" class="btn btn-sm btn-outline-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form action="{{ url('book-update/' . $bookID) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="uid" class="control-label">User ID</label>
                                <input type="text" class="form-control" id="uidBox" readonly>
                            </div>
                            <div class="form-group">
                                <label for="addressID" class="control-label">Address ID</label>
                                <input type="text" class="form-control" id="addressIDBox" value="{{ $book['addressID'] }}">
                            </div>
                            <div class="form-group">
                                <label for="service" class="control-label">Service</label>
                                <input type="text" class="form-control" id="serviceBox" value="{{ $book['service'] }}">
                            </div>
                            <div class="form-group">
                                <label for="details" class="control-label">Details</label>
                                <input type="text" class="form-control" id="detailsBox" value="{{ $book['details'] }}">
                            </div>
                            <div class="form-group">
                                <label for="initialPrice" class="control-label">Initial Price</label>
                                <input type="text" class="form-control" id="initialPriceBox" value="{{ $book['initialPrice'] }}">
                            </div>
                            <div class="form-group">
                                <label for="serviceFee" class="control-label">Service Fee</label>
                                <input type="text" class="form-control" id="serviceFeeBox" value="{{ $book['serviceFee'] }}">
                            </div>
                            <div class="form-group">
                                <label for="additionalFee" class="control-label">Additional Fee</label>
                                <input type="text" class="form-control" id="additionalFeeBox" value="{{ $book['additionalFee'] }}">
                            </div>
                            <div class="form-group">
                                <label for="workerAssigned" class="control-label">Worker Assigned</label>
                                <select name="workerAssigned" class="form-control" id="workerAssignedBox" value="{{ $book['workerAssigned'] }}">
                                    <option value="worker01">Patrick Ponce Karlos</option>
                                    <option value="worker02">Jane Alvaro Donzhulweta</option>
                                    <option value="worker03">John Villanueva Doe</option>
                                    <option value="worker04">Akira Domingo Caneda</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="status" class="control-label">Status</label>
                                <select name="status" class="form-control" id="statusBox">
                                    <option value="inProgress">Booked</option>
                                    <option value="ayosna">Ayos Na!</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>


                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update Booking</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
