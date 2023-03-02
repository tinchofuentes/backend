<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'], 'min|:3',
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'integer'],
            'message' => ['required'],
        ]);

        $contacto = Contacto::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'message' => $request['message'],
        ]);
        //

        $details = [
            'title' => $request->title,
            'body' => $request->description,
        ];
        \Mail::to('pepito@gmail.com')->send(new \App\Mail\sendPost($details));

        return \response()->json([
            'mensaje' => 'Se agrego correctamente el contacto',
            'data' => $contacto,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
