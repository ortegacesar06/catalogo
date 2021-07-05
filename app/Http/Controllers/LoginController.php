<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Role;
use App\Models\Account;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only(['showLogin', 'showRegister']);
    }

    public function showLogin()
    {
        return view('fragments.auth.login');
    }

    public function showRegister()
    {
        return view('fragments.auth.register');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/admin')->with('success', 'Sesion iniciada correctamente.');
        }

        return redirect('/login')->with('error', 'Las crendeciales son incorrectas.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email:rfc,dns|required|unique:accounts',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        

        if($validated){
            $role = Role::where('name','visitor')->first();

            if($role)
            {
                $account = new Account;
                $account->firstname = $request->firstname;
                $account->lastname = $request->lastname;
                $account->email = $request->email;
                $account->password = Hash::make($request->password);
                $account->role_id = $role->id_role;

                if($account->save()){
                    return redirect('/login')->with('success', 'La cuenta ha sido generada exitosamente. Inicie sesión para continuar.');
                }

                return back()->with('error', 'Ha ocurrido un error al guardar los datos.');
                
            }
            
            return back()->with('error', 'No existen roles en el sistema.');
        }

        return redirect()->back()->withErrors($validated)->withInput();
    }
}