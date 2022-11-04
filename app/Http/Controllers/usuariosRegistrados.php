<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosRegistrados extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $registers = [
            ['register' => 'maicol'],
            ['register' => 'villa'],
            ['register' => 'gaviria'],
            ['register' => 'hola'],
            ['register' => 'maicos'],
            ['register' => 'alexis'],
                ];
        return  view('admin/usuariosRegistrados', compact('registers'));
    }
}
