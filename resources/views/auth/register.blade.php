<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Allakro-App</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="./../css/main.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/color.css">
    <link rel="stylesheet" href="../../css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<!--div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>Winku</h1>
						<p>
							Winku is free to use for as long as you want with two active projects.
						</p>
						<div class="friend-logo">
							<span><img src="images/wink.png" alt=""></span>
						</div>
						<a href="#" title="" class="folow-me">Follow Us on</a>
					</div>	
				</div>
			</div-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<img src="images/logo.png"/>
						<h2 class="log-title">S'enregistrer</h2>
                            @if($errors)
                            {{$errors}}
                            @endif

                            @if (session('error'))
     <div class="alert alert-danger">
         {{ session('error') }}
     </div>
  @endif
  <p>
								Vous N'utilisez pas encore Allakro? <a href="#" title="">Faite un tour</a> Ou <a href="#" title="">Rejoingez Maintenant</a>
							</p>
                            <form method="post" action="{{route('user.store')}}" >
                        @csrf
							<div class="form-group">	
							  <input type="text" required="required" name="name"/>
							  <label class="control-label" for="input">Nom & Prenom</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" required="required" name="username"/>
							  <label class="control-label" for="input">Pseudo</label><i class="mtrl-select"></i>
							</div>
                            <div class="form-group">	
							  <input type="text" required="required" name="email"/>
							  <label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
							</div>
                            <div class="form-group">	
							  <input type="number" required="required" name="phone"/>
							  <label class="control-label" for="input">Phone</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="password"/>
							  <label class="control-label" for="input">Mot de Passe</label><i class="mtrl-select"></i>
							</div>
							<div class="form-radio">
							  <div class="radio">
								<label>
								  <input type="radio" name="civility" checked="checked"/><i class="check-box"></i>Homme
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="civility"/><i class="check-box"></i>Femme
								</label>
							  </div>
							</div>
							<!-- <div class="form-group">	
							  <input type="text" required="required"/>
							  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c29010d05002c">[email&#160;protected]</a></label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Accept Terms & Conditions ?
							  </label>
							</div> -->
							<a href="/" title="" class="already-have">Déjà un compte</a>
							<div class="submit-btns">
								<button class="mtr-btn signup" type="submit"><span>Enregister</span></button>
							</div>
						</form>
					</div>
				
				</div>
			</div>
		</div>
	</div>
</div>
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="../js/script.js"></script>

</body>	

</html>