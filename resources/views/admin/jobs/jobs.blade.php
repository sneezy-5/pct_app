<!DOCTYPE html>
<html>


<!-- Mirrored from gurayyarar.github.io/AdminBSBMaterialDesign/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 10:32:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Accueil | ALLAKRO</title>

    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style2.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
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
            <p>Please wait...</p>
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
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
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
                    <img src="images/user-img.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>David Sibahi</b> </div>
                    <div class="email">Administrateur</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
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
                        <a href="index-2.html">
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
                                <a href="javascript:void(0);" >
                                    <span>Ajouter</span>
                                </a>
                               
                            </li>
                            <li>
                                <a href="javascript:void(0);" >
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
                                <a href="pages/ui/alerts.html">Ajouter</a>
                            </li>
                            <li>
                                <a href="pages/ui/animations.html">Gestion des utilisateurs</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html">Badges</a>
                            </li>

                          
                            <li>
                                <a href="pages/ui/media-object.html">Objectif</a>
                            </li>
                          
                            <li>
                                <a href="pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="pages/ui/pagination.html">Messages</a>
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
                                <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="pages/forms/editors.html">Editors</a>
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
                                <a href="pages/tables/normal-tables.html">Pharmacie de garde</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">Liste des pharmacies</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.html">Editable Tables</a>
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
                                <a href="pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/yandex.html">YandexMap</a>
                            </li>
                            <li>
                                <a href="pages/maps/jvectormap.html">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
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
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
              
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

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
                    <img src="images/user-img.png" width="48" height="48" alt="User" />
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
                        <a href="#">
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
                                <a href="ajouter-membre.html" >
                                    <span>Ajouter</span>
                                </a>
                               
                            </li>
                            <li>
                                <a href="liste-membre.html" >
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
                                <a href="ajouter-user.html">Ajouter</a>
                            </li>
                            <li>
                                <a href="#">Gestion des utilisateurs</a>
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
                                <a href="{{route('admin.job.create')}}">Liste des Professions</a>
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
                                <a href="{{route('admin.project.create')}}">Liste de projets marie</a>
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
                                <a href="{{route('admin.pharmacy.index')}}">Pharmacie de garde</a>
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
                                <a href="{{route('admin.message.create')}}">Toutes les message</a>
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
                                <a href="{{route('admin.actuality.create')}}">Theme</a>
                            </li>
                            <li>
                                <a href="{{route('admin.actuality.create')}}">Toutes les actualités</a>
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
                <h2>
                   Liste des membres
                    
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Membre
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Liste <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> personne(s)</label></div></div><div class="col-sm-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Recherche:<input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 173px;">Nom</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 284px;">description</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 130px;">localisation</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 63px;">Action</th>
                                    </thead>
                                    <tfoot>
                                        <tr><th rowspan="1" colspan="1">Nom</th><th rowspan="1" colspan="1">description</th><th rowspan="1" colspan="1">localistaion</th><th rowspan="1" colspan="1">Action</th>
                                    </tfoot>
                                    <tbody>                                            
                                        <tr role="row" class="odd">
                                            @if($jobs->isEmpty())
                                            <p>Vide</p>
                                            @else
                                            @foreach($jobs as $job)
                                            <td class="sorting_1">{{$job->name}}</td>
                                            <td>{{$job->describe}}</td>
                                            <td>{{$job->location}}</td>
                      
                                              <td> <a class="btn btn-secondary" href="{{route('admin.job.edit',['job'=>$job->id])}}">Editer</a></td>
                                                <!-- <td> <a class="btn btn-primary" href="{{route('admin.job.show',['job'=>$job->id])}}">Afficher</a></td> -->
                                                <td>   <form  action="{{ route('admin.job.destroy', ['job'=>$job->id])}}" method="post"> 
                          @csrf 
                          @method('delete')
                          <button class="btn btn-danger" type="submit">suprimer</button>
                        </form></td>
                                            
                                           
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite"> 1 to 10 of 57 Personne(s)</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0">Precedent</a></li><li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0">Suivant</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../plugins/raphael/raphael.min.js"></script>
    <script src="../plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="../plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="../plugins/flot-charts/jquery.flot.js"></script>
    <script src="../plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="../plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="../plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="../plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="../plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>


<!-- Mirrored from gurayyarar.github.io/AdminBSBMaterialDesign/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 10:32:56 GMT -->
</html>
