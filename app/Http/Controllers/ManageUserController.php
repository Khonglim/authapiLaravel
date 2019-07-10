<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
class ManageUserController extends Controller
{
    public function index()
    {

        $posts = DB::table('users')->leftJoin('roles','users.roles_id_user', '=', 'roles.id')
             ->leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')



        ->orderBy('username', 'asc')->simplePaginate(10);


        $data =array('posts'=>$posts,);
        return view('ManageUser.managerUser',$data);
    }




}
