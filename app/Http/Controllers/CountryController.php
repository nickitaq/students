<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('country.index')->with('countries', Country::paginate(5));
        
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('country.create'); 
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //insert into countries set country='Rwanda;
        /*$savedCountryIntoDatabase =*/ Country::create($request->except('_token'));
        //return ["message"=>"new country is saved", "country"=> $savedCountryIntoDatabase];
        return view('country.create')->with('message','The country has been added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('country.edit')->with('country', Country::find($id));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $country= Country::find($id); // I'm verifying if that record based on it's ID
       $country->update($request->except('_token')); // now  $country object of record we got from datase is 
     
       return view('country.edit')
       ->with('message', 'The country is updated Successfully!')->with('country', $country) ;
       
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $country= Country::find($id);
       $country-> delete();
      // return view('country.index')->with('message', 'The country has been Deleted!');
        return redirect()->back()->with('message', 'The country has been Deleted!');
      //
    }
}
