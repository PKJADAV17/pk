<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assign;

class AssignController extends Controller
{
    public function index()
    {
        
        $assign = Assign::orderBy('date','DESC')->get();
        //dd( $assign );
        return view('layout',compact('assign'));
        //return view('layout');
    }
}
