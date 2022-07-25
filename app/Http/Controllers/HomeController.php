<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        // $user = \Auth::user();
        // Assigne the role
        // $role = Role::where('slug','editor')->first();
        // $user->roles()->attach($role);

        // Check the role
        // dd($user->roles);
        // dd($user->hasRole('editor'));

        // Add the permission
        // $permission = Permission::first();
        // $user->permissions()->attach($permission);

        // Check the permission
        // dd($user->permissions);
        // dd($user->hasPermission('add-post'));
        // dd($user->can('delete-post'));
        // dd($user->can('add-post'));
        // dd($user->can('add-post'));

        return view('dashboard');
    }



}
