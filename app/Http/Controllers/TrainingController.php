<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Training; //include the namespace of Training.php 

class TrainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //to block un-authorised user
    }
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
            return view('trainings.index', compact('trainings'));
        }
        else{
		    //display record based on search key
            $trainings= Training::where('trainingname','like','%'.$search.'%')->paginate(5);
            //$trainings=$trainings->get();
            //$trainings=$trainings->paginate(5);
            return view('trainings.index', compact('trainings'));
        }
    }//end function index

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // app/Http/Controllers
		// TrainingController.php
		
		return view('trainings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	
	//// TrainingController.php
    public function store(Request $request)
    {
        //validate insert new record process is here
		$training = $this->validate(request(), [
          'trainingname' => 'required',
          'desc' => 'required',
		  'trainer' => 'required'
		  
        ]);
		
		//in TrainingController function store()
		//file upload management
		
		if($request->hasFile('filename')){			
			$filename = $request->filename->getClientOriginalName();
			$request->filename->storeAs('public/uploads', $filename);
			$file = new DB;
			$file->filename = $filename;						
		}
        $tname = $request->input('trainingname');
        $fname = $filename;
		$desc = $request->input('desc');
		$trainer = $request->input('trainer');
		
		$data = array('trainingname'=>$tname, 
						'filename'=>$fname, 
						'desc'=>$desc, 
						'trainer'=>$trainer);
		
		DB::table('trainings') -> insert($data);
		return back()->with('success', 
		'Training with poster has been added');
    }//end function store()

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //display complete record
        $training = Training::find($id);
        return view('trainings.show',
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
        //display edit form
        $training = Training::find($id);
        return view('trainings.edit',compact('training','id'));
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
        //save updated data
        $data = $this->validate($request, [
            'trainingname'=>'required',
            'desc'=> 'required',
            'trainer'=> 'required'
        ]);
        $data['id'] = $id;

        $training = Training::find($id);
        $training->trainingname=$request->get('trainingname');
        $training->desc=$request->get('desc');
        $training->trainer=$request->get('trainer');
        $training->save();

        return redirect('/trainings')->with('success',
            'Training info has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete selected record
        $training = Training::find($id);
        $training->delete();
        return redirect('/trainings')->with('successdelete',
            'Information has been deleted');
    }//end destroy
}
