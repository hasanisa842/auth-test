<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $items = DB::table('item_list')->get();
        return view('home', compact('items'));
    }

    public function homeIndex(){
        $user = DB::table('users')->get();

        $items = DB::table('item_list')->get();
        return view('userHome', compact('user','items'));
    }

    public function insert(Request $request){
        DB::table('item_list')->insert([
            'itemName' => $request->inputName,
            'itemStatus' => $request->inputStatus,
            'itemQuantity' => $request->inputQuantity,
            'itemPrice' => $request->inputPrice
        ]);

        return redirect('/');
    }
}
