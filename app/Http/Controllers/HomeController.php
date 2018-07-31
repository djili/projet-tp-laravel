<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $etudiants = Etudiant::all();
        return view('home', compact('etudiants'));
    }
}
