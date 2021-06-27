<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    public function showClientLogin(Request $request){
     
        return view('login');
    }

    public function handleClientLogin(Request $request){
     
        $login=$request->login;
        $password=$request->password;
        $client = Client::where('login', '=', $login)
        ->where('password', $password)
        ->first();
        // dd($client['solde']);
       
        if($client !== null){
            $rev=Session::put('client', $client);
            $cli= Session::get('client');
            $solde=$cli['solde'];
            $id=$cli['id'];
            $name=$cli['login'];
            // return view('shop.index', compact('solde','id','name'));
            return redirect()->route('showShop');   
        }
        else{
        return redirect()->back();
        }
    }
}
