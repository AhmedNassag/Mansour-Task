<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $table   = 'routes';
    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sales::class,'route_id');
    }
}
