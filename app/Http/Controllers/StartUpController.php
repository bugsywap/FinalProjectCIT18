<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StartUp;

class StartUpController extends Controller
{
    public function index(){
        
        $startups = StartUp::all();

        return view('CMS.index' , ['startups' => $startups]);
    }

    public function insertView(){

        return view('CMS.insertView');
    }

    public function edit(StartUp $startup){

        return view('CMS.editView' , ['startup' => $startup]);
    }
    public function update(StartUp $startup , Request $request){
        $data = $request->validate([
            'capstone_name' => 'required',
            'description' => 'required',
            'sdg' => 'required',
            'trl' => 'required|numeric',
            'email' => 'required|email',
            'school' => 'required',
        ]);

        $startup->update($data);

        return redirect(route('CMS.index'))->with('success' , 'Startup listed.');
    }

    public function delete(Startup $startup){

        $startup->delete();
        return redirect(route('CMS.index'))->with('success' , 'Startup unlisted.');

    }

    public function insert(Request $request){
        $data = $request->validate([
            'capstone_name' => 'required',
            'description' => 'required',
            'sdg' => 'required',
            'trl' => 'required|numeric',
            'email' => 'required|email',
            'school' => 'required',
        ]);

        $newStartUp = StartUp::create($data);

        return redirect(route('CMS.index'));
    }
}
