<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
    <!-- 
    Smart developers always View Source. 
    
    This application was built using Adobe Flex, an open source framework
    for building rich Internet applications that get delivered via the
    Flash Player or to desktops via Adobe AIR. 
    
    Learn more about Flex at http://flex.org 
    // -->
    <head>
        <title>Hakei Player (MP3 Player with Sound Wave)</title>
        <meta name="google" value="notranslate" />         
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Include CSS to eliminate any default margins/padding and set the height of the html element and 
             the body element to 100%, because Firefox, or any Gecko based browser, interprets percentage as 
             the percentage of the height of its parent container, which has to be set explicitly.  Fix for
             Firefox 3.6 focus border issues.  Initially, don't display flashContent div so it won't show 
             if JavaScript disabled.
        -->
        <style type="text/css" media="screen"> 
            html, body  { height:100%; }
            body { margin:0; padding:0; overflow:auto; text-align:center; 
                   background-color: #ffffff; }   
            object:focus { outline:none; }
            #flashContent { display:none; }
        </style>
        
        <!-- Enable Browser History by replacing useBrowserHistory tokens with two hyphens -->
        <!-- BEGIN Browser History required section -->
        <link rel="stylesheet" type="text/css" href="history/history.css" />
        <script type="text/javascript" src="history/history.js"></script>
        <!-- END Browser History required section -->  
            
        <script type="text/javascript" src="swfobject.js"></script>
        <script type="text/javascript">
            // For version detection, set to min. required Flash Player version, or 0 (or 0.0.0), for no version detection. 
            var swfVersionStr = "11.4.0";
            // To use express install, set to playerProductInstall.swf, otherwise the empty string. 
            var xiSwfUrlStr = "playerProductInstall.swf";
            var flashvars = {};
            var params = {};
            params.quality = "high";
            params.bgcolor = "#ffffff";
            params.allowscriptaccess = "sameDomain";
            params.allowfullscreen = "true";
            var attributes = {};
            attributes.id = "hakei6";
            attributes.name = "hakei6";
            attributes.align = "middle";
            swfobject.embedSWF(
                "hakei6.swf", "flashContent", 
                "100%", "100%", 
                swfVersionStr, xiSwfUrlStr, 
                flashvars, params, attributes);
            // JavaScript enabled so display the flashContent div in case it is not replaced with a swf object.
            swfobject.createCSS("#flashContent", "display:block;text-align:left;");
        </script>
    </head>
    <body>
<div align="center">
<a href="../index.php"><img src = "../img/hakei.png" alt = "Hakei" width="350" height="100" border="0"></a>
</div>
        <!-- SWFObject's dynamic embed method replaces this alternative HTML content with Flash content when enough 
             JavaScript and Flash plug-in support is available. The div is initially hidden so that it doesn't show
             when JavaScript is disabled.
        -->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="550" height="400" id="hakei6" align="middle">

<param name="movie" value="hakei6.swf" />

<param name=FlashVars value="music=<?php echo $_GET['music']; ?>" />

<!--[if !IE]>-->

<object type="application/x-shockwave-flash" data="hakei6.swf" width="550" height="400">

<param name="movie" value="hakei6.swf" />

<param name=FlashVars value="music=<?php echo $_GET['music']; ?>" />

<!--<![endif]-->

<a href="http://www.adobe.com/go/getflash">

<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />

</a>

<!--[if !IE]>-->

</object>

<!--<![endif]-->

</object>

<!--
        <embed src="hakei4.swf" 

    quality="high" 

    bgcolor="#ffffff" 

    width="550" 

    height="400" 

    name="hakei4" 

    FlashVars="music=<?php echo $_GET['music']; ?>"

    align="middle" 

    allowScriptAccess="sameDomain" 

    allowFullScreen="false" 

    type="application/x-shockwave-flash" 

    pluginspage="http://www.adobe.com/go/getflash" 

/>
-->  
<center>
<p><b><?php echo $_GET['name']; ?></b></p> 
  
   </body>
</html>
