<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
          // $user_role = auth()->users()->role=='2';
          $users = user::where('role','3')->get();
        //   return $users;
          return view('auth/adminregister')->with('users',$users);      
        // return view('auth/adminregister');
    }
}
