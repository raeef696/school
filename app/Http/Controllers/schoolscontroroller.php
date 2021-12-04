<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class schoolscontroroller extends Controller
{
    public function index() {
        $shows = DB::table('std')->get();
        return view('welcome',compact('shows'));
    }


    public function AddStd(Request $request) {
        DB::table('std')->insert([
            'num' => $request->num,
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back();
    }


    public function Delet($id) {
        DB::table('std')->where('id','=',$id)->delete();
        return redirect()->back();
    }
}
