<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Allakro</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	
	<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="newsfeed.html" title=""><img src="images/logo2.png" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		<nav id="menu" class="res-menu">
			<ul>
				<li><span>Accueil</span>
					<ul>
						<li><a href="#" title="">Presentation Allakro</a></li>
						<li><a href="#" title="">La chefferie</a></li>
						<li><a href="#" title="">Nos activités</a></li>
						
					</ul>
				</li>
				<li><span>File d'information</span>
					<ul>
						<li><a href="#" title="">timelin</a></li>
						<li><a href="#" title="">timeline friends</a></li>
						<li><a href="#" title="">timeline groups</a></li>
						<li><a href="#" title="">timeline pages</a></li>
						
						
						
					</ul>
				</li>
				<li><span>Actualité</span>
					<ul>
						<li><a href="#" title="">Information du village</a></li>
						<li><a href="#" title="">Naissance</a></li>
						<li><a href="#" title="">Décès</a></li>
					
					</ul>
				</li>
				<li><span>forum</span>
					<ul>
						<li><a href="#" title="">Forum</a></li>
						<li><a href="#" title="">Categorie</a></li>
						<li><a href="#" title="">Ouvrir un sujet</a></li>
						<li><a href="#" title="">Creer un sujet</a></li>
					</ul>
				</li>
				<li><span>Our Shop</span>
					<ul>
						<li><a href="shop.html" title="">Shop Products</a></li>
						<li><a href="shop-masonry.html" title="">Shop Masonry Products</a></li>
						<li><a href="shop-single.html" title="">Shop Detail Page</a></li>
						<li><a href="shop-cart.html" title="">Shop Product Cart</a></li>
						<li><a href="shop-checkout.html" title="">Product Checkout</a></li>
					</ul>
				</li>
				<li><span>Our Blog</span>
					<ul>
						<li><a href="blog-grid-wo-sidebar.html" title="">Our Blog</a></li>
						<li><a href="blog-grid-right-sidebar.html" title="">Blog with R-Sidebar</a></li>
						<li><a href="blog-grid-left-sidebar.html" title="">Blog with L-Sidebar</a></li>
						<li><a href="blog-masonry.html" title="">Blog Masonry Style</a></li>
						<li><a href="blog-list-wo-sidebar.html" title="">Blog List Style</a></li>
						<li><a href="blog-list-right-sidebar.html" title="">Blog List with R-Sidebar</a></li>
						<li><a href="blog-list-left-sidebar.html" title="">Blog List with L-Sidebar</a></li>
						<li><a href="blog-detail.html" title="">Blog Post Detail</a></li>
					</ul>
				</li>
				<li><span>Portfolio</span>
					<ul>
						<li><a href="portfolio-2colm.html" title="">Portfolio 2col</a></li>
						<li><a href="portfolio-3colm.html" title="">Portfolio 3col</a></li>
						<li><a href="portfolio-4colm.html" title="">Portfolio 4col</a></li>
					</ul>
				</li>
				<li><span>Support & Help</span>
					<ul>
						<li><a href="support-and-help.html" title="">Support & Help</a></li>
						<li><a href="support-and-help-detail.html" title="">Support & Help Detail</a></li>
						<li><a href="support-and-help-search-result.html" title="">Support & Help Search Result</a></li>
					</ul>
				</li>
				<li><span>UVCI</span>
					<ul>
						<li><a href="#" title="">Presentation</a></li>
						<li><a href="#" title="">Activités</a></li>
						<li><a href="#" title="">Partenaires</a></li>
						<li><a href="https://campus.uvci.edu.ci/" title="">Site web UVCI</a></li>
						
					</ul>
				</li>
				
			</ul>
		</nav>
		
	</div><!-- responsive header -->
	
	<div class="topbar stick">
		<div class="logo">
			<a title="" href="newsfeed.html"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="top-area">
			<ul class="main-menu">
				<li>
					<a href="#" title="">Accueil</a>
					<ul>
						<li><a href="#" title="">Presentation Allakro</a></li>
						<li><a href="#" title="">La chefferie</a></li>
						<li><a href="#" title="">Nos activités</a></li>
					</ul>
				</li>
				<!-- <li>
					<a href="#" title="">Fil d'information</a>
					
						<ul>
							<li><a href="#" title="">timelin</a></li>
							<li><a href="#" title="">timeline friends</a></li>
							<li><a href="#" title="">timeline groups</a></li>
							<li><a href="#" title="">timeline pages</a></li>		
							
						</ul>
				</li> -->
				<li>
					<a href="#" title="">Actualité</a>
					<ul>
						<li><a href="#" title="">Information du village</a></li>
						<li><a href="{{route('born.index')}}" title="">Naissance</a></li>
						<li><a href="{{route('ded.index')}}" title="">Décès</a></li>
						<li><a href="{{route('mary.index')}}" title="">Mariage</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="">UVCI</a>
					<ul>
						<li><a href="#" title="">Presentation</a></li>
						<li><a href="{{route('project.index')}}" title="">Activité</a></li>
						<li><a href="#" title="">contact</a></li>
						<li><a href="http://scolarite.uvci.edu.ci/" title="">Site web UVCI</a></li>
						
					</ul>
				</li>
			</ul>
			<ul class="setting-area">
				<li>
					<a href="#" title="Home" data-ripple=""><i class="ti-search"></i></a>
					<div class="searched">
						<form method="post" class="form-search">
							<input type="text" placeholder="Search Friend">
							<button data-ripple><i class="ti-search"></i></button>
						</form>
					</div>
				</li>
				<li><a href="newsfeed.html" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
				<li>
					<a href="#" title="Notification" data-ripple="">
						<i class="ti-bell"></i><span>{{auth()->user()->unreadNotifications->count()}}</span>
					</a>
					<div class="dropdowns">
						<span>{{auth()->user()->unreadNotifications->count()}} New Notifications</span>
						
						<ul class="drops-menu">
							@foreach(auth()->user()->unreadNotifications as $notification)
							<li>
								<a href="" title="">
									<!-- <img src="images/resources/thumb-1.jpg" alt=""> -->
									<div class="mesg-meta">
										<!-- <h6>sarah Loren</h6> -->
										<span> {{$notification->data['message']}}</span>
										<i>{{$notification->created_at}}</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
							@endforeach
						
						</ul>
						<a href="notifications.html" title="" class="more-mesg">view more</a>
					</div>
				</li>
				<li>
					<a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span></span></a>
					<!-- <div class="dropdowns">
						<span>5 New Messages</span>
						<ul class="drops-menu">
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-1.jpg" alt="">
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-2.jpg" alt="">
									<div class="mesg-meta">
										<h6>Jhon doe</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag red">Reply</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-3.jpg" alt="">
									<div class="mesg-meta">
										<h6>Andrew</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag blue">Unseen</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-4.jpg" alt="">
									<div class="mesg-meta">
										<h6>Tom cruse</h6>
										<span>Hi, how dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="images/resources/thumb-5.jpg" alt="">
									<div class="mesg-meta">
										<h6>Amy</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
						</ul>
						<a href="messages.html" title="" class="more-mesg">view more</a>
					</div> -->
				</li>
				<li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
					<div class="dropdowns languages">
						<a href="#" title=""><i class="ti-check"></i>English</a>
						<a href="#" title="">Arabic</a>
						<a href="#" title="">Dutch</a>
						<a href="#" title="">French</a>
					</div>
				</li>
			</ul>
			<div class="user-img">
				<img src="images/" alt="">
				<span class="status f-online"></span>
				<div class="user-setting">
					
					<a href="{{route('user.dashboard')}}" title=""><i class="ti-user"></i>profile</a>
					<a href="#" title=""><i class="ti-pencil-alt"></i>modifier profile</a>
					<a href="#" title=""><i class="ti-settings"></i>mot de passe</a>
					
					<form action="{{route('logout')}}" method="post">
													@csrf
												<button type="submit" title=""><i class="ti-power-off"></i>Deconnexion</button>
												</form>
				</div>
			</div>
			<span class="ti-menu main-menu" data-ripple=""></span>
		</div>
	</div><!-- topbar -->
		
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<h4 class="widget-title">Racourcis</h4>
                    <ul class="naves">
											<li>
												<i class="ti-clipboard"></i>
												<a href="/" title="">Actualité</a>
											</li>
											
											<li>
												<i class="ti-image"></i>
												<a href="{{route('pharmacy.index')}}" title="">Pharmacie</a>
											</li>
											<li>
												<i class="ti-video-camera"></i>
												<a href="{{route('emergency.index')}}" title="">Hopital</a>
											</li>
											<li>
												<i class="ti-video-camera"></i>
												<a href="{{route('job.index')}}" title="">Profession</a>
											</li>
											<li>
												<i class="ti-video-camera"></i>
												<a href="{{route('event.index')}}" title="">Evenemment</a>
											</li>
											<li>
												<i class="ti-video-camera"></i>
												<a href="{{route('project.index')}}" title="">Projet Mairie</a>
											</li>
											<li>
												<i class="ti-video-camera"></i>
												<a href="{{route('school.index')}}" title="">Ecoles</a>
											</li>
										
											<li>
												<i class="ti-video-camera"></i>
												<a href="{{route('subject.index')}}" title="">Subjection</a>
											</li>
											<li>
												<i class="ti-comments-smiley"></i>
												<a href="#" title="">Messages</a>
											</li>
											<li>
												<i class="ti-bell"></i>
												<a href="#" title="">Reglage</a>
											</li>
											
											
											<li>
												<i class="ti-power-off"></i>
												<form action="{{route('logout')}}" method="post">
													@csrf
												<button type="submit" title="">Deconnexion</button>
												</form>
											</li>
										</ul>
									</div><!-- Shortcuts -->
									<div class="widget">
										<h4 class="widget-title">Activité recente</h4>
										<ul class="activitiez">
											<li>
												<div class="activity-meta">
													<i>10 hours Ago</i>
													<span><a href="#" title="">Commented on Video posted </a></span>
													<h6>by <a href="time-line.html">black demon.</a></h6>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>30 Days Ago</i>
													<span><a href="#" title="">Posted your status. “Hello guys, how are you?”</a></span>
												</div>
											</li>
											<li>
												<div class="activity-meta">
													<i>2 Years Ago</i>
													<span><a href="#" title="">Share a video on her timeline.</a></span>
													<h6>"<a href="#">you are so funny mr.been.</a>"</h6>
												</div>
											</li>
										</ul>
									</div><!-- recent activites -->
									<div class="widget stick-widget">
										<h4 class="widget-title">Connectés recemment</h4>
										<ul class="followers">
										@foreach($users as $user)
											<li>
												<figure><img src="/images/{{$user->picture}}" alt=""></figure>
												<div class="friend-meta">
													<h4><a href="{{$user->id}}" title="">{{$user->name}}</a></h4>
												</div>
											</li>
											@endforeach
										</ul>
									</div><!-- who's following -->
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="groups">
										<span><i class="fa fa-users"></i> Professions</span>
									</div>
									<ul class="nearby-contct">
                    @foreach($jobs as $job)
										<li>
											<div class="nearly-pepls">
												<figure>
													<a href="time-line.html" title=""><img src="{{$job->image}}" alt=""></a>
												</figure>
												<div class="pepl-info">
													<h4><a href="time-line.html" title="">{{$job->name}}</a></h4>
													<span>centre publique</span>
													<em>{{$job->describe}}</em>
													<a href="#" title="" class="add-butn" data-ripple="">Voir<span class="ripple"><span class="ink" style="height: 74px; width: 74px; background-color: rgb(255, 232, 8); top: -28.2px; left: -14.15px;"></span></span></a>
												</div>
											</div>
										</li>
									@endforeach

									</ul>
								</div><!-- photos -->
							</div>
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<h4 class="widget-title">Mon village</h4>	
										<div class="your-page">
											<figure>
												<img  style="border:2px solid #ff00" src="images/{{auth()->user()->picture}}" alt="">
											</figure>
											<div class="page-meta">
												<a href="#" title="" class="underline">La chefferie</a>
												<span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em></em></a></span>
												<span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>{{auth()->user()->unreadNotifications->count()}}</em></a></span>
											</div>
											<!-- <div class="page-likes">
												<ul class="nav nav-tabs likes-btn">
													<li class="nav-item"><a class="active" href="#link1" data-toggle="tab">Aimer</a></li>
													 <li class="nav-item"><a class="" href="#link2" data-toggle="tab">voir plus</a></li>
												</ul>
											
												<div class="tab-content">
												  <div class="tab-pane active fade show " id="link1" >
													<span><i class="ti-heart"></i>884</span>
													  <a href="#" title="weekly-likes">35 new likes this week</a>
													  <div class="users-thumb-list">
														<a href="#" title="Anderw" data-toggle="tooltip">
															<img src="images/resources/userlist-1.jpg" alt="">  
														</a>
														<a href="#" title="frank" data-toggle="tooltip">
															<img src="images/resources/userlist-2.jpg" alt="">  
														</a>
														<a href="#" title="Sara" data-toggle="tooltip">
															<img src="images/resources/userlist-3.jpg" alt="">  
														</a>
														<a href="#" title="Amy" data-toggle="tooltip">
															<img src="images/resources/userlist-4.jpg" alt="">  
														</a>
														<a href="#" title="Ema" data-toggle="tooltip">
															<img src="images/resources/userlist-5.jpg" alt="">  
														</a>
														<a href="#" title="Sophie" data-toggle="tooltip">
															<img src="images/resources/userlist-6.jpg" alt="">  
														</a>
														<a href="#" title="Maria" data-toggle="tooltip">
															<img src="images/resources/userlist-7.jpg" alt="">  
														</a>  
													  </div>
												  </div>
												  <div class="tab-pane fade" id="link2" >
													  <span><i class="ti-eye"></i>440</span>
													  <a href="#" title="weekly-likes">440 new views this week</a>
													  <div class="users-thumb-list">
														<a href="#" title="Anderw" data-toggle="tooltip">
															<img src="images/resources/userlist-1.jpg" alt="">  
														</a>
														<a href="#" title="frank" data-toggle="tooltip">
															<img src="images/resources/userlist-2.jpg" alt="">  
														</a>
														<a href="#" title="Sara" data-toggle="tooltip">
															<img src="images/resources/userlist-3.jpg" alt="">  
														</a>
														<a href="#" title="Amy" data-toggle="tooltip">
															<img src="images/resources/userlist-4.jpg" alt="">  
														</a>
														<a href="#" title="Ema" data-toggle="tooltip">
															<img src="images/resources/userlist-5.jpg" alt="">  
														</a>
														<a href="#" title="Sophie" data-toggle="tooltip">
															<img src="images/resources/userlist-6.jpg" alt="">  
														</a>
														<a href="#" title="Maria" data-toggle="tooltip">
															<img src="images/resources/userlist-7.jpg" alt="">  
														</a>  
													  </div>
												  </div>
												</div>
											</div> -->
										</div>
									</div><!-- page like widget -->
									<!-- <div class="widget">
										<div class="banner medium-opacity bluesh">
											<div class="bg-image" style="background-image: url(images/resources/baner-widgetbg.jpg)"></div>
											<div class="baner-top">
												<span><img alt="" src="images/book-icon.png"></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													Espace publicitaire.
												</p>
												<span>Aimez la page</span>
												<a data-ripple="" title="" href="#">Voir plus!</a>
											</div>
										</div>											
									</div> -->
									<div class="widget friend-list stick-widget">
										<h4 class="widget-title">Utilisateur de l'app</h4>
										<div id="searchDir"></div>
										<ul id="people-list" class="friendz-list">
                    @foreach($users as $user)
											<li>
												<figure>
													<img src="/images/{{$user->picture}}" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html" onclick="createOrReturnPrivateChat('{{$user->id}}')">{{$user->name}} </a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0d7c9ced4c5d2d3cfccc4c5d2e0c7cdc1c9cc8ec3cfcd">[email&#160;protected]</a></i>
												</div>
											</li>
										@endforeach
							
                  
										</ul>
										<div class="chat-box">
											<div class="chat-head">
												<span class="status f-online"></span>
												<h6>Bucky Barnes</h6>
												<div class="more">
													<span><i class="ti-more-alt"></i></span>
													<span class="close-mesage"><i class="ti-close"></i></span>
												</div>
											</div>
											<div class="chat-list">
												<ul>
													<li class="me">
														<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
													<li class="you">
														<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
													<li class="me">
														<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
												</ul>
												<form class="text-box">
													<textarea placeholder="Post enter to post..."></textarea>
													<div class="add-smiles">
														<span title="add icon" class="em em-expressionless"></span>
													</div>
													<div class="smiles-bunch">
														<i class="em em---1"></i>
														<i class="em em-smiley"></i>
														<i class="em em-anguished"></i>
														<i class="em em-laughing"></i>
														<i class="em em-angry"></i>
														<i class="em em-astonished"></i>
														<i class="em em-blush"></i>
														<i class="em em-disappointed"></i>
														<i class="em em-worried"></i>
														<i class="em em-kissing_heart"></i>
														<i class="em em-rage"></i>
														<i class="em em-stuck_out_tongue"></i>
													</div>
													<button type="submit"></button>
												</form>
											</div>
										</div>
									</div><!-- friends list sidebar -->
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="widget">
						<div class="foot-logo">
							<div class="logo">
								<a href="index-2.html" title=""><img src="images/logo.png" alt=""></a>
							</div>	
							<p>
								L'UVCI et le village d'Allakro collaborent pour un bien-être des populations villageoies. Cette application permet un bon fonctionnement des activites.
							</p>
						</div>
						<ul class="location">
							<li>
								<i class="ti-map-alt"></i>
								<p>Abidjan 2plateaux, Cote d'Ivoire.</p>
							</li>
							<li>
								<i class="ti-mobile"></i>
								<p>+225 07-98-5634-6345</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6">
					<div class="widget">
						<div class="widget-title"><h4>Nos comptes</h4></div>
						<ul class="list-style">
							<li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
							<li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
							<li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
							<li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
							<li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6">
					<div class="widget">
						<div class="widget-title"><h4>Navigation</h4></div>
						<ul class="list-style">
							<li><a href="#" title="">Apropos</a></li>
							<li><a href="#" title="">Nous contacter</a></li>
							<li><a href="#" title="">Conditions et termes</a></li>
							
							<li><a href="#" title="">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6">
					<div class="widget">
						<div class="widget-title"><h4>Liens</h4></div>
						<ul class="list-style">
							<li><a href="#" title="">leasing</a></li>
							<li><a href="#" title="">submit route</a></li>
							<li><a href="#" title="">how does it work?</a></li>
							<li><a href="#" title="">agent listings</a></li>
							<li><a href="#" title="">view All</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</footer><!-- footer -->
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
					<i><img src="images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="side-panel">
			<h4 class="panel-title">General Setting</h4>
			<form method="post">
				<div class="setting-row">
					<span>use night mode</span>
					<input type="checkbox" id="nightmode1"/> 
					<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Notifications</span>
					<input type="checkbox" id="switch22" /> 
					<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Notification sound</span>
					<input type="checkbox" id="switch33" /> 
					<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>My profile</span>
					<input type="checkbox" id="switch44" /> 
					<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Show profile</span>
					<input type="checkbox" id="switch55" /> 
					<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
				</div>
			</form>
			<h4 class="panel-title">Account Setting</h4>
			<form method="post">
				<div class="setting-row">
					<span>Sub users</span>
					<input type="checkbox" id="switch66" /> 
					<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>personal account</span>
					<input type="checkbox" id="switch77" /> 
					<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Business account</span>
					<input type="checkbox" id="switch88" /> 
					<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Show me online</span>
					<input type="checkbox" id="switch99" /> 
					<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Delete history</span>
					<input type="checkbox" id="switch101" /> 
					<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Expose author name</span>
					<input type="checkbox" id="switch111" /> 
					<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
				</div>
			</form>
		</div><!-- side panel -->		
	

		<script>

function createOrReturnPrivateChat(id){
			
			payload = {
				
				"user2_id": id,
			}

			$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>'
    }
});
			
			$.ajax({
				type: 'POST',
				dataType: "json",
				url: "{{ route('massage.chat') }}", // production
				data: payload,
				timeout: 5000,
				success: function(data) {
					console.log("SUCCESS", data)
					
					if(data['response'] == "Successfully got the chat."){
						chatroomId = data['chatroom_id']['id']
						console.error(data['chatroom_id'])
						OnGetOrCreateChatroomSuccess(chatroomId, id)
					}
					else if(data['response'] != null){
						alert(data['response'])
					}
				},
				error: function(data) {
					console.error("ERROR...", data)
					alert("Something went wrong.")
				},
			});
			}
			
			
			function OnGetOrCreateChatroomSuccess(chatroomId, id){
				var url = "/message/" + chatroomId ;
			
				var win = window.location.replace(url)
				// window.open(url) // for new tab
				win.focus()
			}
		</script>
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="{{asset('js/script.js')}}"></script>
	<script src="{{asset('js/map-init.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	

</html>