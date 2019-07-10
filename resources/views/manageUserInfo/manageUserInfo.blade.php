@extends('layouts.app_home')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>ข้อมูลส่วนตัว</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                    src="{{asset('adminLTE/dist/img/user2-160x160.png')}}"
                           alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{$users->username}}</h3>



                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                      <b>ชื่อ-นามสกุลผู้ปกครอง:</b> <a >{{$users->name_lastname}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>ผู้ปกครองของ:</b> <a>{{$users->student_code}}</a>
                      </li>
                      <li class="list-group-item">
                        <b>โรงเรียน:</b> <a>-</a>
                      </li>
                      <li class="list-group-item">
                            <b>ชั้นปีศึกษา:</b> <a>-</a>
                     </li>
                     <li class="list-group-item">
                            <b>เกรดเฉลี่ยสะสม:</b> <a>-</a>
                     </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>เปลี่ยนรหัสผ่าน</b></a>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->


              </div>

              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>



@endsection
