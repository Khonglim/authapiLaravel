<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ManageUserInfoController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->find(auth()->user()->id);
        $data =array('users'=>$users,);
     
        return view('manageUserInfo.manageUserInfo',$data);
    }
}
