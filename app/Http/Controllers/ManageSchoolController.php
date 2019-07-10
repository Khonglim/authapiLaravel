<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ManageSchoolController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $name_school = DB::table('name_school')->get();
        $data = array('name_school' =>$name_school , );
        return view('manageSchool.manageSchool',$data);

    }
}
