<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filmes as Filmes;
use App\Http\Resources\Filmes as FilmesResource;

class FilmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = Filmes::paginate(15);
        return FilmesResource::collection($filmes);
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
        $filmes = new Filmes;
        $filmes->titulo = $request->input('titulo');
        $filmes->ano = $request->input('ano');
        $filmes->autor = $request->input('autor');
    
        if( $filmes->save() ){
          return new FilmesResource( $filmes );
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
        $filmes = Filmes::findOrFail( $id );
        return new FilmesResource( $filmes );
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
        $filmes = Filmes::findOrFail( $request->id );
        $filmes->titulo = $request->input('titulo');
        $filmes->ano = $request->input('ano');
        $filmes->autor = $request->input('autor');
    
        if( $filmes->save() ){
          return new FilmesResource( $filmes );
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
        $filmes = Filmes::findOrFail( $id );
        if ( $filmes->delete() ){
            return new FilmesResource( $filmes );
        }
    }
}
