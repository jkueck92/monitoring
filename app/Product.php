<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    protected $fillable = ['name', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }

}
