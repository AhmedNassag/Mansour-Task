<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $companies = Company::get();
        return $this->apiResponse($companies,'Ok',200);
    }


    public function show($id)
    {
        $company = Company::find($id);
        if($company)
        {
            return $this->apiResponse($company,'Ok',200);
        }
        return $this->apiResponse(null,'The Company Not Found',404);
    }


    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(),
        [
            'company_name' => 'required|max:255',
            'company_seq' => 'required',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $company = Company::create($request->all());
        if($company)
        {
            return $this->apiResponse($company,'The Company Save',201);
        }
        return $this->apiResponse(null,'The Company Not Save',400);
    }


    public function update(Request $request ,$id)
    {
        $validator  = Validator::make($request->all(),
        [
            'company_name' => 'required|max:255',
            'company_seq' => 'required',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $company = Company::find($id);
        if(!$company)
        {
            return $this->apiResponse(null,'The Company Not Found',404);
        }
        $company->update($request->all());
        if($company)
        {
            return $this->apiResponse($company,'The Company Update',201);
        }
    }


    public function destroy($id)
    {
        $company = Company::find($id);
        if(!$company)
        {
            return $this->apiResponse(null,'The Company Not Found',404);
        }
        $company->delete($id);
        if($company)
        {
            return $this->apiResponse(null,'The Company Deleted',200);
        }
    }
}
