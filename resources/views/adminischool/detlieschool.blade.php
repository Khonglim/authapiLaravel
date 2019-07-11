@extends('layouts.admin_ischool')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-9">
                <h4 class="m-0 text-dark">ข้อมูลโรงเรียน: {{$name_school->name_shcool}}</h4>
              </div><!-- /.col -->

            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">

                <div class="card card-primary card-outline">
                  <div class="card-body">
                  <h5 class="card-title">รายชื่อนักเรียนทั้งหมด</h5>

                    <p class="card-text">
                      สามารถค้นหาชื่อ-นามสกุล ระดับ ชั้น ห้อง.
                    </p>
                    <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>ระดับการศึกษา</th>
                                <th>ชั้น</th>
                                <th>ห้อง</th>
                                <th>เพิ่มเติม</th>
                              </tr>
                           @forelse ($student_info as $item)
                          <tr>
                              <td>
                                  #
                              </td>
                              <td> {{$item->username}} {{$item->lastname}}</td>
                              <td></td>
                              <td></td>
                              <td>

                              </td>
                              <td>
                                    <a href="#"  class="btn btn-info btn-sm"><i class="fas fa-users"></i> ดูข้อมูลนักเรียน</a>
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
