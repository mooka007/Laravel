<?php

namespace App\Http\Controllers;

use App\Http\Requests\FrmRequest;
use App\Models\City;
use App\Models\Friend;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $friends = Friend::all();

        return view('home', ['friends' => $friends]);
    }

    public function form(){
        $cities = City::all();
        // $cities = City::with('city')->get();
        return view('controll.form', ['cities' => $cities]);
    }


    public function store(FrmRequest $req){
        $friend = new Friend();
        $friend->name = $req->name;
        $friend->email = $req->email;
        $friend->phone = $req->phone;
        $friend->city = $req->city;
        // $friend->user_id = Auth::user()->id;

        $friend->save();
        return redirect('home');

    }


    public function destroy($id){
        Friend::findOrFail($id)->delete();
        return redirect('home');
    }

    
}
