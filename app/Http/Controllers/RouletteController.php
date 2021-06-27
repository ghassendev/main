<?php

namespace App\Http\Controllers;

use App\Result;
use App\Models\Client;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RouletteController extends Controller
{
   public function handleAddResultRound(Request $request){

    $result = new Result;
   //  $result->date_time = date('Y-m-d H:i:s');
    $result->result= $request->value;
   //  $result->in=0;
   //  $result->out=0;

    $result->save();


    $tickets=Ticket::get();
      // dd($tickets);
    foreach ($tickets as $tiket) {
      if($tiket->choice == $request->value){
         if($tiket->statut == 0){
            if($tiket ->created_at < date('Y-m-d H:i:s')){
               $tiket->statut = 1 ;
               $tiket->save();
               $client = Client::where('id', $tiket->user_id)
               ->first();
               $client->solde += $tiket->maxwin ;
               $client->save();
         }
      }}
         else{
            $tiket->statut = -1 ;
            $tiket->save();
         }
        
          
      }
    
    
 


    return redirect()->back();

   }
   public function showMainRound(){

    $resultone= Result::latest()->first();
    $result=$resultone['result'];
    $results = Result::latest()->take(5)->get();
    $results = $results->reverse();
    return view('index',compact('result','results'));

   }
   public function showShop(){
      $cli= Session::get('client');
      
      $id=$cli['id'];
      $name=$cli['login'];
      $client=Client::where('id', $id)->first();
      $solde=$client->solde;
      $tickets = Ticket::where('user_id',$id)->get();
      $tickets = $tickets->reverse();
      return view('shop.index', compact('solde','id','name','tickets'));
   }
   
   // public function SpinRou(){
   //    $milliseconds= 5000;
   //    $f= 50;
   //    $seconds=(int)$milliseconds/1000;
   //    while(true)
   //    {
   //        $f();
   //        sleep($seconds);
   //    }
   // }

}   

//    $datetime1 = new DateTime('2009-10-11 12:12:00');
// $datetime2 = new DateTime('2009-10-13 10:12:00');

// if ($datetime1 > $datetime2) {
//     echo 'datetime1 greater than datetime2';
// }

// if ($datetime1 < $datetime2) {
//     echo 'datetime1 lesser than datetime2';
// }

// if ($datetime1 == $datetime2) {
//     echo 'datetime2 is equal than datetime1';
// }


