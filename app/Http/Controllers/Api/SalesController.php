<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $sales = Sales::get();
        return $this->apiResponse($sales,'Ok',200);
    }


    public function show($id)
    {
        $sale = Sales::find($id);
        if($sale)
        {
            return $this->apiResponse($sale,'Ok',200);
        }
        return $this->apiResponse(null,'The Sales Not Found',404);
    }


    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(),
        [
            'jou_id'           => 'required',
            'salescall_id'     => 'required',
            'region'           => 'required',
            'branch_code'      => 'required',
            'company_id'       => 'required',
            'category_id'      => 'required',
            'ter_id'           => 'required',
            'pos_id'           => 'required',
            'temp'             => 'required',
            'salesrep_id'      => 'required',
            'salester_id'      => 'required',
            'route_id'         => 'required',
            'day'              => 'required',
            'visit_start_time' => 'required',
            'visit_end_time'   => 'required',
            'call_status_id'   => 'required',
            'family_id'        => 'required',
            'prod_id'          => 'required',
            'sales_car'        => 'required',
            'stock'            => 'required',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $sale = Sales::create($request->all());
        if($sale)
        {
            return $this->apiResponse($sale,'The Sales Save',201);
        }
        return $this->apiResponse(null,'The Sales Not Save',400);
    }


    public function update(Request $request ,$id)
    {
        $validator  = Validator::make($request->all(),
        [
            'jou_id'           => 'required',
            'salescall_id'     => 'required',
            'region'           => 'required',
            'branch_code'      => 'required',
            'company_id'       => 'required',
            'category_id'      => 'required',
            'ter_id'           => 'required',
            'pos_id'           => 'required',
            'temp'             => 'required',
            'salesrep_id'      => 'required',
            'salester_id'      => 'required',
            'route_id'         => 'required',
            'day'              => 'required',
            'visit_start_time' => 'required',
            'visit_end_time'   => 'required',
            'call_status_id'   => 'required',
            'family_id'        => 'required',
            'prod_id'          => 'required',
            'sales_car'        => 'required',
            'stock'            => 'required',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $sale = Sales::find($id);
        if(!$sale)
        {
            return $this->apiResponse(null,'The Sales Not Found',404);
        }
        $sale->update($request->all());
        if($sale)
        {
            return $this->apiResponse($sale,'The Sales Update',201);
        }
    }


    public function destroy($id)
    {
        $sale = Sales::find($id);
        if(!$sale)
        {
            return $this->apiResponse(null,'The Sales Not Found',404);
        }
        $sale->delete($id);
        if($sale)
        {
            return $this->apiResponse(null,'The Sales Deleted',200);
        }
    }
}
