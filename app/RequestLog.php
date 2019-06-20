<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestLog extends Model
{

    use SoftDeletes;

    protected $fillable = ['timestamp', 'url', 'method', 'ip', 'statusCode', 'user_id'];

}
