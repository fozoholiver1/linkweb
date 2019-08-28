<?php

namespace App\Http\Controllers;
use App\Amin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function store(){
        $data= request()->validate([//validation
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'subject'=>'required',
            'message'=>'required',
            
            ]);
            Admin::create('$data');

        return redirect('welcome');
        
        dd( request()->all());
    }


}
