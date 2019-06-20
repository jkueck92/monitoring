<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogLevel extends Model
{

    protected $fillable = ['name', 'description'];

    public function logs()
    {
        return $this->hasMany(Log::class);
    }

}
