<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Product;

class ProductController extends Controller
{

    public function index()
    {
        return new ProductCollection(Product::all());
    }

    public function show($id)
    {
        return new ProductResource(Product::find($id));
    }

}
