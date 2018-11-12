<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use App\user_permission;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function LoginCheck(Request $request){

        $admin = user::where('username', $request->username)
            ->where('passwords', $request->passwords)
            ->first();

        if (!empty($admin)) {
            Session::put('username',$request->username);
            Session::put('userid',$admin->id);
            return redirect('dashboard');
        }else {
            $request->session()->flash('login_error', 'User name or password not match');
            return view('login');
        }
    }

    public function Logout(){
        Session::forget('username');
        Session::flush();
        return redirect('/');
    }

    public function UserManagementController(){
        $user = user::all();
        return view('UserManagement',compact('user'));
    }

    public function registerMethod(Request $request){

        $checkbox = count($request->checkbox)-1;

        $user = new user;
        $user->username  =  $request->username;
        $user->passwords =  $request->passwords;
        $user->save();
        $lastid = $user->id;


        for($i= 0; $i<= $checkbox; $i++){
            $user_permission = new user_permission;
            $user_permission->userid        = $lastid;
            $user_permission->permissionid  = $request->checkbox[$i];
            $user_permission->save();
        }
        Session::flash('UserManagementController', 'Inserted Successfully!');
        return redirect('UserManagementController');

    }
}
