<?php

namespace App\Http\Controllers;

use App\Bloque;
use App\Pagina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;

class PaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pagina  $pagina
     * @return \Illuminate\Http\Response
     */
    public function show(Pagina $pagina,$id)
    {
        $pagina = Pagina::find($id);

        $paginasWontaW = Pagina::select('*')->where('aplicacion', '=' , 1)->get();

        $paginasWontaGes = Pagina::select('*')->where('aplicacion', '=' , 2)->get();

        $bloques = $pagina->bloque;



        return view('page', [
            'pagina' => $pagina,
            'paginasWontaW' => $paginasWontaW,
            'paginasWontaGes' => $paginasWontaGes,
            'bloques' => $bloques
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pagina  $pagina
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagina $pagina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pagina  $pagina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagina $pagina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pagina  $pagina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagina $pagina)
    {
        //
    }
}
