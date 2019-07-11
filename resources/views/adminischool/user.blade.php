@extends('layouts.admin_ischool')
@section('content')
<div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">

              </div>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="container-fluid">
             <div class="col-sm-12">
                    <div class="card card-info">
                            <div class="card-header">
                              <h3 class="card-title">การจัดการสิทธิ์ผู้ใช้</h3>
                            </div>
                              <div class="card-body">
                                    <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th>#</th>
                                                <th>ชื่อผู้ใช้</th>
                                                <th>สิทธิ์การเข้าถึง</th>
                                                <th>เพิ่มเติม</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                             @foreach ($users as $item)
                                                <tr>
                                                    <td></td>
                                                <td>{{$item->username}}</td>
                                                <td>{{$item->name_auth}}</td>
                                                <td>*</td>
                                                </tr>
                                             @endforeach
                                            </tbody>
                                          </table>
                              </div>
                              <div class="card-footer">

                                <a onclick="event.preventDefault();addTaskFormUser();" href="#" class="btn btn-info" data-toggle="modal"> <span>เพิ่มผู้ดูแลระบบ/โรงเรียน</span></a>
                                @include('partials.addUser')  </p>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-addTeacher">เพิ่มชื่อครูที่ปรึกษา</button>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-addParent">เพิ่มชื่อผู้ปกครอง</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-addParent">เพิ่มชื่อนักเรียน</button>




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
                                                                         <label  class="col-md-12 col-sm-12 control-label">ครูประจำชั้น:</label>
                                                                        <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                              </div>
                                                         </div>


                                                      </div>

                                                      <div class="row">
                                                            <div class="col-12 col-md-4">
                                                                    <div class="form-group">
                                                                         <label  class="col-md-12 col-sm-12 control-label">สิทธิ์การใช้งาน:</label>
                                                                         <select class="form-control">
                                                                                <option>เลือก</option>
                                                                                <option>สิทธิ์ดูแลโรงเรียน</option>
                                                                                <option>สิทธิ์ดูแลระบบ i school tec</option>
                                                                                <option>สิทธิ์ครูที่ปรึกษา</option>
                                                                                <option>สิทธิ์ผู้ปกครอง</option>
                                                                              </select>
                                                              </div>
                                                         </div>

                                                      </div>

                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                                  <button type="button" class="btn btn-primary">บันทึก</button>
                                                </div>
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                          </div>

                                          <div class="modal fade" id="modal-addParent">
                                                <div class="modal-dialog modal-lg">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h4 class="modal-title">เพิ่มชื่อผู้ปกครอง</h4>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
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
                                                                             <label  class="col-md-12 col-sm-12 control-label">รหัสประจำตัวนักเรียน:</label>
                                                                            <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                                  </div>
                                                             </div>


                                                          </div>
                                                        <div class="row">
                                                                <div class="col-12 col-md-4">
                                                                        <div class="form-group">
                                                                             <label  class="col-md-12 col-sm-12 control-label">สิทธิ์การใช้งาน:</label>
                                                                             <select class="form-control">
                                                                                    <option>เลือก</option>
                                                                                    <option>สิทธิ์ดูแลโรงเรียน</option>
                                                                                    <option>สิทธิ์ดูแลระบบ i school tec</option>
                                                                                    <option>สิทธิ์ครูที่ปรึกษา</option>
                                                                                    <option>สิทธิ์ผู้ปกครอง</option>
                                                                                  </select>
                                                                  </div>
                                                             </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                                      <button type="button" class="btn btn-primary">บันทึก</button>
                                                    </div>
                                                  </div>
                                                  <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                              </div>
                              </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
