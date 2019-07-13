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
                                                  {{$item->name_school}}
                                              </td>
                                              <td>
                                                <a href="{{url('adminmaster/addschool/'.$item->id)}}"  class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> ดูข้อมูล</a>

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
                                    <a onclick="event.preventDefault();addTaskFormSchool();" href="#" class="btn btn-info" data-toggle="modal"> <span>เพิ่มโรงเรียน</span></a>
                                    @include('partials.addSchool')  </p>
                              </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
