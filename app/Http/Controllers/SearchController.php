<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
       return view('search.index');
       
    }
    public function show(Request $req, $id)
    {
        $table= $req->table;
        $data= null;
        switch($table){
            case "departments":
               
                $data= DB::table($table)->select()->where("name", $req->name);
            case "courses":
                $data= DB::table($table)->select()->where("course_name", $req->name);

             default:
              return null;
        }
       return view('search.index', compact('data'));
        //
    }
}
