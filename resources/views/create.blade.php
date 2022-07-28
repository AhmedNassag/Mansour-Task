@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        New Sales
                        <a href="{{url('home')}}" class="btn btn-md btn-danger py-2" style="float: right;">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session()->get('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="{{route('store')}}" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <!--jou_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Jou ID</label>
                                    <input type="text" name="jou_id" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!--salescall_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sales Call ID</label>
                                    <input type="text" name="salescall_id" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!--region-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Region</label>
                                    <input type="text" name="region" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!--branch_code-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Branch Code</label>
                                    <input type="text" name="branch_code" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!-- select company_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Company</label>
                                    <select name="company_id" class="form-control">
                                        @foreach($companies as $row)
                                        <option value="{{$row->id}}">{{$row->company_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- select category_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $row)
                                        <option value="{{$row->id}}">{{$row->category_desc}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!--ter_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ter ID</label>
                                    <input type="text" name="ter_id" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!-- select pos_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="pos_id" class="form-control">
                                        @foreach($pos as $row)
                                        <option value="{{$row->id}}">{{$row->pos_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!--temp-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Temp</label>
                                    <input type="text" name="temp" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!-- select salesrep_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sales Rep</label>
                                    <select name="salesrep_id" class="form-control">
                                        @foreach($salesreps as $row)
                                        <option value="{{$row->id}}">{{$row->salesrep_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- select salester_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sales Ter</label>
                                    <select name="salester_id" class="form-control">
                                        @foreach($salesters as $row)
                                        <option value="{{$row->id}}">{{$row->salester_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- select route_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Routes</label>
                                    <select name="route_id" class="form-control">
                                        @foreach($routes as $row)
                                        <option value="{{$row->id}}">{{$row->route_type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!--day-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Day</label>
                                    <input type="date" name="day" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!-- visit_start_time -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Visit Start Time</label>
                                    <input type="time" name="visit_start_time" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!-- visit_end_time -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Visit End Time</label>
                                    <input type="time" name="visit_end_time" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!--call_status_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Call Status ID</label>
                                    <input type="text" name="call_status_id" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!-- select family_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Family Id</label>
                                    <select name="family_id" class="form-control">
                                        @foreach($families as $row)
                                        <option value="{{$row->id}}">{{$row->family_seq}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- select prod_id-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Prod Id</label>
                                    <select name="prod_id" class="form-control">
                                        @foreach($prods as $row)
                                        <option value="{{$row->id}}">{{$row->product}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!--sales_car-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sales Car</label>
                                    <input type="text" name="sales_car" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <!--stock-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Stock</label>
                                    <input type="text" name="stock" class="form-control" placeholder="Enter value">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="text-center btn btn-md btn-success" style="padding: 10px; margin-top: 50px ; margin-left: 40%; margin-right: 40%; width:20%">SAVE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
