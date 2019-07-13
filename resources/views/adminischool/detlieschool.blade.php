@extends('layouts.admin_ischool')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-9">
                <h4 class="m-0 text-dark">ข้อมูล:
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
            <div class="row">
              <div class="col-lg-12">

                <div class="card card-primary card-outline">
                  <div class="card-body">




                    <table class="table table-bordered" id="school-table">
                            <thead>
                              <tr>
                                <th>รหัสนักเรียน</th>
                                <th>คำนำหน้า</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>ระดับการศึกษา</th>
                                <th>ชั้น</th>
                                <th>ห้อง</th>
                                <th>เพิ่มเติม</th>
                              </tr>


                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="non_searchable"></th>
                                </tr>
                            </tfoot>

                          </table>
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
                   {data: 'student_code_id'},
                   {data: 'title'},
                   {data: 'name'},
                   {data: 'lastname'},
                   {data: 'name_degree'},
                   {data: 'class'},
                   {data: 'room'},
                   {data:"action","searchable":false,"orderable":false}
               ],
               initComplete: function () {
		            this.api().columns().every(function () {
		                var column = this;
		                var columnClass = column.footer().className;
		                if(columnClass != 'non_searchable'){
		                	var input = document.createElement("input");
		                	$(input).appendTo($(column.footer()).empty())
			                .on('change', function () {
			                    column.search($(this).val(), false, false, true).draw();
			                });
			            }
		            });
		            
		        }
		    });






             </script>
@endsection

