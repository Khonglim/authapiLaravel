<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;

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
        $users = DB::table('users')->leftJoin('alf_role_auth', 'users.type', '=', 'alf_role_auth.id')->get();
        $data =array('users'=>$users,);
        return view('adminischool/user',$data);
    }


    public function school()
    {
        $name_school = DB::table('alf_name_school')->get();
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
        DB::table('users')->insert(
            ['username' => $request->name,
            'password' => $password,
            'name_lastname' => $request->name_lastname,
            'school' => $request->school,
            'type' => $request->roles_id_user,

            ]
        );


       
       return response()->json(['error'=> false,], 200);

    }






    public function addschool(Request $request){

        $validator = Validator::make($request->input(), array(
            'name_school' => 'required',
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
        DB::table('alf_name_school')->insert(
            ['name_school' => $request->name_school,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->tel
            ]
        );



       return response()->json(['error'=> false,], 200);

    }
    public function detlieschool($id){
        $name_school = DB::table('alf_name_school')->find($id);
        $data =array('name_school'=>$name_school,);
        return view('adminischool/detlieschool', $data);
    }

    public function detlieschoolData($id){
        $name_school = DB::table('alf_name_school')->find($id);
        $studentInfo = DB::table('alf_student_infomation')
        ->where('name_school',$name_school->id)
        ->get();
        return Datatables::of($studentInfo)->addColumn('action', function ($studentInfo) {
            return ' <div class="btn-group">
            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
              <span class="caret">ตัวเลือก</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item"  href="#"  data-toggle="modal"  data-target="#modal-DetlieStu'.$studentInfo->id.'">ดูประวัติ</a>
              <a class="dropdown-item"  href="/adminmaster/editstu/'.$studentInfo->id.'" >แก้ไข</a>
              <a class="dropdown-item"         data-toggle="modal"    data-target="#modal-DeletStu'.$studentInfo->id.'"        >   ลบ</a>
            </div>

     <div class="modal fade" id="modal-DetlieStu'.$studentInfo->id.'">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">ดูรายละเอียด</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="row">
        <div class="col-12">
          <!-- Custom Tabs -->
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">รายละเอียด</h3>
              <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item"><a class="nav-link active" href="#tab_1'.$studentInfo->id.'" data-toggle="tab">ข้อมูลนักเรียน</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab_2'.$studentInfo->id.'" data-toggle="tab">ข้อมูลบิดา-มารดา</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1'.$studentInfo->id.'">

                <table align="center" width="100%"  class="table table-borderless">
                <tr>
                    <td style="width:25% "><b><U>ข้อมูลนักเรียน</U></b></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>รหัสนักเรียน</b></td>
                    <td>'.$studentInfo->student_code_id.'</td>
                </tr>
                <tr>
                    <td><b>ชื่อภาษาไทย</b></td>
                    <td>'.$studentInfo->title.'
                    '.$studentInfo->name.'
                    '.$studentInfo->lastname.'

                    </td>
                </tr>
                <tr>
                    <td><b>ระดับ</b></td>
                    <td> '.$studentInfo->class.'        </td>
                </tr>
                <tr>

                    <td><b>ห้อง</b></td>
                    <td> '.$studentInfo->room.'</td>
                </tr>
                <tr>
                    <td ><b>เลขบัตรประชาชน</b></td>
                    <td> '.$studentInfo->card_number.'</td>
                </tr>
                <tr>
                    <td><b>วันเกิด</b></td>
                    <td> '.$studentInfo->birthday.'</td>
                </tr>
                <tr>

                    <td><b>สัญชาติ</b></td>
                    <td> '.$studentInfo->nationality.'</td>
                </tr>
                <tr>

                    <td><b>ศาสนา</b></td>

                    <td> '.$studentInfo->race.'</td>

                </tr>
                <tr>

                    <td><b>โทรศัพท์</b></td>

                    <td> '.$studentInfo->tel.'</td>

                </tr>
                <tr>
                    <td><b>อีเมล</b></td>
                    <td> '.$studentInfo->email.'</td>
                </tr>
                <tr>
                      <td><b>ที่อยู่</b></td>
                       <td> '.$studentInfo->address.'</td>
                </tr>



                </table>


                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2'.$studentInfo->id.'">
                <table align="center" width="100%"  class="table table-borderless">
                <tr>
                    <td style="width:25% "><b><U>ข้อมูลผู้ปกครอง</U></b></td>
                    <td></td>
                </tr>
                <tr>
                      <td><b>ชื่อ-สกุล</b></td>
                     <td>'.$studentInfo->mom.'</td>
                </tr>
                <tr>
                      <td><b>ความเกี่ยวข้อง</b></td>
                      <td>มารดา</td>
                 </tr>
                 <tr>
                 <td><b>โทรศัพท์</b></td>
                 <td>'.$studentInfo->mom_tel.'</td>
                </tr>
                <tr>

               </tr>
               <tr>
               <td><b>ชื่อ-สกุล</b></td>
              <td>'.$studentInfo->father.'</td>
         </tr>
         <tr>
               <td><b>ความเกี่ยวข้อง</b></td>
               <td>บิดา</td>
          </tr>
          <tr>
          <td><b>โทรศัพท์</b></td>
          <td>'.$studentInfo->father_tel.'</td>
         </tr>
         <tr>
        </tr>
                </table>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">

                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- ./card -->
        </div>
        <!-- /.col -->
      </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-DeletStu'.$studentInfo->id.'">
    <div class="modal-dialog modal-xs">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">ยืนยันการลบ</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/adminmaster/dlestudent"  method="get">

        <div class="modal-body">

        <input type="hidden" name="school" value="'.$studentInfo->name_school.'">
        <input type="hidden" name="id" value="'.$studentInfo->id.'">
        ยืนยันการลบข้อมูล  '.$studentInfo->name.'

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
          <button type="submit" class="btn btn-info  float-right">ยืนยัน</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>'
        ;})->make();
    }


    public function editstudent($id){
        $studentInfo = DB::table('alf_student_infomation')->find($id);
        $name_school = DB::table('name_school')->find($studentInfo->name_school);
        $data = array('studentInfo'=>$studentInfo,
        'name_school'=>$name_school);
        return view('adminischool/editStu',$data);

    }

    public function dlestudent(Request $request ){

        DB::table('alf_student_infomation')->where('id', '=',$request->id)->delete();
        Session::flash('flash_message','ลบข้อมูลชั้นสำเร็จ!! ');
        return redirect('/adminmaster/addschool/'.$request->school);

    }


    public function saveeditstudent(Request $request){
        DB::table('alf_student_infomation')->where('id', $request->id)
        ->update(['student_code_id' => $request->student_code_id ,
                  'name' => $request->name,
                  'lastname' => $request->lastname,
                  'degree' => $request->degree,
                  'class' => $request->class,
                  'room' => $request->room,
                  'card_number' => $request->card_number,
                  'birthday' => $request->birthday,
                  'nationality' => $request->nationality,
                  'race' => $request->race,
                  'tel' => $request->tel,
                  'email' => $request->email,
                  'address' => $request->address,
                  'father' => $request->father,
                  'father_tel' => $request->father_tel,
                  'mom' => $request->mom,
                  'mom_tel' => $request->mom_tel,
                  ]);
                  Session::flash('flash_message','บันทึกข้อมูลสำเร็จ!! ');
                  return redirect('/adminmaster/editstu/'.$request->id);
    }



    public function addtc(Request $request ){
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'password' => 'required|confirmed',
            'name_lastname' => 'required',
            'degree' => 'required',
            'room' => 'required',
        ));
        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }
        $password = Hash::make($request->password);
        DB::insert('insert into users (username,password,name_lastname,school,type,degree,room) values
        ("'.$request->name.'","'.$password.'","'.$request->name_lastname.'","'.$request->school.'","'.$request->type.'","'.$request->degree.'","'.$request->room.'")');
       return response()->json(['error'=> false,], 200);





    }

    public function showTeacher($id)
    {
        $name_school = DB::table('alf_name_school')->find($id);
        $users = DB::table('users')
        ->where('school',$name_school->id)
        ->where('type','4')
        ->get();
        return Datatables::of($users)->addColumn('action', function ($users) {
            return '<div class="btn-group">
            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
              <span class="caret">ตัวเลือก</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item"  href="/adminmaster/editstc/'.$users->id.'" >แก้ไข</a>
              <a class="dropdown-item"  data-toggle="modal"    data-target="#modal-DeletTc'.$users->id.'">ลบ</a>
              <a class="dropdown-item"  data-toggle="modal"    data-target="#modal-resetpass'.$users->id.'">รีเซ็ตรหัสผ่าน</a>

              </div>
              <div class="modal fade" id="modal-DeletTc'.$users->id.'">
              <div class="modal-dialog modal-xs">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">ยืนยันการลบ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="/adminmaster/dlestc"  method="get">

                  <div class="modal-body">

                  <input type="hidden" name="school" value="'.$users->school.'">
                  <input type="hidden" name="id" value="'.$users->id.'">
                  ยืนยันการลบข้อมูล  '.$users->name_lastname.'

                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-info  float-right">ยืนยัน</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modal-resetpass'.$users->id.'">
            <div class="modal-dialog modal-xs">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">ยืนยันการรีเซ็รหัสผ่าน</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="/adminmaster/resetpass"  method="get">

                <div class="modal-body">

                <input type="hidden" name="school" value="'.$users->school.'">
                <input type="hidden" name="id" value="'.$users->id.'">
                ยืนยันการรีเซ็รหัสผ่าน '.$users->name_lastname.' รหัสผ่านเริ่มต้น 123456

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                  <button type="submit" class="btn btn-info  float-right">ยืนยัน</button>
                </div>
                </form>
              </div>
            </div>
          </div>

              '
        ;})->make();
    }

    public function editstc($id){
        $user = DB::table('users')->find($id);
            $data = array('user'=>$user);
            return view('adminischool/edittc',$data);
    }



    public function saveedittc(Request $request){


        $request->validate([
            'name' => 'required',
            'name_lastname' => 'required',
            'degree' => 'required',
            'room' => 'required',
        ]);
        $password = Hash::make($request->password);
        DB::table('users')->where('id', $request->id)
        ->update(['username' => $request->name ,

                  'name_lastname' => $request->name_lastname,
                  'degree' => $request->degree,
                  'room' => $request->room,
                  ]);
                  Session::flash('flash_message','บันทึกข้อมูลสำเร็จ!! ');
                  return redirect('/adminmaster/editstc/'.$request->id);

    }


    public function dletc(Request $request ){

        DB::table('users')->where('id', '=',$request->id)->delete();
        Session::flash('flash_message','ลบข้อมูลชั้นสำเร็จ!! ');
        return redirect('/adminmaster/addschool/'.$request->school);

    }
    public function resetpass(Request $request ){

        $password = Hash::make("123456");
        DB::table('users')->where('id', $request->id)
        ->update(['password' => $password
                  ]);
                  Session::flash('flash_message','รีเซ็ตรหัสสำเร็จ!! ');
                  return redirect('/adminmaster/addschool/'.$request->school);

    }


    public function parent(Request $request ){
        $validator = Validator::make($request->input(), array(
            'name' => 'required',
            'password' => 'required|confirmed',
            'name_lastname' => 'required',
            'student_code' => 'required',

        ));
        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }
        $password = Hash::make($request->password);
        DB::table('users')->insert(
            ['username' => $request->username,
            'password' => $password,
            'name_lastname' => $request->name_lastname,
            'school' => $request->school,
            'type' => $request->type,
            'student_code' => $request->student_code
            ]
        );
       return response()->json(['error'=> false,], 200);
    }


    public function showParent($id){
        $name_school = DB::table('alf_name_school')->find($id);
        $users = DB::table('users')
        ->where('school',$name_school->id)
        ->where('type','3')
        ->get();
        return Datatables::of($users)->addColumn('action', function ($users) {
            return '<div class="btn-group">
            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
              <span class="caret">ตัวเลือก</span>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item"  href="/adminmaster/editstc/'.$users->id.'" >แก้ไข</a>
              <a class="dropdown-item"  data-toggle="modal"    data-target="#modal-DeletTc'.$users->id.'">ลบ</a>
              <a class="dropdown-item"  data-toggle="modal"    data-target="#modal-resetpass'.$users->id.'">รีเซ็ตรหัสผ่าน</a>

              </div>
              <div class="modal fade" id="modal-DeletTc'.$users->id.'">
              <div class="modal-dialog modal-xs">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">ยืนยันการลบ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="/adminmaster/dlestc"  method="get">

                  <div class="modal-body">

                  <input type="hidden" name="school" value="'.$users->school.'">
                  <input type="hidden" name="id" value="'.$users->id.'">
                  ยืนยันการลบข้อมูล  '.$users->name_lastname.'

                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-info  float-right">ยืนยัน</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modal-resetpass'.$users->id.'">
            <div class="modal-dialog modal-xs">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">ยืนยันการรีเซ็รหัสผ่าน</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="/adminmaster/resetpass"  method="get">

                <div class="modal-body">

                <input type="hidden" name="school" value="'.$users->school.'">
                <input type="hidden" name="id" value="'.$users->id.'">
                ยืนยันการรีเซ็รหัสผ่าน '.$users->name_lastname.' รหัสผ่านเริ่มต้น 123456

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                  <button type="submit" class="btn btn-info  float-right">ยืนยัน</button>
                </div>
                </form>
              </div>
            </div>
          </div>

              '
        ;})->make();




    }












































//adminschool
    public function admindashboard()
    {
        return view('adminschool/dashboard');
    }


    public function adminprofile()
    {
        $users = DB::table('users')->find(auth()->user()->id);
        $data =array('users'=>$users,);
        return view('adminschool/profile',$data);
    }

    public function adminschool()
    {
        $name_school = DB::table('name_school')->find(auth()->user()->school);

        $student_info = DB::table('student_info')->where('name_school',$name_school->id)->get();


        $data = array('name_school' =>$name_school ,
                      'student_info'=>$student_info
    );
        return view('adminschool/school',$data);
    }




}
