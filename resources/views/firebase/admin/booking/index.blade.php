@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #B3BDF2">
                        <h4 class="title-font" style="color: #0420BF">Bookings List
                            <div class="float-end">
                                <a href="{{ url('admin-index') }}" class="btn btn-sm btn-outline-primary">BACK TO ADMIN INDEX</a>
                            </div>
                        </h4>
                    </div>
                    <div class="card-body table-responsive-xxl ">
                        <div class="table-show table-borderless table-hover table-striped">
                            <table>
                                <thead>
                                <tr class="title-font" style="color: #0717b2">
                                    <th colspan="15">UID</th>
                                    <th colspan="15">ADDRESS ID</th>
                                    <th colspan="15">SERVICE</th>
                                    <th colspan="15">DETAILS</th>
                                    <th colspan="15">INITIAL PRICE</th>
                                    <th colspan="15">SERVICE FEE</th>
                                    <th colspan="15">ADDITIONAL FEE</th>
                                    <th colspan="15">WORKER ASSIGNED</th>
                                    <th colspan="15">STATUS</th>
                                    <th colspan="15">TIME BOOKED</th>
                                    <th colspan="15">TIME SCHEDULED</th>
                                    <th colspan="15">TIME UPDATED</th>
                                    <th colspan="15"></th>
                                </tr>
                                </thead>
                                <tbody id="bookingsList">
                                    @foreach($bookings as $book)
                                        <tr id="tableFooter">
                                            <td class="table-data" colspan="15">{{ $book['UID'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['addressID'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['service'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['details'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['initialPrice'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['serviceFee'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['additionalFee'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['workerAssigned'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['status'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['timeBooked'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['timeScheduled'] ?? ''}}</td>
                                            <td class="table-data" colspan="15">{{ $book['timeUpdated'] ?? ''}}</td>
                                            <td>
                                                <a href="{{ url('book-edit/' . $book['id']) }}" class="btn btn-outline-primary">Edit</a>
                                            </td>
                                            <td>
                                            <button onclick="confirmDelete('{{ $book['id'] }}')" class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(bookId) {
            if (confirm('Are you sure you want to delete this booking?')) {

                fetch("{{ url('book-delete') }}/" + bookId, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json' // Specify content type
                    }
                }).then(response => {
                    if (response.ok) {
                        window.location.reload();
                    }
                }).catch(error => {
                    console.error('Error:', error);
                });
            }
        }
    </script>



@endsection
