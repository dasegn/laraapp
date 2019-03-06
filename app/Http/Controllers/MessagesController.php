<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $messages = DB::table('message')->get();
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Guardando mensaje
        // DB::table('message')->insert([
        //     'nombre' => $request->input('nombre'),
        //     'email' => $request->input('email'),
        //     'mensaje' => $request->input('mensaje'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        $message = new Message;
        $message->nombre = $request->input('nombre');
        $message->email = $request->input('email');
        $message->mensaje = $request->input('mensaje');
        $message->save();

        // Model::unguard();
        // Message::create($request->all());

        // Redirección a Index
        return redirect()->route('mensajes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $message = DB::table('message')->where('id', $id)->first();
        $message = Message::find($id);
        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $message = DB::table('message')->where('id', $id)->first();
        $message = Message::find($id);
        return view('messages.edit', compact('message'));
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
        // Actualizar mensaje
        // DB::table('message')->where('id', $id)->update([
        //     'nombre' => $request->input('nombre'),
        //     'email' => $request->input('email'),
        //     'mensaje' => $request->input('mensaje'),
        //     'updated_at' => Carbon::now(),
        // ]);

        $message = Message::find($id);
        $message->update($request->all());

        // Redirección a Index
        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('message')->where('id', $id)->delete();

        $message = Message::find($id)->delete();

        // Redirección a Index
        return redirect()->route('mensajes.index');    }
}
