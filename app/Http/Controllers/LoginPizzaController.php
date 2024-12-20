<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class LoginPizzaController extends Controller
{
    public function login(){
        return Inertia::render('Inscription/Login');
    }

    public function loginPost(Request $request){

        $credentials = $request->validate([
            'email' => ['required' => 'email'],
           'password' => 'required|min:8',
        ]);

        $credentials['user_type'] = "classic";

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('panier'));
        }
        return back()->withErrors([
            'email'=>'Information incorrect !'
        ]);
    }

    public function register(){
        return Inertia::render('Inscription/Register');
    }


    public function registerPost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone'=>'nullable|string|digits:10',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        $imagePath = null;

        if($request->hasFile('image')){
            try {
                $imagePath = $request->file('image')->store('images', 'public');
            } catch (\Exception $e) {
                return back()->withErrors([
                    'image' => 'Erreur lors de l\'upload de l\'image'
                ]);
            }
        }
        try {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'image' => $imagePath,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            
            Auth::login($user);

            return redirect()->route('home');
        } catch (\Exception $e) {
            return back()->withErrors([
                'email' => 'Erreur lors de la creation du compte'
            ]);
        }
    }

    public function deconnection(){
        Auth::logout();
        return redirect()->route('home');
    }
}
