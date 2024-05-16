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
            <div class="breadcrumb-item"><a href="javascript:void(0)"> Services </a></div>
            <div class="breadcrumb-item"><a href="h-data-table.html"> Data Services </a></div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>List Data Service</h4>
            <div class="mt-4">
                <table id="data-table" class="table data-table">
                    <thead class="text-center">
                        <tr>
                            <th width="10%">Number</th>
                            <th>Name Service</th>
                            <th>Service Category</th>
                            <th>Outpost Location</th>
                            <th>Flexible Payment</th>
                            <th>IDR Price</th>
                            <th>USD Price</th>
                            <th width="18%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($dataService as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->service_category }}</td>
                            <td>{{ $service->outpost_location_name }}</td>
                            <td>{{ $service->flexible_payment }}</td>
                            <td>{{ $service->idr_price == null ? '-' : 'Rp. ' . number_format($service->idr_price, 0, ',', '.') }}</td>
                            <td>{{ $service->usd_price == null ? '-' : 'USD $'. $service->usd_price }}</td>
                            <td>
                                <a href="/admin/service/{{ $service->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                                <form action="/admin/service/{{ $service->id }}" method="POST" class="d-inline">
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
