<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Users API is working',
        ]);
    }
}
