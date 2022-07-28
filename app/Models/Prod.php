<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod extends Model
{
    use HasFactory;

    protected $table   = 'prods';
    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sales::class,'prod_id');
    }
}
