<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Training;
use App\Register;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // app/Http/Controllers
		// TrainingController.php
        //fetch search key
        $search=$request->get('txtsearch');
		
		//$trainings= new Training();
		if ($search==null){
		    //display all record
		    //$trainings= Training::all()->toArray();
            $trainings=Training::paginate(5);
            return view('registers.index', compact('trainings'));
        }
        else{
		    //display record based on search key
            $trainings= Training::where('trainingname','like','%'.$search.'%')->paginate(5);
            //$trainings=$trainings->get();
            //$trainings=$trainings->paginate(5);
            return view('registers.index', compact('trainings'));
        }
		
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
		//validate insert new record process is here
		$register = $this->validate(request(), [
          'name' => 'required',
          'matrix' => 'required',
		  'training_id' => 'required'
        ]);
        
        Register::create($register);//insert record

        //return back()->with('success', $request->get('name').' has registered for the training');
		return redirect('registers')->with('success', $request->get('name').' has registered for the training');
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		//display complete record
        $training = Training::find($id);
        return view('registers.showform',
			compact('training','id'));
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
