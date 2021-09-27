<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros as Livros;
use App\Http\Resources\Livros as LivrosResource;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livros::paginate(15);
        return LivrosResource::collection($livros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livros = new Livros;
        $livros->titulo = $request->input('titulo');
        $livros->ano = $request->input('ano');
        $livros->autor = $request->input('autor');
    
        if( $livros->save() ){
          return new LivrosResource( $livros );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livros = Livros::findOrFail( $id );
        return new LivrosResource( $livros );
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
        $livros = Livros::findOrFail( $request->id );
        $livros->titulo = $request->input('titulo');
        $livros->ano = $request->input('ano');
        $livros->autor = $request->input('autor');
    
        if( $livros->save() ){
          return new LivrosResource( $livros );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livros = Livros::findOrFail( $id );
        if ( $livros->delete() ){
            return new LivrosResource( $livros );
        }
    }
}
