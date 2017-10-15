<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

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
     * @return mixed
     */
    public function store(Request $request)
    {
        //return 'store';
        //dd('store');
        $this->validate($request,[
            'first_name' => 'required|string|min:1'
            ,'last_Name' => 'required|string|min:1'
            ,'country' => 'required|string|min:1'
            ,'email' => 'required|email'
            ,'password'=>'required'
        ]);
//dd(request('first_name'));
//        dump(request('first_name'));
//        dump(request('last_name'));
//        dump(request('country'));
//        dump(request('email'));
//        dd(request('password'));
//        \App\User:where('email','=', )
        try{
            $data = User::where('email','=', request('email'))->first()->email;
            //return $data;
            if($data){
                return 'user_exists';
            }
        }catch (\Exception $exception){
            //return $exception->getMessage();
        }

        $user = User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_Name'),
            'country' => request('country'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        return $user;
        auth()->login($user);

        if (Session::has('oldUrl')){
            dd('older url');
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }
        //$user = User::all()->first();
        //session('message','this is details message');
        //session()->flash('message', 'thanks so much for signup');
        return redirect()->home();//->with('myemail', $user->first_name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.signup');
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
