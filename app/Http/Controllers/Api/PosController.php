<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PosController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $pos = Pos::get();
        return $this->apiResponse($pos,'Ok',200);
    }


    public function show($id)
    {
        $po = Pos::find($id);
        if($po)
        {
            return $this->apiResponse($po,'Ok',200);
        }
        return $this->apiResponse(null,'The Po Not Found',404);
    }


    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(),
        [
            'pos_name' => 'required|max:255',
            'pos_code' => 'required',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $po = Pos::create($request->all());
        if($po)
        {
            return $this->apiResponse($po,'The Po Save',201);
        }
        return $this->apiResponse(null,'The Po Not Save',400);
    }


    public function update(Request $request ,$id)
    {
        $validator  = Validator::make($request->all(),
        [
            'pos_name' => 'required|max:255',
            'pos_code' => 'required',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $po = Pos::find($id);
        if(!$po)
        {
            return $this->apiResponse(null,'The Po Not Found',404);
        }
        $po->update($request->all());
        if($po)
        {
            return $this->apiResponse($po,'The Po Update',201);
        }
    }


    public function destroy($id)
    {
        $po = Pos::find($id);
        if(!$po)
        {
            return $this->apiResponse(null,'The Po Not Found',404);
        }
        $po->delete($id);
        if($po)
        {
            return $this->apiResponse(null,'The Po Deleted',200);
        }
    }
}
