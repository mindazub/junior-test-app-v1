@extends('layouts.admin')

@section('content')

    <table class="table table-bordered" id="employee-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Website</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Comp ID</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>

@stop

@push('scripts')

    <script type="text/javascript">
        $(function () {

            var table = $('#employee-table').DataTable({
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'csv', 'print'
                ],
                ajax: "{{ route('employee.data') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'firstName', name: 'firstName'},
                    {data: 'lastName', name: 'lastName'},
                    {data: 'website', name: 'website'},
                    {data: 'phone', name: 'phone'},
                    {data: 'email', name: 'email'},
                    {data: 'company_id', name: 'company_id'},
                    {data: 'created_at', name: 'created_at' },
                    {data: 'updated_at', name: 'updated_at' },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

        });
    </script>

@endpush


