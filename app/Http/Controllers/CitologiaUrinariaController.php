<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCitologiaUrinariaPost;
use App\Models\CitologiaUrinaria;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
class CitologiaUrinariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citologia = CitologiaUrinaria::orderBy('id', 'DESC');
        $citologia = $citologia->paginate(2)->appends(request()->except("page"));

        return Inertia::render('CitologiaUrinaria/Index', compact('citologia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return Inertia::render('CitologiaUrinaria/Create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCitologiaUrinariaPost $request)
    {
        $save = new CitologiaUrinaria();
        $id = $request->input('pacientes_id');
        $diagnostico = $request->input('diagnostico');
        $extraccion = $request->input('extraccion');
        $fecha = $request->input('fecha');
        if($file1 = $request->hasFile('imagen1')) {
             
            $file1 = $request->file('imagen1') ;
            $name = $file1->getClientOriginalName() ;
            $path = public_path().'/uploads' ;
            $file1->move($path,$name);
            $save->imagen1 = $name;
        }
        if($file2 = $request->hasFile('imagen2')) {
                        
                    $file2 = $request->file('imagen2') ;
                    $name2 = $file2->getClientOriginalName() ;
                    $path = public_path().'/uploads' ;
                    $file2->move($path,$name2);
                    $save->imagen2 = $name2;
        }
        if($file3 = $request->hasFile('imagen3')) {
                        
                $file3 = $request->file('imagen3') ;
                $name3 = $file3->getClientOriginalName() ;
                $path = public_path().'/uploads' ;
                $file3->move($path,$name3);
                $save->imagen3 = $name3;
        }

        if($file3 = $request->hasFile('imagen4')) {
                        
            $file4 = $request->file('imagen4') ;
            $name4 = $file4->getClientOriginalName() ;
            $path = public_path().'/uploads' ;
            $file4->move($path,$name4);
            $save->imagen4 = $name4;
    }
        
         $save->pacientes_id = $id;
         $save->diagnostico = $diagnostico;
         $save->extraccion = $extraccion;
        $save->fecha= $fecha;
        
         
         $save->save();
         /* php artisan storage:link */
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
