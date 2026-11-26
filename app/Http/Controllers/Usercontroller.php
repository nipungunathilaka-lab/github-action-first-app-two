<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function getUserDeatails()
    {
        return response()->json([
            'name' => 'kalpana',
            'role' => 'admin',
            'create_at' => 'today',
            'update_at' => 'yesterday',
        ]);
    }
}
