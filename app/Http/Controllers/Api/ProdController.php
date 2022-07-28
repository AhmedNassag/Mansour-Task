<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Prod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $prods = Prod::get();
        return $this->apiResponse($prods,'Ok',200);
    }


    public function show($id)
    {
        $prod = Prod::find($id);
        if($prod)
        {
            return $this->apiResponse($prod,'Ok',200);
        }
        return $this->apiResponse(null,'The Prod Not Found',404);
    }


    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(),
        [
            'product'     => 'required|max:255',
            'prod_family' => 'required|max:255',
            'prod_seq'    => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $prod = Prod::create($request->all());
        if($prod)
        {
            return $this->apiResponse($prod,'The Prod Save',201);
        }
        return $this->apiResponse(null,'The Prod Not Save',400);
    }


    public function update(Request $request ,$id)
    {
        $validator  = Validator::make($request->all(),
        [
            'product'     => 'required|max:255',
            'prod_family' => 'required|max:255',
            'prod_seq'    => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $prod = Prod::find($id);
        if(!$prod)
        {
            return $this->apiResponse(null,'The Prod Not Found',404);
        }
        $prod->update($request->all());
        if($prod)
        {
            return $this->apiResponse($prod,'The Prod Update',201);
        }
    }


    public function destroy($id)
    {
        $prod = Prod::find($id);
        if(!$prod)
        {
            return $this->apiResponse(null,'The Prod Not Found',404);
        }
        $prod->delete($id);
        if($prod)
        {
            return $this->apiResponse(null,'The Prod Deleted',200);
        }
    }
}
