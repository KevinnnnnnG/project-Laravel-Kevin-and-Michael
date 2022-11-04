<?php

namespace App\Http\Controllers;

use App\Models\proyect;
use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $registers = [
            ['register' => 'maicol'],
            ['register' => 'villa'],
            ['register' => 'gaviria'],
            ['register' => 'hola'],
            ['register' => 'maicos'],
            ['register' => 'alexis'],
        ];
        return view('admin/index', compact('registers'));
    */
    $registers = proyect::get();
    return view('admin.usuariosRegistrados.usuariosRegistrados', compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuariosRegistrados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return proyect::create
        ([
            'title' => request('title'),
            'description' => request('description'),
        ]);
        return redirect()->route('register.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(proyect $proyect)
    {
        return view('admin.usuariosRegistrados.showUsuariosRegistrados', ['proyect' => $proyect ]);
        //o se puede de la siguiente forma
        //$proyect = proyect::find($id);
        //return view('admin.showUsuariosRegistrados', $proyect);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
