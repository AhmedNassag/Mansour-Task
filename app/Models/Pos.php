<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    use HasFactory;

    protected $table   = 'pos';
    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sales::class,'pos_id');
    }
}
