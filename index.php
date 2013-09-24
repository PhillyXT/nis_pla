<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>1000 PlayR 1000minuten</title>
<meta property="og:title" content="Jetzt mit PlayR eine PlayStation 3 und einmal Gran Turismo 6 gewinnen!" />
<meta property="og:type" content="website" />
<meta property="og:url" content="local" />
<meta property="og:image" content="http://www.playr.at/nis_plyr/og_image.jpg" />
<meta property="og:site_name" content="" />
<meta property="og:fb:admins" content="" />
<meta property="og:description" content="Jetzt mit PlayR und Nissan eine PlayStation 3 und einmal Gran Turismo 6 gewinnen! " />
<link rel="stylesheet" type="text/css" href="styles.css" />

  <!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="jquery.slides.min.js"></script>-->
<link href='http://fonts.googleapis.com/css?family=Roboto:100,400,700' rel='stylesheet' type='text/css' />

 
<!-- Optionally add helpers - button, thumbnail and/or media -->

<!--counter -->
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
mysql_query("INSERT INTO xmas2k12 (timestamp,fullplayrname,playrmail, preis) VALUES ('$ttime','$tname','$tmail', 'nissan')");
	// form is submmitted
	header('location: danke.php');
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
<body style="background:url(img/<?php echo $profile_color; ?>) no-repeat;">


<div id="main">
	<div id="top_bar" class="mitte">
		<img src="img/logo.jpg">

	</div>
	<div id="part_1">
<div id="slides">
    <img src="images/0.jpg">
    <img src="images/1.jpg">
    <img src="images/2.jpg">
    <img src="images/3.jpg">
    <img src="images/4.jpg">
    <img src="images/6.jpg">
    <img src="images/7.jpg">
    <img src="images/8.jpg">
  </div>
	</div>
	<div id="part_2" class="mitte">
		<!--<h1>Was gibt's diesmal zu gewinnen?</h1><br/>-->
		<div id="prizeview">
			<iframe width="405" height="230" src="http://www.youtube.com/embed/h53Ijht10Q0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div id="prize_desc">
			<h2> Jetzt <strong>PlayStation 3</strong> und <strong>Gran Turismo 6</strong> gewinnen!</h2>
			<p> Nissan und PlayR verlosen exklusiv ein Exemplar GT6 und eine PS3! Einfach Formular ausfüllen und Daumen drücken!<br/><br/>
				Ein fetten Dank an <a href="https://www.facebook.com/NissanOesterreich" target="_blank" style="color:#fff"> Nissan Österreich </a> für den Support!</p>
		</div>
	</div>
	<div id="part_3" class="mitte ">
		<div id="prizeview" class="">
			<div class=""> <img src="img/brief.png"></div>
			
		</div>
		<div id="prize_desc">
			<h2 style="font-size:30px">Jetzt mitmachen</h2>
		<div id="forminput">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" id="ss-form" >
 				<input class="c_input txt_input" type="text" name="entry_name" value="Name" onBlur="if(this.value=='') this.value='Name';" onFocus="if(this.value=='Name') this.value='';" class="ss-q-short" id="entry_2" > <br/>
 				<input class="c_input txt_input" type="text" name="entry_mail" value="E-Mail Adresse" onBlur="if(this.value=='') this.value='E-Mail Adresse';" onFocus="if(this.value=='E-Mail Adresse') this.value='';"  class="ss-q-short" id="entry_4">
		<br/><br/>
		<input id="letsgo_button" type="submit" name="submit" value="">
		</form>
		</div>		
		</div>
	</div>
		
	</div>

</div>

<p class="note"><a style="color:#fff;" target="_blank" href="http://www.playr.at/impressum/">Impressum - Copyright 2013, PlayR</a></p>
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
        width: 810,
        height: 300,
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
</body>
</html>
