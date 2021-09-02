<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view ('register', [
            'title' => 'Register',
            'active' => 'register'        
            ]);
        }
    
    public function store(Request $request)
    {
      $validatedData =$request->validate([
          'username' => 'required|max:255',
          'name' => ['required', 'min:5', 'max:255', 'unique:userseller'],
          'email' => 'required|email:dns|unique:userseller',
          'birthdate' => 'required',
          'gender' => 'required',
          'password' => 'required|min:5|max:255',
          'password_confirmation' => 'required|min:5|max:255'
      ]);
    //   $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Berhasil!Silahkan Login!');
        return redirect('login');
    }}
