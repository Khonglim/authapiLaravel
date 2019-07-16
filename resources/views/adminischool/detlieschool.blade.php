@extends('layouts.admin_ischool')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
                @if(Session::has('flash_message') )
                <div class="alert alert-success d-flex align-items-center">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {!! session('flash_message') !!}
                  </div>
                @endif
            <div class="row mb-2">
              <div class="col-sm-9">
                <h4 class="m-0 text-dark">{{$name_school->name_school}}</h4>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
           ข้อมูลนักเรียนทั้งหมด
            <div class="row">
              <div class="col-lg-12">
                <div class="card card-primary card-outline">
                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-sm" id="school-table">
                            <thead>
                              <tr>
                                <th >รหัสนักเรียน</th>
                                <th>คำนำหน้า</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>ระดับการศึกษา</th>
                                <th>ชั้น</th>
                                <th>ห้อง</th>
                                <th>เพิ่มเติม</th>
                              </tr>


                            </thead>


                          </table>
                    </div>
                        </center>
                  </div>
                  <div class="card-footer">


                      </div>
                </div>
              </div>
            </div>
            สิทธิ์ผู้ใช้ครูที่ปรึกษา
            <div class="row">
                    <div class="col-lg-12">
                      <div class="card card-primary card-outline">
                        <div class="card-body">

                                <a onclick="event.preventDefault();addTaskFormTc();" href="#" class="btn btn-info" data-toggle="modal"> <span>เพิ่มชื่อครูที่ปรึกษา</span></a>
                                <div class="modal fade" id="modal-addTeacher">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">เพิ่มชื่อครูที่ปรึกษา</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="frmAddTc">
                                                        <div id="add-error-bag" class="alert alert-danger">
                                                                <ul id="add-task-errors">
                                                                </ul>
                                                            </div>
                                                    <div class="row">
                                                            <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                          <label  class="col-md-12 col-sm-5 control-label" >ชื่อผู้ใช้:</label>
                                                          <input id="username" type="text" class="form-control" name="name">
                                                        </div>
                                                        </div>
                                                         <div class="col-12 col-md-4">
                                                           <div class="form-group">
                                                                <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">รหัสผ่าน:</label>
                                                                <input id="password" type="password" class="form-control" name="password">
                                                            </div>
                                                         </div>
                                                         <div class="col-12 col-md-4">
                                                            <div class="form-group">
                                                                 <label  class="col-md-12 col-sm-12 control-label">ยืนยันรหัสผ่าน:</label>
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                                                            </div>
                                                        </div>
                                                  </div>
                                                  <div class="row">
                                                        <div class="col-12 col-md-4">
                                                                <div class="form-group">
                                                                     <label  class="col-md-12 col-sm-12 control-label">ชื่อ-นามสกุล:</label>
                                                                    <input id="name_lastname" type="text" class="form-control" name="name_lastname" >
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4">
                                                                    <div class="form-group">
                                                                         <label  class="col-md-12 col-sm-12 control-label">ครูที่ปรึกษาระดับชั้น:</label>
                                                                        <input id="degree" type="text" class="form-control" name="degree" >
                                                              </div>
                                                         </div>
                                                         <div class="col-12 col-md-4">
                                                                <div class="form-group">
                                                                     <label  class="col-md-12 col-sm-12 control-label">ห้อง:</label>
                                                                    <input id="room" type="text" class="form-control" name="room" >
                                                          </div>
                                                     </div>
                                                  </div>

                                                      <input type="hidden" name="school"  value="{{$name_school->id}}">
                                                      <input type="hidden" name="type"  value="4">
                                                    </form>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                              <button type="button" class="btn btn-primary" id="btn-addTc"   >บันทึก</button>
                                            </div>
                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                      </div>





                                <br><br>
                                <div class="table-responsive">
                          <table class="table table-bordered table-sm" id="Teacher-table">
                                  <thead>
                                    <tr>
                                      <th>ชื่อผู้ใช้</th>
                                      <th>ชื่อ-นามสกุล</th>
                                      <th>ครูที่ปรึกษาระดับชั้น</th>
                                      <th>ห้อง</th>
                                      <th>เพิ่มเติม</th>
                                    </tr>
                                  </thead>
                                </table>
                          </div>
                        </div>
                        <div class="card-footer"></div>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
      </div>

@endsection
@section('javascript')
<script>
        $('#school-table').DataTable({
               processing: true,
               serverSide: true,
               ajax: {
                   "url":"/dataschool/{{$name_school->id}}",
                   "dataType":"json",
                   "type":"POST",
                   "data":{"_token":"<?= csrf_token() ?>"}
               },
               columns: [
                   {data: 'student_code_id'},
                   {data: 'title'},
                   {data: 'name'},
                   {data: 'lastname'},
                   {data: 'degree'},
                   {data: 'class'},
                   {data: 'room'},
                   {data:"action","searchable":false,"orderable":false}
               ]
            });


            $('#Teacher-table').DataTable({
               processing: true,
               serverSide: true,
               ajax: {
                   "url":"/showTeacher/{{$name_school->id}}",
                   "dataType":"json",
                   "type":"POST",
                   "data":{"_token":"<?= csrf_token() ?>"}
               },
               columns: [
                   {data: 'username'},
                   {data: 'name_lastname'},
                   {data: 'degree'},
                   {data: 'room'},
                   {data:"action","searchable":false,"orderable":false}
               ]
		    });













             </script>
@endsection

