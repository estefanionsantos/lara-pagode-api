<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function hello($name)
    {
        return response()->json(['name' => $name]);
    } 

    public function foobar($name, Request $request)
    {
        return response()->json([
            'name' => $name,
            'foo' => $request->foo,
            'cambio' => $request->all()
        ]); 
    } 
}
