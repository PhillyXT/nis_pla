<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>1000 PlayR 1000minuten</title>

<link rel="stylesheet" type="text/css" href="styles.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<link href='http://fonts.googleapis.com/css?family=Roboto:100,400,700' rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.1.3"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

<link rel="stylesheet" href="fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<!--counter -->
<script type="text/javascript" src="scripts/jquery.countdown.js"></script>
<script type="text/javascript">
$(function () {
	var austDay = new Date(Date.UTC('2013','04','10','14','50','30'));
	//alert(austDay);
	//austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);

	$('#defaultCountdown').countdown({until: austDay, format: 'M'});
});
</script>


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
		<h2></h2>
		<div id="prizeview">
			<h2><div class="circle">
					<div id="defaultCountdown"></div><p style="margin-left:37px">minuten to Go</p></div></h2>
		</div>
		<div id="intro">
			<h2> Motocross Madness für XBOX 360</h2>
			<p> 
				Kaum zu glauben. Ein bisschen mehr als über ein Jahr sind wir nun für euch Online und 

			</p>
			</div>
	</div>
	<div id="part_2" class="mitte">
		<h1>Was gibt's diesmal zu gewinnen?</h1><br/>
		<div id="prizeview">
			<iframe width="330" height="186" src="http://www.youtube.com/embed/xEe1kp47V44" frameborder="0" allowfullscreen></iframe>
		</div>
		<div id="prize_desc">
			<h2> Motocross Madness für XBOX 360</h2>
			<p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem </p>
		</div>
	</div>
	<div id="part_3" class="mitte">
		<h2 style="font-weight:600; font-size:30px">Die uhr tickt - Jetzt mitmachen</h2>
		<div id="forminput">
				<form action="<?php echo $PHP_SELF ?>" method="POST" id="ss-form" >
 				<input class="c_input txt_input" type="text" name="entry_name" value="Name" onBlur="if(this.value=='') this.value='Name';" onFocus="if(this.value=='Name') this.value='';" class="ss-q-short" id="entry_2" > <br/>
 				<input class="c_input txt_input" type="text" name="entry_mail" value="E-Mail Adresse" onBlur="if(this.value=='') this.value='E-Mail Adresse';" onFocus="if(this.value=='E-Mail Adresse') this.value='';"  class="ss-q-short" id="entry_4">
		<br/>
		<input id="letsgo_button" type="submit" name="submit" value="">
		</form>
		</div>
	</div>

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
