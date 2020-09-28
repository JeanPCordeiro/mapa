<?php

namespace App\Http\Controllers;

use App\Models\Collecte;
use Illuminate\Http\Request;

use DB;

class CollectStatusController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // renvoyer une réponse de la forme
        // usine, nb lignes à état 0, 1 et 2

        //$factories = DB::table('collectes')->select('factory','line','state')->distinct()->where('date','202008')->get();
        $factories = DB::table('collectes')->select('factory','line','state')->distinct()->where([['factory', '=', 'BEAUVAIS'],['date', '=', '202008']])->get();
        return view('collect-status',compact('factories'));
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
     * @param  \App\Models\Collecte  $collecte
     * @return \Illuminate\Http\Response
     */
    public function show(Collecte $collecte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collecte  $collecte
     * @return \Illuminate\Http\Response
     */
    public function edit(Collecte $collecte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collecte  $collecte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collecte $collecte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collecte  $collecte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collecte $collecte)
    {
        //
    }
}
