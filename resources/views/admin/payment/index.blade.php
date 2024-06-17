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
            <div class="breadcrumb-item"><a href="javascript:void(0)"> Payment </a></div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>List Data Client Payments</h4>
            <div class="mt-4">
                <table id="data-table" class="table data-table">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Stripe ID</th>
                            <th>Status</th>
                            <th>Customer Name</th>
                            <th>Cardholder Name</th>
                            <th>Customer Email</th>
                            <th>Currency</th>
                            <th>Action</th>
                            {{-- <th>Package Order</th> --}}
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($payment as $dataPayment)
                        <tr>

                            <td>
                                <span class="badge bg-primary">#{{ $dataPayment->id }}</span>
                            </td>
                            <td>
                                <span class="badge bg-warning">{{ $dataPayment->stripe_id }}</span>
                            </td>
                            <td>
                                <span class="badge {{ $dataPayment->status == 'complete' ? 'bg-success' : 'bg-danger' }}">{{ $dataPayment->status }}</span>
                            </td>
                            <td>{{ $dataPayment->customer_name }}</td>
                            <td>{{ $dataPayment->payment_name }}</td>

                            <td>{{ $dataPayment->customer_email }}</td>
                            <td>{{ ($dataPayment->currency == 'idr' ? 'IDR ' : 'USD ') }}{{ $dataPayment->amount_paid }}</td>
                            {{-- <td>{{ $dataPayment->package_name }}</td> --}}
                            <td>
                                <form action="/admin/payment/{{ $dataPayment->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-warning btn-sm">Delete Data</button>
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
