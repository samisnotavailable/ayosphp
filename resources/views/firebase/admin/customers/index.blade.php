@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #B3BDF2">
                        <h4 class="title-font" style="color: #0420BF">Customer List
                            <div class="float-end">
                                <a href="{{ url('admin-index') }}" class="btn btn-sm btn-outline-primary">BACK TO ADMIN INDEX</a>
                                <a href="{{ url('cust-create') }}" class="btn btn-sm btn-success">ADD CUSTOMER</a>
                            </div>
                        </h4>
                    </div>
                    <div class="card-body table-responsive-xxl ">
                        <div class="table-show table-borderless table-hover table-striped">
                            <table>
                                <thead>
                                <tr class="title-font" style="color: #0717b2">
                                    <th colspan="9">FULL NAME</th>
                                    <th colspan="9">EMAIL</th>
                                    <th colspan="9">BIRTHDAY</th>
                                    <th colspan="9">MOBILE NO.</th>
                                    <th colspan="9">HOME NO. </th>
                                    <th colspan="9">CREATED ON</th>
                                    <th colspan="9">UPDATED ON</th>
                                    <th colspan="9"></th>
                                </tr>
                                </thead>
                                <tbody id="customersList">
                                    @foreach($customers as $customer)
                                        <tr id="tableFooter">
                                            <td class="table-data" colspan="9">{{ $customer['first_name'] ?? ''}} {{ $customer['middle_name'] ??''}} {{ $customer['last_name'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $customer['email'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $customer['birth_date'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $customer['phone_number'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $customer['landline_number'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $customer['create_time'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $customer['update_time'] ?? ''}}</td>
                                            <td>
                                                <a href="{{ url('cust-edit/' . $customer['id']) }}" class="btn btn-outline-primary">Edit</a>
                                            </td>
                                            <td>
                                            <button onclick="confirmDelete('{{ $customer['id'] }}')" class="btn btn-danger">Delete</button>
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
        function confirmDelete(customerId) {
            if (confirm('Are you sure you want to delete this customer?')) {

                fetch("{{ url('cust-delete') }}/" + customerId, {
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
