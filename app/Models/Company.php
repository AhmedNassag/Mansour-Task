<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table   = 'companies';
    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sales::class,'company_id');
    }
}
