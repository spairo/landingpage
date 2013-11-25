<!DOCTYPE html>
<html>
  <head>
    <title>Landing Page</title>
        
    <!-- Css-->
    <link href="css/screen.css" rel="stylesheet">
	<link href="css/io.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	
	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.slides.min.js"></script>
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto();
      });
      $(function(){
        $("#slides").slidesjs({
        	width: 940,
        	height: 520,
        	navigation: false,
        	start: 1,
        	play: {
        		auto: true,
        		effect: "fade",
        		interval: 8000,
        	}
        });
        //sup.
        $(".slidesjs-container").css("height","520px");
       
      });
    </script>
  </head>
  <body>
  	<div id="page-wrapper">
  		<div class="header">
  			<div id="logo">
	  			 <a href="/"><img src="../images/logo.png" alt="Landig Page testing"></a>
  			</div>
  			<ul class="menu">
  				<li><a href="#">Signup</a></li>
  				<li><a href="#">How to Save</a></li>
  				<li><a href="#">Blog</a></li>
  				<li><a href="#">Support</a></li>
  				<li><a href="#" class="login"><span class="text">Login</span></a></li>
  			</ul>
  		</div>
  		<div id="slides">
  			<div class="img1">
  				<div class="box">
  					<div class="msg">
  						When you find something
  						you want to view later,
  						put it in Pocket.
  					</div>
  					<a href="http://vimeo.com/40168555" rel="prettyPhoto" title="">
  							<img src="images/video_thumb.jpg" alt="Test" /><span class="video"> Watch video to learn more &raquo;</span>
  					</a>
  					<br />
  					<a href="#" class="signup">sign up now</a>
  				</div>
  			</div> 
  			<div class="img2">
  				<div class="box">
  					<div class="msg">
  						When you find something
  						you want to view later,
  						put it in Pocket.
  					</div>
  					<a href="http://vimeo.com/40168555" rel="prettyPhoto" title="">
  							<img src="images/video_thumb.jpg" alt="Test" /><span class="video"> Watch video to learn more &raquo;</span>
  					</a>
  					<br />
  					<a href="#" class="signup">sign up now</a>
  				</div>
  			</div> 
  			<div class="img3">
  				<div class="box">
  					<div class="msg">
  						When you find something
  						you want to view later,
  						put it in Pocket.
  					</div>
  					<a href="http://vimeo.com/40168555" rel="prettyPhoto" title="">
  							<img src="images/video_thumb.jpg" alt="Test" /><span class="video"> Watch video to learn more &raquo;</span>
  					</a>
  					<br />
  					<a href="#" class="signup">sign up now</a>
  				</div>
  			</div>		    
  		</div>
		<div class="section">
			<div class="container">
				<img class="img" src="images/img01.jpg" alt="" />
			</div>
			<div class="container">
				<div class="paragraph">
					<h3>Save For Later</h3>
					<p>Put articles, videos or pretty much anything into Pocket.</p>
					<p>Save directly from your browser or from apps like Twitter, Flipboard, Pulse and Zite.</p>
				</div>
			</div>
			<div class="container">
				<div class="list">
					<h4>View Pocket:</h4>
					<ul>
						<li><span class="icon-laptop"></span><span class="description">Lorem ipsum dolor sit amet</span></li>
						<li><span class="icon-mail2"></span><span class="description">Lorem ipsum</span></li>
						<li><span class="icon-twitter"></span><span class="description">+ Lorem ipsum</span></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="huge">
				<div class="container">
					<img  class="img2" src="images/img02.jpg" alt="" />
				</div>
				<div class="container">
					<div class="paragraph">
						<h3>View When Ready</h3>
						<p>If it's in Pocket, it's on your phone, tablet or computer. You don't even need an Internet connection.</p>
					</div>
				</div>
				<div class="container">
					<div class="list">
						<h4>View Pocket:</h4>
						<ul>
							<li><span class="icon-mobile2"></span><span class="description">iPhone and iPad</span></li>
							<li><span class="icon-android"></span><span class="description">Android</span></li>
							<li><span class="icon-tablet"></span><span class="description">Kobo</span></li>
							<li><span class="icon-laptop"></span><span class="description">In Your Browser</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="signup">
					<span class="left">Start saving to Pocket.</span><a href="#" class="button">Sign Up Now</a><span class="right">It's totally free.</span>
			</div>
		</div>
		<div class="section">
				<div class="area_big">
					<span class="info-up">Number of Users</span>
					<div class="box">
						<span class="text">10 Million+</span>
						<div class="ribbon_left">
							<span class="text-ribbon">Lorem ipsum dolor</span>
						</div>
						<span class="text">10 Million+</span>
					</div>
					<span class="info-down">Number of Items Saved</span>
				</div>
				<div class="area">
					<span class="italic">A great option for those interested in saving video, images, text and other content, all in one place.</span>
					<div class="tnw"></div>
				</div>
				<div class="area_big">
					<div class="ribbon_right">
						<span class="text">Integrated in 500+ apps</span>
					</div>
					<ul class="social">
						<li><img src="images/social_icon05.gif" alt="" /></li>
						<li><img src="images/social_icon05.gif" alt="" /></li>
						<li><img src="images/social_icon05.gif" alt="" /></li>
						<li><img src="images/social_icon05.gif" alt="" /></li>
						<li><img src="images/social_icon05.gif" alt="" /></li>
						<li><img src="images/social_icon05.gif" alt="" /></li>
					</ul>
					<a href="#"><span class="more">more apps</span></a>
				</div>
		</div>
		<div class="footer">
			<ul class="left">
				<li><a href="#">Blog</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">App Directory</a></li>
				<li><a href="#">Developers</a></li>
				<li><a href="#">Publishers</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Jobs</a></li>
			</ul>
			<ul class="social">
				<li>Connect:</li>
				<li><a href="#"><span class="icon-twitter"></span></a></li>
				<li><a href="#"><span class="icon-facebook"></span></a></li>
				<li><a href="#"><span class="icon-google-plus"></span></a></li>
			</ul>
		</div>
  	</div>
  </body>
</html>