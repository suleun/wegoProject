<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectFormController extends Controller
{
    public function projectForm() {
        return view('projectForm');
    }

    public function projectStore(Request $request) {
        $checklist=$request->input('lists');
        $title=$request->projectTitle;
        $peole=$request->people;
        $outline=$request->outline;
        $expectation=$request->expectation;

        $title = ("title");


        dd($request);

        

        
    }
}