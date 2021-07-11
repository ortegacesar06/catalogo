<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAddUser()
    {
        $roles['roles'] = Role::all();
        return view('fragments.auth.register', $roles)
                ->with('name', 'Agregar Usuario')
                ->with('isAdmin', true);
    }

    public function allUsers()
    {
        $accounts['accounts'] = Account::paginate(6);
        return view('fragments.users.users', $accounts);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function showEditUser($id)
    {
        $user = Account::findOrFail($id);
        return view('fragments.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function updateUser( Request $request, Account $account)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
