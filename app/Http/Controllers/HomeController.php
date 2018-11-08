<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings= Training::all()->toArray();
        return view('home', compact('trainings'));
    }
	
	public function getTrainings() {
		//$trainings= Training::all()->toArray();
        //return view('home', compact('trainings'));

    }
}
