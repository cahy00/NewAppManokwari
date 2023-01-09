<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

		public function authenticate(Request $request)
		{

				$credential = $request->validate([
					'email' 	 => 'required|email:dns',
					'password' => 'required'
				]);
				// dd('Berhasil');

				if(Auth::attempt($credential)){
					$request->session()->regenerate();
					return redirect('/dashboard');
				}
				
				return back()->with('loginError', 'Login Failed');
		}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
				$validateData = $request->validate([
					'name' => 'required|max:30',
					'email' => 'required|email|unique:users|email:dns',
					'password' => 'required|min:8|max:255'
				]);

				// $validateData['password'] = bcrypt($validateData['password']);
				$validateData['password'] = Hash::make($validateData['password']);

				$user = User::create($validateData);
				// $request->session()->flash('success', 'Register Success, Pleas Login');
        return redirect('/login')->with('success', 'Register Success, Please Login');
    }

		public function logout(Request $request)
		{
				Auth::logout();

				$request->session()->invalidate();
				$request->session()->regenerateToken();
				return redirect('/login');
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
