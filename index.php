<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home page - Barista Mentor</title>
	<link rel="stylesheet" href="./css/global.css">
	<link rel="stylesheet" href="./css/home.css">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/global.js"></script>
	<script type="text/javascript" src="js/imageMapResizer.min.js"></script>
	<script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$('.main-menu').rwdImageMaps();
	});
	</script>
</head>
<body>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '982373181880715',
	      xfbml      : true,
	      version    : 'v2.6'
	    });

			// Place following code after FB.init call.

			function onLogin(response) {
			  if (response.status == 'connected') {
			    FB.api('/me?fields=first_name', function(data) {
			      var welcomeBlock = document.getElementById('fb-welcome');
			      welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
			    });
			  }
			}

			FB.getLoginStatus(function(response) {
			  // Check login status on load, and if the user is
			  // already logged in, go directly to the welcome message.
			  if (response.status == 'connected') {
			    onLogin(response);
			  } else {
			    // Otherwise, show Login dialog first.
			    FB.login(function(response) {
			      onLogin(response);
			    }, {scope: 'user_friends, email'});
			  }
			});
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>

	<header>
		<a href="index.html" value="home"><span>&#8962;</span>HOME</a>
	</header>
	<main>
		<h1 id="fb-welcome"></h1>
		<div>
			<img class="main-menu" src="imgs/menu-background.jpg" alt="dsfafdafds" border="0" width="1242" height="2070" usemap="menu-map" />

			<a href="drinks.html" id="hotspot">&nbsp;</a>
		</div>
	</main>

</body>
</html>
