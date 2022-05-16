<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Admin| Widgets</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{route('admin.actuality.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.actuality.index' ? 'active' : '' }}">
              <i class="nav-icon fa fa-newspaper-o"></i>
              <p>
                Actualités
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link {{ Route::currentRouteName() == 'admin.users.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
              
                Utilisateurs
              </p>
            </a>
         
          </li>
          <li class="nav-item">
            <a href="{{route('admin.pharmacy.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.pharmacy.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-laptop-medical"></i>
              <p>
                Pharmacies
               
              </p>
            </a>
            
          </li>

          <li class="nav-item">
            <a href="{{route('admin.school.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.school.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Ecoles
               
              </p>
            </a>
            
          </li>


          <li class="nav-item">
            <a href="{{route('admin.message.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.message.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Messages
               
              </p>
            </a>
            
          </li>


          <li class="nav-item">
            <a href="{{route('admin.job.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.job.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-school"></i>
              <p>
                Metiérs
               
              </p>
            </a>
            
          </li>

          <li class="nav-item">
            <a href="{{route('admin.emergency.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.emergency.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-hospital"></i>
              <p>
                Hopiteaux
               
              </p>
            </a>
      
          </li>

          <li class="nav-item">
            <a href="{{route('admin.project.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.project.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-hospital"></i>
              <p>
                Projects
               
              </p>
            </a>
      
          </li>
          
            <li class="nav-item">
            <a href="{{route('admin.sik.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.sik.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Maladies
               
              </p>
            </a>
      
          </li>

            <li class="nav-item">
            <a href="{{route('admin.service.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.service.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-laptop-medical"></i>
              <p>
                Services
               
              </p>
            </a>
      
          </li>

               <li class="nav-item">
            <a href="{{route('admin.subject.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.subject.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Subjection
               
              </p>
            </a>
      
          </li>

           </li>

               <li class="nav-item">
            <a href="{{route('admin.event.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.event.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Evenemments
               
              </p>
            </a>
      
          </li>


              </li>

               <li class="nav-item">
            <a href="{{route('admin.born.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.born.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Naissances
               
              </p>
            </a>
      
          </li>


              </li>

               <li class="nav-item">
            <a href="{{route('admin.mary.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.mary.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Mariages
               
              </p>
            </a>
      
          </li>


             </li>

               <li class="nav-item">
            <a href="{{route('admin.job.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.job.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Professions
               
              </p>
            </a>
      
          </li>



              </li>

               <li class="nav-item">
            <a href="{{route('admin.ded.index')}}" class="nav-link {{ Route::currentRouteName() == 'admin.ded.index' ? 'active' : '' }}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Décès
               
              </p>
            </a>
      
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      
    </div>
    <strong>Copyright &copy; 2015-2022 <a href="#">Admin panel</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
      <!-- Authentication -->
      <form method="POST" action="{{route('logout')}}">
                            @csrf

            <button type="submit">{{ __('Log Out') }}</button>
             <!--  <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                
                </x-dropdown-link> -->
      </form>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

</body>
</html>