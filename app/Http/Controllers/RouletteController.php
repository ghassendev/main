<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

class RouletteController extends Controller
{
   function handleAddResultRound(Request $request){

    $result = new Result;
    $result->date_time = date('Y-m-d H:i:s');
    $result->result= $request->value;
    $result->in=0;
    $result->out=0;

    $result->save();
    return redirect()->back();

   }
   function showMainRound(){

    $resultone= Result::latest()->first();
    $result=$resultone['result'];
    $results = Result::latest()->take(5)->get();
    $results = $results->reverse();
    return view('index',compact('result','results'));

   }
}   
