<?php
// ==============================================================
// REQUIRE
// ==============================================================
require_once 'tweetfeed.php';
require_once 'repeater.php';

$tweetfeed = new TweetFeed();
$tweet     = $tweetfeed->display();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<link rel="stylesheet" media="screen" type="text/css" href="style.css">
<link href="css/font-awesome.css" rel="stylesheet">

<!--[if IE]>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
<![endif]-->
<script charset="utf-8" type="text/javascript" src="js/css_browser_selector.js"></script>
<script src="//use.typekit.net/itu5bwb.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://181.224.139.32/~rights4g/js/main.js"></script>
<script>
	var current_page_url = '<?php echo Repeater::curPageURL(); ?>';
</script>
</head>

<body>
<div class="global-box cf">
  <header id="header" class="cf">
	  <div class="center-box">
		  <h1 class="logo"><a href="http://www.rights4girls.org/"><span class="fa fa-home"></span>rights4girls</a></h1>
			
			<ul class="share-header">
			  <li><a href="http://www.facebook.com/rights4girls/" target="_blank" class="fa fa-facebook"><span>facebook</span></a></li>
				<li><a href="http://twitter.com/rights4girls/" target="_blank" class="fa fa-twitter"><span>tweet</span></a></li>
				<li><a href="http://www.rights4girls.org/#!contact/c21dx/" target="_blank" class="fa fa-envelope"><span>mail</span></a></li>
			</ul>
		</div>
	</header>
	
	<section id="content-section" class="cf">
	  <figure class="hero-banner cf">
			<img src="images/uploads/img_01.jpg" alt=" ">
			<figcaption>
				<h3>there is no such thing</h3>
				<p>as a child prostitute</p>
				<a href="#learnmore" class="more fa fa-chevron-down"><span>learn more</span></a>
			</figcaption>
		</figure>
		
		<article id="learnmore" class="content-area2 cf">
		  <div class="center-box">
			  <figure><img src="images/uploads/img_02.jpg" alt=" "></figure>
				<div class="txt">
				  <header>
				    <h2>It is time to eradicate the term "child prostitute."</h2>
					</header>
					<p>There are only victims and<br>survivors of child rape.</p>
					<footer>
					  <a href="http://www.change.org/p/stop-using-the-term-child-prostitute/" target="_blank" class="more">SIGN PETITION</a>
						<p>Tell the media there’s no such thing as a child prostitute.</p>
					</footer>
				</div>
			</div>
		</article>
		
		<div class="content-bg-box cf">
		  <div class="center-box">
			  <article class="content-area3 right cf">
				  <figure>
					  <img src="images/uploads/img_03.jpg" alt=" ">
					  <figcaption>modern day slavery<br>is alive and real.</figcaption>
					</figure>
					
					<div class="txt">
						<p>Girls are abducted or lured by pimps and traffickers at bus shelters, outside schools or through social media. Many of them are beaten into submission and sometimes even branded and publicly shamed with their pimp’s name.</p>
						<footer>
							<a href="uploads/child welfare and child trafficking.pdf" target="_blank" class="more">see fact sheet</a>
							<p>Learn more about child sex trafficking in the U.S.</p>
						</footer>
					</div>
				</article>
				
				<article class="content-area3 cf">
				  <figure>
					  <img src="images/uploads/img_04.jpg" alt=" ">
					  <figcaption>how you are named is<br>how you are treated.</figcaption>
					</figure>
					
					<div class="txt">
						<p>All too often, the media, law enforcement and others refer to these victims as "child prostitutes," belittling the pain and abuse these young girls endure on a daily basis. And in every state, there are child prostitution laws used to arrest and detain girls bought and sold for sex. These girls are not even of the legal age to consent to sex at all, let alone illicit commercial sex. This has to change -- in language and law.</p>
						<footer>
							<a href="uploads/NoSuchThing_Report.pdf" target="_blank" class="more">read report</a>
							<p>Ending child prostitution in language and law</p>
						</footer>
					</div>
				</article>
			</div>
		</div>
		
		<div class="joinus-box cf">
		  <div class="center-box">
			  <header>
				  <h3>join us. take action.</h3>
				</header>
				<p>Together, we can make it clear that there is No Such Thing as a child prostitute.</p>
			</div>
		</div>
	</section>
	
	<footer id="footer" class="cf">
	  <aside class="sidebar-footer cf">
		  <div class="center-box">
			  <?php echo $tweet; ?>
				
				<div class="widget-actnow-footer">
				  <h3>ACT NOW</h3>
					<div class="txt">
					  <p>Tell the media there’s no such thing as a child prostitute.</p>
						<a href="http://www.change.org/p/stop-using-the-term-child-prostitute/" class="more" target="_blank">sign the petition</a>
					</div>
				</div>
				
				<div class="widget-informed-footer">
				  <h3>stay informed</h3>
					<p>Get all the latest policy updates by signing up for our quarterly newsletter. </p>
					<form action="https://app.e2ma.net/app2/audience/signup/1740275/1723850.777765322/?v=a" method="post" id="signup" name="signup">
					  <input type="text" placeholder="Enter your email address here" class="txt" name="email" required autocomplete="off">
						<div class="submit fa fa-pencil"><input type="submit" value="subscribe"></div>
					</form>
				</div>
			</div>
		</aside>
		
		<div class="bottom-footer cf">
		  <div class="center-box">
			  <div class="left">
				  <div class="logo-footer"><a href="http://www.rights4girls.org/">rights4girls</a></div>
					<nav class="menu-footer cf">
					  <ul>
						  <li><a href="http://www.rights4girls.org/#!contact/c21dx/" target="_blank">contact</a></li>
							<li><a href="http://www.rights4girls.org/#!donate/c1nzt/" target="_blank">donate</a></li>
						</ul>
					</nav>
				</div>
				
				<div class="right">
				  <h3>stay connected</h3>
					<ul class="share-footer"> 
						<li><a href="http://www.facebook.com/rights4girls/" target="_blank" class="fa fa-facebook"><span>facebook</span></a></li>
						<li><a href="http://twitter.com/rights4girls/" target="_blank" class="fa fa-twitter"><span>tweet</span></a></li>
						<li><a href="http://www.rights4girls.org/#!contact/c21dx/" target="_blank" class="fa fa-envelope"><span>mail</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright-box cf">
		  <div class="center-box">
			  <div class="left">
				  <p>&copy;2014 rights4girls</p>
				</div>
				
				<div class="right">
				  <p><span>designed by</span> <a href="http://elefintdesigns.com/" target="_blank"><img src="images/logo_elefint.png" alt=" "></a></p>
				</div>
			</div>
		</div>
	</footer>
</div>
</body>
</html>
