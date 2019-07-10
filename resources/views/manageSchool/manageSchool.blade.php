@extends('layouts.app_home')
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
                              <h3 class="card-title">การจัดการโรงเรียน</h3>
                            </div>
                              <div class="card-body">
                                    <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th>#</th>
                                                <th>ชื่อโรงเรียน</th>
                                                <th>เพิ่มเติม</th>
                                              </tr>
                                           @forelse ($name_school as $item)
                                          <tr>
                                              <td>
                                                  #
                                              </td>
                                              <td>
                                                  {{$item->name_shcool}}
                                              </td>
                                              <td>
                                                <a href="#"  class="btn btn-info btn-sm"><i class="fas fa-users"></i> ดูรายชื่อนักเรียน</a>
                                                <a href="#"  class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i> เพิ่มนักเรียน</a>
                                                <a href="#"  class="btn btn-warning btn-sm"><i class="far fa-edit"></i> แก้ไข</a>
                                                <a href="#"  class="btn btn-danger btn-sm"><i class="fas fa-receipt"></i> ลบ</a>
                                              </td>
                                          </tr>
                                           @empty

                                           @endforelse




                                            </thead>
                                            <tbody>

                                            </tbody>
                                          </table>
                              </div>
                              <div class="card-footer">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-addSchool">เพิ่มโรงเรียน</button>

                                <div class="modal fade" id="modal-addSchool">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">เพิ่มโรงเรียน</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="row">
                                                            <div class="col-12 col-md-4">
                                                        <div class="form-group">
                                                          <label  class="col-md-12 col-sm-5 control-label" >ชื่อโรงเรียน:</label>
                                                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                        </div>
                                                        </div>
                                                         <div class="col-12 col-md-4">
                                                           <div class="form-group">
                                                                <label for="inputPassword3" class="col-md-12 col-sm-5 control-label">อีเมล:</label>
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                            </div>
                                                         </div>
                                                         <div class="col-12 col-md-4">
                                                            <div class="form-group">
                                                                 <label  class="col-md-12 col-sm-12 control-label">เบอร์โทรศัพท์:</label>
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                            </div>
                                                        </div>
                                                  </div>
                                                  <div class="row">
                                                        <div class="col-12 col-md-4">
                                                                <div class="form-group">
                                                                     <label  class="col-md-12 col-sm-12 control-label">ที่อยู่:</label>
                                                                  <textarea name="addrees" id="" cols="30" rows="2" class="form-control"></textarea>
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

