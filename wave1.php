<?php

function left($str,$n){
return mb_substr($str,0,$n,"UTF-8");
}

if($_POST["sw"] == 1){

if(isset($_FILES["img_path"]["name"])){
$img_name = $_FILES["img_path"]["name"];
}
if(isset($_FILES["img_path"]["size"])){
$img_size = $_FILES["img_path"]["size"];
}
$img_type = $_FILES["img_path"]["type"];
if(isset($_FILES["img_path"]["tmp_name"])){
$img_tmp = $_FILES["img_path"]["tmp_name"];
}
$img_err =$_FILES["img_path"]["error"];

$name = $img_name;

if($img_size <= 100000000){
$user = mt_rand(1000000 , 300000000);
$pos = strrpos($img_name , ".mp3");
/*
$pos2 = strrpos($img_name , ".mp4");
$pos3 = strrpos($img_name , ".MP4");
$pos4 = strrpos($img_name , ".mov");
$pos5 = strrpos($img_name , ".MOV");
$pos6 = strrpos($img_name , ".3gp");
$pos7 = strrpos($img_name , ".jpg");
$pos8 = strrpos($img_name , ".png");
*/
if($pos !=FALSE){
	$fm = $user . ".mp3";
	rename($img_name , $fm);
}
/*
if($pos2 !=FALSE){
	$fm = $user . ".mp4";
	rename($img_name , $fm);
}

if($pos3 !=FALSE){
	$fm = $user . ".MP4";
	rename($img_name , $fm);
}

if($pos4 !=FALSE){
	$fm = $user . ".mov";
	rename($img_name , $fm);
}

if($pos5 !=FALSE){
	$fm = $user . ".MOV";
	rename($img_name , $fm);
}

if($pos6 !=FALSE){
	$fm = $user . ".3gp";
	rename($img_name , $fm);
}


if($pos7 !=FALSE){
	$fm = $user . ".jpg";
	rename($img_name , $fm);
}

if($pos8 !=FALSE){
	$fm = $user . ".png";
	rename($img_name , $fm);
}
*/

//rename($img_name , "music.mp3");
//unlink("./conv/music.mp3");
//rename($img_name , "test.wav");
if(move_uploaded_file($img_tmp, "/var/www/html/hakei/conv/" . $fm)){
/*
if(((!$pos && !$pos2) && (!$pos7)) && ((!$pos3 && !$pos4) && ((!$pos5 && !$pos6)) && (!$pos8))){

$size_error1 = "Please select .flv,.mp4 or .mov file.";

} else {
$today = date("Ymd");
$i = mysql_connect('localhost' , 'root' , 'amrhtb');

if(!$i){
die("Can't connect DataBase" . mysql_error());
}
mysql_select_db("dialogue" ,$i);
$q = "INSERT INTO del ( file , day ) VALUES ( '" . $fm ."' , " . $today . " );";
$r = "INSERT INTO pic ( name , date ) VALUES ( '" . $fm ."' , " . $today . " );";

mysql_query($q);
mysql_query($r);
mysql_close($i);

if((($pos4 != FALSE) || ($pos5 != FALSE)) || ($pos6 != FALSE)){
header("Location: http://digital-dialogue.org/pic/conv/encode.php?movie=" . $fm);
//die("<a href='http://digital-dialogue.org/pic/conv/encode.php?movie=" . $fm ."'>Let's Start!</a>");
} else {
*/
unlink($img_tmp);

header("Location: http://hakei-player.org/conv/hakei6.php?music=" . $fm . "&name=" . $name);
/*
//header("Location: http://digital-dialogue.org/pic/conv/index.php?movie= . $fm);
//die("<a href='http://digital-dialogue.org/pic/conv/?movie=" . $fm . "'>Let's Start!</a>");
//header("Location: http://digital-dialogue.org/pic/conv/" . $fm);
}
$err = 'Error(size)';
}
$err = 'Error(Move)';
}
}else{

$size_error2 = "Please upload a file smaller than 100MB!";

*/
}
$err = 'Error Occurred'; 
}
}

?>
<html lang="en" class="translated-ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<LINK REL="SHORTCUT ICON" HREF="favicon.ico"> 
<title>Hakei Player (MP3 Player with Sound Wave)</title>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15214982-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></title>

<link href="css/style.css" type="text/css" rel="stylesheet">
<link href="css/custom.css" type="text/css" rel="stylesheet">


</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=438389422889474";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div align = "center">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td id="header"><a href="#"></a></h1></a>
        <table class="menu" align="right" border="0" cellspacing="15">
          <tbody>
            <tr>
<!--
              <td id="ctl00_tdBanner" class="home"><font><font>English</font></font></td>
              <td id="ctl00_tdMenuGuide" class="guide"><a href="./JP/index.php" ><font>日本語<font></font></font></a></td>
              
<td id="ctl00_tdMenuHelp" class="help"><a href="./login.php" ><font><font>Sign In</font></font></a></td>
              <td id="ctl00_tdMenuSupport" class="support"><a href="./create.php" ><font><font></font>Join Us</font></a></td>
-->
<td id="ctl00_tdBanner" class="home"><a href="./index.php"><font><font>Top Page</font></font></a></td>
              <!--
              <td id="ctl00_tdMenuGuide" class="guide"><a href="./logout.php" ><font><font>Sign Out<font></font></font></a></td>
              -->
            </tr>
          </tbody>
        </table>
        <!-- end #header -->
      </td>
    </tr>   
<tr>
      <td valign="top"><table width="100%" height="100%" class="bordertb">          
<tbody>
            <tr>
              <td valign="top" style="padding: 20px;">

<!--
<div id="mainContent" style="width: auto;">


                  <div id="mainContentInner">
-->
                  
<a href="index.php"><img src = "./img/hakei.png" alt = "Hakei" width="350" height="100" border="0"></a><br /><img src = "./img/wave1.png" alt = "Hakei" width="350" height="100" border="0"><br />
<!--
<p><div class="fb-like" data-href="http://digital-dialogue.org/pic/index.php" data-send="true" data-width="450" data-show-faces="true"></div>
</p>
-->
<img src = "./img/wave1.png" alt = "Hakei" width="350" height="100" border="0">
<a href="wave2.php"><img src = "./img/wave2.png" alt = "Hakei" width="350" height="100" border="0"></a>
<a href="wave3.php"><img src = "./img/wave3.png" alt = "Hakei" width="350" height="100" border="0"></a>

<p><strong>Please select mp3 file to upload!(Less than 100MB)</strong><br>
Is there any trouble in this site? Please send to me E-mail : <a href="mailto:support@digital-dialogue.us">support@digital-dialogue.us</a></p>
<form name="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" 
ENCTYPE="MULTIPART/FORM-DATA">
<input type = "hidden" name="sw" value="1">
<input type="hidden" name="MAX_FILE_SIZE" value=150000000">
<input name="img_path" type="file" size="40">
<input name="up" type="submit" value="upload">
<p><font color="#FF0000"><strong><?php if(!empty($error)) echo $error; ?><?php if(!empty($size_error1)) echo $size_error1; ?><?php if(!empty($size_error2)) echo $size_error2 ?><?php if(!empty($img_err)) echo $img_err; if(!empty($img_name)) echo $img_name; echo $err;?></font></strong>
</p></form>
<div align="center">

</div>

<div align = "center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Digital Dialogue -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9003385815295706"
     data-ad-slot="7792528073"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<iframe src="http://rcm.amazon.com/e/cm?t=takeapict-20&o=1&p=48&l=ur1&category=amazonvideoondemand&banner=0NV7S8PAP1Y8DYFGJC82&f=ifr" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
</div>
<div align = "center">
<a href="http://click.linksynergy.com/fs-bin/click?id=j5E941Lb4KU&offerid=7097.10000071&subid=0&type=4"><IMG border="0"   alt="LinkShare_468x60v1" src="http://ad.linksynergy.com/fs-bin/show?id=j5E941Lb4KU&bids=7097.10000071&subid=0&type=4&gridnum=1"></a>
</div>
<div align = "center">
<script type="text/javascript" src="http://www.assoc-amazon.com/s/link-enhancer?tag=takeapict-20&o=1">
</script>
<noscript>
    <img src="http://www.assoc-amazon.com/s/noscript?tag=takeapict-20" alt="" />
</noscript>

</div>

<hr>
                



<!--                  
			</div>
                  <!-- end #mainContentInner -->
<!--
                </div>
-->
                <!-- end #mainContent -->
                <hr>
</div>            
</td>
            </tr>       
</tbody>
        </td>
    </tr>

    <tr>
      <td style="height: 25px;" valign="top"><div id="footer">
          <hr>
          <address>
          <font><font> </font></font><a href="#"><font>Digital Dialogue<font></font></font></a><font><font> Inc. All Rights reserved.</font></font>
          </address>
        </div>
        <!-- end #footer -->
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>