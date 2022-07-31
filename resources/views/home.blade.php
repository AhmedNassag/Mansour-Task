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
                            <th class="text-center">No.</th>
                            <th class="text-center">Options</th>
                            <th class="text-center">JOU_ID</th>
                            <th class="text-center">SALESCALL_ID</th>
                            <th class="text-center">REGION</th>
                            <th class="text-center">BRANCH_CODE</th>
                            <th class="text-center">COMPANY_SEQ</th>
                            <th class="text-center">COMPANY_ID</th>
                            <th class="text-center">COMPANY_NAME</th>
                            <th class="text-center">CATEGORY_DESC</th>
                            <th class="text-center">CATEGORY_ID</th>
                            <th class="text-center">TER_ID</th>
                            <th class="text-center">POS_ID</th>
                            <th class="text-center">POS_CODE</th>
                            <th class="text-center">POS_NAME</th>
                            <th class="text-center">TEMP</th>
                            <th class="text-center">SALESREP_ID</th>
                            <th class="text-center">SALESREP_NAME</th>
                            <th class="text-center">SALES_TER_ID</th>
                            <th class="text-center">ROUTE_TYPE_ID</th>
                            <th class="text-center">SALES_TER_NAME</th>
                            <th class="text-center">ROUTE_TYPE</th>
                            <th class="text-center">DAY</th>
                            <th class="text-center">VISIT_START_TIME</th>
                            <th class="text-center">VISIT_END_TIME</th>
                            <th class="text-center">CALL_STATUS_ID</th>
                            <th class="text-center">FAMILY_ID</th>
                            <th class="text-center">FAMILY_SEQ</th>
                            <th class="text-center">PROD_FAMILY</th>
                            <th class="text-center">PROD_SEQ</th>
                            <th class="text-center">PRODUCT</th>
                            <th class="text-center">PROD_ID</th>
                            <th class="text-center">SALES_CAR</th>
                            <th class="text-center">STOCK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sales as $sale)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">
                                    <a href="{{url('edit/'.$sale->id)}}" class="btn btn-primary btn-sm m-2">EDIT</a>
                                    <a href="{{url('destroy/'.$sale->id)}}" class="btn btn-danger btn-sm">DELETE</a>
                                </td>
                                <td class="text-center">{{$sale->jou_id}}</td>
                                <td class="text-center">{{$sale->salescall_id}}</td>
                                <td class="text-center">{{$sale->region}}</td>
                                <td class="text-center">{{$sale->branch_code}}</td>
                                <td class="text-center">{{$sale->company->company_seq}}</td>
                                <td class="text-center">{{$sale->company_id}}</td>
                                <td class="text-center">{{$sale->company->company_name}}</td>
                                <td class="text-center">{{$sale->category->category_desc}}</td>
                                <td class="text-center">{{$sale->category_id}}</td>
                                <td class="text-center">{{$sale->ter_id}}</td>
                                <td class="text-center">{{$sale->pos_id}}</td>
                                <td class="text-center">{{$sale->pos->pos_code}}</td>
                                <td class="text-center">{{$sale->pos->pos_name}}</td>
                                <td class="text-center">{{$sale->temp}}</td>
                                <td class="text-center">{{$sale->salesrep_id}}</td>
                                <td class="text-center">{{$sale->salesrep->salesrep_name}}</td>
                                <td class="text-center">{{$sale->salester_id}}</td>
                                <td class="text-center">{{$sale->route_id}}</td>
                                <td class="text-center">{{$sale->salester->salester_name}}</td>
                                <td class="text-center">{{$sale->route->route_type}}</td>
                                <td class="text-center">{{$sale->day}}</td>
                                <td class="text-center">{{$sale->visit_start_time}}</td>
                                <td class="text-center">{{$sale->visit_end_time}}</td>
                                <td class="text-center">{{$sale->call_status_id}}</td>
                                <td class="text-center">{{$sale->family_id}}</td>
                                <td class="text-center">{{$sale->family->family_seq}}</td>
                                <td class="text-center">{{$sale->prod->prod_family}}</td>
                                <td class="text-center">{{$sale->prod->prod_seq}}</td>
                                <td class="text-center">{{$sale->prod->product}}</td>
                                <td class="text-center">{{$sale->prod_id}}</td>
                                <td class="text-center">{{$sale->sales_car}}</td>
                                <td class="text-center">{{$sale->stock}}</td>
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
