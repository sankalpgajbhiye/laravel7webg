<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
}
