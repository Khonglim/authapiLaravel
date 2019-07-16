<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>I School Tec</title>
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

 <!-- icheck bootstrap -->
 <link rel="stylesheet" href="{{asset("adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{asset("adminLTE/dist/css/adminlte.min.css")}}">
 <!-- Google Font: Source Sans Pro -->
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset("adminLTE/plugins/datatables/dataTables.bootstrap4.css")}}">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
        <div class="wrapper">

                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
                  <!-- Left navbar links -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>

                  </ul>



                  <!-- Right navbar links -->
                  <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                      <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">
                            <img src="{{asset('adminLTE/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                              <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">Call me whenever you can...</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                          </div>
                          <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">
                            <img src="{{asset('adminLTE/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                              <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">I got your message bro</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                          </div>
                          <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                          <!-- Message Start -->
                          <div class="media">
                            <img src="{{asset('adminLTE/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                              <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                              </h3>
                              <p class="text-sm">The subject goes here</p>
                              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                          </div>
                          <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                      </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                      <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                          <i class="fas fa-envelope mr-2"></i> 4 new messages
                          <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                          <i class="fas fa-users mr-2"></i> 8 friend requests
                          <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                          <i class="fas fa-file mr-2"></i> 3 new reports
                          <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                          class="fas fa-th-large"></i></a>
                    </li>
                  </ul>
                </nav>
                <!-- /.navbar -->

                <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                  <!-- Brand Logo -->
                  <a href="index3.html" class="brand-link">
                    <img src="{{asset('adminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                         style="opacity: .8">
                    <span class="brand-text font-weight-light">I School Tec</span>
                  </a>

                  <!-- Sidebar -->
                  <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                      <div class="image">
                        <img src="{{asset('adminLTE/dist/img/user2-160x160.png')}}" class="img-circle elevation-2" alt="User Image">
                      </div>
                      <div class="info">
                        <a href="#" class="d-block">{{auth()->user()->username}}</a>
                      </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                             <li class="nav-item">
                                    <a href="{{url('/adminmaster/profile')}}" class="nav-link ">
                                             <i class="fas fa-book-reader nav-icon"></i>
                                             <p>ข้อมูลส่วนตัว</p>
                                   </a>
                            </li>
                             <li class="nav-item">
                             <a href="{{url('/adminmaster/user')}}" class="nav-link ">
                                      <i class="fas fa-user-cog nav-icon"></i>
                                      <p>จัดการสิทธิ์ผู้ใช้</p>
                            </a>
                            </li>
                            <li class="nav-item">
                                    <a href="{{url('adminmaster/school')}}" class="nav-link ">
                                             <i class="fas fa-school nav-icon"></i>
                                             <p>จัดการโรงเรียน</p>
                                       </a>
                            </li>









                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                            <i class="fas fa-compass  nav-icon"></i>   <p>ออกจากระบบ</p>
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                        </li>
                      </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                  </div>
                  <!-- /.sidebar -->
                </aside>
                <main>
                        @yield('content')

                </main>
                <!-- Main Footer -->
                <footer class="main-footer">
                  <!-- To the right -->
                  <div class="float-right d-none d-sm-inline">
                    Anything you want
                  </div>
                  <!-- Default to the left -->
                  <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
                </footer>
              </div>
              <!-- ./wrapper -->




<!-- jQuery -->
<script src="{{asset("adminLTE/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- DataTables -->
<script src="{{asset("adminLTE/plugins/datatables/jquery.dataTables.js")}}"></script>
<script src="{{asset("adminLTE/plugins/datatables/dataTables.bootstrap4.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("adminLTE/plugins/fastclick/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("adminLTE/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("adminLTE/dist/js/demo.js")}}"></script>
<!-- page script -->
<script src="{{ asset('js/manageAll.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
@yield('javascript')







     </body>
</html>

