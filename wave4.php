<?php
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
$pos = strrpos($img_name , ".flv");
$pos2 = strrpos($img_name , ".mp4");
$pos3 = strrpos($img_name , ".MP4");
$pos4 = strrpos($img_name , ".mov");
$pos5 = strrpos($img_name , ".MOV");
$pos6 = strrpos($img_name , ".3gp");
$pos7 = strrpos($img_name , ".jpg");
$pos8 = strrpos($img_name , ".png");

if($pos !=FALSE){
	$fm = $user . ".flv";
	rename($img_name , $fm);
}

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

header("Location: http://digital-dialogue.org/hakei/conv/hakei8.php?music=" . $fm . "&name=" . $name);
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
<html language="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK REL="SHORTCUT ICON" HREF="favicon.ico"> 
<title>take A picture! From FLV and MP4 and MOV Files</title>
 <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>

</head>
<body>


<div align = "center">
<a href="index.php"><img src = "./img/hakei.png" alt = "Hakei" width="350" height="100" border="0"></a><br /><img src = "./img/wave2.png" alt = "Hakei" width="350" height="100" border="0"><br />
<!--
<p><div class="fb-like" data-href="http://digital-dialogue.org/pic/index.php" data-send="true" data-width="450" data-show-faces="true"></div>
</p>
-->
<a href="wave1.php"><img src = "./img/wave1.png" alt = "Hakei" width="350" height="100" border="0"></a>
<img src = "./img/wave2.png" alt = "Hakei" width="350" height="100" border="0">
<a href="wave3.php"><img src = "./img/wave3.png" alt = "Hakei" width="350" height="100" border="0">
</a>
<p><strong>Please select mp3 file to upload!(Less than 100MB)</strong><br>
Is there any trouble in this site? Please send to me E-mail : <a href="mailto:info@digital-dialogue.org">info@digital-dialogue.org</a></p>
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

</div>

<hr>


</div>
</body>
</html>
