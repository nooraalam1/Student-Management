<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;


class SchoolController extends Controller
{
    public function index(){
        $data=School::all();
        return view('School.list',['data'=>$data]);
    }

    public function create(){
        return view('School.create');
    }

        public function store(Request $request){
       $data= $request->validate([
            'school_name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'password'=>'required',
        ]);

      School::create($data);
       return view('School.list');
    }
}
