<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FamilyController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $families = Family::get();
        return $this->apiResponse($families,'Ok',200);
    }


    public function show($id)
    {
        $family = Family::find($id);
        if($family)
        {
            return $this->apiResponse($family,'Ok',200);
        }
        return $this->apiResponse(null,'The Family Not Found',404);
    }


    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(),
        [
            'family_seq' => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $family = Family::create($request->all());
        if($family)
        {
            return $this->apiResponse($family,'The Family Save',201);
        }
        return $this->apiResponse(null,'The Family Not Save',400);
    }


    public function update(Request $request ,$id)
    {
        $validator  = Validator::make($request->all(),
        [
            'family_seq' => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $family = Family::find($id);
        if(!$family)
        {
            return $this->apiResponse(null,'The Family Not Found',404);
        }
        $family->update($request->all());
        if($family)
        {
            return $this->apiResponse($family,'The Family Update',201);
        }
    }


    public function destroy($id)
    {
        $family = Family::find($id);
        if(!$family)
        {
            return $this->apiResponse(null,'The Family Not Found',404);
        }
        $family->delete($id);
        if($family)
        {
            return $this->apiResponse(null,'The Family Deleted',200);
        }
    }
}
