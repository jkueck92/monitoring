<?php

namespace App\Http\Controllers\Api\V1;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerCollection;
use App\Http\Resources\CustomerResource;

class CustomerController extends Controller
{

    public function index()
    {
        return new CustomerCollection(Customer::all());
    }

    public function show($id)
    {
        return new CustomerResource(Customer::find($id));
    }

}
