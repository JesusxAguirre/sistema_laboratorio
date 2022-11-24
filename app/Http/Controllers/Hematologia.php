<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompletaPost;
use App\Http\Requests\UpdateCompletaPut;
use Illuminate\Http\Request;
use App\Models\HematologiaCompleta;
use Carbon\Carbon;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class Hematologia extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $hematologia = HematologiaCompleta::orderBy('id', 'DESC');
        $hematologia = $hematologia->paginate(2)->appends(request()->except("page"));
       
        
        return Inertia::render('Hematologiac/Index', compact('hematologia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        return Inertia::render('Hematologiac/Create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompletaPost $request)
    {
        HematologiaCompleta::create($request->validated());

        return Redirect::route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HematologiaCompleta $hematologiac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HematologiaCompleta $hematologiac)
    {
        return Inertia::render('Hematologiac/Edit', compact('hematologiac'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompletaPut $request, HematologiaCompleta $hematologiac)
    {
        
        $hematologiac->update($request->validated());

        return Redirect::route('hematologiac.index');
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
