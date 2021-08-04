<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Http\Resources\Services as ServicesResource;
use App\Http\Resources\ServicesCollection;

class ServicesController extends Controller
{
    public function index()
    {
        return new ServicesCollection(Services::all());
    }

    public function show($id)
    {
        return new ServicesCollection(Services::findOrFail($id));
    }

    
}
