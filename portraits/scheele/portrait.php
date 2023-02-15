<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />";


 
   $varlongname = htmlspecialchars($_GET["longname"]);
   if ($varlongname=="")
     $varlongname="portrait";
 

  $varnumber = htmlspecialchars($_GET["number"]);
  if ($varnumber=="")
    $varnumber="1";
 

  if ((int)($varnumber) < 10)
     $varnumber="0".$varnumber;
 
  
  $varshortname = htmlspecialchars($_GET["shortname"]);
  if ($varshortname=="")
    $varshortname="portrait";


  $varcaption = htmlspecialchars($_GET["caption"]);
  if ($varcaption=="")
    $varcaption="";
 




echo "<title>$varlongname, Portrait Collection, The Oesper Collections in the History of Chemistry, University of Cincinnati</title>";


  $varbreadname="portrait" . $varnumber;


echo "<script type=\"text/javascript\" src=\"/scripts/breadcrumbs.js\"></script>
<script type=\"text/javascript\" src=\"/scripts/loadstyles_oesper.js\"></script>
<script type=\"text/javascript\" src=\"/scripts/smallwindow.js\"></script>
<script type=\"text/javascript\" language=\"JavaScript\" src=\"/scripts/generateObject.js\"></script>
<!-- HTML5 scripts and styles-->
<script type=\"text/javascript\" src=\"/zoomify/html5/ZoomifyImageViewer.js\"></script>
<style type=\"text/css\"> #myContainer { width:750px; height:450px; margin:auto; border:1px; border-style:solid; border-color:#696969;}</style>
<script type=\"text/javascript\"> Z.showImage(\"myContainer\",\"" . $varshortname .  $varnumber . "\", \"zSkinPath=/zoomify/html5/Assets/Skins/Light\"); </script>
</head>

<body class=\"t4\">";

//<!-- this begins the web page as displayed-->

//<!-- #include file=../../../includes/header_oesper.inc -->
include("../../../includes/header_oesper.inc");

echo "<div class=\"pghead\">Digital Projects, The Oesper Collections in the History of Chemistry, Portrait Collection, $varlongname</div>";

//<!-- #include file=../../../includes/subnav_oesper_noBreadcrumbs.inc -->
include("../../../includes/subnav_oesper_noBreadcrumbs.inc");
//<!-- #include file=../../../includes/tabs_oesper.inc -->
include("../../../includes/tabs_oesper.inc");

   
echo "<a name=\"con\" id=\"con\"></a>
<div style=\"width: 780px; margin: 0px auto 0px auto;\" align=\"center\">

<h2>
The Oesper Collections in the History of Chemistry, Portrait Collection, University of Cincinnati
<br/>$varlongname
</h2>

<!--HTML5 container-->
<div id=\"myContainer\">

</div>

<div align=\"center\">
   <br/><a href=\"/zoomify/index.html\" onclick=\"smallwindow('$varshortname$varnumber',this.href,'zoomify_help','410','450',1600,100);return false;\"><b>Help</b></a>
</div>
<p>$varcaption</p>

<p>
<a href=\"index.html\"><img src=\"/images/arrowleft.gif\" align=\"top\" vspace=\"0\" hspace=\"2\" width=\"20\" height=\"18\" alt=\"back\" title=\"back\" border=\"0\"/></a><a href=\"index.html\"><b>Back</b></a>
</p>

</div>";

//<!-- #include file=../../../includes/footer_oesper.inc -->
include("../../../includes/footer_oesper.inc");

    
echo "</body>
</html>";

?>