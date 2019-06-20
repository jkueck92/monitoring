<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\LogCollection;
use App\Http\Resources\LogResource;
use App\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{

    public function index()
    {
        return new LogCollection(Log::all());
    }

    public function show($id)
    {
        return new LogResource(Log::find($id));
    }

    public function store(Request $request)
    {
        $data = $request->json()->all();
        $log = new Log();
        $log->title = $data['title'];
        $log->body = $data['body'];
        $log->product_id = 1;
        $log->log_level_id = 1;
        $log->save();
    }

}
