<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesrep extends Model
{
    use HasFactory;

    protected $table   = 'salesreps';
    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sales::class,'salesrep_id');
    }
}
