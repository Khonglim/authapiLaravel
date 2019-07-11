<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    public function index()
    {
        return view('adminischool/dashboard');
    }

    public function profile()
    {
        $users = DB::table('users')->find(auth()->user()->id);
        $data =array('users'=>$users,);
        return view('adminischool/profile',$data);
    }


    public function user()
    {
        $users = DB::table('users')->leftJoin('role_auth', 'users.type', '=', 'role_auth.id')->get();
        $data =array('users'=>$users,);
        return view('adminischool/user',$data);
    }


    public function school()
    {
        $name_school = DB::table('name_school')->get();
        $data = array('name_school' =>$name_school , );
        return view('adminischool/school',$data);
    }

     public function adduser(Request $request){
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'password' => 'required|confirmed',
            'name_lastname' => 'required',
            'school' => 'required',
            'roles_id_user' => 'required',

        ));
        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $password = Hash::make($request->password);
        DB::insert('insert into users (username,password,name_lastname,school,type) values ("'.$request->name.'","'.$password.'","'.$request->name_lastname.'","'.$request->school.'","'.$request->roles_id_user.'")');
       return response()->json(['error'=> false,], 200);

    }






    public function addschool(Request $request){

        $validator = Validator::make($request->input(), array(
            'name_shcool' => 'required',
            'address' => 'required',
            'email' => 'required',
            'tel' => 'required',

        ));
        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        //$password = Hash::make($request->password);

       DB::insert('insert into name_school (name_shcool,address,email,tel) values ("'.$request->name_shcool.'","'.$request->address.'","'.$request->email.'","'.$request->tel.'")');
       return response()->json(['error'=> false,], 200);

    }



    public function detlieschool($id){

        $name_school = DB::table('name_school')->find($id);


        $student_info = DB::table('student_info')->where('name_school',$name_school->id)->get();


        $data = array('name_school' =>$name_school ,
                      'student_info'=>$student_info
    );
        return view('adminischool/detlieschool',$data);
    }





    public function dashboard()
    {
        return view('adminschool/dashboard');
    }









}
