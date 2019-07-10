@extends('layouts.app_home')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">การจัดการสิทธิ์ผู้ใช้</h1>

              </div><!-- /.col -->

            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
             <div class="col-sm-12">
                    <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-addA">เพิ่มผู้ดูแลระบบ/โรงเรียน</button>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-add">เพิ่มชื่อครูประจำชั้น</button>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-add">เพิ่มชื่อผู้ปกครอง</button>
                            </div>
 <div class="modal fade" id="modal-add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
            <h4 class="modal-title">เพิ่มผู้ใช้</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
          </button>
      </div>
     <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        @csrf
    <div class="modal-body">
      <div class="card-body">
       <div class="row">
            <div class="col-12 col-md-4">
        <div class="form-group">
          <label  class="col-md-12 col-sm-5 control-label" >ชื่อผู้ใช้:</label>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>
        </div>
         <div class="col-12 col-md-4">
           <div class="form-group">
                <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">รหัสผ่าน:</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            </div>
         </div>
         <div class="col-12 col-md-4">
            <div class="form-group">
                 <label  class="col-md-12 col-sm-12 control-label">ยืนยันรหัสผ่าน:</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
  </div>
  <div class="row">
        <div class="col-12 col-md-4">
                <div class="form-group">
                     <label  class="col-md-12 col-sm-12 control-label">ชื่อ-นามสกุล:</label>
                    <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="col-12 col-md-4">
                    <div class="form-group">
                         <label  class="col-md-12 col-sm-12 control-label">โรงเรียน:</label>
                        <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
         </div>
         <div class="col-12 col-md-4">
                <div class="form-group">
                     <label  class="col-md-12 col-sm-12 control-label">สิทธิ์การใช้งาน:</label>
                     <select class="form-control">
                            <option>เลือก</option>
                            <option>สิทธิ์ดูแลโรงเรียน</option>
                            <option>สิทธิ์ดูแลระบบ i school tec</option>
                          </select>
          </div>
     </div>


  </div>
</div>
</div>
<div class="modal-footer justify-content-between">
     <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
     <button type="submit" class="btn btn-primary">บันทึก</button>
</form>
  </div>
  </div>
</div>
</div>
             <!-- /.card-header -->
                            <div class="card-body">
                                <div class="card-body table-responsive p-0">
                              <table id="managerUser" class="table table-bordered table-striped">
                                    <thead>
                                            <th>*</th>
                                            <th>ชื่อผู้ใช้</th>
                                            <th>roles</th>

                                        </thead>
                                     @foreach ($posts as $item)
                                      <tr>
                                          <td>*</td>
                                      <td>{{$item->username}}</td>
                                      <td>{{$item->name}}</td>
                                      </tr>

                                     @endforeach
                                </table>
                                </div>
                            </div>
                            {{ $posts->links() }}
                            <!-- /.card-body -->
                          </div>
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
