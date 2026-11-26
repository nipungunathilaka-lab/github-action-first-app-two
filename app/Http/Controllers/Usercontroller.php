<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function getUserDetails()
    {
        return response()->json([
            'name' => 'kalpana',
            'role' => 'admin',
            'created_at' => 'today',
            'updated_at' => 'yesterday',
        ]);
    }
}
