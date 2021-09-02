<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        // Validatons
        $request->validate([
            'first_name'    => ['required', 'string', 'max:255'],
            'last_name'     => ['required', 'string', 'max:255'],
            'mobile'        => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'string', 'min:8'],
            'gender'        => ['required', 'string', 'max:255'],
            'role_id'       => ['required']
        ]);

        $data = $request->only('first_name', 'last_name', 'mobile', 'email', 'password', 'role_id', 'gender', 'status');
        $data['password']   = Hash::make($data['password']);
        $data['status']     = !empty($data['status']) ? true : false;

        if( User::create($data) ) {
            return redirect()->route('user')->with('success','User created successfully!');
        }

        return redirect()->route('user')->with('danger','Server Error..! Try Again');
    }
}
