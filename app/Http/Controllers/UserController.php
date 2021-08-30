<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $allUsers = User::with(['role:id,role_name'])->get();
        return view('user.index', compact('allUsers'));
    }

    public function add()
    {
        $selectArr = ['id','role_name'];
        $roles = Role::get($selectArr);
        $genderArr = [
            'male'      => 'Male',
            'female'    => 'Female',
            'other'     => 'Other'
        ];
        // $roles = Role::select($selectArr)->get();
        // dd($roles);
        return view('user.adduser', compact('roles', 'genderArr'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
