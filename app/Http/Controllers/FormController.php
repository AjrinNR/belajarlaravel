<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    public function met1(){
        $form = Form::all();
        return view('form1',compact('form'));
    }
    public function met2($id){
        $form = Form::find($id);
        return view('form2',compact('form'));
    }
}
