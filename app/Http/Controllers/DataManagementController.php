<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataManagementController extends Controller
{
    public function index(){
        return view('app.data-management',[
            'products' => \App\Models\Product::all(),
        ]);
    }
}
