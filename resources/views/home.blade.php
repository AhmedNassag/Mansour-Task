@extends('layouts.app')

@section('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                All Sales
                <a href="{{route('create')}}" class="btn btn-sm btn-success py-2" style="float: right;">Add New Sales</a>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Options</th>
                            <th>JOU_ID</th>
                            <th>SALESCALL_ID</th>
                            <th>REGION</th>
                            <th>BRANCH_CODE</th>
                            <th>COMPANY_SEQ</th>
                            <th>COMPANY_ID</th>
                            <th>COMPANY_NAME</th>
                            <th>CATEGORY_DESC</th>
                            <th>CATEGORY_ID</th>
                            <th>TER_ID</th>
                            <th>POS_ID</th>
                            <th>POS_CODE</th>
                            <th>POS_NAME</th>
                            <th>TEMP</th>
                            <th>SALESREP_ID</th>
                            <th>SALESREP_NAME</th>
                            <th>SALES_TER_ID</th>
                            <th>ROUTE_TYPE_ID</th>
                            <th>SALES_TER_NAME</th>
                            <th>ROUTE_TYPE</th>
                            <th>DAY</th>
                            <th>VISIT_START_TIME</th>
                            <th>VISIT_END_TIME</th>
                            <th>CALL_STATUS_ID</th>
                            <th>FAMILY_ID</th>
                            <th>FAMILY_SEQ</th>
                            <th>PROD_FAMILY</th>
                            <th>PROD_SEQ</th>
                            <th>PRODUCT</th>
                            <th>PROD_ID</th>
                            <th>SALES_CAR</th>
                            <th>STOCK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sales as $sale)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <a href="{{url('edit/'.$sale->id)}}" class="btn btn-primary btn-sm m-2">EDIT</a>
                                    <a href="{{url('destroy/'.$sale->id)}}" class="btn btn-danger btn-sm">DELETE</a>
                                </td>
                                <td>{{$sale->jou_id}}</td>
                                <td>{{$sale->salescall_id}}</td>
                                <td>{{$sale->region}}</td>
                                <td>{{$sale->branch_code}}</td>
                                <td>{{$sale->company->company_seq}}</td>
                                <td>{{$sale->company_id}}</td>
                                <td>{{$sale->company->company_name}}</td>
                                <td>{{$sale->category->category_desc}}</td>
                                <td>{{$sale->category_id}}</td>
                                <td>{{$sale->ter_id}}</td>
                                <td>{{$sale->pos_id}}</td>
                                <td>{{$sale->pos->pos_code}}</td>
                                <td>{{$sale->pos->pos_name}}</td>
                                <td>{{$sale->temp}}</td>
                                <td>{{$sale->salesrep_id}}</td>
                                <td>{{$sale->salesrep->salesrep_name}}</td>
                                <td>{{$sale->salester_id}}</td>
                                <td>{{$sale->route_id}}</td>
                                <td>{{$sale->salester->salester_name}}</td>
                                <td>{{$sale->route->route_type}}</td>
                                <td>{{$sale->day}}</td>
                                <td>{{$sale->visit_start_time}}</td>
                                <td>{{$sale->visit_end_time}}</td>
                                <td>{{$sale->call_status_id}}</td>
                                <td>{{$sale->family_id}}</td>
                                <td>{{$sale->family->family_seq}}</td>
                                <td>{{$sale->prod->prod_family}}</td>
                                <td>{{$sale->prod->prod_seq}}</td>
                                <td>{{$sale->prod->product}}</td>
                                <td>{{$sale->prod_id}}</td>
                                <td>{{$sale->sales_car}}</td>
                                <td>{{$sale->stock}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- DataTables -->
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
@endsection
