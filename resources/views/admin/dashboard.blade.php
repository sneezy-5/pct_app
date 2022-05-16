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
                            <span class="label-count">{{ auth()->user()->unreadNotifications->count()}}</span>
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
                    <img src="../images/user-img.png" width="48" height="48" alt="User" />
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
                                <a href="{{route('admin.ded.create')}}">Liste des décès</a>
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
        <div class="container-fluid">
            <div class="block-header">
                <h2>TABLEAU DE BORD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_balance</i>
                        </div>
                        <div class="content">
                            <div class="text">Hopital</div>
                            <div class="number count-to" data-from="0" data-to="{{$emergencies}}" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">import_contacts</i>
                        </div>
                        <div class="content">
                            <div class="text">Actualité</div>
                            <div class="number count-to" data-from="0" data-to="{{$actualitycount}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Message</div>
                            <div class="number count-to" data-from="0" data-to="{{$chat->count()}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">ADHERENT</div>
                            <div class="number count-to" data-from="0" data-to="{{$user}}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                       
                        <img src="../images/banniere-allakro.jpg" class="js-animating-object img-responsive">

                    </div>
                </div>
            </div>
            <!-- #END# CPU Usage -->
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-orange">
                                <div class="m-b--35 font-bold">Allakro</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                        #Mission
                                    <span class="pull-right"><b>20</b> <small>Personne(s)</small></span>
                                </li>
                                <li>
                                        #Mission
                                    <span class="pull-right"><b>72</b> <small>Personne(s)</small></span>
                                </li>
                                <li>
                                        #Mission
                                    <span class="pull-right"><b>82</b> <small>Personne(s)</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-white">
                            <div class="m-b--35 font-bold">Activités du village</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                        #Artisanal
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>
                                    #informel
                                    <span class="pull-right">
                                        <i class="material-icons">trending_up</i>
                                    </span>
                                </li>
                                <li>#Professionnel</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-orange">
                            <div class="font-bold m-b--35">Population</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                        #Homme
                                    <span class="pull-right"><b>2120</b> <small>Personne(s)</small></span>
                                </li>
                                <li>
                                        #Femme
                                    <span class="pull-right"><b>1574</b> <small>Personne(s)</small></span>
                                </li>
                                <li>
                                        #Enfant
                                    <span class="pull-right"><b>4290</b> <small>Personne(s)</small></span>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>Actualité du village</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Theme</th>
                                           
                                            <th>Auteur</th>
                                            <th>Nombre de participant</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>La sécurité</td>
                                            
                                            <td>Jean marc Koffi</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Le chomage des jeunes</td>
                                            
                                            <td>Romaric Bath</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>La chefferie et les villageois</td>
                                          
                                            <td>Gladys Ble</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>La Mission de l'uvci</td>
                                            
                                            <td>David Dobe</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Saison de nouvelles choses</td>
                                           
                                            <td>Jean marc Koffi</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>OPTION APP-ALLAKRO</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
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
    <script src="{{asset('plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{asset('plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src=".{{asset('plugins/flot-charts/jquery.flot.time.js')}}"></script>

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
