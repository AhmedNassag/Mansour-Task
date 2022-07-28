<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salester extends Model
{
    use HasFactory;

    protected $table   = 'salesters';
    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sales::class,'salester_id');
    }
}
