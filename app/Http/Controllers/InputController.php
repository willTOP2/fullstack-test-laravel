<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function Text(Request $request, $texto)
    {
        return response()->json([
          "Texto do botao: $texto"
        ]);
    }
}
