@extends('layouts.admin_ischool')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            <h4 class="m-0 text-dark">
                แก้ไขข้อมูล  {{$user->name_lastname}}
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
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
              <form action="{{url('adminmaster/saveedittc')}}"  method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$user->id}}">
                <div class="row">
                        <div class="col-12 col-md-4">
                    <div class="form-group">
                      <label  class="col-md-12 col-sm-5 control-label" >ชื่อผู้ใช้:</label>
                      <input id="username" type="text" class="form-control" name="name" value="{{$user->username}}">
                    </div>
                    </div>
                    
              </div>
              <div class="row">
                    <div class="col-12 col-md-4">
                            <div class="form-group">
                                 <label  class="col-md-12 col-sm-12 control-label">ชื่อ-นามสกุล:</label>
                                <input id="name_lastname" type="text" class="form-control" name="name_lastname" value="{{$user->name_lastname}}" >
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                                <div class="form-group">
                                     <label  class="col-md-12 col-sm-12 control-label">ครูที่ปรึกษาระดับชั้น:</label>
                                    <input id="degree" type="text" class="form-control" name="degree" value=" {{$user->degree}}">
                          </div>
                     </div>
                     <div class="col-12 col-md-4">
                            <div class="form-group">
                                 <label  class="col-md-12 col-sm-12 control-label">ห้อง:</label>
                                <input id="room" type="text" class="form-control" name="room" value="{{$user->room}}"   >
                      </div>
                 </div>
              </div>





              </div>
              <div class="card-footer">
              <a  href="{{url('adminmaster/addschool/'.$user->school)}}"            class="btn btn-default">ย้อนกลับ</a>
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

