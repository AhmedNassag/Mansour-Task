<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Salester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SalesterController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $salesters = Salester::get();
        return $this->apiResponse($salesters,'Ok',200);
    }


    public function show($id)
    {
        $salester = Salester::find($id);
        if($salester)
        {
            return $this->apiResponse($salester,'Ok',200);
        }
        return $this->apiResponse(null,'The Salester Not Found',404);
    }


    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(),
        [
            'salester_name' => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $salester = Salester::create($request->all());
        if($salester)
        {
            return $this->apiResponse($salester,'The Salester Save',201);
        }
        return $this->apiResponse(null,'The Salester Not Save',400);
    }


    public function update(Request $request ,$id)
    {
        $validator  = Validator::make($request->all(),
        [
            'salester_name' => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $salester = Salester::find($id);
        if(!$salester)
        {
            return $this->apiResponse(null,'The Salester Not Found',404);
        }
        $salester->update($request->all());
        if($salester)
        {
            return $this->apiResponse($salester,'The Salester Update',201);
        }
    }


    public function destroy($id)
    {
        $salester = Salester::find($id);
        if(!$salester)
        {
            return $this->apiResponse(null,'The Salester Not Found',404);
        }
        $salester->delete($id);
        if($salester)
        {
            return $this->apiResponse(null,'The Salester Deleted',200);
        }
    }
}
