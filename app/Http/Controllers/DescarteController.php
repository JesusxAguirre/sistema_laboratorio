<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImagePost;
use App\Http\Requests\UpdateImagenPut;
use App\Models\Descarte;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class DescarteController extends Controller
{
    use HasApiTokens;
    use HasProfilePhoto;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descarte = Descarte::orderBy('id', 'DESC');
        $descarte = $descarte->paginate(2)->appends(request()->except("page"));

        return Inertia::render('Descarte/Index', compact('descarte'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return Inertia::render('Descarte/Create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImagePost $request)
    {
        $save = new Descarte();
        $id = $request->input('pacientes_id');
        $obs = $request->input('observacion');
        $diagnostico = $request->input('diagnostico');
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
        
         $save->pacientes_id = $id;
         $save->diagnostico = $diagnostico;
         $save->observacion = $obs;
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
    public function edit(Descarte $Descarte)
    {
        return Inertia::render('Descarte/Edit', compact('Descarte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Descarte $Descarte)
    {
        $Descarte->delete();

        return redirect::route('Descarte.index');
    }
}
