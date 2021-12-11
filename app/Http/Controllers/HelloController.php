<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(Request $request)
    {
        return response()->json([
            'mensagem' => 'Hello, world! Laravel OK'
        ]);
    } 
    
    public function horas(Request $request) { 
    date_default_timezone_set('America/Sao_Paulo');
    $DateHours = now()->format('d/m/Y  H:i:s');
    
    return response()->json([
      
        'DateHours' => $DateHours
    ]);
}
}
