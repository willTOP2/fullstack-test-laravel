<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function Text(Request $request)
    {
    $msg = $request->input('msg');
        return response()->json([
          'msg'=> $msg
        ]);
    }
}
