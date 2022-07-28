<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Company;
use App\Models\Family;
use App\Models\Pos;
use App\Models\Prod;
use App\Models\Route;
use App\Models\Salesrep;
use App\Models\Salester;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales::with
        ([
            'company',
            'category',
            'pos',
            'salesrep',
            'salester',
            'route',
            'family',
            'prod'
        ])->get();
        return view('home',compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies  = Company::all();
        $categories = Category::all();
        $pos        = Pos::all();
        $salesreps  = Salesrep::all();
        $salesters  = Salester::all();
        $routes     = Route::all();
        $families   = Family::all();
        $prods      = Prod::all();
        return view('create',compact('companies','categories','pos','salesreps','salesters','routes','families','prods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
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
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $sale = Sales::create
        ([
            'jou_id'           => $request->jou_id,
            'salescall_id'     => $request->salescall_id,
            'region'           => $request->region,
            'branch_code'      => $request->branch_code,
            'company_id'       => $request->company_id,
            'category_id'      => $request->category_id,
            'ter_id'           => $request->ter_id,
            'pos_id'           => $request->pos_id,
            'temp'             => $request->temp,
            'salesrep_id'      => $request->salesrep_id,
            'salester_id'      => $request->salester_id,
            'route_id'         => $request->route_id,
            'day'              => $request->day,
            'visit_start_time' => $request->visit_start_time,
            'visit_end_time'   => $request->visit_end_time,
            'call_status_id'   => $request->call_status_id,
            'family_id'        => $request->family_id,
            'prod_id'          => $request->prod_id,
            'sales_car'        => $request->sales_car,
            'stock'            => $request->stock,
        ]);
        if($sale)
        {
            return redirect()->route('home')->with
            ([
                'message'    => 'Data Added Successfully',
                'alert-type' => 'success'
            ]);
        }
        else
        {
            return redirect()->route('home')->with
            ([
                'message'    => 'Data Not Added',
                'alert-type' => 'danger'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale       = Sales::find($id);
        $companies  = Company::all();
        $categories = Category::all();
        $pos        = Pos::all();
        $salesreps  = Salesrep::all();
        $salesters  = Salester::all();
        $routes     = Route::all();
        $families   = Family::all();
        $prods      = Prod::all();
        return view('edit',compact('sale','companies','categories','pos','salesreps','salesters','routes','families','prods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalesRequest  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sale = Sales::find($id);
        if(!$sale)
        {
            return redirect()->route('home')->with
            ([
                'message'    => 'Data Not Added',
                'alert-type' => 'danger'
            ]);
        }
        $sale->update($request->all());
        return redirect()->route('home')->with
        ([
            'message'    => 'Data Added Successfully',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = Sales::find($id);
        if(!$sale)
        {
            return redirect()->route('home')->with
            ([
                'message'    => 'Data Not Found',
                'alert-type' => 'danger'
            ]);
        }
        $sale->delete();
        return redirect()->route('home')->with
        ([
            'message'    => 'Data Deleted Successfully',
            'alert-type' => 'success'
        ]);
    }
}
