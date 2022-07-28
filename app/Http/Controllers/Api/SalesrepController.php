<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Salesrep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SalesrepController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $salesreps = Salesrep::get();
        return $this->apiResponse($salesreps,'Ok',200);
    }


    public function show($id)
    {
        $salesrep = Salesrep::find($id);
        if($salesrep)
        {
            return $this->apiResponse($salesrep,'Ok',200);
        }
        return $this->apiResponse(null,'The Salesrep Not Found',404);
    }


    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(),
        [
            'salesrep_name' => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $salesrep = Salesrep::create($request->all());
        if($salesrep)
        {
            return $this->apiResponse($salesrep,'The Salesrep Save',201);
        }
        return $this->apiResponse(null,'The Salesrep Not Save',400);
    }


    public function update(Request $request ,$id)
    {
        $validator  = Validator::make($request->all(),
        [
            'salesrep_name' => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $salesrep = Salesrep::find($id);
        if(!$salesrep)
        {
            return $this->apiResponse(null,'The Salesrep Not Found',404);
        }
        $salesrep->update($request->all());
        if($salesrep)
        {
            return $this->apiResponse($salesrep,'The Salesrep Update',201);
        }
    }


    public function destroy($id)
    {
        $salesrep = Salesrep::find($id);
        if(!$salesrep)
        {
            return $this->apiResponse(null,'The Salesrep Not Found',404);
        }
        $salesrep->delete($id);
        if($salesrep)
        {
            return $this->apiResponse(null,'The Salesrep Deleted',200);
        }
    }
}
