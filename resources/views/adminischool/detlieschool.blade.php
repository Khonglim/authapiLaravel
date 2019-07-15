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
                <h4 class="m-0 text-dark">
                        @if(isset($details))
                        {{$details->name_school}}

                        @else
                        {{$name_school->name_school}}
                        @endif
                </h4>
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
                   {data: 'id'},
                   {data: 'title'},
                   {data: 'name'},
                   {data: 'lastname'},
                   {data: 'degree'},
                   {data: 'class'},
                   {data: 'room'},
                   {data:"action","searchable":false,"orderable":false}
               ]
		    });






             </script>
@endsection

