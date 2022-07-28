<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table   = 'sales';
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function pos()
    {
        return $this->belongsTo(Pos::class,'pos_id');
    }

    public function salesrep()
    {
        return $this->belongsTo(Salesrep::class,'salesrep_id');
    }

    public function salester()
    {
        return $this->belongsTo(Salester::class,'salester_id');
    }

    public function route()
    {
        return $this->belongsTo(Route::class,'route_id');
    }

    public function family()
    {
        return $this->belongsTo(Family::class,'family_id');
    }

    public function prod()
    {
        return $this->belongsTo(Prod::class,'prod_id');
    }
}
