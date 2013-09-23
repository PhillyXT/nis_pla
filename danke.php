<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jetzt mit PlayR eine PlayStation 3 und einmal Gran Turismo 6 gewinnen!</title>

<!-- Facebook Open Graph Meta Tags -->
<meta property="og:title" content="Jetzt mit PlayR eine PlayStation 3 und einmal Gran Turismo 6 gewinnen!" />
<meta property="og:type" content="website" />
<meta property="og:url" content="local" />
<meta property="og:image" content="http://placehold.it/810x250" />
<meta property="og:site_name" content="" />
<meta property="og:fb:admins" content="" />
<meta property="og:description" content="Jetzt mit PlayR und Nissan eine PlayStation 3 und einmal Gran Turismo 6 gewinnen! " />

<link rel="stylesheet" type="text/css" href="styles.css" />

<link href='http://fonts.googleapis.com/css?family=Roboto:100,400,700' rel='stylesheet' type='text/css' />
 <style>
    /* Prevents slides from flashing */
    #slides {
      display:none;
    }
    .slidesjs-navigation, .slidesjs-pagination {display:none;}
  </style>
</head>

<?php
//FORM CONFIG

if (isset($_POST['submit'])) {
//declare in the order variable
$tname = $_POST['entry_name'];
$tmail = $_POST['entry_mail'];
$ttime = date("d.m.Y");
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("mysqlsvr30.world4you.com","playrat","B0@ooKe");//database connection
mysql_select_db("playratdb2");

//inserting data order
mysql_query("INSERT INTO xmas2k12 (timestamp,fullplayrname,playrmail, preis) VALUES ('$ttime','$tname','$tmail', '1K')");
	// form is submmitted
	header('location: http://www.playr.at/xmas2012/thx.php');
}
?>
<?php
/* Random color */
$ran_color = rand(1,3);
if ($ran_color == 1) 
{$profile_color = 'bg_mini.jpg';}
if ($ran_color == 2) 
{$profile_color = 'bg_blue_mini.jpg';}
if ($ran_color == 3) 
{$profile_color = 'bg_darkrainbow_mini.jpg';}

?>
<body style="height:900px;background:url(img/<?php echo $profile_color; ?>) no-repeat;">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=504484356230792";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox()
		
	});
	function onLoaded()
	{
		$('.sponsor').fadeIn(fadeSpeed);
	}
</script>

<div id="main">
	<div id="top_bar" class="mitte">
		<img src="img/logo.jpg">

	</div>
	<div id="part_1" class="mitte">
		<div id="prizeview">
						<img src="img/herz.png"></div>
		<div id="intro">
			<h2> Danke für's mitmachen</h2><br/>
			<p>Falls dich der Zufallsgenerator als glücklichen Gewinner dieser Runde gezogen hat, melden wir uns bei dir. Teile das Gewinnspiel um deine Gewinnchancen zu erhöhen!<br/>Cheers!</p>

			</div>
	</div>
	<div id="part_2b" class="mitte">
		<!--<h1>Was gibt's diesmal zu gewinnen?</h1><br/>-->
		<div id="prizeview">
			<img src="img/like.png">
		</div>
		<div id="prize_desc">
			<h2> Sharing is Caring</h2>
<a style="font-family:Roboto, Arial, sans-serif; color:#000;"href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;">
  Jetzt mit meinen Freunden teilen und Chancen erhöhen!
</a>
<iframe src="//www.facebook.com/plugins/facepile.php?app_id&amp;href=http%3A%2F%2Ffacebook.com%2Fplayrat&amp;action=Comma+separated+list+of+action+of+action+types&amp;width=350&amp;max_rows=2&amp;colorscheme=light&amp;size=large&amp;show_count=true&amp;appId=195895840589804" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px;" allowTransparency="true"></iframe>
</div>
	</div>
<!--	<div id="part_3">
<div id="slides">
    <img src="http://placehold.it/810x250">
    <img src="http://placehold.it/810x250">
    <img src="http://placehold.it/810x250">
    <img src="http://placehold.it/810x250">
    <img src="http://placehold.it/810x250">
  </div>
	</div>-->
		
	</div>

</div>

<p class="note"><a style="color:#fff;" target="_blank" href="http://www.playr.at/impressum/">Impressum - Copyright 2012, PlayR</a></p>
<!-- SlidesJS Required: Link to jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 820,
        height: 260,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: false,
          pauseOnHover: false,
          restartDelay: 1000
        }
      });
    });
  </script>
  <!-- End SlidesJS Required -->
</body>
</html>
