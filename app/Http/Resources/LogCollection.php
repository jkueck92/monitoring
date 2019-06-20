<?php

namespace App\Http\Resources;

use App\Log;
use Illuminate\Http\Resources\Json\ResourceCollection;

class LogCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (Log $log) {
            return (new LogResource($log));
        });
        return parent::toArray($request);
    }
}
