<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        if($user->isAdmin()) {
            $users = User::where('role', 'user')->get();
            return view('users.index', compact('users'));
        } else {
            Session::flash('error', 'Permission denied');
            return redirect()->route('dashboard');
        }
    }

    public function trash($id){
        $user = Auth::user();
        if($user->isAdmin()) {
            User::Destroy($id);
            Session::flash('success', 'user deleted successfully');
            return redirect() -> route('users.index');
            
        } else {
            Session::flash('error', 'Permission denied');
            return redirect()->route('dashboard');
        }
    }
}
