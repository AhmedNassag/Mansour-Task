<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RouteController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $routes = Route::get();
        return $this->apiResponse($routes,'Ok',200);
    }


    public function show($id)
    {
        $route = Route::find($id);
        if($route)
        {
            return $this->apiResponse($route,'Ok',200);
        }
        return $this->apiResponse(null,'The Route Not Found',404);
    }


    public function store(Request $request)
    {
        $validator  = Validator::make($request->all(),
        [
            'route_type' => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $route = Route::create($request->all());
        if($route)
        {
            return $this->apiResponse($route,'The Route Save',201);
        }
        return $this->apiResponse(null,'The Route Not Save',400);
    }


    public function update(Request $request ,$id)
    {
        $validator  = Validator::make($request->all(),
        [
            'route_type' => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return $this->apiResponse(null,$validator->errors(),400);
        }
        $route = Route::find($id);
        if(!$route)
        {
            return $this->apiResponse(null,'The Route Not Found',404);
        }
        $route->update($request->all());
        if($route)
        {
            return $this->apiResponse($route,'The Route Update',201);
        }
    }


    public function destroy($id)
    {
        $route = Route::find($id);
        if(!$route)
        {
            return $this->apiResponse(null,'The Route Not Found',404);
        }
        $route->delete($id);
        if($route)
        {
            return $this->apiResponse(null,'The Route Deleted',200);
        }
    }
}
