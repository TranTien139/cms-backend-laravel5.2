<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin @yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  {!! Html::style('public/admin/bootstrap/css/bootstrap.min.css') !!}
  {!! Html::style('public/admin/plugins/datatables/dataTables.bootstrap.css') !!}
  {!! Html::style('public/admin/css/jquery.datepicker.css') !!}
  {!! Html::style('public/admin/plugins/iCheck/square/blue.css') !!}
  {!! Html::style('public/admin/dist/css/AdminLTE.min.css') !!}
  {!! Html::style('public/admin/dist/css/skins/_all-skins.min.css') !!}
  {!! Html::style('public/admin/css/style_admin.css') !!}
  
  {!! Html::script('public/admin/plugins/jQuery/jQuery-2.2.0.min.js') !!}
  {!! Html::script('public/admin/ckfinder/ckfinder.js') !!}
  {!! Html::script('public/admin/ckeditor/ckeditor.js') !!}
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{!! URL::to('/admin') !!}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>D</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ADMIN</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{!! Auth::user()->avatar !!}" width="160" height="160" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{!! Auth::user()->avatar !!}" max-width="160" max-height="160" class="user-image" alt="User Image">
              <span class="hidden-xs">{!! Auth::user()->fullname !!}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{!! Auth::user()->avatar !!}" max-width="160" max-height="160" class="img-circle" alt="User Image">

                <p>
                  {!! Auth::user()->email!!}
                  <small>{!! Auth::user()->level !!}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left" style="padding:0pc 3px;">
                  <a href="{!! url('admin/profile') !!}" class="btn btn-default btn-flat">Chi Tiết</a>
                </div>
                <div class="pull-left" style="padding:0pc 3px;">
                  <a href="" data-toggle="modal" data-target="#ModalChangepass" class="btn btn-default btn-flat">Đổi Mật Khẩu</a>
                </div>
                <div class="pull-left" style="padding:0pc 3px;">
                  <a href="{!! url('admin/logout') !!}" class="btn btn-default btn-flat">Thoát</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{!! Auth::user()->avatar !!}" max-width="160" max-height="160" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{!! Auth::user()->fullname !!}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{!! url('admin') !!}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>Users</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! url('admin/user') !!}"><i class="fa fa-circle-o"></i>List User</a></li>
            <li><a href="{!! url('admin/user/create') !!}"><i class="fa fa-circle-o"></i>Thêm User</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Sliser</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Nhóm Sliser<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{!! url('admin/groupslider') !!}"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
                <li><a href="{!! url('admin/groupslider/create') !!}"><i class="fa fa-circle-o"></i>Thêm Nhóm</a></li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Danh Sách Sliser<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{!! url('admin/slider') !!}"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
                <li><a href="{!! url('admin/slider/create') !!}"><i class="fa fa-circle-o"></i>Thêm 1 Slider</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Sản Phẩm</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Nhóm Sản Phẩm<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Thêm Nhóm</a></li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>List Sản Phẩm<i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Thêm Sản Phẩm</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Thẻ tags</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Bài Post</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! url('admin/article') !!}"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
            <li><a href="{!! url('admin/article/create') !!}"><i class="fa fa-circle-o"></i>Thêm Bài Post</a></li>
          </ul>
        </li>

        <li>
          <a href="{!! url('admin/plugin') !!}">
            <i class="fa fa-calendar"></i> <span>Plugins</span>
          </a>
        </li>
        <li>
          <a href="{!! url('admin/plugin') !!}">
            <i class="fa fa-calendar"></i> <span>Widget</span>
          </a>
        </li>

        <li>
          <a href="{!! url('admin/menu') !!}">
            <i class="fa fa-calendar"></i> <span>Menu</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Hệ Thống Chat</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Quản Lý Ảnh</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Hệ Thống Comment</span>
          </a>
        </li>

        <li>
          <a href="{!! url('admin/countvisit') !!}">
            <i class="fa fa-calendar"></i> <span>Biểu Đồ Lượt View</span>
          </a>
        </li>

        <li class="header">Khối HTML</li>
        <li><a href="{!! url('admin/contact') !!}"><i class="fa fa-circle-o text-red"></i><span>Liên Hệ</span></a></li>
        <li><a href="{!! url('admin/changelogo') !!}"><i class="fa fa-circle-o text-yellow"></i> <span>Logo</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>HTML Block</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li><a href="{!! url('admin/htmlblock') !!}"><i class="fa fa-circle-o"></i>HTML Block</a></li>
              <li><a href="{!! url('admin/htmlblock/create') !!}"><i class="fa fa-circle-o"></i>Thêm HTML Block</a></li>
          </ul>
        </li>
        <li class="header">SEO</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i><span>SEO</span></a></li>

        <li class="header">SiteMap</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i><span>SiteMap</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

