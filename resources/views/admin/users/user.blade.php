<!DOCTYPE html>
<html>


<!-- Mirrored from gurayyarar.github.io/AdminBSBMaterialDesign/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 10:32:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Accueil | ALLAKRO</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('css/style2.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-orange">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Patientez...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Saisissez...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#">APP - ALLAKRO</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">{{ auth()->user()->unreadNotifications->count() }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                @foreach(auth()->user()->unreadNotifications as $notification)
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>{{$notification->data['message']}}</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> {{$notification->created_at}} min
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                   
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Toutes les Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Tache</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Activité du jour
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Taches</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- LOGO -->
            <div class="logo-info">
                    <div class="image">
                            
                    </div>
                    
                </div>
                <!-- #User Info -->
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user-img.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>David Sibahi</b> </div>
                    <div class="email">Administrateur</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Reglage</a></li>
                 
                            <li role="separator" class="divider"></li>
                            <li>
                            <form action="{{route('logout')}}" method="post">
													@csrf
												<button type="submit" title="" style=" color:brown; background-color: blanchedalmond;"><i class="material-icons">input</i>Deconnexion</button>
												</form>
 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU PRINCIPAL</li>
                    <li class="active">
                        <a href="/admin/dashboard">
                            <i class="material-icons">home</i>
                            <span>Accueil</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">people</i>
                            <span>Membre</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.user.create')}}" >
                                    <span>Ajouter</span>
                                </a>
                               
                            </li>
                            <li>
                                <a href="{{route('admin.user.index')}}" >
                                    <span>Gestion des membres</span>
                                </a>
                                
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Utilisateur</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.user.create')}}">Ajouter</a>
                            </li>
                            <li>
                                <a href="{{route('admin.user.index')}}">Gestion des utilisateurs</a>
                            </li>
                   
                        
                          
                        </ul>
                    </li>
                             <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Mariage</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.mary.create')}}">Mariage</a>
                            </li>
                            <li>
                                <a href="{{route('admin.mary.index')}}">Liste des mariages</a>
                            </li>
                   
                        
                          
                        </ul>
                    </li>

                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Professions</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.job.create')}}">Ajouter</a>
                            </li>
                            <li>
                                <a href="{{route('admin.job.index')}}">Liste des Professions</a>
                            </li>
                   
                        
                          
                        </ul>
                    </li>

                        <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Projet Mairie</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.project.create')}}">Ajouter</a>
                            </li>
                            <li>
                                <a href="{{route('admin.project.index')}}">Liste de projets marie</a>
                            </li>
                   
                        
                          
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_balance</i>
                            <span>Hopital</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.emergency.create')}}">Ajouter un hopital</a>
                            </li>
                            <li>
                                <a href="{{route('admin.emergency.index')}}">Liste des hopitaux</a>
                            </li>
                          
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Pharmacie</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.pharmacy.create')}}">Ajouter une pharmacie</a>
                            </li>
                            <li>
                                <a href="{{route('admin.pharmacy.degarde')}}">Pharmacie de garde</a>
                            </li>
                            <li>
                                <a href="{{route('admin.pharmacy.index')}}">Liste des pharmacies</a>
                            </li>
                            
                        </ul>
                    </li>

                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Ecoles</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.school.create')}}">Ajouter une ecole</a>
                            </li>
                            <li>
                                <a href="{{route('admin.school.index')}}">Liste des ecoles</a>
                            </li>
                            
                        </ul>
                    </li>

                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Evenement</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.event.create')}}">Ajouter un evenement</a>
                            </li> 
                            <li>
                                <a href="{{route('admin.event.index')}}">Liste des evenements</a>
                            </li>
                            
                        </ul>
                    </li> 

                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Naissance</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.born.create')}}">Ajouter une naissance</a>
                            </li>
                            <li>
                                <a href="{{route('admin.born.index')}}">Liste des naissances</a>
                            </li>
                            
                        </ul>
                    </li>

                      <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">import_contacts</i>
                            <span>Message</span>
                        </a>
                        <ul class="ml-menu">
                    
            
                            <li>
                                <a href="{{route('admin.message.index')}}">Toutes les message</a>
                            </li>
                        </ul>
                    </li>

                      <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">import_contacts</i>
                            <span>Subjection</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.subject.create')}}">Ajouter</a>
                            </li>
                            <li>
                                <a href="{{route('admin.subject.index')}}">Liste de subjections</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">import_contacts</i>
                            <span>Actualité</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.actuality.create')}}">Ajouter</a>
                            </li>
                            <li>
                                <a href="{{route('admin.actuality.index')}}">Toutes les actualités</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">import_contacts</i>
                            <span>Décès</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{route('admin.ded.create')}}">Ajouter</a>
                            </li>
                      
                            <li>
                                <a href="{{route('admin.ded.index')}}">Liste des décès</a>
                            </li>
                        </ul>
                    </li>
                  
                    
                    
                    <li class="header">Groupe 05</li>
                    <li>
                       
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 - 2022 <a href="javascript:void(0);">UVCI - Groupe 05</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="block-header">
              @if($errors)
                {{$errors}}
                @endif
            <h2>Ajouter un hopital</h2>
        </div>
        <div class="card">
           <form method="post" action="{{route('admin.born.store')}}">
            @csrf
 
            <div class="body">
                <div class="demo-masked-input">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <b>Nom de la mère</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">perm_identity</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="tapez quelque chose..." name="mother_name" >
                                </div>
                            </div>
                        </div>
                        
                         <div class="col-md-4">
                            <b>Nom de l'enfant</b>
                            <div class="input-group">
                                
                                <div class="form-line">
                                    <input type="text" class="form-control datetime" placeholder="nom de l'enfant" name="child_name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <b>date de la naisssance</b>
                            <div class="input-group">
                               
                                <div class="form-line">
                                    <input type="date" class="form-control mobile-phone-number" placeholder="date de la naissance" name="born_date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <b>image</b>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">perm_media</i>
                                </span>
                                <div class="form-line">
                                    <input type="file" class="form-control mobile-phone-number"  name="image" >
                                </div>
                            </div>
                        </div>
                        
                       
                        <div class="col-md-12">
                            <button class="btn btn-primary waves-effect" type="submit">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="asset('plugins/chartjs/Chart.bundle.js')"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{asset('plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/pages/index.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('js/demo.js')}}"></script>
</body>


<!-- Mirrored from gurayyarar.github.io/AdminBSBMaterialDesign/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 10:32:56 GMT -->
</html>
