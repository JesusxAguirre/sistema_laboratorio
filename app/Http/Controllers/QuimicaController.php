<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuimicaPost;
use App\Http\Requests\UpdateQuimicaPut;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Quimica;
use Illuminate\Support\Facades\Redirect;
class QuimicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arreglo = Quimica::orderBy('id', 'DESC');
        $quimica = $arreglo->paginate(2)->appends(request()->except("page"));
       
        
        return Inertia::render('Quimica/Index', compact('quimica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return Inertia::render('Quimica/Create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuimicaPost $request)
    {
        Quimica::create($request->validated());
        return Redirect::route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Quimica $quimica)
    {
        return Inertia::render('Quimica/Edit', compact('quimica'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuimicaPut $request ,Quimica $quimica)
    {
        $quimica->update($request->validated());

        return Redirect::route('quimica.index');
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
