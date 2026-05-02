<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\login;
use Exception;
use Response;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function index()
    {
        if (!Session::get('admin/login')) {
        	return redirect('admin/login')->with('alert','Anda harus login dulu');
        }
    }
    public function loginadmin(){
    	return view('/backend/Login/login');
    }
    public function postlogin(Request $req,login $login){
        $this->validate($req,[
            "username"      => "required",
            "password"      => "required"
        ],["required"       => "Tidak boleh kosong"]);


        $pwd = $req->password;

        $cek = $login->where("username",$req->username)->where("password",$pwd);
         if($cek->count()>0){
            $cek = $cek->first();
            session()->put("username",$cek["username"]);
            session()->put("password",$cek["password"]);
            session()->put("role",$cek["role"]);
            session()->put("id",$cek["Idadmin"]);
            session()->put("login",TRUE);
            return redirect('/admin/dashboard');
        }
        else{
            return redirect()->back()->with(['stslogin'=>0]);
        }
    }

    public function logout(){
    	session::flush();
    	return redirect('/admin/login');
    }
}
