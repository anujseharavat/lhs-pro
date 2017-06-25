<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //dd('store');
        $this->validate($request,[
            'firstName' => 'required'
            ,'lastName' => 'required'
            ,'country' => 'required'
            ,'email' => 'required|email'
            ,'password'=>'required'
        ]);

//        dump(request('firstName'));
//        dump(request('lastName'));
//        dump(request('country'));
//        dump(request('email'));
//        dd(request('password'));
        $user = User::create([
            'firstName' => request('firstName'),
            'lastName' => request('lastName'),
            'country' => request('country'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        auth()->login($user);

        //$user = User::all()->first();
        //session('message','this is details message');
        //session()->flash('message', 'thanks so much for signup');
        return redirect()->home();//->with('myemail', $user->firstName);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        //
    }
}
