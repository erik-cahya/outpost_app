@extends('admin.layouts.master')
@section('css_customize')
    <link href="{{ asset('admin_assets') }}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="main">
    <div class="page-header">
        <div class="breadcrumb">
            <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
            <div class="breadcrumb-item"><a href="{{ route('dashboard') }}"> Home </a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0)"> Location </a></div>
            <div class="breadcrumb-item"><a href="h-data-table.html"> List Location</a></div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>Location</h4>
            <div class="mt-4">
                <table id="data-table" class="table data-table">
                    <thead>
                        <tr>
                            <th width="10%">Number</th>
                            <th>Name Location</th>
                            <th width="25%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataLocation as $location)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{!! $location->name !!}</td>
                            <td>

                                <a href="/admin/location/{{ $location->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                                <form action="/admin/location/{{ $location->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-sm">Delete Data</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js_customize')
<script src="{{ asset('admin_assets') }}/assets/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('admin_assets') }}/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
<script>
    $('.data-table').DataTable({
        responsive: true

    });
</script>

@endsection
