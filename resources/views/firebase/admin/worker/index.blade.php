@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #B3BDF2">
                        <h4 class="title-font" style="color: #0420BF">Worker List
                            <div class="float-end">
                                <a href="{{ url('admin-index') }}" class="btn btn-sm btn-outline-primary">BACK TO ADMIN INDEX</a>
                                <a href="{{ url('work-create') }}" class="btn btn-sm btn-success">ADD WORKER</a>
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
                                    <th colspan="9">RATING  </th>
                                    <th colspan="9">VERIFIED</th>
                                    <th colspan="9">CREATED ON</th>
                                    <th colspan="9">UPDATED ON</th>
                                    <th colspan="9"></th>
                                </tr>
                                </thead>
                                <tbody id="workerList">
                                    @foreach($workers as $worker)
                                        <tr id="tableFooter">
                                            <td class="table-data" colspan="9">{{ $worker['first_name'] ?? ''}} {{ $worker['middle_name'] ??''}} {{ $worker['last_name'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $worker['email'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $worker['birth_date'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $worker['phone_number'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $worker['landline_number'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $worker['rating'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $worker['verification'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $worker['create_time'] ?? ''}}</td>
                                            <td class="table-data" colspan="9">{{ $worker['update_time'] ?? ''}}</td>
                                            <td>
                                                <a href="{{ url('work-edit/' . $worker['id']) }}" class="btn btn-outline-primary">Edit</a>
                                            </td>
                                            <td>
                                            <button onclick="confirmDelete('{{ $worker['id'] }}')" class="btn btn-danger">Delete</button>
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
        function confirmDelete(workerId) {
            if (confirm('Are you sure you want to delete this worker?')) {

                fetch("{{ url('work-delete') }}/" + workerId, {
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
