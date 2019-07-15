@extends('layouts.admin_ischool')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h4 class="m-0 text-dark">
                แก้ไขข้อมูล {{$studentInfo->title}} {{$studentInfo->name}} {{$studentInfo->lastname}}
            </h4>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
                @if(Session::has('flash_message') )
                <div class="alert alert-success d-flex align-items-center">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {!! session('flash_message') !!}
                  </div>
                @endif
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
              <form action="{{url('adminmaster/saveeditstudent')}}"  method="POST">
                @csrf
                      <input type="hidden" name="id" value="{{$studentInfo->id}}">
                    <div class="row">
                            <div class="col-12 col-md-4">
                        <div class="form-group">
                          <label  class="col-md-12 col-sm-5 control-label" >รหัสนักเรียน:</label>
                          <input id="student_code_id" type="text" class="form-control"  name="student_code_id" value="{{$studentInfo->student_code_id}}" >
                        </div>
                        </div>
                         <div class="col-12 col-md-4">
                           <div class="form-group">
                                <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">ชื่อจริง:</label>
                                <input id="password" type="text" class="form-control"  name="name" value="{{$studentInfo->name}}" >
                            </div>
                         </div>
                         <div class="col-12 col-md-4">
                            <div class="form-group">
                                 <label  class="col-md-12 col-sm-12 control-label">นามสกุล:</label>
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{$studentInfo->lastname}}" >
                            </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label  class="col-md-12 col-sm-5 control-label" >ระดับ:</label>
                     <select name="degree" id="degree" class="form-control">
                        <option value="{{$studentInfo->degree}}">

                                 @if($studentInfo->degree == 1)
                            ม.ต้น
                            @else
                           ม.ปลาย
                            @endif
                        </option>
                        <option value="1" >ม.ต้น</option>
                        <option value="2" >ม.ปลาย</option>
                     </select>
                    </div>
                    </div>
                    <div class="col-12 col-md-4">
                            <div class="form-group">
                                 <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">ชั้น:</label>
                                 <input id="class" type="text" class="form-control"  name="class"  value="{{$studentInfo->class}}">
                             </div>
                          </div>
                     <div class="col-12 col-md-4">
                       <div class="form-group">
                            <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">ห้อง:</label>
                            <input id="room" type="text" class="form-control"  name="room"  value="{{$studentInfo->room}}">
                        </div>
                     </div>
              </div>
              <div class="row">
                    <div class="col-12 col-md-4">
                            <div class="form-group">
                                 <label  class="col-md-12 col-sm-12 control-label">เลขบัตรประชาชน:</label>
                                <input id="card_number" type="text" class="form-control" name="card_number" value="{{$studentInfo->card_number}}" >
                            </div>
                        </div>
                    <div class="col-12 col-md-4">
                <div class="form-group">
                  <label  class="col-md-12 col-sm-5 control-label" >วันเกิด:</label>
                  <input id="birthday" type="text" class="form-control"  name="birthday"  value="{{$studentInfo->birthday}}">
                </div>
                </div>
                 <div class="col-12 col-md-4">
                   <div class="form-group">
                        <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">สัญชาติ:</label>
                        <input id="nationality" type="text" class="form-control"  name="nationality" value="{{$studentInfo->nationality}}" >
                    </div>
                 </div>

          </div>
          <div class="row">
                <div class="col-12 col-md-4">
                        <div class="form-group">
                             <label  class="col-md-12 col-sm-12 control-label">ศาสนา:</label>
                            <input id="race" type="text" class="form-control" name="race"  value="{{$studentInfo->race}}">
                        </div>
                    </div>
                <div class="col-12 col-md-4">
            <div class="form-group">
              <label  class="col-md-12 col-sm-5 control-label" >โทรศัพท์:</label>
              <input id="tel" type="text" class="form-control"  name="tel" value="{{$studentInfo->tel}}"  >
            </div>
            </div>
             <div class="col-12 col-md-4">
               <div class="form-group">
                    <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">อีเมล:</label>
                    <input id="email" type="email" class="form-control" name="email"  value="{{$studentInfo->email}}">
                </div>
             </div>

          </div>


          <div class="row">
                <div class="col-12 col-md-4">
                        <div class="form-group">
                             <label  class="col-md-12 col-sm-12 control-label">ที่อยู่:</label>
                             <textarea name="address" id="address" cols="30" rows="1" class="form-control">{{$studentInfo->address}}</textarea>

                        </div>
                    </div>
                <div class="col-12 col-md-4">
            <div class="form-group">
              <label  class="col-md-12 col-sm-5 control-label" >ชื่อ-นามสกุล บิดา:</label>
            <input id="father" type="text" class="form-control"  name="father" value="{{$studentInfo->father}}" >
            </div>
            </div>
             <div class="col-12 col-md-4">
               <div class="form-group">
                    <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">โทรศัพท์:</label>
                    <input id="father_tel" type="text" class="form-control" name="father_tel"  value="{{$studentInfo->father_tel}}">
                </div>
             </div>
          </div>

          <div class="row">
                <div class="col-12 col-md-4">
            <div class="form-group">
              <label  class="col-md-12 col-sm-5 control-label" >ชื่อ-นามสกุล มารดา:</label>
              <input id="mom" type="text" class="form-control"  name="mom" value="{{$studentInfo->mom}}" >
            </div>
            </div>
             <div class="col-12 col-md-4">
               <div class="form-group">
                    <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">โทรศัพท์:</label>
                    <input id="mom_tel" type="text" class="form-control" name="mom_tel"  value="{{$studentInfo->mom_tel}}">
                </div>
             </div>
          </div>
              </div>
              <div class="card-footer">
              <a  href="{{url('adminmaster/addschool/'.$name_school->id)}}"            class="btn btn-default">ย้อนกลับ</a>
                    <button type="submit" class="btn btn-info  float-right">บันทึก</button>
                </form>
            </div>
            </div><!-- /.card -->
          </div>

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
