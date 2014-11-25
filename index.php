<?php
// ==============================================================
// REQUIRE
// ==============================================================
require_once 'twitteroauth/twitteroauth.php';

$twitter = new TwitterOAuth(	
	'aMY4Zsnn2KYi5TZkTCr9NlMuF',
	'vxkz9T7QQWUmqnJbkf7Eg8aHvFOCdcSMVMZrfbUPdNbw7nuYx9',
	'2717095358-aRUmevpNvioRb52xkFYls0Q7ldf9cIo2PjJzsqG',
	'woklRm4IAnMK5dEkXCAlSboirK4qlUmYcYNkRVddPIbl4'
);

$query  = sprintf('https://api.twitter.com/1.1/statuses/user_timeline.json?count=%s&screen_name=%s', 1, urlencode('rights4girls'));
$tweets = $twitter->get($query);
echo '<pre>';
var_dump($tweets);
echo '</pre>';
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
		
		<article class="content-area2 cf">
		  <div class="center-box">
			  <figure><img src="images/uploads/img_02.jpg" alt=" "></figure>
				<div class="txt">
				  <header>
				    <h2>It is time to eradicate the term "child prostitute."</h2>
					</header>
					<p>There are only victims and survivors of child rape.</p>
					<footer>
					  <a href="http://www.change.org/p/stop-using-the-term-child-prostitute/" target="_blank" class="more">SIGN PETITION</a>
						<p>Tell the media there’s no such thing as a child prostitute.</p>
					</footer>
				</div>
			</div>
		</article>
		
		<div id="learnmore" class="content-bg-box cf">
		  <div class="center-box">
			  <article class="content-area3 right cf">
				  <figure>
					  <img src="images/uploads/img_03.jpg" alt=" ">
					  <figcaption>modern day slavery<br>is alive and real.</figcaption>
					</figure>
					
					<div class="txt">
						<p>Girls are abducted or lured by pimps and traffickers at bus shelters, outside schools or through social media. Many of them are beaten into submission and sometimes even branded and publicly shamed with their pimp’s name.</p>
						<footer>
							<a href="uploads/NoSuchThing_Report.pdf" target="_blank" class="more">see fact sheet</a>
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
							<a href="uploads/child welfare and child trafficking.pdf" target="_blank" class="more">read report</a>
							<p>Learn about the media and modern day slavery.</p>
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
			  <div class="widget-tweet-footer">
				  <h3>follow us</h3>
					<div class="post cf">
					  <h2><a href="#">@rights4girls</a></h2>
						<p>Shop with @AmazonSmile, and Amazon will make a donation to Rights4Girls. <a href="#">http://smile.amazon.com/94-33865</a></p>
						<ul class="cf">
						  <li><a href="#" class="fa fa-share"><span>share</span></a></li>
							<li><a href="#" class="fa fa-retweet"><span>retweet</span></a></li>
							<li><a href="#" class="fa fa-star"><span>star</span></a></li>
						</ul>
					</div>
					<a href="https://twitter.com/Rights4Girls" class="twitter-follow-button" data-show-count="false">Follow @Rights4Girls</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
				
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
					<form>
					  <input type="text" value="Enter your email address here" class="txt">
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
