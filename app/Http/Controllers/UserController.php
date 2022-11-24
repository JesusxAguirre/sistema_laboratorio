<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Users/Index', [
            'users' => User::all()  
        ]);

    }

    public function report(Request $request)
    {
        $param = $request->input('param');
        $users = User::all();

        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('report', compact('users','param'));
        return $pdf->stream('users.pdf');
    }
}