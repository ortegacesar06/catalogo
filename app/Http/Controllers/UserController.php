<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Role;
use App\Http\Controllers\LoginController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function showAddUser()
    {
        if (!Gate::allows('is-admin')) {
            return redirect('/')->with('error', '¡Usuario no autorizado!');
        }

        $roles['roles'] = Role::all();
        return view('fragments.auth.register', $roles)
                ->with('name', 'Agregar Usuario')
                ->with('isAdmin', true);
    }

    public function allUsers()
    {
        if (!Gate::allows('is-admin')) {
            return redirect('/')->with('error', '¡Usuario no autorizado!');
        }

        $accounts['accounts'] = Account::paginate(6);
        return view('fragments.users.users', $accounts);
    }

    public function showEditUser($id)
    {
        if (!Gate::allows('is-admin')) {
            return redirect('/')->with('error', '¡Usuario no autorizado!');
        }
        
        $user = Account::findOrFail($id);
        return view('fragments.users.edit',compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        if ($validated) {

            Account::where('id_account',$id)
                            ->update([
                                'firstname' => $request->firstname,
                                'lastname' => $request->lastname,
                                'address' => $request->address,
                                'phone' => $request->phone
                            ]);
        }
        return redirect('/admin/users');
    }

    public function updatePassword(Request $request, $id)
    {
        $account = Account::findOrFail($id);
        $validated = $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required',
        ]);

        if ($validated && Hash::check($request->oldPassword, $account->password)) {
            Account::where('id_account', $id)
                ->update([
                    'password' => Hash::make($request->newPassword),
                ]);
        } else {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login')->with('error', 'No se pudo cambiar la contraseña');
        }
        $role = Role::findOrFail($account->role_id);
        if ($role == 'visitor') {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/admin')->with('success', 'Se ha cambiado la contraseña correctamente');
        } else {
            return redirect('/admin/users')->with('success', 'Se ha cambiado la contraseña correctamente');
        }
    }



    public function destroyUser($id)
    {
        Account::destroy($id);
        return redirect('/admin/users')->with('success', 'Se ha eliminado la cuenta correctamente');
    }
}
