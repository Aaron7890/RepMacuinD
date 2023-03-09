<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContPAg extends Controller
{
    public function index(){
        return view('index');
    }
    public function finicio(){
        return view('inicioJ');
    }
    public function fusuariosJ(){
        return view('adminUsuJ');
    }
    public function fticketsJ(){
        return view('adminTickJ');
    }
    public function fdepaJ(){
        return view('adminDepaJ');
    }
    public function fadetDepa(){
        return view('addeditDepa');
    }
    public function fadetTic(){
        return view('addeditTic');
    }
    public function fadetUsu(){
        return view('addeditUsu');
    }
}
