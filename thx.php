<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PlayRs Countdown to XMAS</title>

<link rel="stylesheet" type="text/css" href="styles.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery.flip.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,400,700' rel='stylesheet' type='text/css' />

<script type="text/javascript" src="script.js"></script>

</head>
<?php
/* Random color */
$ran_color = rand(1,2);
if ($ran_color == 1) 
{$profile_color = 'bg_mini.jpg';}
if ($ran_color == 2) 
{$profile_color = 'bg_darkrainbow_mini.jpg';}

?>
<body style="height:700px;width:720px;overflow:hidden;background:url(img/<?php echo $profile_color; ?>) no-repeat;">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=504484356230792";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="main">
<h1><img id="playrlogo_top" src="img/logo.png" width="60%"></h1>

	<div class="sponsorListHolder">

	<div class="prize_thumb">
	<img src="img/thx.png"> </div>
	<div class="priz_desc">
		<h3>
			Danke für's Mitmachen!</h3>
		<p>
		Wir haben deine Daten erhalten und melden uns bei dir sofern, du zu den glücklichen Gewinnern gehörst! 
		</p><br/>
			
    <div class="clear"></div>

</div>
   <div id="moreInfos"><img style="float:right" src="img/heart.png"> 
    <h3>Show some Love</h3><br/>
    <p>
    Show us some Love und LIKE oder SHARE unsere Page! Jeder LIKE ist wie ein Geschenk für uns: ALSO Like... Like like there is no tomorrow!
	<br/><br/> 
	Cheers, <br/>Danny, Goose, Berie & Phill
    	<div class="fb-like" data-href="https://www.facebook.com/playrAT" data-send="true" data-width="480" data-show-faces="true" data-font="lucida grande"></div>
		<br/>
		
	</p>
	   <div class="clear"></div>
	
    </div>
  <p class="note"><a style="color:#fff;" target="_blank" href="http://www.playr.at/impressum/">Impressum - Copyright 2012, PlayR</a></p>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27215286-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
