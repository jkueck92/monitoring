<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{

    use SoftDeletes;

    protected $fillable = ['title', 'body', 'product_id', 'log_level_id'];

    public function logLevel()
    {
        return $this->belongsTo(LogLevel::class, 'log_level_id');
    }

}
