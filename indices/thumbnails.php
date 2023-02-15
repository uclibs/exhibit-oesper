<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">";

echo "<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />

<title>Index to Thumbnails &mdash; Apparatus Museum, The Oesper Collections in the History of Chemistry, University of Cincinnati</title>
<meta name=\"Keywords\" content=\"University Libraries, University of Cincinnati, ARL Research Library, Cincinnati, University of Cincinnati Libraries, Digital Projects, Oesper Collections;\" />";

//<!--<%
//  varbreadname="Index to Thumbnails"
//%>-->



$varbreadname="Index to Thumbnails";


echo "<script type=\"text/javascript\" src=\"/scripts/breadcrumbs.js\"></script>";
echo "<script type=\"text/javascript\" src=\"/scripts/loadstyles_oesper.js\"></script>";
echo "<script type=\"text/javascript\" src=\"/scripts/smallwindow.js\"></script>";


echo "</head>

<body class=\"t6\" id=\"indices\">";



$varorder = htmlspecialchars($_GET["order"]);
$varpagenum = htmlspecialchars($_GET["page"]);
$varall = htmlspecialchars($_GET["view"]);

if($varorder != "name" && $varorder != "case" && $varorder != "number")
	$varorder = "number";


   //if ($varpagenum == "" or $varpagenum == null)
   if($varpagenum <1 || $varpagenum >10)
     $varpagenum = 1;
  
  
   if ($varall == "all") 
     $varall = "true";
   else
     $varall = "false";
//echo "varall is ".$varall;
   if ($varall == "true")
     $varpagenum = "true";

//<!-- this begins the web page as displayed-->

//<!--#include virtual=\"/includes/header_oesper.inc\" -->
include("../../includes/header_oesper.inc");

echo "<div class=\"pghead\">Digital Projects, The Oesper Collections in the History of Chemistry, Apparatus Museum, Index to Thumbnails</div>";

//<!-- #include file=../../includes/subnav_oesper.inc -->
//<!--begin subnavigation line-->

 echo "<div id=\"subnav\">
 <script type=\"text/javascript\">
		breadCrumbs(\"digital.libraries.uc.edu\",\">\",\"index.html\",\"crumbtext\",\"crumbtext\",\"crumbtext\",\"0\", \"Index to Thumbnails\");
	</script>

 <div id=\"subnavb\">   <a href=\"http://www.libraries.uc.edu\">Libraries Home</a> | <a href=\"http://www.libraries.uc.edu/libraries/chem-bio/\">Chemistry-Biology Library</a> | <a href=\"http://www.artsci.uc.edu/chemistry/\" target=\"_blank\">Department of Chemistry</a>
</div>
</div>";

//<!-- end header -->
echo "</div>
<div id=\"main1\" align=\"center\" style=\"width: 960px;\">";

//<!--#include virtual=\"/includes/tabs_oesper.inc\" -->
include("../../includes/tabs_oesper.inc");

echo "<a name=\"con\" id=\"con\"></a>
<div class=\"tabpagecontent\" align=\"center\">

<h2>The Oesper Collections in the History of Chemistry, University of Cincinnati<br/>Index to Thumbnails<br/>";
//<!-- <br/>[Click on a thumbnail image to view apparatus.] -->";


switch ($varorder)
{
	case "number":
	echo "<br/>Sort by Number*&nbsp;&nbsp;&nbsp;Sort by <a href=\"thumbnails.php?order=name\">Name</a>&nbsp;&nbsp;&nbsp;Sort by <a href=\"thumbnails.php?order=case\">Case</a>";
	break;
	
	case "name":
	echo "<br/>Sort by <a href=\"thumbnails.php?order=number\">Number</a>&nbsp;&nbsp;&nbsp;Sort by Name*&nbsp;&nbsp;&nbsp;Sort by <a href=\"thumbnails.php?order=case\">Case</a>";
	break;

	case "case":
	echo "<br/>Sort by <a href=\"thumbnails.php?order=number\">Number</a>&nbsp;&nbsp;&nbsp;Sort by <a href=\"thumbnails.php?order=name\">Name</a>&nbsp;&nbsp;&nbsp;Sort by Case*";
	break;
	
	default:
	echo "none";
	
}


echo "</h2>";
echo "\n <div style=\"width: 740px; margin: 20px auto 20px auto; text-align: left;\">";



$inttotalpages = 10;

function pagestart($varpagenum,$varorder)
{
	global $varorder;
	echo "<center><h2>";
	$intpagecount = 1;
	for($intpagecount = 1; $intpagecount <= 10; $intpagecount+=1)
	{	
		if($intpagecount == $varpagenum)
			echo "Page ".$intpagecount."*";
		else
			echo "<a href=\"thumbnails.php?order=$varorder&page=$intpagecount\">Page $intpagecount</a>"; 
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}
	echo "<a href=\"thumbnails.php?order=$varorder&view=all\">View All</a>";
 	echo "</h2></center>
 	<table cellspacing=\"4\" cellpadding=\"4\" align=\"center\">
 	<tr>";
}



function pageend ($varpagenum,$varorder)
{

	$varprevpage = $varpagenum - 1;
	$varpagenext = $varpagenum + 1;
	//global $varorder;
	echo "</table>";
	if($varpagenum != 1)
		echo "<h2 id=\"pagenav\">&lt;&lt;&nbsp;<a href=\"thumbnails.php?order=$varorder&page=$varprevpage\">PREVIOUS PAGE</a>				&nbsp;&nbsp;&nbsp;&nbsp;";
	if ($varpagenext <= 10) 
  	echo "<a href=\"thumbnails.php?order=$varorder&page=$varpagenext\">NEXT PAGE</a>&nbsp;&gt;&gt;</h2>";
}




if ($varorder == "number")

{
	
	function subpage1()
	{
		global $varorder;
		global $varall;
		global $varpagenum;
		if ($varall=="false")
  			pagestart($varpagenum,$varorder);
		else
		
			echo "<center><h2><a href=\"thumbnails.php?order=$varorder\">View by Page</a>
				</h2></center><table cellspacing=\"4\" cellpadding=\"4\" align=\"center\">
				<tr>";
				
		
/*echo "<script type=\"text/javascript\" src=\"/scripts/loadstyles_oesper.js\"></script>";*/
echo "<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0001-A0002/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0001-A0002/views/A0001-A0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"80\" alt=\"Charcoal muffle furnace and large spare furnace muffle\" title=\"Charcoal muffle furnace and large spare furnace muffle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0001-A0002/index.php\">A0001-A0002</a> Charcoal muffle furnace and large spare furnace muffle
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0003-A0005/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0003-A0005/views/A0003-A0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"99\" alt=\"Large fire-clay crucible, large cast-iron crucible, cast-iron ladle\" title=\"Large fire-clay crucible, large cast-iron crucible, cast-iron ladle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0003-A0005/index.php\">A0003-A0005</a>, Large fire-clay crucible, large cast-iron crucible, cast-iron ladle
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0006-A0008/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0006-A0008/views/A0006-A0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Three medium fire-clay crucibles\" title=\"Three medium fire-clay crucibles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0006-A0008/index.php\">A0006-A0008</a>, Three medium fire-clay crucibles
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0009/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0009/views/A0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Nest of four earthenware scorification dishes\" title=\"Nest of four earthenware scorification dishes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0009/index.php\">A0009</a>, Nest of four earthenware scorification dishes
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A00010/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A00010/views/A00010_view1_thumb_smaller.jpg\" width=\"100\" height=\"77\" alt=\"Nest of four Hessian sand crucibles\" title=\"Nest of four Hessian sand crucibles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A00010/index.php\">A00010</a>, Nest of four Hessian sand crucibles
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

</tr>


<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A00011/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A00011/views/A00011_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Electric cupel furnace\" title=\"Electric cupel furnace\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A00011/index.php\">A00011</a>, Electric cupel furnace
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A00012/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A00012/views/A00012_view1_thumb_smaller.jpg\" width=\"100\" height=\"74\" alt=\"Fused silica crucible with lid\" title=\"Fused silica crucible with lid\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A00012/index.php\">A00012</a>, Fused silica crucible with lid
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_01/B0001/index.php\"><img src=\"/oesper/museum/case01/shelf_01/B0001/views/B0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"64\" alt=\"Single-pan steelyard\" title=\"Single-pan steelyard\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_01/B0001/index.php\">B0001</a>, Single-pan steelyard
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_01/B0002/index.php\"><img src=\"/oesper/museum/case01/shelf_01/B0002/views/B0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Hand-held coin balance, brass coin weights, and wooden box\" title=\"Hand-held coin balance, brass coin weights, and wooden box\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_01/B0002/index.php\">B0002</a>, Hand-held coin balance, brass coin weights, and wooden box
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_02/B0003/index.php\"><img src=\"/oesper/museum/case01/shelf_02/B0003/views/B0003_view1_thumb_smaller.jpg\" width=\"91\" height=\"100\" alt=\"Brass balance with lever release\" title=\"Brass balance with lever release\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_02/B0003/index.php\">B0003</a>, Brass balance with lever release
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_02/B0004/index.php\"><img src=\"/oesper/museum/case01/shelf_02/B0004/views/B0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"69\" alt=\"Set of six nested brass cup weights\" title=\"Set of six nested brass cup weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_02/B0004/index.php\">B0004</a>, Set of six nested brass cup weights
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_02/B0005/index.php\"><img src=\"/oesper/museum/case01/shelf_02/B0005/views/B0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"96\" alt=\"Army prescription balance with weights in drachms and grains\" title=\"Army prescription balance with weights in drachms and grains\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_02/B0005/index.php\">B0005</a>, Army prescription balance with weights in drachms and grains
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_01/B0006/index.php\"><img src=\"/oesper/museum/case02/shelf_01/B0006/B0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"73\" alt=\"Double-pan platform balance with wooden weight rack\" title=\"Double-pan platform balance with wooden weight rack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_01/B0006/index.php\">B0006</a>, Double-pan platform balance with wooden weight rack
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_01/B0007/index.php\"><img src=\"/oesper/museum/case02/shelf_01/B0007/B0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"68\" alt=\"Double-pan platform balance (Harvard Trip Balance)\" title=\"Double-pan platform balance (Harvard Trip Balance)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_01/B0007/index.php\">B0007</a>, Double-pan platform balance (Harvard Trip Balance)
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_01/B0008/index.php\"><img src=\"/oesper/museum/case02/shelf_01/B0008/B0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"74\" alt=\"Double-pan platform box balance\" title=\"Double-pan platform box balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_01/B0008/index.php\">B0008</a>, Double-pan platform box balance
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_02/B0009/index.php\"><img src=\"/oesper/museum/case02/shelf_02/B0009/B0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"69\" alt=\"Long-beam analytical balance, with ivory case knobs\" title=\"Long-beam analytical balance, with ivory case knobs\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_02/B0009/index.php\">B0009</a>, Long-beam analytical balance, with ivory case knobs
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_03/B0010/index.php\"><img src=\"/oesper/museum/case02/shelf_03/B0010/B0010_view1_thumb_smaller.jpg\" width=\"98\" height=\"100\" alt=\"Bunge short-beam balance with calibrated aluminum beam\" title=\"Bunge short-beam balance with calibrated aluminum beam\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_03/B0010/index.php\">B0010</a>, Bunge short-beam balance with calibrated aluminum beam
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_03/B0011/index.php\"><img src=\"/oesper/museum/case02/shelf_03/B0011/B0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"78\" alt=\"Set of platinum-plated analytical weights\" title=\"Set of platinum-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_03/B0011/index.php\">B0011</a>, Set of platinum-plated analytical weights
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_03/B0012/index.php\"><img src=\"/oesper/museum/case02/shelf_03/B0012/B0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"86\" alt=\"Set of platinum-plated analytical weights\" title=\"Set of platinum-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_03/B0012/index.php\">B0012</a>, Set of platinum-plated analytical weights
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_01/B0013/index.php\"><img src=\"/oesper/museum/case03/shelf_01/B0013/views/B0013_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Single-pan platform balance with triple beam sliding scales\" title=\"Single-pan platform balance with triple beam sliding scales\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_01/B0013/index.php\">B0013</a>, Single-pan platform balance with triple beam sliding scales
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>

</tr>";


	if ($varall == "false")
  		pageend($varpagenum,$varorder);


}




function subpage2 ()
{

global $varall;
		global $varpagenum;
		global $varorder;
		
if ($varall == "false") 
	pagestart($varpagenum,$varorder);
 else
	echo "<tr style=\"page-break-before:always;\">";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_01/B0014/index.php\"><img src=\"/oesper/museum/case03/shelf_01/B0014/views/B0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Single-pan suspension balance with triple beam sliding scales\" title=\"Single-pan suspension balance with triple beam sliding scales\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_01/B0014/index.php\">B0014</a>, Single-pan suspension balance with triple beam sliding scales
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_01/B0015/index.php\"><img src=\"/oesper/museum/case03/shelf_01/B0015/views/B0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Boxed platform torsion balance with single slide scale\" title=\"Boxed platform torsion balance with single slide scale\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_01/B0015/index.php\">B0015</a>, Boxed platform torsion balance with single slide scale
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_02/B0016/index.php\"><img src=\"/oesper/museum/case03/shelf_02/B0016/views/B0016_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Chainomatic analytical balance with black glass base and weight drawer\" title=\"Chainomatic analytical balance with black glass base and weight drawer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_02/B0016/index.php\">B0016</a>, Chainomatic analytical balance with black glass base and weight drawer
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_03/B0017/index.php\"><img src=\"/oesper/museum/case03/shelf_03/B0017/views/B0017_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Bunge short-beam balance\" title=\"Bunge short-beam balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_03/B0017/index.php\">B0017</a>, Bunge short-beam balance
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_03/B0018/index.php\"><img src=\"/oesper/museum/case03/shelf_03/B0018/B0018_view1_thumb_smaller.jpg\" width=\"94\" height=\"100\" alt=\"Set of nickel-plated analytical weights\" title=\"Set of nickel-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_03/B0018/index.php\">B0018</a>, Set of nickel-plated analytical weights
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_03/B0019/index.php\"><img src=\"/oesper/museum/case03/shelf_03/B0019/B0019_view1_thumb_smaller.jpg\" width=\"100\" height=\"89\" alt=\"Set of gold-plated analytical weights\" title=\"Set of gold-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_03/B0019/index.php\">B0019</a>, Set of gold-plated analytical weights
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_02/BP0001/index.php\"><img src=\"/oesper/museum/case19/shelf_02/BP0001/views/BP0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Burner with adaptor and plate for blowpipe analysis and assorted accessories\" title=\"Burner with adaptor and plate for blowpipe analysis and assorted accessories\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_02/BP0001/index.php\">BP0001</a>, Burner with adaptor and plate for blowpipe analysis and assorted accessories
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_02/BP0003-BP0008/index.php\"><img src=\"/oesper/museum/case19/shelf_02/BP0003-BP0008/views/BP0003-BP0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Reagent box and assorted blowpipes\" title=\"Reagent box and assorted blowpipes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_02/BP0003-BP0008/index.php\">BP0003-BP0008</a>, Reagent box and assorted blowpipes
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_02/BP0009/index.php\"><img src=\"/oesper/museum/case19/shelf_02/BP0009/views/BP0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Berzelius lamp and assorted apparatus\" title=\"Berzelius lamp and assorted apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_02/BP0009/index.php\">BP0009</a>, Berzelius lamp and assorted apparatus
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_01/CA0001-CA0008/index.php\"><img src=\"/oesper/museum/case10/shelf_01/CA0001-CA0008/views/CA0001-CA0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted absorption and drying towers for both solid and liquid absorbents\" title=\"Assorted absorption and drying towers for both solid and liquid absorbents\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_01/CA0001-CA0008/index.php\">CA0001-CA0008</a>, Assorted absorption and drying towers for both solid and liquid absorbents
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_02/CA0009/index.php\"><img src=\"/oesper/museum/case10/shelf_02/CA0009/views/CA0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"52\" alt=\"Early Liebig combustion train (option for carbon and hydrogen analysis)\" title=\"Early Liebig combustion train (option for carbon and hydrogen analysis)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_02/CA0009/index.php\">CA0009</a>, Early Liebig combustion train (option for carbon and hydrogen analysis)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_02/CA0010/index.php\"><img src=\"/oesper/museum/case10/shelf_02/CA0010/views/CA0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Early Liebig combustion train (option for nitrogen analysis)\" title=\"Early Liebig combustion train (option for nitrogen analysis)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_02/CA0010/index.php\">CA0010</a>, Early Liebig combustion train (option for nitrogen analysis)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_02/CA0011/index.php\"><img src=\"/oesper/museum/case10/shelf_02/CA0011/views/CA0011_view1_thumb_smaller.jpg\" width=\"69\" height=\"100\" alt=\"Assorted absorption bulbs (Front: Liebig potash bulb, Rear: Giessler&nbsp;&#47;&nbsp;Mohr potash bulb)\" title=\"Assorted absorption bulbs (Front: Liebig potash bulb, Rear: Giessler&nbsp;&#47;&nbsp;Mohr potash bulb)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_02/CA0011/index.php\">CA0011</a>, Assorted absorption bulbs (Front: Liebig potash bulb, Rear: Giessler&nbsp;&#47;&nbsp;Mohr potash bulb)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_03/CA0012/index.php\"><img src=\"/oesper/museum/case10/shelf_03/CA0012/views/CA0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"82\" alt=\"Combustion train (carbon and hydrogen analysis)\" title=\"Combustion train (carbon and hydrogen analysis)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_03/CA0012/index.php\">CA0012</a>, Combustion train (carbon and hydrogen analysis)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_01/CL0001/index.php\"><img src=\"/oesper/museum/case21/shelf_01/CL0001/views/CL0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"96\" alt=\"Hellige disk colorimeter with sample tubes and color comparison wheels\" title=\"Hellige disk colorimeter with sample tubes and color comparison wheels\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_01/CL0001/index.php\">CL0001</a>, Hellige disk colorimeter with sample tubes and color comparison wheels
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_01/CL0002/index.php\"><img src=\"/oesper/museum/case21/shelf_01/CL0002/views/CL0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"LaMotte comparison colorimeter with sealed pH standards\" title=\"LaMotte comparison colorimeter with sealed pH standards\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_01/CL0002/index.php\">CL0002</a>, LaMotte comparison colorimeter with sealed pH standards
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_01/CL0003/index.php\"><img src=\"/oesper/museum/case21/shelf_01/CL0003/views/CL0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"93\" alt=\"Hellige disk colorimeter with electric light source\" title=\"Hellige disk colorimeter with electric light source\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_01/CL0003/index.php\">CL0003</a>, Hellige disk colorimeter with electric light source
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0004/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0004/views/CL0004_view1_thumb_smaller.jpg\" width=\"80\" height=\"100\" alt=\"Duboscq balancing colorimeter\" title=\"Duboscq balancing colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0004/index.php\">CL0004</a>, Duboscq balancing colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0005/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0005/views/CL0005_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Wolff balancing colorimeter\" title=\"Wolff balancing colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0005/index.php\">CL0005</a>, Wolff balancing colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0006/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0006/views/CL0006_view1_thumb_smaller.jpg\" width=\"80\" height=\"100\" alt=\"Bock-Benedict balancing colorimeter\" title=\"Bock-Benedict balancing colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0006/index.php\">CL0006</a>, Bock-Benedict balancing colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

</tr>";

if ($varall == "false") 
  pageend($varpagenum,$varorder);

}  






function subpage3 ()
{
global $varall;
global $varpagenum;
global $varorder;

if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else

echo "<tr style=\"page-break-before:always;\">";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0007/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0007/views/CL0007_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Hellige wedge colorimeter\" title=\"Hellige wedge colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0007/index.php\">CL0007</a>, Hellige wedge colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0008/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0008/views/CL0008_view1_thumb_smaller.jpg\" width=\"87\" height=\"100\" alt=\"Leitz wedge colorimeter with electric light source\" title=\"Leitz wedge colorimeter with electric light source\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0008/index.php\">CL0008</a>, Leitz wedge colorimeter with electric light source
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_03/CL0009/index.php\"><img src=\"/oesper/museum/case21/shelf_03/CL0009/views/CL0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"100\" alt=\"Nessler tubes and racks\" title=\"Nessler tubes and racks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_03/CL0009/index.php\">CL0009</a>, Nessler tubes and racks
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_03/CL0010/index.php\"><img src=\"/oesper/museum/case21/shelf_03/CL0010/views/CL0010_view1_thumb_smaller.jpg\" width=\"95\" height=\"100\" alt=\"Wooden wedge colorimeter with standards and calibration charts for water\" title=\"Wooden wedge colorimeter with standards and calibration charts for water\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_03/CL0010/index.php\">CL0010</a>, Wooden wedge colorimeter with standards and calibration charts for water
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/DA0001/index.php\"><img src=\"/oesper/museum/case16/shelf_02/DA0001/views/DA0001_view1_thumb_smaller.jpg\" width=\"40\" height=\"100\" alt=\"Hofmann lecture apparatus for volumetric synthesis\" title=\"Hofmann lecture apparatus for volumetric synthesis\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/DA0001/index.php\">DA0001</a>, Hofmann lecture apparatus for volumetric synthesis
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case07/shelf_01/DS0001/index.php\"><img src=\"/oesper/museum/case07/shelf_01/DS0001/views/DS0001_view1_thumb_smaller.jpg\" width=\"61\" height=\"100\" alt=\"17th-century alembic, furnace, bellows, and assorted flasks\" title=\"17th-century alembic, furnace, bellows, and assorted flasks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case07/shelf_01/DS0001/index.php\">DS0001</a>, 17th-century alembic, furnace, bellows, and assorted flasks
<br/><a href=\"/oesper/museum/case07/index.html\">Case 07</a>, Distillation&nbsp;I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_01/DS0002/index.php\"><img src=\"/oesper/museum/case08/shelf_01/DS0002/views/DS0002_view1_thumb_smaller.jpg\" width=\"54\" height=\"100\" alt=\"Crushed ice condenser for highly-volatile liquids\" title=\"Crushed ice condenser for highly-volatile liquids\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_01/DS0002/index.php\">DS0002</a>, Crushed ice condenser for highly-volatile liquids
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_01/DS0003/index.php\"><img src=\"/oesper/museum/case08/shelf_01/DS0003/views/DS0003_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Br&uuml;hl fraction collector for vacuum distillation\" title=\"Br&uuml;hl fraction collector for vacuum distillation\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_01/DS0003/index.php\">DS0003</a>, Br&uuml;hl fraction collector for vacuum distillation
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_01/DS0004/index.php\"><img src=\"/oesper/museum/case08/shelf_01/DS0004/views/DS0004_view1_thumb_smaller.jpg\" width=\"89\" height=\"100\" alt=\"Liebig counter-current condenser with iron stand\" title=\"Liebig counter-current condenser with iron stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_01/DS0004/index.php\">DS0004</a>, Liebig counter-current condenser with iron stand
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_02/DS0005/index.php\"><img src=\"/oesper/museum/case08/shelf_02/DS0005/views/DS0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"95\" alt=\"Assorted reflux condensers\" title=\"Assorted reflux condensers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_02/DS0005/index.php\">DS0005</a>, Assorted reflux condensers
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_02/DS0006/index.php\"><img src=\"/oesper/museum/case08/shelf_02/DS0006/views/DS0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted fractionation columns and adapters\" title=\"Assorted fractionation columns and adapters\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_02/DS0006/index.php\">DS0006</a>, Assorted fractionation columns and adapters
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_02/DS0007/index.php\"><img src=\"/oesper/museum/case08/shelf_02/DS0007/views/DS0007_view1_thumb_smaller.jpg\" width=\"88\" height=\"100\" alt=\"Complete Liebig distillation train\" title=\"Complete Liebig distillation train\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_02/DS0007/index.php\">DS0007</a>, Complete Liebig distillation train
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_01/DS0009/index.php\"><img src=\"/oesper/museum/case09/shelf_01/DS0009/views/DS0009_view1_thumb_smaller.jpg\" width=\"88\" height=\"100\" alt=\"Round-bottom alembic with woven support ring\" title=\"Round-bottom alembic with woven support ring\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_01/DS0009/index.php\">DS0009</a>, Round-bottom alembic with woven support ring
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_01/DS0010-DS0011/index.php\"><img src=\"/oesper/museum/case09/shelf_01/DS0010-DS0011/views/DS0010-DS0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"63\" alt=\"Assorted flat-bottom alembics\" title=\"Assorted flat-bottom alembics\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_01/DS0010-DS0011/index.php\">DS0010-DS0011</a>, Assorted flat-bottom alembics
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_02/DS0012/index.php\"><img src=\"/oesper/museum/case09/shelf_02/DS0012/views/DS0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"68\" alt=\"Brown-glass retort with quilled receiver and charcoal furnace\" title=\"Brown-glass retort with quilled receiver and charcoal furnace\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_02/DS0012/index.php\">DS0012</a>, Brown-glass retort with quilled receiver and charcoal furnace
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

</tr>

<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_02/DS0013/index.php\"><img src=\"/oesper/museum/case09/shelf_02/DS0013/views/DS0013_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Three-necked retort receiver with woven support ring\" title=\"Three-necked retort receiver with woven support ring\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_02/DS0013/index.php\">DS0013</a>, Three-necked retort receiver with woven support ring
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_03/DS0014/index.php\"><img src=\"/oesper/museum/case09/shelf_03/DS0014/views/DS0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Large lime-glass retort with receiver, alcohol lamp, cast-iron stands, and woven support ring\" title=\"Large lime-glass retort with receiver, alcohol lamp, cast-iron stands, and woven support ring\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_03/DS0014/index.php\">DS0014</a>, Large lime-glass retort with receiver, alcohol lamp, cast-iron stands, and woven support ring
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0001/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0001/views/EC0001_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Daniell gravity cell (Crowfoot form)\" title=\"Daniell gravity cell (Crowfoot form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0001/index.php\">EC0001</a>, Daniell gravity cell (Crowfoot form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0002/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0002/views/EC0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Daniell gravity cell (Meidinger form)\" title=\"Daniell gravity cell (Meidinger form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0002/index.php\">EC0002</a>, Daniell gravity cell (Meidinger form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0003/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0003/views/EC0003_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Leclanch&eacute; cell\" title=\"Leclanch&eacute; cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0003/index.php\">EC0003</a>, Leclanch&eacute; cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

</tr>";

if ($varall=="false") 
  pageend ($varpagenum,$varorder);

} 


function subpage4 ()
{

global $varall;
global $varpagenum;
global $varorder;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";



echo "<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0004/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0004/views/EC0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"95\" alt=\"Edison-Lalande cell\" title=\"Edison-Lalande cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0004/index.php\">EC0004</a>, Edison-Lalande cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0005/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0005/views/EC0005_view1_thumb_smaller.jpg\" width=\"53\" height=\"100\" alt=\"Voltaic pile\" title=\"Voltaic pile\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0005/index.php\">EC0005</a>, Voltaic pile
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0006/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0006/views/EC0006_view1_thumb_smaller.jpg\" width=\"69\" height=\"100\" alt=\"Hofmann electrolysis cell (V-form)\" title=\"Hofmann electrolysis cell (V-form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0006/index.php\">EC0006</a>, Hofmann electrolysis cell (V-form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0007/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0007/views/EC0007_view1_thumb_smaller.jpg\" width=\"71\" height=\"100\" alt=\"Grove nitric acid cell\" title=\"Grove nitric acid cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0007/index.php\">EC0007</a>, Grove nitric acid cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0008/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0008/views/EC0008_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Electrolysis cell\" title=\"Electrolysis cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0008/index.php\">EC0008</a>, Electrolysis cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0009/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0009/views/EC0009_view1_thumb_smaller.jpg\" width=\"89\" height=\"100\" alt=\"Bunsen carbon cell\" title=\"Bunsen carbon cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0009/index.php\">EC0009</a>, Bunsen carbon cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0010/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0010/views/EC0010_view1_thumb_smaller.jpg\" width=\"60\" height=\"100\" alt=\"Hofmann electrolysis cell (H-form)\" title=\"Hofmann electrolysis cell (H-form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0010/index.php\">EC0010</a>, Hofmann electrolysis cell (H-form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0011/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0011/views/EC0011_view1_thumb_smaller.jpg\" width=\"66\" height=\"100\" alt=\"Dichromate cell (Grenet form)\" title=\"Dichromate cell (Grenet form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0011/index.php\">EC0011</a>, Dichromate cell (Grenet form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/EC0012/index.php\"><img src=\"/oesper/museum/case20/shelf_02/EC0012/views/EC0012_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Apparatus for electrogravimetric analysis\" title=\"Apparatus for electrogravimetric analysis\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/EC0012/index.php\">EC0012</a>, Apparatus for electrogravimetric analysis
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/EX0001/index.php\"><img src=\"/oesper/museum/case14/shelf_01/EX0001/views/EX0001_view1_thumb_smaller.jpg\" width=\"64\" height=\"100\" alt=\"Separatory funnel\" title=\"Separatory funnel\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/EX0001/index.php\">EX0001</a>, Separatory funnel
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

</tr>

<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/EX0002/index.php\"><img src=\"/oesper/museum/case14/shelf_01/EX0002/views/EX0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Glass extraction or percolation cone\" title=\"Glass extraction or percolation cone\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/EX0002/index.php\">EX0002</a>, Glass extraction or percolation cone
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/EX0003/index.php\"><img src=\"/oesper/museum/case14/shelf_01/EX0003/views/EX0003_view1_thumb_smaller.jpg\" width=\"50\" height=\"100\" alt=\"Soxhlet fat extractor with steam bath\" title=\"Soxhlet fat extractor with steam bath\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/EX0003/index.php\">EX0003</a>, Soxhlet fat extractor with steam bath
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/FL0001/index.php\"><img src=\"/oesper/museum/case14/shelf_01/FL0001/views/FL0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Set of nested brass particle sieves\" title=\"Set of nested brass particle sieves\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/FL0001/index.php\">FL0001</a>, Set of nested brass particle sieves
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0002/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0002/views/FL0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Buchner vacuum filtration setup with phpirator and pressure gauge\" title=\"Buchner vacuum filtration setup with phpirator and pressure gauge\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0002/index.php\">FL0002</a>, Buchner vacuum filtration setup with phpirator and pressure gauge
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0003-FL0004/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0003-FL0004/views/FL0003-FL0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Porcelain supports for cloth filtration\" title=\"Porcelain supports for cloth filtration\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0003-FL0004/index.php\">FL0003-FL0004</a>, Porcelain supports for cloth filtration
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

</tr>

<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0005/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0005/views/FL0005_view1_thumb_smaller.jpg\" width=\"90\" height=\"100\" alt=\"Wooden filtration stand and accessories\" title=\"Wooden filtration stand and accessories\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0005/index.php\">FL0005</a>, Wooden filtration stand and accessories
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0006/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0006/views/FL0006_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Brass funnel jacket for hot filtration\" title=\"Brass funnel jacket for hot filtration\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0006/index.php\">FL0006</a>, Brass funnel jacket for hot filtration
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0007/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0007/views/FL0007_view1_thumb_smaller.jpg\" width=\"77\" height=\"100\" alt=\"Brass funnel coil for hot or cold filtration\" title=\"Brass funnel coil for hot or cold filtration\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0007/index.php\">FL0007</a>, Brass funnel coil for hot or cold filtration
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0001/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0001/views/GA0001_view1_thumb_smaller.jpg\" width=\"63\" height=\"100\" alt=\"Orsat apparatus\" title=\"Orsat apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a> 
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0001/index.php\">GA0001</a>, Orsat apparatus
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0002/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0002/views/GA0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Hempel gas pipette\" title=\"Hempel gas pipette\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0002/index.php\">GA0002</a>, Hempel gas pipette
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

</tr>";

if ($varall=="false") 
  pageend ($varpagenum,$varorder);

} 


function subpage5 ()
{

global $varall;
global $varpagenum;
global $varorder;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";



echo "<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0003-GA0004/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0003-GA0004/views/GA0003-GA0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"72\" alt=\"Metal and glass gas collection tubes\" title=\"Metal and glass gas collection tubes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0003-GA0004/index.php\">GA0003-GA0004</a>, Metal and glass gas collection tubes
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0005/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0005/views/GA0005_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Hempel gas burette with leveling bottle\" title=\"Hempel gas burette with leveling bottle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0005/index.php\">GA0005</a>, Hempel gas burette with leveling bottle
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_01/GL0001-GL0006/index.php\"><img src=\"/oesper/museum/case06/shelf_01/GL0001-GL0006/views/GL0001-GL0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted lime glass and early borosilicate glass beakers\" title=\"Assorted lime glass and early borosilicate glass beakers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_01/GL0001-GL0006/index.php\">GL0001-GL0006</a>, Assorted lime glass and early borosilicate glass beakers
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_02/GL0007-GL0011/index.php\"><img src=\"/oesper/museum/case06/shelf_02/GL0007-GL0011/views/GL0007-GL0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted lime glass and early borosilicate glass flasks\" title=\"Assorted lime glass and early borosilicate glass flasks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_02/GL0007-GL0011/index.php\">GL0007-GL0011</a>, Assorted lime glass and early borosilicate glass flasks
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_03/GL0012-GL0015/index.php\"><img src=\"/oesper/museum/case06/shelf_03/GL0012-GL0015/views/GL0012-GL0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted test glasses and footed test tubes\" title=\"Assorted test glasses and footed test tubes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_03/GL0012-GL0015/index.php\">GL0012-GL0015</a>, Assorted test glasses and footed test tubes
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>


</tr>


<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_01/H0001-H0004/index.php\"><img src=\"/oesper/museum/case04/shelf_01/H0001-H0004/views/H0001-H0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Alcohol or spirit wick lamps\" title=\"Alcohol or spirit wick lamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_01/H0001-H0004/index.php\">H0001-H0004</a>, Alcohol or spirit wick lamps
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_01/H0005/index.php\"><img src=\"/oesper/museum/case04/shelf_01/H0005/views/H0005_view1_thumb_smaller.jpg\" width=\"81\" height=\"100\" alt=\"Barthel's patent wickless blast lamp\" title=\"Barthel's patent wickless blast lamp\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_01/H0005/index.php\">H0005</a>, Barthel's patent wickless blast lamp
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_02/H0006-H0007/index.php\"><img src=\"/oesper/museum/case04/shelf_02/H0006-H0007/views/H0006-H0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"97\" alt=\"Simple Bunsen burner, Brass Tyrell burner\" title=\"Simple Bunsen burner, Brass Tyrell burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_02/H0006-H0007/index.php\">H0006-H0007</a>, Simple Bunsen burner, Brass Tyrell burner
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_02/H0008-H0010/index.php\"><img src=\"/oesper/museum/case04/shelf_02/H0008-H0010/views/H0008-H0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Small Meker gas burners\" title=\"Small Meker gas burners\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_02/H0008-H0010/index.php\">H0008-H0010</a>, Small Meker gas burners
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_02/H0011-H0012/index.php\"><img src=\"/oesper/museum/case04/shelf_02/H0011-H0012/views/H0011-H0012_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Large Meker gas burners\" title=\"Large Meker gas burners\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_02/H0011-H0012/index.php\">H0011-H0012</a>, Large Meker gas burners
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0013/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0013/views/H0013_view1_thumb_smaller.jpg\" width=\"59\" height=\"100\" alt=\"Vitrified earthenware burner guard and support stand\" title=\"Vitrified earthenware burner guard and support stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0013/index.php\">H0013</a>, Vitrified earthenware burner guard and support stand
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0014-H0015/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0014-H0015/views/H0014-H0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"96\" alt=\"Metal burner chimneys or draft guards\" title=\"Metal burner chimneys or draft guards\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0014-H0015/index.php\">H0014-H0015</a>, Metal burner chimneys or draft guards</a>
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0016-H0017/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0016-H0017/views/H0016-H0017_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Three-burner heating train and gas burner\" title=\"Three-burner heating train and gas burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0016-H0017/index.php\">H0016-H0017</a>, Three-burner heating train and gas burner
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0018/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0018/views/H0018_view1_thumb_smaller.jpg\" width=\"72\" height=\"100\" alt=\"All ceramic corrosion-proof Chaddock burner\" title=\"All ceramic corrosion-proof Chaddock burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0018/index.php\">H0018</a>, All ceramic corrosion-proof Chaddock burner
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0019/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0019/views/H0019_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Roger ring burner for crucibles\" title=\"Roger ring burner for crucibles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0019/index.php\">H0019</a>, Roger ring burner for crucibles
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


</tr>


<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0020-H0022/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0020-H0022/views/H0020-H0022_view1_thumb_smaller.jpg\" width=\"100\" height=\"63\" alt=\"Micro burners\" title=\"Micro burners\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0020-H0022/index.php\">H0020-H0022</a>, Micro burners
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0023/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0023/views/H0023_view1_thumb_smaller.jpg\" width=\"69\" height=\"100\" alt=\"Ring burner\" title=\"Ring burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0023/index.php\">H0023</a>, Ring burner
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0024/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0024/views/H0024_view1_thumb_smaller.jpg\" width=\"100\" height=\"58\" alt=\"Cast iron gas hot plate\" title=\"Cast iron gas hot plate\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0024/index.php\">H0024</a>, Cast iron gas hot plate
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0001-HD0002/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0001-HD0002/views/HD0001-HD0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metal stands with assorted rings\" title=\"Metal stands with assorted rings\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0001-HD0002/index.php\">HD0001-HD0002</a>, Metal stands with assorted rings
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0003/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0003/views/HD0003_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metal stand with assorted utility clamps\" title=\"Metal stand with assorted utility clamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0003/index.php\">HD0003</a>, Metal stand with assorted utility clamps
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>


</tr>";


if ($varall=="false") 
  pageend ($varpagenum,$varorder);

}


function subpage6 ()
{
global $varall;
global $varpagenum;
global $varorder;

if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";



echo "<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0004/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0004/views/HD0004_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metal stand with assorted burette clamps\" title=\"Metal stand with assorted burette clamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0004/index.php\">HD0004</a>, Metal stand with assorted burette clamps
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0005-HD0007/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0005-HD0007/views/HD0005-HD0007_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Assorted laboratory stirring devices\" title=\"Assorted laboratory stirring devices\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>

<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0005-HD0007/index.php\">HD0005-HD0007</a>, Assorted laboratory stirring devices
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_02/HD0008/index.php\"><img src=\"/oesper/museum/case15/shelf_02/HD0008/views/HD0008_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Gay-Lussac universal support stand (wood)\" title=\"Gay-Lussac universal support stand (wood)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_02/HD0008/index.php\">HD0008</a>, Gay-Lussac universal support stand (wood)
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_02/HD0009/index.php\"><img src=\"/oesper/museum/case15/shelf_02/HD0009/views/HD0009_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Wood stand with assorted wood utility clamps\" title=\"Wood stand with assorted wood utility clamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_02/HD0009/index.php\">HD0009</a>, Wood stand with assorted wood utility clamps
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_02/HD0010/index.php\"><img src=\"/oesper/museum/case15/shelf_02/HD0010/views/HD0010_view1_thumb_smaller.jpg\" width=\"60\" height=\"100\" alt=\"Adjustable wood support table or lab jack\" title=\"Adjustable wood support table or lab jack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_02/HD0010/index.php\">HD0010</a>, Adjustable wood support table or lab jack
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_01/MD0001-MD0002/index.php\"><img src=\"/oesper/museum/case18/shelf_01/MD0001-MD0002/views/MD0001-MD0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Crystal models\" title=\"Crystal models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_01/MD0001-MD0002/index.php\">MD0001-MD0002</a>, Crystal models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_01/MD0003/index.php\"><img src=\"/oesper/museum/case18/shelf_01/MD0003/views/MD0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Chemical slide-rule\" title=\"Chemical slide-rule\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_01/MD0003/index.php\">MD0003</a>, Chemical slide-rule
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_01/MD0004-MD0005/index.php\"><img src=\"/oesper/museum/case18/shelf_01/MD0004-MD0005/views/MD0004-MD0005_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Three-dimensional periodic tables\" title=\"Three-dimensional periodic tables\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_01/MD0004-MD0005/index.php\">MD0004-MD0005</a>, Three-dimensional periodic tables
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_02/MD0006/index.php\"><img src=\"/oesper/museum/case18/shelf_02/MD0006/views/MD0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Metal Bragg folding stereoviewer for viewing stereoviews of crystal structures and printed booklet of hand-drawn stereoviews of crystal structures\" title=\"Metal Bragg folding stereoviewer for viewing stereoviews of crystal structures and printed booklet of hand-drawn stereoviews of crystal structures\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_02/MD0006/index.php\">MD0006</a>, Metal Bragg folding stereoviewer for viewing stereoviews of crystal structures and printed booklet of hand-drawn stereoviews of crystal structures
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_02/MD0007/index.php\"><img src=\"/oesper/museum/case18/shelf_02/MD0007/views/MD0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"90\" alt=\"Ionic lattice model\" title=\"Ionic lattice model\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_02/MD0007/index.php\">MD0007</a>, Ionic lattice model
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_02/MD0008-MD0009/index.php\"><img src=\"/oesper/museum/case18/shelf_02/MD0008-MD0009/views/MD0008-MD0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"67\" alt=\"Wood and plastic Stuart-Briegleb space-filling models\" title=\"Wood and plastic Stuart-Briegleb space-filling models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_02/MD0008-MD0009/index.php\">MD0008-MD0009</a>, Wood and plastic Stuart-Briegleb space-filling models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_03/MD0010/index.php\"><img src=\"/oesper/museum/case18/shelf_03/MD0010/views/MD0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Kekul&eacute;-von Baeyer tetrahedral ball and wire models\" title=\"Kekul&eacute;-von Baeyer tetrahedral ball and wire models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_03/MD0010/index.php\">MD0010</a>, Kekul&eacute;-von Baeyer tetrahedral ball and wire models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_03/MD0011/index.php\"><img src=\"/oesper/museum/case18/shelf_03/MD0011/views/MD0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"73\" alt=\"Student wooden ball and stick models\" title=\"Student wooden ball and stick models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_03/MD0011/index.php\">MD0011</a>, Student wooden ball and stick models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_04/MD0012/index.php\"><img src=\"/oesper/museum/case18/shelf_04/MD0012/views/MD0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Equivalency blocks\" title=\"Equivalency blocks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_04/MD0012/index.php\">MD0012</a>, Equivalency blocks
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_04/MD0013/index.php\"><img src=\"/oesper/museum/case18/shelf_04/MD0013/views/MD0013_view1_thumb_smaller.jpg\" width=\"100\" height=\"73\" alt=\"Ceramic Kekul&eacute; &quot;sausage&quot; models\" title=\"Ceramic Kekul&eacute; &quot;sausage&quot; models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_04/MD0013/index.php\">MD0013</a>, Ceramic Kekul&eacute; &quot;sausage&quot; models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_04/MD0014/index.php\"><img src=\"/oesper/museum/case18/shelf_04/MD0014/views/MD0014_view1_thumb_smaller.jpg\" width=\"72\" height=\"100\" alt=\"Wood and brass glyptic models\" title=\"Wood and brass glyptic models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_04/MD0014/index.php\">MD0014</a>, Wood and brass glyptic models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0001/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0001/views/MP0001_view1_thumb_smaller.jpg\" width=\"84\" height=\"100\" alt=\"Brass mortar and pestle\" title=\"Brass mortar and pestle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0001/index.php\">MP0001</a>, Brass mortar and pestle
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0002/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0002/views/MP0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"88\" alt=\"Brass mortar and pestle\" title=\"Brass mortar and pestle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0002/index.php\">MP0002</a>, Brass mortar and pestle
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0003/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0003/views/MP0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"87\" alt=\"Cast iron mortar and pestle\" title=\"Cast iron mortar and pestle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0003/index.php\">MP0003</a>, Cast iron mortar and pestle
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0004/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0004/views/MP0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Porcelain mortar and pestle with wooden handle\" title=\"Porcelain mortar and pestle with wooden handle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0004/index.php\">MP0004</a>, Porcelain mortar and pestle with wooden handle
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>


</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder);

}




function subpage7 ()
{

global $varall;
global $varpagenum;
global $varorder;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
echo "<tr style=\"page-break-before:always;\">";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/MS0001/index.php\"><img src=\"/oesper/museum/case20/shelf_02/MS0001/views/MS0001_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Optical microscope\" title=\"Optical microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/MS0001/index.php\">MS0001</a>, Optical microscope
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/MS0002/index.php\"><img src=\"/oesper/museum/case20/shelf_02/MS0002/views/MS0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Polarizing microscope\" title=\"Polarizing microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/MS0002/index.php\">MS0002</a>, Polarizing microscope
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/MS0003/index.php\"><img src=\"/oesper/museum/case20/shelf_02/MS0003/views/MS0003_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metallurgical microscope\" title=\"Metallurgical microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/MS0003/index.php\">MS0003</a>, Metallurgical microscope
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_01/MW0001/index.php\"><img src=\"/oesper/museum/case17/shelf_01/MW0001/views/MW0001_view1_thumb_smaller.jpg\" width=\"66\" height=\"100\" alt=\"Beckmann freezing-point apparatus\" title=\"Beckmann freezing-point apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_01/MW0001/index.php\">MW0001</a>, Beckmann freezing-point apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_01/MW0002/index.php\"><img src=\"/oesper/museum/case17/shelf_01/MW0002/views/MW0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Beckmann boiling-point apparatus\" title=\"Beckmann boiling-point apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_01/MW0002/index.php\">MW0002</a>, Beckmann boiling-point apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>


</tr>

<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_01/MW0003/index.php\"><img src=\"/oesper/museum/case17/shelf_01/MW0003/views/MW0003_view1_thumb_smaller.jpg\" width=\"65\" height=\"100\" alt=\"McCoy boiling-point apparatus\" title=\"McCoy boiling-point apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_01/MW0003/index.php\">MW0003</a>, McCoy boiling-point apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_02/MW0004/index.php\"><img src=\"/oesper/museum/case17/shelf_02/MW0004/views/MW0004_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Glass balloon with brass stopcock for weighing gases\" title=\"Glass balloon with brass stopcock for weighing gases\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_02/MW0004/index.php\">MW0004</a>, Glass balloon with brass stopcock for weighing gases
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_02/MW0005/index.php\"><img src=\"/oesper/museum/case17/shelf_02/MW0005/views/MW0005_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Dumas vapor-density apparatus\" title=\"Dumas vapor-density apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_02/MW0005/index.php\">MW0005</a>, Dumas vapor-density apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_02/MW0006/index.php\"><img src=\"/oesper/museum/case17/shelf_02/MW0006/views/MW0006_view1_thumb_smaller.jpg\" width=\"54\" height=\"100\" alt=\"Schilling gas-effusion apparatus\" title=\"Schilling gas-effusion apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_02/MW0006/index.php\">MW0006</a>, Schilling gas-effusion apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/PH0001/index.php\"><img src=\"/oesper/museum/table/PH0001/views/PH0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"86\" alt=\"Coleman pH electrometer (Model 3)\" title=\"Coleman pH electrometer (Model 3)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/PH0001/index.php\">PH0001</a>, Coleman pH electrometer (Model 3)
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

</tr>


<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/table/PH0002/index.php\"><img src=\"/oesper/museum/table/PH0002/views/PH0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Coleman pH electrometer (Style 200)\" title=\"Coleman pH electrometer (Style 200)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/PH0002/index.php\">PH0002</a>, Coleman pH electrometer (Style 200)
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/PH0003/index.php\"><img src=\"/oesper/museum/table/PH0003/views/PH0003_view1_thumb_smaller.jpg\" width=\"98\" height=\"100\" alt=\"Beckman electronic pH meter (Model 6)\" title=\"Beckman electronic pH meter (Model 6)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/PH0003/index.php\">PH0003</a>, Beckman electronic pH meter (Model 6)
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_01/PN0001/index.php\"><img src=\"/oesper/museum/case11/shelf_01/PN0001/views/PN0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Gas bladder with wooden spigot\" title=\"Gas bladder with wooden spigot\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_01/PN0001/index.php\">PN0001</a>, Gas bladder with wooden spigot
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_01/PN0002/index.php\"><img src=\"/oesper/museum/case11/shelf_01/PN0002/views/PN0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Wooden pneumatic trough with collection containers and gas generators\" title=\"Wooden pneumatic trough with collection containers and gas generators\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_01/PN0002/index.php\">PN0002</a>, Wooden pneumatic trough with collection containers and gas generators
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_02/PN0003/index.php\"><img src=\"/oesper/museum/case11/shelf_02/PN0003/views/PN0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Retort, charcoal furnace and gas bladder receiver\" title=\"Retort, charcoal furnace and gas bladder receiver\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_02/PN0003/index.php\">PN0003</a>, Retort, charcoal furnace and gas bladder receiver
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_03/PN0004/index.php\"><img src=\"/oesper/museum/case11/shelf_03/PN0004/views/PN0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"89\" alt=\"Apparatus for the preparation of oxygen gas\" title=\"Apparatus for the preparation of oxygen gas\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_03/PN0004/index.php\">PN0004</a>, Apparatus for the preparation of oxygen gas
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_03/PN0005/index.php\"><img src=\"/oesper/museum/case11/shelf_03/PN0005/views/PN0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"83\" alt=\"Burning lens with pneumatic trough and bell jar\" title=\"Burning lens with pneumatic trough and bell jar\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_03/PN0005/index.php\">PN0005</a>, Burning lens with pneumatic trough and bell jar
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_03/PN0006/index.php\"><img src=\"/oesper/museum/case11/shelf_03/PN0006/views/PN0006_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Glass pneumatic trough, wooden tripod and inverted flask \" title=\"Glass pneumatic trough, wooden tripod and inverted flask \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_03/PN0006/index.php\">PN0006</a>, Glass pneumatic trough, wooden tripod and inverted flask 
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case12/shelf_01/PN0007/index.php\"><img src=\"/oesper/museum/case12/shelf_01/PN0007/views/PN0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"68\" alt=\"Gas generator, reagents, safety trap, pneumatic trough, and deflagration spoon\" title=\"Gas generator, reagents, safety trap, pneumatic trough, and deflagration spoon\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case12/shelf_01/PN0007/index.php\">PN0007</a>, Gas generator, reagents, safety trap, pneumatic trough, and deflagration spoon
<br/><a href=\"/oesper/museum/case12/index.html\">Case 12</a>, Pneumatic Chemistry&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case12/shelf_02/PN0008/index.php\"><img src=\"/oesper/museum/case12/shelf_02/PN0008/views/PN0008_view1_thumb_smaller.jpg\" width=\"76\" height=\"100\" alt=\"Retort, charcoal furnace, pneumatic trough and gas bladder\" title=\"Retort, charcoal furnace, pneumatic trough and gas bladder\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case12/shelf_02/PN0008/index.php\">PN0008</a>, Retort, charcoal furnace, pneumatic trough and gas bladder
<br/><a href=\"/oesper/museum/case12/index.html\">Case 12</a>, Pneumatic Chemistry&nbsp;II
</td>

</tr>";

if ($varall=="false") 
  pageend ($varpagenum,$varorder);
} 


function subpage8 ()
{
global $varall;
global $varpagenum;
global $varorder;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_01/PN0009-PN0015/index.php\"><img src=\"/oesper/museum/case13/shelf_01/PN0009-PN0015/views/PN0009-PN0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted multi-necked Woulfe bottles\" title=\"Assorted multi-necked Woulfe bottles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_01/PN0009-PN0015/index.php\">PN0009-PN0015</a>, Assorted multi-necked Woulfe bottles
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_02/PN0016-PN0018/index.php\"><img src=\"/oesper/museum/case13/shelf_02/PN0016-PN0018/views/PN0016-PN0018_view1_thumb_smaller.jpg\" width=\"93\" height=\"100\" alt=\"Assorted Kipp gas generators\" title=\"Assorted Kipp gas generators\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_02/PN0016-PN0018/index.php\">PN0016-PN0018</a>, Assorted Kipp gas generators
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_02/PN0019/index.php\"><img src=\"/oesper/museum/case13/shelf_02/PN0019/views/PN0019_view1_thumb_smaller.jpg\" width=\"100\" height=\"98\" alt=\"Babo gas generator \" title=\"Babo gas generator \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_02/PN0019/index.php\">PN0019</a>, Babo gas generator 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_02/PN0020-PN0021/index.php\"><img src=\"/oesper/museum/case13/shelf_02/PN0020-PN0021/views/PN0020-PN0021_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Assorted gas generator bottles \" title=\"Assorted gas generator bottles \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_02/PN0020-PN0021/index.php\">PN0020-PN0021</a>, Assorted gas generator bottles 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0022/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0022/views/PN0022_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Enameled metal pneumatic trough with collection bottles \" title=\"Enameled metal pneumatic trough with collection bottles \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0022/index.php\">PN0022</a>, Enameled metal pneumatic trough with collection bottles 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0023/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0023/views/PN0023_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Galvanized metal pneumatic trough with collection bottle \" title=\"Galvanized metal pneumatic trough with collection bottle \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0023/index.php\">PN0023</a>, Galvanized metal pneumatic trough with collection bottle 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0024/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0024/views/PN0024_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Porcelain pneumatic trough with collection bottle\" title=\"Porcelain pneumatic trough with collection bottle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0024/index.php\">PN0024</a>, Porcelain pneumatic trough with collection bottle 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0025/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0025/views/PN0025_view1_thumb_smaller.jpg\" width=\"100\" height=\"85\" alt=\"Pneumatic trough with porcelain beehive stand and collection bottle \" title=\"Pneumatic trough with porcelain beehive stand and collection bottle \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0025/index.php\">PN0025</a>, Pneumatic trough with porcelain beehive stand and collection bottle  
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_04/PR0001-PR003/index.php\"><img src=\"/oesper/museum/case06/shelf_04/PR0001-PR003/views/PR0001-PR003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted porcelain casseroles and evaporating dishes\" title=\"Assorted porcelain casseroles and evaporating dishes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_04/PR0001-PR003/index.php\">PR0001-PR003</a>, Assorted porcelain casseroles and evaporating dishes
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_03/PS0001/index.php\"><img src=\"/oesper/museum/case20/shelf_03/PS0001/views/PS0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Polariscope with constant temperature bath\" title=\"Polariscope with constant temperature bath\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_03/PS0001/index.php\">PS0001</a>, Polariscope with constant temperature bath
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_03/PS0002/index.php\"><img src=\"/oesper/museum/case20/shelf_03/PS0002/views/PS0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"65\" alt=\"Hand-held polarizers\" title=\"Hand-held polarizers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_03/PS0002/index.php\">PS0002</a>, Hand-held polarizers
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_03/PS0003/index.php\"><img src=\"/oesper/museum/case20/shelf_03/PS0003/views/PS0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Large mounted crystal of iceland spar with printed sign to illustrate double refraction\" title=\"Large mounted crystal of iceland spar with printed sign to illustrate double refraction\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_03/PS0003/index.php\">PS0003</a>, Large mounted crystal of iceland spar with printed sign to illustrate double refraction
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_01/RF0001/index.php\"><img src=\"/oesper/museum/case20/shelf_01/RF0001/views/RF0001_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Abbe refractometer\" title=\"Abbe refractometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_01/RF0001/index.php\">RF0001</a>, Abbe refractometer
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_01/RF0002/index.php\"><img src=\"/oesper/museum/case20/shelf_01/RF0002/views/RF0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Pulfrich refractometer\" title=\"Pulfrich refractometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_01/RF0002/index.php\">RF0002</a>, Pulfrich refractometer
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_01/RF0003/index.php\"><img src=\"/oesper/museum/case20/shelf_01/RF0003/views/RF0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Bausch &amp; Lomb refractometer with water jacket\" title=\"Bausch &amp; Lomb refractometer with water jacket\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_01/RF0003/index.php\">RF0003</a>, Bausch &amp; Lomb refractometer with water jacket
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/SD0001/index.php\"><img src=\"/oesper/museum/case14/shelf_01/SD0001/views/SD0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"94\" alt=\"Glazed earthenware sedimentation vat\" title=\"Glazed earthenware sedimentation vat\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/SD0001/index.php\">SD0001</a>, Glazed earthenware sedimentation vat
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0001-SG0005/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0001-SG0005/views/SG0001-SG0005_view1_thumb_smaller.jpg\" width=\"66\" height=\"100\" alt=\"Assorted hydrometers and hydrometer jars\" title=\"Assorted hydrometers and hydrometer jars\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0001-SG0005/index.php\">SG0001-SG0005</a>, Assorted hydrometers and hydrometer jars
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0006-SG0009/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0006-SG0009/views/SG0006-SG0009_view1_thumb_smaller.jpg\" width=\"80\" height=\"100\" alt=\"Assorted pycnometers\" title=\"Assorted pycnometers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0006-SG0009/index.php\">SG0006-SG0009</a>, Assorted pycnometers
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0010/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0010/views/SG0010_view1_thumb_smaller.jpg\" width=\"68\" height=\"100\" alt=\"Hydrometers and wooden storage rack\" title=\"Hydrometers and wooden storage rack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0010/index.php\">SG0010</a>, Hydrometers and wooden storage rack
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0011/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0011/views/SG0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Westphal specific gravity balance\" title=\"Westphal specific gravity balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0011/index.php\">SG0011</a>, Westphal specific gravity balance
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder);

} 


function subpage9 ()
{
global $varall;
global $varpagenum;
global $varorder;

if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";



echo "<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0012/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0012/views/SG0012_view1_thumb_smaller.jpg\" width=\"78\" height=\"100\" alt=\"Student specific gravity balance\" title=\"Student specific gravity balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0012/index.php\">SG0012</a>, Student specific gravity balance
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_01/SP0001/index.php\"><img src=\"/oesper/museum/case22/shelf_01/SP0001/views/SP0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Spectrometer\" title=\"Spectrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_01/SP0001/index.php\">SP0001</a>, Spectrometer
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_01/SP0002/index.php\"><img src=\"/oesper/museum/case22/shelf_01/SP0002/views/SP0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"66\" alt=\"Student demonstration spectroscope with battery operated electric light for the scale\" title=\"Student demonstration spectroscope with battery operated electric light for the scale\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_01/SP0002/index.php\">SP0002</a>, Student demonstration spectroscope with battery operated electric light for the scale
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_02/SP0003/index.php\"><img src=\"/oesper/museum/case22/shelf_02/SP0003/views/SP0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Browning student spectroscope\" title=\"Browning student spectroscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_02/SP0003/index.php\">SP0003</a>, Browning student spectroscope
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_02/SP0004/index.php\"><img src=\"/oesper/museum/case22/shelf_02/SP0004/views/SP0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Bunsen-Kirchhoff spectroscope with gas light for scale\" title=\"Bunsen-Kirchhoff spectroscope with gas light for scale\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_02/SP0004/index.php\">SP0004</a>, Bunsen-Kirchhoff spectroscope with gas light for scale
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0005/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0005/views/SP0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Spectrometer\" title=\"Spectrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0005/index.php\">SP0005</a>, Spectrometer
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0006/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0006/views/SP0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Bausch &amp; Lomb wave-length spectrometer\" title=\"Bausch &amp; Lomb wave-length spectrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0006/index.php\">SP0006</a>, Bausch &amp; Lomb wave-length spectrometer
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0007/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0007/views/SP0007_view1_thumb_smaller.jpg\" width=\"98\" height=\"100\" alt=\"Hand-held direct-vision spectroscope\" title=\"Hand-held direct-vision spectroscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0007/index.php\">SP0007</a>, Hand-held direct-vision spectroscope
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0008/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0008/views/SP0008_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Spectroscopic eyepiece for a microscope\" title=\"Spectroscopic eyepiece for a microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0008/index.php\">SP0008</a>, Spectroscopic eyepiece for a microscope
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0009/index.php\"><img src=\"/oesper/museum/table/SP0009/views/SP0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Aminco spectrophotometer with external galvanometer\" title=\"Aminco spectrophotometer with external galvanometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0009/index.php\">SP0009</a>, Aminco spectrophotometer with external galvanometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0010/index.php\"><img src=\"/oesper/museum/table/SP0010/views/SP0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Aminco spectrophotometer with split-field visual readout\" title=\"Aminco spectrophotometer with split-field visual readout\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0010/index.php\">SP0010</a>, Aminco spectrophotometer with split-field visual readout
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0011/index.php\"><img src=\"/oesper/museum/table/SP0011/views/SP0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Aminco spectrophotometer with external galvanometer\" title=\"Aminco spectrophotometer with external galvanometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0011/index.php\">SP0011</a>, Aminco spectrophotometer with external galvanometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0012/index.php\"><img src=\"/oesper/museum/table/SP0012/views/SP0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"56\" alt=\"Bausch &amp; Lomb universal spectrophotometer\" title=\"Bausch &amp; Lomb universal spectrophotometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0012/index.php\">SP0012</a>, Bausch &amp; Lomb universal spectrophotometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0013/index.php\"><img src=\"/oesper/museum/table/SP0013/views/SP0013_view1_thumb_smaller.jpg\" width=\"100\" height=\"64\" alt=\"Beckman quartz spectrophotometer\" title=\"Beckman quartz spectrophotometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0013/index.php\">SP0013</a>, Beckman quartz spectrophotometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0014/index.php\"><img src=\"/oesper/museum/table/SP0014/views/SP0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"65\" alt=\"Rouy Photrometer\" title=\"Rouy Photrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0014/index.php\">SP0014</a>, Rouy Photrometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0015/index.php\"><img src=\"/oesper/museum/table/SP0015/views/SP0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Klett-Summerson photoelectric colorimeter\" title=\"Klett-Summerson photoelectric colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0015/index.php\">SP0015</a>, Klett-Summerson photoelectric colorimeter
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_03/TT0001/index.php\"><img src=\"/oesper/museum/case06/shelf_03/TT0001/views/TT0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Test tube and reagent rack\" title=\"Test tube and reagent rack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_03/TT0001/index.php\">TT0001</a>, Test tube and reagent rack
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_02/V0001-V0005/index.php\"><img src=\"/oesper/museum/case05/shelf_02/V0001-V0005/views/V0001-V0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted metric and English graduated measuring glasses\" title=\"Assorted metric and English graduated measuring glasses\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_02/V0001-V0005/index.php\">V0001-V0005</a>, Assorted metric and English graduated measuring glasses
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_02/V0006-V0009/index.php\"><img src=\"/oesper/museum/case05/shelf_02/V0006-V0009/views/V0006-V0009_view1_thumb_smaller.jpg\" width=\"86\" height=\"100\" alt=\"Assorted volumetric flasks\" title=\"Assorted volumetric flasks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_02/V0006-V0009/index.php\">V0006-V0009</a>, Assorted volumetric flasks
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_02/V0010-V0014/index.php\"><img src=\"/oesper/museum/case05/shelf_02/V0010-V0014/views/V0010-V0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Assorted graduated cylinders\" title=\"Assorted graduated cylinders\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_02/V0010-V0014/index.php\">V0010-V0014</a>, Assorted graduated cylinders
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder);
}  


function subpage10 ()
{
global $varall;
global $varpagenum;
global $varorder;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";



echo "<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0015/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0015/views/V0015_view1_thumb_smaller.jpg\" width=\"88\" height=\"100\" alt=\"Descroizilles chlorometer or &quot;Berthollimeter&quot; with accompanying pipette and beaker\" title=\"Descroizilles chlorometer or &quot;Berthollimeter&quot; with accompanying pipette and beaker\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0015/index.php\">V0015</a>, Descroizilles chlorometer or &quot;Berthollimeter&quot; with accompanying pipette and beaker
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0016-V0017/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0016-V0017/views/V0016-V0017_view1_thumb_smaller.jpg\" width=\"59\" height=\"100\" alt=\"Large graduated mixing cylinder with stopper and large volumetric flask\" title=\"Large graduated mixing cylinder with stopper and large volumetric flask\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0016-V0017/index.php\">V0016-V0017</a>, Large graduated mixing cylinder with stopper and large volumetric flask
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0018/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0018/views/V0018_view1_thumb_smaller.jpg\" width=\"37\" height=\"100\" alt=\"Gay-Lussac burette with wooden stand\" title=\"Gay-Lussac burette with wooden stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0018/index.php\">V0018</a>, Gay-Lussac burette with wooden stand
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0019/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0019/views/V0019_view1_thumb_smaller.jpg\" width=\"42\" height=\"100\" alt=\"Binks or English burette with wooden stand\" title=\"Binks or English burette with wooden stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0019/index.php\">V0019</a>, Binks or English burette with wooden stand
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0020/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0020/views/V0020_view1_thumb_smaller.jpg\" width=\"50\" height=\"100\" alt=\"Wooden pipette stand and assorted pipettes\" title=\"Wooden pipette stand and assorted pipettes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0020/index.php\">V0020</a>, Wooden pipette stand and assorted pipettes
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

</tr>

<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0021/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0021/views/V0021_view1_thumb_smaller.jpg\" width=\"100\" height=\"59\" alt=\"Large pipette with wire support stand\" title=\"Large pipette with wire support stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0021/index.php\">V0021</a>, Large pipette with wire support stand
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0022/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0022/views/V0022_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Mohr burettes with wooden support stand, assorted pinch clamps, and burette floats\" title=\"Mohr burettes with wooden support stand, assorted pinch clamps, and burette floats\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0022/index.php\">V0022</a>, Mohr burettes with wooden support stand, assorted pinch clamps, and burette floats
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


</tr>

</table>";


if ($varall=="false")
  pageend ($varpagenum,$varorder);
}


   switch ($varpagenum)
   {
     case "1" :
        subpage1();
		break;
     case "2":
        subpage2();
		break;
     case "3":
        subpage3();
		break;
     case "4":
        subpage4();
		break;
     case "5":
        subpage5();
		break;
     case "6":
        subpage6();
		break;
     case "7":
        subpage7();
		break;
     case "8":
        subpage8();
		break;
     case "9":
        subpage9();
		break;
     case "10":
        subpage10();
		break;
     case "true":
        subpage1();
        subpage2();
        subpage3();
        subpage4();
        subpage5();
        subpage6();
        subpage7();
        subpage8();
        subpage9();
        subpage10();
		break;
     default:
       echo "error";
}


}// closing bracket of if statement {if (varorder == "number")}



elseif ($varorder == "name")
{


function subpagename1 ()
{
	global $varall;
	global $varorder;
	global $varpagenum;
  if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<center><h2><a href=\"thumbnails.php?order=$varorder\">View by Page</a></h2></center>
		<table cellspacing=\"4\" cellpadding=\"4\" align=\"center\">
		<tr>";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_01/RF0001/index.php\"><img src=\"/oesper/museum/case20/shelf_01/RF0001/views/RF0001_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Abbe refractometer\" title=\"Abbe refractometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_01/RF0001/index.php\">RF0001</a>, <b>Abbe</b> refractometer
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_01/CA0001-CA0008/index.php\"><img src=\"/oesper/museum/case10/shelf_01/CA0001-CA0008/views/CA0001-CA0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted absorption and drying towers for both solid and liquid absorbents\" title=\"Assorted absorption and drying towers for both solid and liquid absorbents\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_01/CA0001-CA0008/index.php\">CA0001-CA0008</a>, Assorted <b>absorption</b> and drying towers for both solid and liquid absorbents
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_02/CA0011/index.php\"><img src=\"/oesper/museum/case10/shelf_02/CA0011/views/CA0011_view1_thumb_smaller.jpg\" width=\"69\" height=\"100\" alt=\"Assorted absorption bulbs (Front: Liebig potash bulb, Rear: Giessler&nbsp;&#47;&nbsp;Mohr potash bulb)\" title=\"Assorted absorption bulbs (Front: Liebig potash bulb, Rear: Giessler&nbsp;&#47;&nbsp;Mohr potash bulb)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_02/CA0011/index.php\">CA0011</a>, Assorted <b>absorption</b> bulbs (Front: Liebig potash bulb, Rear: Giessler&nbsp;&#47;&nbsp;Mohr potash bulb)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_01/H0001-H0004/index.php\"><img src=\"/oesper/museum/case04/shelf_01/H0001-H0004/views/H0001-H0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Alcohol or spirit wick lamps\" title=\"Alcohol or spirit wick lamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_01/H0001-H0004/index.php\">H0001-H0004</a>, <b>Alcohol</b> or spirit wick lamps
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case07/shelf_01/DS0001/index.php\"><img src=\"/oesper/museum/case07/shelf_01/DS0001/views/DS0001_view1_thumb_smaller.jpg\" width=\"61\" height=\"100\" alt=\"17th-century alembic, furnace, bellows, and assorted flasks\" title=\"17th-century alembic, furnace, bellows, and assorted flasks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case07/shelf_01/DS0001/index.php\">DS0001</a>, 17th-century <b>alembic</b>, furnace, bellows, and assorted flasks
<br/><a href=\"/oesper/museum/case07/index.html\">Case 07</a>, Distillation&nbsp;I
</td>


</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_01/DS0009/index.php\"><img src=\"/oesper/museum/case09/shelf_01/DS0009/views/DS0009_view1_thumb_smaller.jpg\" width=\"88\" height=\"100\" alt=\"Round-bottom alembic with woven support ring\" title=\"Round-bottom alembic with woven support ring\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_01/DS0009/index.php\">DS0009</a>, Round-bottom <b>alembic</b> with woven support ring
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_01/DS0010-DS0011/index.php\"><img src=\"/oesper/museum/case09/shelf_01/DS0010-DS0011/views/DS0010-DS0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"63\" alt=\"Assorted flat-bottom alembics\" title=\"Assorted flat-bottom alembics\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_01/DS0010-DS0011/index.php\">DS0010-DS0011</a>, Assorted flat-bottom <b>alembics</b>
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0009/index.php\"><img src=\"/oesper/museum/table/SP0009/views/SP0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Aminco spectrophotometer with external galvanometer\" title=\"Aminco spectrophotometer with external galvanometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0009/index.php\">SP0009</a>, <b>Aminco</b> spectrophotometer with external galvanometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0011/index.php\"><img src=\"/oesper/museum/table/SP0011/views/SP0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Aminco spectrophotometer with external galvanometer\" title=\"Aminco spectrophotometer with external galvanometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0011/index.php\">SP0011</a>, <b>Aminco</b> spectrophotometer with external galvanometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0010/index.php\"><img src=\"/oesper/museum/table/SP0010/views/SP0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Aminco spectrophotometer with split-field visual readout\" title=\"Aminco spectrophotometer with split-field visual readout\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0010/index.php\">SP0010</a>, <b>Aminco</b> spectrophotometer with split-field visual readout
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>


</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_03/B0019/index.php\"><img src=\"/oesper/museum/case03/shelf_03/B0019/B0019_view1_thumb_smaller.jpg\" width=\"100\" height=\"89\" alt=\"Set of gold-plated analytical weights\" title=\"Set of gold-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_03/B0019/index.php\">B0019</a>, Set of gold-plated <b>analytical weights</b>
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_03/B0018/index.php\"><img src=\"/oesper/museum/case03/shelf_03/B0018/B0018_view1_thumb_smaller.jpg\" width=\"94\" height=\"100\" alt=\"Set of nickel-plated analytical weights\" title=\"Set of nickel-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_03/B0018/index.php\">B0018</a>, Set of nickel-plated <b>analytical weights</b>
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_03/B0011/index.php\"><img src=\"/oesper/museum/case02/shelf_03/B0011/B0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"78\" alt=\"Set of platinum-plated analytical weights\" title=\"Set of platinum-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_03/B0011/index.php\">B0011</a>, Set of platinum-plated <b>analytical weights</b>
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_03/B0012/index.php\"><img src=\"/oesper/museum/case02/shelf_03/B0012/B0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"86\" alt=\"Set of platinum-plated analytical weights\" title=\"Set of platinum-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_03/B0012/index.php\">B0012</a>, Set of platinum-plated <b>analytical weights</b>
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_02/B0005/index.php\"><img src=\"/oesper/museum/case01/shelf_02/B0005/views/B0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"96\" alt=\"Army prescription balance with weights in drachms and grains\" title=\"Army prescription balance with weights in drachms and grains\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_02/B0005/index.php\">B0005</a>, <b>Army</b> prescription balance with weights in drachms and grains
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>


</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_02/PN0019/index.php\"><img src=\"/oesper/museum/case13/shelf_02/PN0019/views/PN0019_view1_thumb_smaller.jpg\" width=\"100\" height=\"98\" alt=\"Babo gas generator \" title=\"Babo gas generator \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_02/PN0019/index.php\">PN0019</a>, <b>Babo</b> gas generator 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_02/B0003/index.php\"><img src=\"/oesper/museum/case01/shelf_02/B0003/views/B0003_view1_thumb_smaller.jpg\" width=\"91\" height=\"100\" alt=\"Brass balance with lever release\" title=\"Brass balance with lever release\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_02/B0003/index.php\">B0003</a>, Brass <b>balance</b> with lever release
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_03/MD0011/index.php\"><img src=\"/oesper/museum/case18/shelf_03/MD0011/views/MD0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"73\" alt=\"Student wooden ball and stick models\" title=\"Student wooden ball and stick models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_03/MD0011/index.php\">MD0011</a>, Student wooden <b>ball and stick</b> models 
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_02/MW0004/index.php\"><img src=\"/oesper/museum/case17/shelf_02/MW0004/views/MW0004_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Glass balloon with brass stopcock for weighing gases\" title=\"Glass balloon with brass stopcock for weighing gases\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_02/MW0004/index.php\">MW0004</a>, Glass <b>balloon</b> with brass stopcock for weighing gases
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_01/H0005/index.php\"><img src=\"/oesper/museum/case04/shelf_01/H0005/views/H0005_view1_thumb_smaller.jpg\" width=\"81\" height=\"100\" alt=\"Barthel's patent wickless blast lamp\" title=\"Barthel's patent wickless blast lamp\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_01/H0005/index.php\">H0005</a>, <b>Barthel's</b> patent wickless blast lamp
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder); 
}



function subpagename2 ()
{
	global $varorder;
	global $varall;
	global $varpagenum;
if ($varall=="false")
 pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";

echo "<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_01/RF0003/index.php\"><img src=\"/oesper/museum/case20/shelf_01/RF0003/views/RF0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Bausch &amp; Lomb refractometer with water jacket\" title=\"Bausch &amp; Lomb refractometer with water jacket\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_01/RF0003/index.php\">RF0003</a>, <b>Bausch &amp; Lomb</b> refractometer with water jacket
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0012/index.php\"><img src=\"/oesper/museum/table/SP0012/views/SP0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"56\" alt=\"Bausch &amp; Lomb universal spectrophotometer\" title=\"Bausch &amp; Lomb universal spectrophotometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0012/index.php\">SP0012</a>, <b>Bausch &amp; Lomb</b> universal spectrophotometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0006/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0006/views/SP0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Bausch &amp; Lomb wave-length spectrometer\" title=\"Bausch &amp; Lomb wave-length spectrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0006/index.php\">SP0006</a>, <b>Bausch &amp; Lomb</b> wave-length spectrometer
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_01/MW0002/index.php\"><img src=\"/oesper/museum/case17/shelf_01/MW0002/views/MW0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Beckmann boiling-point apparatus\" title=\"Beckmann boiling-point apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_01/MW0002/index.php\">MW0002</a>, <b>Beckmann</b> boiling-point apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/PH0003/index.php\"><img src=\"/oesper/museum/table/PH0003/views/PH0003_view1_thumb_smaller.jpg\" width=\"98\" height=\"100\" alt=\"Beckman electronic pH meter (Model 6)\" title=\"Beckman electronic pH meter (Model 6)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/PH0003/index.php\">PH0003</a>, <b>Beckman</b> electronic pH meter (Model 6)
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

</tr>


<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_01/MW0001/index.php\"><img src=\"/oesper/museum/case17/shelf_01/MW0001/views/MW0001_view1_thumb_smaller.jpg\" width=\"66\" height=\"100\" alt=\"Beckmann freezing-point apparatus\" title=\"Beckmann freezing-point apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_01/MW0001/index.php\">MW0001</a>, <b>Beckmann</b> freezing-point apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0013/index.php\"><img src=\"/oesper/museum/table/SP0013/views/SP0013_view1_thumb_smaller.jpg\" width=\"100\" height=\"64\" alt=\"Beckman quartz spectrophotometer\" title=\"Beckman quartz spectrophotometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0013/index.php\">SP0013</a>, <b>Beckman</b> quartz spectrophotometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_02/BP0009/index.php\"><img src=\"/oesper/museum/case19/shelf_02/BP0009/views/BP0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Berzelius lamp and assorted apparatus\" title=\"Berzelius lamp and assorted apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_02/BP0009/index.php\">BP0009</a>, <b>Berzelius</b> lamp and assorted apparatus
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0019/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0019/views/V0019_view1_thumb_smaller.jpg\" width=\"42\" height=\"100\" alt=\"Binks or English burette with wooden stand\" title=\"Binks or English burette with wooden stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0019/index.php\">V0019</a>, <b>Binks</b> or English burette with wooden stand
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0006/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0006/views/CL0006_view1_thumb_smaller.jpg\" width=\"80\" height=\"100\" alt=\"Bock-Benedict balancing colorimeter\" title=\"Bock-Benedict balancing colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0006/index.php\">CL0006</a>, <b>Bock-Benedict</b> balancing colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>



</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_02/MD0006/index.php\"><img src=\"/oesper/museum/case18/shelf_02/MD0006/views/MD0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Metal Bragg folding stereoviewer for viewing stereoviews of crystal structures and printed booklet of hand-drawn stereoviews of crystal structures\" title=\"Metal Bragg folding stereoviewer for viewing stereoviews of crystal structures and printed booklet of hand-drawn stereoviews of crystal structures\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_02/MD0006/index.php\">MD0006</a>, Metal <b>Bragg</b> folding stereoviewer for viewing stereoviews of crystal structures and printed booklet of hand-drawn stereoviews of crystal structures 
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_02/SP0003/index.php\"><img src=\"/oesper/museum/case22/shelf_02/SP0003/views/SP0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Browning student spectroscope\" title=\"Browning student spectroscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_02/SP0003/index.php\">SP0003</a>, <b>Browning</b> student spectroscope
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_01/DS0003/index.php\"><img src=\"/oesper/museum/case08/shelf_01/DS0003/views/DS0003_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Br&uuml;hl fraction collector for vacuum distillation\" title=\"Br&uuml;hl fraction collector for vacuum distillation\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_01/DS0003/index.php\">DS0003</a>, <b>Br&uuml;hl</b> fraction collector for vacuum distillation
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0002/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0002/views/FL0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Buchner vacuum filtration setup with phpirator and pressure gauge\" title=\"Buchner vacuum filtration setup with phpirator and pressure gauge\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0002/index.php\">FL0002</a>, <b>Buchner</b> vacuum filtration setup with phpirator and pressure gauge
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_03/B0017/index.php\"><img src=\"/oesper/museum/case03/shelf_03/B0017/views/B0017_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Bunge short-beam balance\" title=\"Bunge short-beam balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_03/B0017/index.php\">B0017</a>, <b>Bunge</b> short-beam balance
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_03/B0010/index.php\"><img src=\"/oesper/museum/case02/shelf_03/B0010/B0010_view1_thumb_smaller.jpg\" width=\"98\" height=\"100\" alt=\"Bunge short-beam balance with calibrated aluminum beam\" title=\"Bunge short-beam balance with calibrated aluminum beam\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_03/B0010/index.php\">B0010</a>, <b>Bunge</b> short-beam balance with calibrated aluminum beam
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_02/H0006-H0007/index.php\"><img src=\"/oesper/museum/case04/shelf_02/H0006-H0007/views/H0006-H0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"97\" alt=\"Simple Bunsen burner, Brass Tyrell burner\" title=\"Simple Bunsen burner, Brass Tyrell burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_02/H0006-H0007/index.php\">H0006-H0007</a>, Simple <b>Bunsen</b> burner, Brass Tyrell burner

<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0009/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0009/views/EC0009_view1_thumb_smaller.jpg\" width=\"89\" height=\"100\" alt=\"Bunsen carbon cell\" title=\"Bunsen carbon cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0009/index.php\">EC0009</a>, <b>Bunsen</b> carbon cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_02/SP0004/index.php\"><img src=\"/oesper/museum/case22/shelf_02/SP0004/views/SP0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Bunsen-Kirchhoff spectroscope with gas light for scale\" title=\"Bunsen-Kirchhoff spectroscope with gas light for scale\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_02/SP0004/index.php\">SP0004</a>, <b>Bunsen-Kirchhoff</b> spectroscope with gas light for scale
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_02/BP0001/index.php\"><img src=\"/oesper/museum/case19/shelf_02/BP0001/views/BP0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Burner with adaptor and plate for blowpipe analysis and assorted accessories\" title=\"Burner with adaptor and plate for blowpipe analysis and assorted accessories\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_02/BP0001/index.php\">BP0001</a>, <b>Burner</b> with adaptor and plate for blowpipe analysis and assorted accessories
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

</tr>";

if ($varall=="false") 
  pageend ($varpagenum,$varorder);
}

function subpagename3 ()
{

global $varall;
global $varorder;
global $varpagenum;
if($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0014-H0015/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0014-H0015/views/H0014-H0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"96\" alt=\"Metal burner chimneys or draft guards\" title=\"Metal burner chimneys or draft guards\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0014-H0015/index.php\">H0014-H0015</a>, Metal <b>burner chimneys</b> or draft guards</a>
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0013/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0013/views/H0013_view1_thumb_smaller.jpg\" width=\"59\" height=\"100\" alt=\"Vitrified earthenware burner guard and support stand\" title=\"Vitrified earthenware burner guard and support stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0013/index.php\">H0013</a>, Vitrified earthenware <b>burner guard</b> and support stand
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_03/PN0005/index.php\"><img src=\"/oesper/museum/case11/shelf_03/PN0005/views/PN0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"83\" alt=\"Burning lens with pneumatic trough and bell jar\" title=\"Burning lens with pneumatic trough and bell jar\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_03/PN0005/index.php\">PN0005</a>, <b>Burning lens</b> with pneumatic trough and bell jar
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_04/PR0001-PR003/index.php\"><img src=\"/oesper/museum/case06/shelf_04/PR0001-PR003/views/PR0001-PR003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted porcelain casseroles and evaporating dishes\" title=\"Assorted porcelain casseroles and evaporating dishes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_04/PR0001-PR003/index.php\">PR0001-PR003</a>, Assorted porcelain <b>casseroles</b> and evaporating dishes
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0018/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0018/views/H0018_view1_thumb_smaller.jpg\" width=\"72\" height=\"100\" alt=\"All ceramic corrosion-proof Chaddock burner\" title=\"All ceramic corrosion-proof Chaddock burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0018/index.php\">H0018</a>, All ceramic corrosion-proof <b>Chaddock</b> burner
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_02/B0016/index.php\"><img src=\"/oesper/museum/case03/shelf_02/B0016/views/B0016_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Chainomatic analytical balance with black glass base and weight drawer\" title=\"Chainomatic analytical balance with black glass base and weight drawer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_02/B0016/index.php\">B0016</a>, <b>Chainomatic</b> analytical balance with black glass base and weight drawer
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0001-A0002/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0001-A0002/views/A0001-A0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"80\" alt=\"Charcoal muffle furnace and large spare furnace muffle\" title=\"Charcoal muffle furnace and large spare furnace muffle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0001-A0002/index.php\">A0001-A0002</a> <b>Charcoal muffle furnace</b> and large spare furnace muffle
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_01/MD0003/index.php\"><img src=\"/oesper/museum/case18/shelf_01/MD0003/views/MD0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Chemical slide-rule\" title=\"Chemical slide-rule\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_01/MD0003/index.php\">MD0003</a>, <b>Chemical</b> slide-rule
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_01/B0002/index.php\"><img src=\"/oesper/museum/case01/shelf_01/B0002/views/B0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Hand-held coin balance, brass coin weights, and wooden box\" title=\"Hand-held coin balance, brass coin weights, and wooden box\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_01/B0002/index.php\">B0002</a>, Hand-held <b>coin balance</b>, brass coin weights, and wooden box
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/PH0001/index.php\"><img src=\"/oesper/museum/table/PH0001/views/PH0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"86\" alt=\"Coleman pH electrometer (Model 3)\" title=\"Coleman pH electrometer (Model 3)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/PH0001/index.php\">PH0001</a>, <b>Coleman</b> pH electrometer (Model 3)
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/table/PH0002/index.php\"><img src=\"/oesper/museum/table/PH0002/views/PH0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Coleman pH electrometer (Style 200)\" title=\"Coleman pH electrometer (Style 200)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/PH0002/index.php\">PH0002</a>, <b>Coleman</b> pH electrometer (Style 200)
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_03/CL0010/index.php\"><img src=\"/oesper/museum/case21/shelf_03/CL0010/views/CL0010_view1_thumb_smaller.jpg\" width=\"95\" height=\"100\" alt=\"Wooden wedge colorimeter with standards and calibration charts for water\" title=\"Wooden wedge colorimeter with standards and calibration charts for water\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_03/CL0010/index.php\">CL0010</a>, Wooden wedge <b>colorimeter</b> with standards and calibration charts for water
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_03/CA0012/index.php\"><img src=\"/oesper/museum/case10/shelf_03/CA0012/views/CA0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"82\" alt=\"Combustion train (carbon and hydrogen analysis)\" title=\"Combustion train (carbon and hydrogen analysis)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_03/CA0012/index.php\">CA0012</a>, <b>Combustion train</b> (carbon and hydrogen analysis)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0003-A0005/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0003-A0005/views/A0003-A0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"99\" alt=\"Large fire-clay crucible, large cast-iron crucible, cast-iron ladle\" title=\"Large fire-clay crucible, large cast-iron crucible, cast-iron ladle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0003-A0005/index.php\">A0003-A0005</a>, Large fire-clay <b>crucible</b>, large cast-iron crucible, cast-iron ladle
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A00012/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A00012/views/A00012_view1_thumb_smaller.jpg\" width=\"100\" height=\"74\" alt=\"Fused silica crucible with lid\" title=\"Fused silica crucible with lid\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A00012/index.php\">A00012</a>, Fused silica <b>crucible</b> with lid
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0006-A0008/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0006-A0008/views/A0006-A0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Three medium fire-clay crucibles\" title=\"Three medium fire-clay crucibles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0006-A0008/index.php\">A0006-A0008</a>, Three medium fire-clay <b>crucibles</b>
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_01/DS0002/index.php\"><img src=\"/oesper/museum/case08/shelf_01/DS0002/views/DS0002_view1_thumb_smaller.jpg\" width=\"54\" height=\"100\" alt=\"Crushed ice condenser for highly-volatile liquids\" title=\"Crushed ice condenser for highly-volatile liquids\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_01/DS0002/index.php\">DS0002</a>, <b>Crushed ice condenser</b> for highly-volatile liquids
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_01/MD0001-MD0002/index.php\"><img src=\"/oesper/museum/case18/shelf_01/MD0001-MD0002/views/MD0001-MD0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Crystal models\" title=\"Crystal models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_01/MD0001-MD0002/index.php\">MD0001-MD0002</a>, <b>Crystal</b> models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_03/PS0003/index.php\"><img src=\"/oesper/museum/case20/shelf_03/PS0003/views/PS0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Large mounted crystal of iceland spar with printed sign to illustrate double refraction\" title=\"Large mounted crystal of iceland spar with printed sign to illustrate double refraction\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_03/PS0003/index.php\">PS0003</a>, Large mounted <b>crystal</b> of iceland spar with printed sign to illustrate double refraction
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_02/B0004/index.php\"><img src=\"/oesper/museum/case01/shelf_02/B0004/views/B0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"69\" alt=\"Set of six nested brass cup weights\" title=\"Set of six nested brass cup weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_02/B0004/index.php\">B0004</a>, Set of six nested brass <b>cup weights</b>
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

</tr>";


if ($varall=="false")
  pageend ($varpagenum,$varorder);
}


function subpagename4 () 
{
global $varall;
global $varorder;
global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A00011/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A00011/views/A00011_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Electric cupel furnace\" title=\"Electric cupel furnace\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A00011/index.php\">A00011</a>, Electric <b>cupel</b> furnace
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0001/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0001/views/EC0001_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Daniell gravity cell (Crowfoot form)\" title=\"Daniell gravity cell (Crowfoot form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0001/index.php\">EC0001</a>, <b>Daniell</b> gravity cell (Crowfoot form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0002/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0002/views/EC0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Daniell gravity cell (Meidinger form)\" title=\"Daniell gravity cell (Meidinger form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0002/index.php\">EC0002</a>, <b>Daniell</b> gravity cell (Meidinger form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0015/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0015/views/V0015_view1_thumb_smaller.jpg\" width=\"88\" height=\"100\" alt=\"Descroizilles chlorometer or &quot;Berthollimeter&quot; with accompanying pipette and beaker\" title=\"Descroizilles chlorometer or &quot;Berthollimeter&quot; with accompanying pipette and beaker\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0015/index.php\">V0015</a>, <b>Descroizilles</b> chlorometer or &quot;Berthollimeter&quot; with accompanying pipette and beaker
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0007/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0007/views/SP0007_view1_thumb_smaller.jpg\" width=\"98\" height=\"100\" alt=\"Hand-held direct-vision spectroscope\" title=\"Hand-held direct-vision spectroscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0007/index.php\">SP0007</a>, Hand-held <b>direct-vision</b> spectroscope
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0004/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0004/views/CL0004_view1_thumb_smaller.jpg\" width=\"80\" height=\"100\" alt=\"Duboscq balancing colorimeter\" title=\"Duboscq balancing colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0004/index.php\">CL0004</a>, <b>Duboscq</b> balancing colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_02/MW0005/index.php\"><img src=\"/oesper/museum/case17/shelf_02/MW0005/views/MW0005_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Dumas vapor-density apparatus\" title=\"Dumas vapor-density apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_02/MW0005/index.php\">MW0005</a>, <b>Dumas</b> vapor-density apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0004/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0004/views/EC0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"95\" alt=\"Edison-Lalande cell\" title=\"Edison-Lalande cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0004/index.php\">EC0004</a>, <b>Edison-Lalande</b> cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/EC0012/index.php\"><img src=\"/oesper/museum/case20/shelf_02/EC0012/views/EC0012_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Apparatus for electrogravimetric analysis\" title=\"Apparatus for electrogravimetric analysis\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/EC0012/index.php\">EC0012</a>, Apparatus for <b>electrogravimetric</b> analysis
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0008/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0008/views/EC0008_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Electrolysis cell\" title=\"Electrolysis cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0008/index.php\">EC0008</a>, <b>Electrolysis</b> cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_04/MD0012/index.php\"><img src=\"/oesper/museum/case18/shelf_04/MD0012/views/MD0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Equivalency blocks\" title=\"Equivalency blocks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_04/MD0012/index.php\">MD0012</a>, <b>Equivalency</b> blocks
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/EX0002/index.php\"><img src=\"/oesper/museum/case14/shelf_01/EX0002/views/EX0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Glass extraction or percolation cone\" title=\"Glass extraction or percolation cone\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/EX0002/index.php\">EX0002</a>, Glass <b>extraction</b> or percolation cone
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0005/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0005/views/FL0005_view1_thumb_smaller.jpg\" width=\"90\" height=\"100\" alt=\"Wooden filtration stand and accessories\" title=\"Wooden filtration stand and accessories\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0005/index.php\">FL0005</a>, Wooden <b>filtration stand</b> and accessories
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_02/DS0006/index.php\"><img src=\"/oesper/museum/case08/shelf_02/DS0006/views/DS0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted fractionation columns and adapters\" title=\"Assorted fractionation columns and adapters\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_02/DS0006/index.php\">DS0006</a>, Assorted <b>fractionation columns</b> and adapters
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0007/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0007/views/FL0007_view1_thumb_smaller.jpg\" width=\"77\" height=\"100\" alt=\"Brass funnel coil for hot or cold filtration\" title=\"Brass funnel coil for hot or cold filtration\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0007/index.php\">FL0007</a>, Brass <b>funnel coil</b> for hot or cold filtration
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0006/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0006/views/FL0006_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Brass funnel jacket for hot filtration\" title=\"Brass funnel jacket for hot filtration\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0006/index.php\">FL0006</a>, Brass <b>funnel jacket</b> for hot filtration
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_01/PN0001/index.php\"><img src=\"/oesper/museum/case11/shelf_01/PN0001/views/PN0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Gas bladder with wooden spigot\" title=\"Gas bladder with wooden spigot\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_01/PN0001/index.php\">PN0001</a>, <b>Gas bladder</b> with wooden spigot
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0003-GA0004/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0003-GA0004/views/GA0003-GA0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"72\" alt=\"Metal and glass gas collection tubes\" title=\"Metal and glass gas collection tubes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0003-GA0004/index.php\">GA0003-GA0004</a>, Metal and glass <b>gas collection tubes</b>
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_02/PN0020-PN0021/index.php\"><img src=\"/oesper/museum/case13/shelf_02/PN0020-PN0021/views/PN0020-PN0021_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Assorted gas generator bottles \" title=\"Assorted gas generator bottles \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_02/PN0020-PN0021/index.php\">PN0020-PN0021</a>, Assorted <b>gas generator</b> bottles 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case12/shelf_01/PN0007/index.php\"><img src=\"/oesper/museum/case12/shelf_01/PN0007/views/PN0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"68\" alt=\"Gas generator, reagents, safety trap, pneumatic trough, and deflagration spoon\" title=\"Gas generator, reagents, safety trap, pneumatic trough, and deflagration spoon\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case12/shelf_01/PN0007/index.php\">PN0007</a>, <b>Gas generator</b>, reagents, safety trap, pneumatic trough, and deflagration spoon
<br/><a href=\"/oesper/museum/case12/index.html\">Case 12</a>, Pneumatic Chemistry&nbsp;II
</td>

</tr>";


if ($varall=="false")
  pageend ($varpagenum,$varorder);
}


function subpagename5 ()
{
global $varall;
global $varorder;
global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";


	echo "<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0024/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0024/views/H0024_view1_thumb_smaller.jpg\" width=\"100\" height=\"58\" alt=\"Cast iron gas hot plate\" title=\"Cast iron gas hot plate\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0024/index.php\">H0024</a>, Cast iron <b>gas hot plate</b>
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0018/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0018/views/V0018_view1_thumb_smaller.jpg\" width=\"37\" height=\"100\" alt=\"Gay-Lussac burette with wooden stand\" title=\"Gay-Lussac burette with wooden stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0018/index.php\">V0018</a>, <b>Gay-Lussac</b> burette with wooden stand
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_02/HD0008/index.php\"><img src=\"/oesper/museum/case15/shelf_02/HD0008/views/HD0008_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Gay-Lussac universal support stand (wood)\" title=\"Gay-Lussac universal support stand (wood)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_02/HD0008/index.php\">HD0008</a>, <b>Gay-Lussac</b> universal support stand (wood)
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_04/MD0014/index.php\"><img src=\"/oesper/museum/case18/shelf_04/MD0014/views/MD0014_view1_thumb_smaller.jpg\" width=\"72\" height=\"100\" alt=\"Wood and brass glyptic models\" title=\"Wood and brass glyptic models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_04/MD0014/index.php\">MD0014</a>, Wood and brass <b>glyptic models</b> 
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_02/V0010-V0014/index.php\"><img src=\"/oesper/museum/case05/shelf_02/V0010-V0014/views/V0010-V0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Assorted graduated cylinders\" title=\"Assorted graduated cylinders\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_02/V0010-V0014/index.php\">V0010-V0014</a>, Assorted <b>graduated cylinders</b>
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


</tr>


<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_02/V0001-V0005/index.php\"><img src=\"/oesper/museum/case05/shelf_02/V0001-V0005/views/V0001-V0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted metric and English graduated measuring glasses\" title=\"Assorted metric and English graduated measuring glasses\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_02/V0001-V0005/index.php\">V0001-V0005</a>, Assorted metric and English <b>graduated measuring glasses</b>
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0016-V0017/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0016-V0017/views/V0016-V0017_view1_thumb_smaller.jpg\" width=\"59\" height=\"100\" alt=\"Large graduated mixing cylinder with stopper and large volumetric flask\" title=\"Large graduated mixing cylinder with stopper and large volumetric flask\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0016-V0017/index.php\">V0016-V0017</a>, Large <b>graduated mixing cylinder</b> with stopper and large volumetric flask 
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0011/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0011/views/EC0011_view1_thumb_smaller.jpg\" width=\"66\" height=\"100\" alt=\"Dichromate cell (Grenet form)\" title=\"Dichromate cell (Grenet form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0011/index.php\">EC0011</a>, Dichromate cell (<b>Grenet</b> form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0007/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0007/views/EC0007_view1_thumb_smaller.jpg\" width=\"71\" height=\"100\" alt=\"Grove nitric acid cell\" title=\"Grove nitric acid cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0007/index.php\">EC0007</a>, <b>Grove</b> nitric acid cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0016-H0017/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0016-H0017/views/H0016-H0017_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Three-burner heating train and gas burner\" title=\"Three-burner heating train and gas burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0016-H0017/index.php\">H0016-H0017</a>, Three-burner <b>heating train</b> and gas burner
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_01/CL0003/index.php\"><img src=\"/oesper/museum/case21/shelf_01/CL0003/views/CL0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"93\" alt=\"Hellige disk colorimeter with electric light source\" title=\"Hellige disk colorimeter with electric light source\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_01/CL0003/index.php\">CL0003</a>, <b>Hellige</b> disk colorimeter with electric light source
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_01/CL0001/index.php\"><img src=\"/oesper/museum/case21/shelf_01/CL0001/views/CL0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"96\" alt=\"Hellige disk colorimeter with sample tubes and color comparison wheels\" title=\"Hellige disk colorimeter with sample tubes and color comparison wheels\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_01/CL0001/index.php\">CL0001</a>, <b>Hellige</b> disk colorimeter with sample tubes and color comparison wheels
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0007/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0007/views/CL0007_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Hellige wedge colorimeter\" title=\"Hellige wedge colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0007/index.php\">CL0007</a>, <b>Hellige</b> wedge colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0005/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0005/views/GA0005_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Hempel gas burette with leveling bottle\" title=\"Hempel gas burette with leveling bottle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0005/index.php\">GA0005</a>, <b>Hempel</b> gas burette with leveling bottle
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0002/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0002/views/GA0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Hempel gas pipette\" title=\"Hempel gas pipette\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0002/index.php\">GA0002</a>, <b>Hempel</b> gas pipette
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A00010/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A00010/views/A00010_view1_thumb_smaller.jpg\" width=\"100\" height=\"77\" alt=\"Nest of four Hessian sand crucibles\" title=\"Nest of four Hessian sand crucibles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A00010/index.php\">A00010</a>, Nest of four <b>Hessian</b> sand crucibles
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0006/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0006/views/EC0006_view1_thumb_smaller.jpg\" width=\"69\" height=\"100\" alt=\"Hofmann electrolysis cell (V-form)\" title=\"Hofmann electrolysis cell (V-form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0006/index.php\">EC0006</a>, <b>Hofmann</b> electrolysis cell (V-form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0010/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0010/views/EC0010_view1_thumb_smaller.jpg\" width=\"60\" height=\"100\" alt=\"Hofmann electrolysis cell (H-form)\" title=\"Hofmann electrolysis cell (H-form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0010/index.php\">EC0010</a>, <b>Hofmann</b> electrolysis cell (H-form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/DA0001/index.php\"><img src=\"/oesper/museum/case16/shelf_02/DA0001/views/DA0001_view1_thumb_smaller.jpg\" width=\"40\" height=\"100\" alt=\"Hofmann lecture apparatus for volumetric synthesis\" title=\"Hofmann lecture apparatus for volumetric synthesis\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/DA0001/index.php\">DA0001</a>, <b>Hofmann</b> lecture apparatus for volumetric synthesis
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0001-SG0005/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0001-SG0005/views/SG0001-SG0005_view1_thumb_smaller.jpg\" width=\"66\" height=\"100\" alt=\"Assorted hydrometers and hydrometer jars\" title=\"Assorted hydrometers and hydrometer jars\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0001-SG0005/index.php\">SG0001-SG0005</a>, Assorted <b>hydrometers</b> and hydrometer jars
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

</tr>";


if ($varall=="false")
  pageend ($varpagenum,$varorder);
}


function subpagename6 ()
{
global $varall;
global $varorder;
global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varoder);

else
echo "<tr style=\"page-break-before:always;\">";


	echo "<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0010/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0010/views/SG0010_view1_thumb_smaller.jpg\" width=\"68\" height=\"100\" alt=\"Hydrometers and wooden storage rack\" title=\"Hydrometers and wooden storage rack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0010/index.php\">SG0010</a>, <b>Hydrometers</b> and wooden storage rack
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_02/MD0007/index.php\"><img src=\"/oesper/museum/case18/shelf_02/MD0007/views/MD0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"90\" alt=\"Ionic lattice model\" title=\"Ionic lattice model\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_02/MD0007/index.php\">MD0007</a>, <b>Ionic lattice</b> model
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_04/MD0013/index.php\"><img src=\"/oesper/museum/case18/shelf_04/MD0013/views/MD0013_view1_thumb_smaller.jpg\" width=\"100\" height=\"73\" alt=\"Ceramic Kekul&eacute; &quot;sausage&quot; models\" title=\"Ceramic Kekul&eacute; &quot;sausage&quot; models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_04/MD0013/index.php\">MD0013</a>, Ceramic <b>Kekul&eacute;</b> &quot;sausage&quot; models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_03/MD0010/index.php\"><img src=\"/oesper/museum/case18/shelf_03/MD0010/views/MD0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Kekul&eacute;-von Baeyer tetrahedral ball and wire models\" title=\"Kekul&eacute;-von Baeyer tetrahedral ball and wire models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_03/MD0010/index.php\">MD0010</a>, <b>Kekul&eacute;-von Baeyer</b> tetrahedral ball and wire models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_02/PN0016-PN0018/index.php\"><img src=\"/oesper/museum/case13/shelf_02/PN0016-PN0018/views/PN0016-PN0018_view1_thumb_smaller.jpg\" width=\"93\" height=\"100\" alt=\"Assorted Kipp gas generators\" title=\"Assorted Kipp gas generators\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_02/PN0016-PN0018/index.php\">PN0016-PN0018</a>, Assorted <b>Kipp</b> gas generators
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>


</tr>


<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0015/index.php\"><img src=\"/oesper/museum/table/SP0015/views/SP0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Klett-Summerson photoelectric colorimeter\" title=\"Klett-Summerson photoelectric colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0015/index.php\">SP0015</a>, <b>Klett-Summerson</b> photoelectric colorimeter
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_01/CL0002/index.php\"><img src=\"/oesper/museum/case21/shelf_01/CL0002/views/CL0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"LaMotte comparison colorimeter with sealed pH standards\" title=\"LaMotte comparison colorimeter with sealed pH standards\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_01/CL0002/index.php\">CL0002</a>, <b>LaMotte</b> comparison colorimeter with sealed pH standards
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0003/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0003/views/EC0003_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Leclanch&eacute; cell\" title=\"Leclanch&eacute; cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0003/index.php\">EC0003</a>, <b>Leclanch&eacute;</b> cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0008/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0008/views/CL0008_view1_thumb_smaller.jpg\" width=\"87\" height=\"100\" alt=\"Leitz wedge colorimeter with electric light source\" title=\"Leitz wedge colorimeter with electric light source\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0008/index.php\">CL0008</a>, <b>Leitz</b> wedge colorimeter with electric light source
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_02/CA0009/index.php\"><img src=\"/oesper/museum/case10/shelf_02/CA0009/views/CA0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"52\" alt=\"Early Liebig combustion train (option for carbon and hydrogen analysis)\" title=\"Early Liebig combustion train (option for carbon and hydrogen analysis)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_02/CA0009/index.php\">CA0009</a>, Early <b>Liebig</b> combustion train (option for carbon and hydrogen analysis)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_02/CA0010/index.php\"><img src=\"/oesper/museum/case10/shelf_02/CA0010/views/CA0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Early Liebig combustion train (option for nitrogen analysis)\" title=\"Early Liebig combustion train (option for nitrogen analysis)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_02/CA0010/index.php\">CA0010</a>, Early <b>Liebig</b> combustion train (option for nitrogen analysis)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_01/DS0004/index.php\"><img src=\"/oesper/museum/case08/shelf_01/DS0004/views/DS0004_view1_thumb_smaller.jpg\" width=\"89\" height=\"100\" alt=\"Liebig counter-current condenser with iron stand\" title=\"Liebig counter-current condenser with iron stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_01/DS0004/index.php\">DS0004</a>, <b>Liebig</b> counter-current condenser with iron stand
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_02/DS0007/index.php\"><img src=\"/oesper/museum/case08/shelf_02/DS0007/views/DS0007_view1_thumb_smaller.jpg\" width=\"88\" height=\"100\" alt=\"Complete Liebig distillation train\" title=\"Complete Liebig distillation train\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_02/DS0007/index.php\">DS0007</a>, Complete <b>Liebig</b> distillation train
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_01/GL0001-GL0006/index.php\"><img src=\"/oesper/museum/case06/shelf_01/GL0001-GL0006/views/GL0001-GL0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted lime glass and early borosilicate glass beakers\" title=\"Assorted lime glass and early borosilicate glass beakers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_01/GL0001-GL0006/index.php\">GL0001-GL0006</a>, Assorted <b>lime glass</b> and early borosilicate glass beakers 
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_02/GL0007-GL0011/index.php\"><img src=\"/oesper/museum/case06/shelf_02/GL0007-GL0011/views/GL0007-GL0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted lime glass and early borosilicate glass flasks\" title=\"Assorted lime glass and early borosilicate glass flasks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_02/GL0007-GL0011/index.php\">GL0007-GL0011</a>, Assorted <b>lime glass</b> and early borosilicate glass flasks
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_02/B0009/index.php\"><img src=\"/oesper/museum/case02/shelf_02/B0009/B0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"69\" alt=\"Long-beam analytical balance, with ivory case knobs\" title=\"Long-beam analytical balance, with ivory case knobs\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_02/B0009/index.php\">B0009</a>, <b>Long-beam</b> analytical balance, with ivory case knobs
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_01/MW0003/index.php\"><img src=\"/oesper/museum/case17/shelf_01/MW0003/views/MW0003_view1_thumb_smaller.jpg\" width=\"65\" height=\"100\" alt=\"McCoy boiling-point apparatus\" title=\"McCoy boiling-point apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_01/MW0003/index.php\">MW0003</a>, <b>McCoy</b> boiling-point apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_02/H0011-H0012/index.php\"><img src=\"/oesper/museum/case04/shelf_02/H0011-H0012/views/H0011-H0012_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Large Meker gas burners\" title=\"Large Meker gas burners\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_02/H0011-H0012/index.php\">H0011-H0012</a>, Large <b>Meker</b> gas burners
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_02/H0008-H0010/index.php\"><img src=\"/oesper/museum/case04/shelf_02/H0008-H0010/views/H0008-H0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Small Meker gas burners\" title=\"Small Meker gas burners\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_02/H0008-H0010/index.php\">H0008-H0010</a>, Small <b>Meker</b> gas burners
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/MS0003/index.php\"><img src=\"/oesper/museum/case20/shelf_02/MS0003/views/MS0003_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metallurgical microscope\" title=\"Metallurgical microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/MS0003/index.php\">MS0003</a>, <b>Metallurgical</b> microscope
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

</tr>";



if ($varall=="false")
  pageend ($varpagenum,$varorder);
}



function subpagename7 ()
{
global $varall;
global $varorder;
global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
echo "<tr style=\"page-break-before:always;\">";

	echo "<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0020-H0022/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0020-H0022/views/H0020-H0022_view1_thumb_smaller.jpg\" width=\"100\" height=\"63\" alt=\"Micro burners\" title=\"Micro burners\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0020-H0022/index.php\">H0020-H0022</a>, <b>Micro burners</b>
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0022/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0022/views/V0022_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Mohr burettes with wooden support stand, assorted pinch clamps, and burette floats\" title=\"Mohr burettes with wooden support stand, assorted pinch clamps, and burette floats\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0022/index.php\">V0022</a>, <b>Mohr</b> burettes with wooden support stand, assorted pinch clamps, and burette floats
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0001/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0001/views/MP0001_view1_thumb_smaller.jpg\" width=\"84\" height=\"100\" alt=\"Brass mortar and pestle\" title=\"Brass mortar and pestle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0001/index.php\">MP0001</a>, Brass <b>mortar and pestle</b>
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0002/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0002/views/MP0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"88\" alt=\"Brass mortar and pestle\" title=\"Brass mortar and pestle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0002/index.php\">MP0002</a>, Brass <b>mortar and pestle</b>
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0003/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0003/views/MP0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"87\" alt=\"Cast iron mortar and pestle\" title=\"Cast iron mortar and pestle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0003/index.php\">MP0003</a>, Cast iron <b>mortar and pestle</b>
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0004/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0004/views/MP0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Porcelain mortar and pestle with wooden handle\" title=\"Porcelain mortar and pestle with wooden handle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0004/index.php\">MP0004</a>, Porcelain <b>mortar and pestle</b> with wooden handle
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_03/CL0009/index.php\"><img src=\"/oesper/museum/case21/shelf_03/CL0009/views/CL0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"100\" alt=\"Nessler tubes and racks\" title=\"Nessler tubes and racks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_03/CL0009/index.php\">CL0009</a>, <b>Nessler</b> tubes and racks
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/MS0001/index.php\"><img src=\"/oesper/museum/case20/shelf_02/MS0001/views/MS0001_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Optical microscope\" title=\"Optical microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/MS0001/index.php\">MS0001</a>, <b>Optical</b> microscope
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0001/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0001/views/GA0001_view1_thumb_smaller.jpg\" width=\"63\" height=\"100\" alt=\"Orsat apparatus\" title=\"Orsat apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0001/index.php\">GA0001</a>, <b>Orsat</b> apparatus
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_03/PN0004/index.php\"><img src=\"/oesper/museum/case11/shelf_03/PN0004/views/PN0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"89\" alt=\"Apparatus for the preparation of oxygen gas\" title=\"Apparatus for the preparation of oxygen gas\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_03/PN0004/index.php\">PN0004</a>, Apparatus for the preparation of <b>oxygen</b> gas
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/FL0001/index.php\"><img src=\"/oesper/museum/case14/shelf_01/FL0001/views/FL0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Set of nested brass particle sieves\" title=\"Set of nested brass particle sieves\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/FL0001/index.php\">FL0001</a>, Set of nested brass <b>particle sieves</b>
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_01/MD0004-MD0005/index.php\"><img src=\"/oesper/museum/case18/shelf_01/MD0004-MD0005/views/MD0004-MD0005_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Three-dimensional periodic tables\" title=\"Three-dimensional periodic tables\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_01/MD0004-MD0005/index.php\">MD0004-MD0005</a>, Three-dimensional <b>periodic tables</b>
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0020/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0020/views/V0020_view1_thumb_smaller.jpg\" width=\"50\" height=\"100\" alt=\"Wooden pipette stand and assorted pipettes\" title=\"Wooden pipette stand and assorted pipettes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0020/index.php\">V0020</a>, Wooden <b>pipette</b> stand and assorted pipettes
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0021/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0021/views/V0021_view1_thumb_smaller.jpg\" width=\"100\" height=\"59\" alt=\"Large pipette with wire support stand\" title=\"Large pipette with wire support stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0021/index.php\">V0021</a>, Large <b>pipette</b> with wire support stand
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_01/B0007/index.php\"><img src=\"/oesper/museum/case02/shelf_01/B0007/B0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"68\" alt=\"Double-pan platform balance (Harvard Trip Balance)\" title=\"Double-pan platform balance (Harvard Trip Balance)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_01/B0007/index.php\">B0007</a>, Double-pan <b>platform balance</b> (Harvard Trip Balance)
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_01/B0013/index.php\"><img src=\"/oesper/museum/case03/shelf_01/B0013/views/B0013_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Single-pan platform balance with triple beam sliding scales\" title=\"Single-pan platform balance with triple beam sliding scales\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_01/B0013/index.php\">B0013</a>, Single-pan <b>platform balance</b> with triple beam sliding scales
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_01/B0006/index.php\"><img src=\"/oesper/museum/case02/shelf_01/B0006/B0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"73\" alt=\"Double-pan platform balance with wooden weight rack\" title=\"Double-pan platform balance with wooden weight rack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_01/B0006/index.php\">B0006</a>, Double-pan <b>platform balance</b> with wooden weight rack
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_01/B0008/index.php\"><img src=\"/oesper/museum/case02/shelf_01/B0008/B0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"74\" alt=\"Double-pan platform box balance\" title=\"Double-pan platform box balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_01/B0008/index.php\">B0008</a>, Double-pan <b>platform box balance</b>
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_01/B0015/index.php\"><img src=\"/oesper/museum/case03/shelf_01/B0015/views/B0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Boxed platform torsion balance with single slide scale\" title=\"Boxed platform torsion balance with single slide scale\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_01/B0015/index.php\">B0015</a>, Boxed <b>platform torsion balance</b> with single slide scale
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0023/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0023/views/PN0023_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Galvanized metal pneumatic trough with collection bottle \" title=\"Galvanized metal pneumatic trough with collection bottle \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0023/index.php\">PN0023</a>, Galvanized metal <b>pneumatic trough</b> with collection bottle 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>


</td>

</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder);
}


function subpagename8 ()
{
global $varall;
global $varorder;
global $varpagenum;
if($varall=="false")
  pagestart ($varpagenum,$varorder);

else
echo "<tr style=\"page-break-before:always;\">";

	echo "<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0024/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0024/views/PN0024_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Porcelain pneumatic trough with collection bottle\" title=\"Porcelain pneumatic trough with collection bottle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0024/index.php\">PN0024</a>, Porcelain <b>pneumatic trough</b> with collection bottle 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0022/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0022/views/PN0022_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Enameled metal pneumatic trough with collection bottles \" title=\"Enameled metal pneumatic trough with collection bottles \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0022/index.php\">PN0022</a>, Enameled metal <b>pneumatic trough</b> with collection bottles 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_01/PN0002/index.php\"><img src=\"/oesper/museum/case11/shelf_01/PN0002/views/PN0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Wooden pneumatic trough with Collection Containers and Gas Generators\" title=\"Wooden pneumatic trough with collection containers and gas generators\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_01/PN0002/index.php\">PN0002</a>, Wooden <b>pneumatic trough</b> with collection containers and gas generators
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0025/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0025/views/PN0025_view1_thumb_smaller.jpg\" width=\"100\" height=\"85\" alt=\"Pneumatic trough with porcelain beehive stand and collection bottle \" title=\"Pneumatic trough with porcelain beehive stand and collection bottle \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0025/index.php\">PN0025</a>, <b>Pneumatic trough</b> with porcelain beehive stand and collection bottle  
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_03/PN0006/index.php\"><img src=\"/oesper/museum/case11/shelf_03/PN0006/views/PN0006_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Glass pneumatic trough, wooden tripod and inverted flask \" title=\"Glass pneumatic trough, wooden tripod and inverted flask \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_03/PN0006/index.php\">PN0006</a>, Glass <b>pneumatic trough</b>, wooden tripod and inverted flask
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_03/PS0001/index.php\"><img src=\"/oesper/museum/case20/shelf_03/PS0001/views/PS0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Polariscope with constant temperature bath\" title=\"Polariscope with constant temperature bath\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_03/PS0001/index.php\">PS0001</a>, <b>Polariscope</b> with constant temperature bath
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_03/PS0002/index.php\"><img src=\"/oesper/museum/case20/shelf_03/PS0002/views/PS0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"65\" alt=\"Hand-held polarizers\" title=\"Hand-held polarizers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_03/PS0002/index.php\">PS0002</a>, Hand-held <b>polarizers</b>
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/MS0002/index.php\"><img src=\"/oesper/museum/case20/shelf_02/MS0002/views/MS0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Polarizing microscope\" title=\"Polarizing microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/MS0002/index.php\">MS0002</a>, <b>Polarizing</b> microscope
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0003-FL0004/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0003-FL0004/views/FL0003-FL0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Porcelain supports for cloth filtration\" title=\"Porcelain supports for cloth filtration\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0003-FL0004/index.php\">FL0003-FL0004</a>, <b>Porcelain</b> supports for cloth filtration
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_01/RF0002/index.php\"><img src=\"/oesper/museum/case20/shelf_01/RF0002/views/RF0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Pulfrich refractometer\" title=\"Pulfrich refractometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_01/RF0002/index.php\">RF0002</a>, <b>Pulfrich</b> refractometer
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0006-SG0009/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0006-SG0009/views/SG0006-SG0009_view1_thumb_smaller.jpg\" width=\"80\" height=\"100\" alt=\"Assorted pycnometers\" title=\"Assorted pycnometers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0006-SG0009/index.php\">SG0006-SG0009</a>, Assorted <b>pycnometers</b>
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_02/BP0003-BP0008/index.php\"><img src=\"/oesper/museum/case19/shelf_02/BP0003-BP0008/views/BP0003-BP0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Reagent box and assorted blowpipes\" title=\"Reagent box and assorted blowpipes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_02/BP0003-BP0008/index.php\">BP0003-BP0008</a>, <b>Reagent</b> box and assorted blowpipes
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_02/DS0005/index.php\"><img src=\"/oesper/museum/case08/shelf_02/DS0005/views/DS0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"95\" alt=\"Assorted reflux condensers\" title=\"Assorted reflux condensers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_02/DS0005/index.php\">DS0005</a>, Assorted <b>reflux</b> condensers
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_02/PN0003/index.php\"><img src=\"/oesper/museum/case11/shelf_02/PN0003/views/PN0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Retort, charcoal furnace and gas bladder receiver\" title=\"Retort, charcoal furnace and gas bladder receiver\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_02/PN0003/index.php\">PN0003</a>, <b>Retort</b>, charcoal furnace and gas bladder receiver
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case12/shelf_02/PN0008/index.php\"><img src=\"/oesper/museum/case12/shelf_02/PN0008/views/PN0008_view1_thumb_smaller.jpg\" width=\"76\" height=\"100\" alt=\"Retort, charcoal furnace, pneumatic trough and gas bladder\" title=\"Retort, charcoal furnace, pneumatic trough and gas bladder\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case12/shelf_02/PN0008/index.php\">PN0008</a>, <b>Retort</b>, charcoal furnace, pneumatic trough and gas bladder
<br/><a href=\"/oesper/museum/case12/index.html\">Case 12</a>, Pneumatic Chemistry&nbsp;II
</td>


</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_02/DS0013/index.php\"><img src=\"/oesper/museum/case09/shelf_02/DS0013/views/DS0013_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Three-necked retort receiver with woven support ring\" title=\"Three-necked retort receiver with woven support ring\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_02/DS0013/index.php\">DS0013</a>, Three-necked <b>retort</b> receiver with woven support ring
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_02/DS0012/index.php\"><img src=\"/oesper/museum/case09/shelf_02/DS0012/views/DS0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"68\" alt=\"Brown-glass retort with quilled receiver and charcoal furnace\" title=\"Brown-glass retort with quilled receiver and charcoal furnace\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_02/DS0012/index.php\">DS0012</a>, Brown-glass <b>retort</b> with quilled receiver and charcoal furnace
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_03/DS0014/index.php\"><img src=\"/oesper/museum/case09/shelf_03/DS0014/views/DS0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Large lime-glass retort with receiver, alcohol lamp, cast-iron stands, and woven support ring\" title=\"Large lime-glass retort with receiver, alcohol lamp, cast-iron stands, and woven support ring\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_03/DS0014/index.php\">DS0014</a>, Large lime-glass <b>retort</b> with receiver, alcohol lamp, cast-iron stands, and woven support ring
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0023/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0023/views/H0023_view1_thumb_smaller.jpg\" width=\"69\" height=\"100\" alt=\"Ring burner\" title=\"Ring burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0023/index.php\">H0023</a>, <b>Ring burner</b>
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0019/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0019/views/H0019_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Roger ring burner for crucibles\" title=\"Roger ring burner for crucibles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0019/index.php\">H0019</a>, <b>Roger</b> ring burner for crucibles
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


</tr>";




if ($varall=="false") 
  pageend ($varpagenum,$varorder);
}

function subpagename9 ()
{
global $varall;
global $varorder;
global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";

echo "<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0014/index.php\"><img src=\"/oesper/museum/table/SP0014/views/SP0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"65\" alt=\"Rouy Photrometer\" title=\"Rouy Photrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0014/index.php\">SP0014</a>, <b>Rouy</b> Photrometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_02/MW0006/index.php\"><img src=\"/oesper/museum/case17/shelf_02/MW0006/views/MW0006_view1_thumb_smaller.jpg\" width=\"54\" height=\"100\" alt=\"Schilling gas-effusion apparatus\" title=\"Schilling gas-effusion apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_02/MW0006/index.php\">MW0006</a>, <b>Schilling</b> gas-effusion apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0009/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0009/views/A0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Nest of four earthenware scorification dishes\" title=\"Nest of four earthenware scorification dishes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0009/index.php\">A0009</a>, Nest of four earthenware <b>scorification dishes</b>
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/SD0001/index.php\"><img src=\"/oesper/museum/case14/shelf_01/SD0001/views/SD0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"94\" alt=\"Glazed earthenware sedimentation vat\" title=\"Glazed earthenware sedimentation vat\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/SD0001/index.php\">SD0001</a>, Glazed earthenware <b>sedimentation vat</b>
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/EX0001/index.php\"><img src=\"/oesper/museum/case14/shelf_01/EX0001/views/EX0001_view1_thumb_smaller.jpg\" width=\"64\" height=\"100\" alt=\"Separatory funnel\" title=\"Separatory funnel\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/EX0001/index.php\">EX0001</a>, <b>Separatory funnel</b>
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>


</tr>

<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/EX0003/index.php\"><img src=\"/oesper/museum/case14/shelf_01/EX0003/views/EX0003_view1_thumb_smaller.jpg\" width=\"50\" height=\"100\" alt=\"Soxhlet fat extractor with steam bath\" title=\"Soxhlet fat extractor with steam bath\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/EX0003/index.php\">EX0003</a>, <b>Soxhlet</b> fat extractor with steam bath
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0012/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0012/views/SG0012_view1_thumb_smaller.jpg\" width=\"78\" height=\"100\" alt=\"Student specific gravity balance\" title=\"Student specific gravity balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0012/index.php\">SG0012</a>, Student <b>specific gravity balance</b>
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_01/SP0001/index.php\"><img src=\"/oesper/museum/case22/shelf_01/SP0001/views/SP0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Spectrometer\" title=\"Spectrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_01/SP0001/index.php\">SP0001</a>, <b>Spectrometer</b>
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0005/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0005/views/SP0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Spectrometer\" title=\"Spectrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0005/index.php\">SP0005</a>, <b>Spectrometer</b>
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_01/SP0002/index.php\"><img src=\"/oesper/museum/case22/shelf_01/SP0002/views/SP0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"66\" alt=\"Student demonstration spectroscope with battery operated electric light for the scale\" title=\"Student demonstration spectroscope with battery operated electric light for the scale\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_01/SP0002/index.php\">SP0002</a>, Student demonstration <b>spectroscope</b> with battery operated electric light for the scale
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

</tr>

<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0008/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0008/views/SP0008_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Spectroscopic eyepiece for a microscope\" title=\"Spectroscopic eyepiece for a microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0008/index.php\">SP0008</a>, <b>Spectroscopic</b> eyepiece for a microscope
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0004/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0004/views/HD0004_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metal stand with assorted burette clamps\" title=\"Metal stand with assorted burette clamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0004/index.php\">HD0004</a>, Metal <b>stand</b> with assorted burette clamps
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0003/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0003/views/HD0003_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metal stand with assorted utility clamps\" title=\"Metal stand with assorted utility clamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0003/index.php\">HD0003</a>, Metal <b>stand</b> with assorted utility clamps
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_02/HD0009/index.php\"><img src=\"/oesper/museum/case15/shelf_02/HD0009/views/HD0009_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Wood stand with assorted wood utility clamps\" title=\"Wood stand with assorted wood utility clamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_02/HD0009/index.php\">HD0009</a>, Wood <b>stand</b> with assorted wood utility clamps
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0001-HD0002/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0001-HD0002/views/HD0001-HD0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metal stands with assorted rings\" title=\"Metal stands with assorted rings\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0001-HD0002/index.php\">HD0001-HD0002</a>, Metal <b>stands</b> with assorted rings
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_01/B0001/index.php\"><img src=\"/oesper/museum/case01/shelf_01/B0001/views/B0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"64\" alt=\"Single-pan steelyard\" title=\"Single-pan steelyard\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_01/B0001/index.php\">B0001</a>, Single-pan <b>steelyard</b>
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0005-HD0007/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0005-HD0007/views/HD0005-HD0007_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Assorted laboratory stirring devices\" title=\"Assorted laboratory stirring devices\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0005-HD0007/index.php\">HD0005-HD0007</a>, Assorted laboratory <b>stirring</b> devices
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_02/MD0008-MD0009/index.php\"><img src=\"/oesper/museum/case18/shelf_02/MD0008-MD0009/views/MD0008-MD0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"67\" alt=\"Wood and plastic Stuart-Briegleb space-filling models\" title=\"Wood and plastic Stuart-Briegleb space-filling models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_02/MD0008-MD0009/index.php\">MD0008-MD0009</a>, Wood and plastic <b>Stuart-Briegleb</b> space-filling models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_01/B0014/index.php\"><img src=\"/oesper/museum/case03/shelf_01/B0014/views/B0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Single-pan suspension balance with triple beam sliding scales\" title=\"Single-pan suspension balance with triple beam sliding scales\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_01/B0014/index.php\">B0014</a>, Single-pan <b>suspension balance</b> with triple beam sliding scales
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_02/HD0010/index.php\"><img src=\"/oesper/museum/case15/shelf_02/HD0010/views/HD0010_view1_thumb_smaller.jpg\" width=\"60\" height=\"100\" alt=\"Adjustable wood support table or lab jack\" title=\"Adjustable wood support table or lab jack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_02/HD0010/index.php\">HD0010</a>, Adjustable wood support <b>table</b> or lab jack
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder);
}

function subpagename10 ()
{

global $varall;
global $varorder;
global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
echo "<tr style=\"page-break-before:always;\">";

	echo "<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_03/GL0012-GL0015/index.php\"><img src=\"/oesper/museum/case06/shelf_03/GL0012-GL0015/views/GL0012-GL0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted test glasses and footed test tubes\" title=\"Assorted test glasses and footed test tubes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_03/GL0012-GL0015/index.php\">GL0012-GL0015</a>, Assorted <b>test glasses</b> and footed test tubes
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_03/TT0001/index.php\"><img src=\"/oesper/museum/case06/shelf_03/TT0001/views/TT0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Test tube and reagent rack\" title=\"Test tube and reagent rack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_03/TT0001/index.php\">TT0001</a>, <b>Test tube</b> and reagent rack
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0005/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0005/views/EC0005_view1_thumb_smaller.jpg\" width=\"53\" height=\"100\" alt=\"Voltaic pile\" title=\"Voltaic pile\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0005/index.php\">EC0005</a>, <b>Voltaic</b> pile
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_02/V0006-V0009/index.php\"><img src=\"/oesper/museum/case05/shelf_02/V0006-V0009/views/V0006-V0009_view1_thumb_smaller.jpg\" width=\"86\" height=\"100\" alt=\"Assorted volumetric flasks\" title=\"Assorted volumetric flasks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_02/V0006-V0009/index.php\">V0006-V0009</a>, Assorted <b>volumetric</b> flasks
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0011/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0011/views/SG0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Westphal specific gravity balance\" title=\"Westphal specific gravity balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0011/index.php\">SG0011</a>, <b>Westphal</b> specific gravity balance
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0005/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0005/views/CL0005_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Wolff balancing colorimeter\" title=\"Wolff balancing colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0005/index.php\">CL0005</a>, <b>Wolff</b> balancing colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_01/PN0009-PN0015/index.php\"><img src=\"/oesper/museum/case13/shelf_01/PN0009-PN0015/views/PN0009-PN0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted multi-necked Woulfe bottles\" title=\"Assorted multi-necked Woulfe bottles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_01/PN0009-PN0015/index.php\">PN0009-PN0015</a>, Assorted multi-necked <b>Woulfe</b> bottles
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

</tr>



</table>";


if ($varall=="false")
  pageend ($varpagenum,$varorder);
}


   switch ($varpagenum)
   {
     case "1" :
        subpagename1();
		break;
     case "2":
        subpagename2();
		break;
     case "3":
        subpagename3();
		break;
     case "4":
        subpagename4();
		break;
     case "5":
        subpagename5();
		break;
     case "6":
        subpagename6();
		break;
     case "7":
        subpagename7();
		break;
     case "8":
        subpagename8();
		break;
     case "9":
        subpagename9();
		break;
     case "10":
        subpagename10();
		break;
     case "true":
        subpagename1();
        subpagename2();
        subpagename3();
        subpagename4();
        subpagename5();
        subpagename6();
        subpagename7();
        subpagename8();
        subpagename9();
        subpagename10();
		break;
     default:
        echo "error";
   }

} //closing brackets of elseif statement








elseif ($varorder == "case")
{
	

function subpage1case ()
{
	global $varall;
	global $varorder;
	global $varpagenum;
  if ($varall=="false")
  pagestart ($varpagenum,$varorder);


else
	echo "<center><h2><a href=\"thumbnails.php?order=$varorder\">View by Page</a></h2></center>
		<table cellspacing=\"4\" cellpadding=\"4\" align=\"center\">
		<tr>";

echo "<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_01/B0001/index.php\"><img src=\"/oesper/museum/case01/shelf_01/B0001/views/B0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"64\" alt=\"Single-pan steelyard\" title=\"Single-pan steelyard\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_01/B0001/index.php\">B0001</a>, Single-pan steelyard
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_01/B0002/index.php\"><img src=\"/oesper/museum/case01/shelf_01/B0002/views/B0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Hand-held coin balance, brass coin weights, and wooden box\" title=\"Hand-held coin balance, brass coin weights, and wooden box\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_01/B0002/index.php\">B0002</a>, Hand-held coin balance, brass coin weights, and wooden box
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_02/B0003/index.php\"><img src=\"/oesper/museum/case01/shelf_02/B0003/views/B0003_view1_thumb_smaller.jpg\" width=\"91\" height=\"100\" alt=\"Brass balance with lever release\" title=\"Brass balance with lever release\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_02/B0003/index.php\">B0003</a>, Brass balance with lever release
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_02/B0004/index.php\"><img src=\"/oesper/museum/case01/shelf_02/B0004/views/B0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"69\" alt=\"Set of six nested brass cup weights\" title=\"Set of six nested brass cup weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_02/B0004/index.php\">B0004</a>, Set of six nested brass cup weights
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case01/shelf_02/B0005/index.php\"><img src=\"/oesper/museum/case01/shelf_02/B0005/views/B0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"96\" alt=\"Army prescription balance with weights in drachms and grains\" title=\"Army prescription balance with weights in drachms and grains\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case01/shelf_02/B0005/index.php\">B0005</a>, Army prescription balance with weights in drachms and grains
<br/><a href=\"/oesper/museum/case01/index.html\">Case 01</a>, Balances I
</td>

<tr>

</tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_01/B0006/index.php\"><img src=\"/oesper/museum/case02/shelf_01/B0006/B0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"73\" alt=\"Double-pan platform balance with wooden weight rack\" title=\"Double-pan platform balance with wooden weight rack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_01/B0006/index.php\">B0006</a>, Double-pan platform balance with wooden weight rack
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_01/B0007/index.php\"><img src=\"/oesper/museum/case02/shelf_01/B0007/B0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"68\" alt=\"Double-pan platform balance (Harvard Trip Balance)\" title=\"Double-pan platform balance (Harvard Trip Balance)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_01/B0007/index.php\">B0007</a>, Double-pan platform balance (Harvard Trip Balance)
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_01/B0008/index.php\"><img src=\"/oesper/museum/case02/shelf_01/B0008/B0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"74\" alt=\"Double-pan platform box balance\" title=\"Double-pan platform box balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_01/B0008/index.php\">B0008</a>, Double-pan platform box balance
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_02/B0009/index.php\"><img src=\"/oesper/museum/case02/shelf_02/B0009/B0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"69\" alt=\"Long-beam analytical balance, with ivory case knobs\" title=\"Long-beam analytical balance, with ivory case knobs\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_02/B0009/index.php\">B0009</a>, Long-beam analytical balance, with ivory case knobs
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_03/B0010/index.php\"><img src=\"/oesper/museum/case02/shelf_03/B0010/B0010_view1_thumb_smaller.jpg\" width=\"98\" height=\"100\" alt=\"Bunge short-beam balance with calibrated aluminum beam\" title=\"Bunge short-beam balance with calibrated aluminum beam\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_03/B0010/index.php\">B0010</a>, Bunge short-beam balance with calibrated aluminum beam
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_03/B0011/index.php\"><img src=\"/oesper/museum/case02/shelf_03/B0011/B0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"78\" alt=\"Set of platinum-plated analytical weights\" title=\"Set of platinum-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_03/B0011/index.php\">B0011</a>, Set of platinum-plated analytical weights
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case02/shelf_03/B0012/index.php\"><img src=\"/oesper/museum/case02/shelf_03/B0012/B0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"86\" alt=\"Set of platinum-plated analytical weights\" title=\"Set of platinum-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case02/shelf_03/B0012/index.php\">B0012</a>, Set of platinum-plated analytical weights
<br/><a href=\"/oesper/museum/case02/index.html\">Case 02</a>, Balances II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_01/B0013/index.php\"><img src=\"/oesper/museum/case03/shelf_01/B0013/views/B0013_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Single-pan platform balance with triple beam sliding scales\" title=\"Single-pan platform balance with triple beam sliding scales\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_01/B0013/index.php\">B0013</a>, Single-pan platform balance with triple beam sliding scales
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_01/B0014/index.php\"><img src=\"/oesper/museum/case03/shelf_01/B0014/views/B0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Single-pan suspension balance with triple beam sliding scales\" title=\"Single-pan suspension balance with triple beam sliding scales\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_01/B0014/index.php\">B0014</a>, Single-pan suspension balance with triple beam sliding scales
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_01/B0015/index.php\"><img src=\"/oesper/museum/case03/shelf_01/B0015/views/B0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Boxed platform torsion balance with single slide scale\" title=\"Boxed platform torsion balance with single slide scale\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_01/B0015/index.php\">B0015</a>, Boxed platform torsion balance with single slide scale
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>

</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_02/B0016/index.php\"><img src=\"/oesper/museum/case03/shelf_02/B0016/views/B0016_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Chainomatic analytical balance with black glass base and weight drawer\" title=\"Chainomatic analytical balance with black glass base and weight drawer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_02/B0016/index.php\">B0016</a>, Chainomatic analytical balance with black glass base and weight drawer
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_03/B0017/index.php\"><img src=\"/oesper/museum/case03/shelf_03/B0017/views/B0017_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Bunge short-beam balance\" title=\"Bunge short-beam balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_03/B0017/index.php\">B0017</a>, Bunge short-beam balance
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_03/B0018/index.php\"><img src=\"/oesper/museum/case03/shelf_03/B0018/B0018_view1_thumb_smaller.jpg\" width=\"94\" height=\"100\" alt=\"Set of nickel-plated analytical weights\" title=\"Set of nickel-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_03/B0018/index.php\">B0018</a>, Set of nickel-plated analytical weights
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case03/shelf_03/B0019/index.php\"><img src=\"/oesper/museum/case03/shelf_03/B0019/B0019_view1_thumb_smaller.jpg\" width=\"100\" height=\"89\" alt=\"Set of gold-plated analytical weights\" title=\"Set of gold-plated analytical weights\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case03/shelf_03/B0019/index.php\">B0019</a>, Set of gold-plated analytical weights
<br/><a href=\"/oesper/museum/case03/index.html\">Case 03</a>, Balances III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0001-A0002/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0001-A0002/views/A0001-A0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"80\" alt=\"Charcoal muffle furnace and large spare furnace muffle\" title=\"Charcoal muffle furnace and large spare furnace muffle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0001-A0002/index.php\">A0001-A0002</a> Charcoal muffle furnace and large spare furnace muffle
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder);
}



function subpage2case ()
{
	global $varall;
	global $varorder;
	global $varpagenum;
if ($varall=="false") 
 pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";

echo "<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0003-A0005/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0003-A0005/views/A0003-A0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"99\" alt=\"Large fire-clay crucible, large cast-iron crucible, cast-iron ladle\" title=\"Large fire-clay crucible, large cast-iron crucible, cast-iron ladle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0003-A0005/index.php\">A0003-A0005</a>, Large fire-clay crucible, large cast-iron crucible, cast-iron ladle
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0006-A0008/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0006-A0008/views/A0006-A0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Three medium fire-clay crucibles\" title=\"Three medium fire-clay crucibles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0006-A0008/index.php\">A0006-A0008</a>, Three medium fire-clay crucibles
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A0009/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A0009/views/A0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Nest of four earthenware scorification dishes\" title=\"Nest of four earthenware scorification dishes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A0009/index.php\">A0009</a>, Nest of four earthenware scorification dishes
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A00010/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A00010/views/A00010_view1_thumb_smaller.jpg\" width=\"100\" height=\"77\" alt=\"Nest of four Hessian sand crucibles\" title=\"Nest of four Hessian sand crucibles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A00010/index.php\">A00010</a>, Nest of four Hessian sand crucibles
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A00011/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A00011/views/A00011_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Electric cupel furnace\" title=\"Electric cupel furnace\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A00011/index.php\">A00011</a>, Electric cupel furnace
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_04/A00012/index.php\"><img src=\"/oesper/museum/case04/shelf_04/A00012/views/A00012_view1_thumb_smaller.jpg\" width=\"100\" height=\"74\" alt=\"Fused silica crucible with lid\" title=\"Fused silica crucible with lid\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_04/A00012/index.php\">A00012</a>, Fused silica crucible with lid
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_01/H0001-H0004/index.php\"><img src=\"/oesper/museum/case04/shelf_01/H0001-H0004/views/H0001-H0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Alcohol or spirit wick lamps\" title=\"Alcohol or spirit wick lamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_01/H0001-H0004/index.php\">H0001-H0004</a>, Alcohol or spirit wick lamps
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_01/H0005/index.php\"><img src=\"/oesper/museum/case04/shelf_01/H0005/views/H0005_view1_thumb_smaller.jpg\" width=\"81\" height=\"100\" alt=\"Barthel's patent wickless blast lamp\" title=\"Barthel's patent wickless blast lamp\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_01/H0005/index.php\">H0005</a>, Barthel's patent wickless blast lamp
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_02/H0006-H0007/index.php\"><img src=\"/oesper/museum/case04/shelf_02/H0006-H0007/views/H0006-H0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"97\" alt=\"Simple Bunsen burner, Brass Tyrell burner\" title=\"Simple Bunsen burner, Brass Tyrell burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_02/H0006-H0007/index.php\">H0006-H0007</a>, Simple Bunsen burner, Brass Tyrell burner
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_02/H0008-H0010/index.php\"><img src=\"/oesper/museum/case04/shelf_02/H0008-H0010/views/H0008-H0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Small Meker gas burners\" title=\"Small Meker gas burners\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_02/H0008-H0010/index.php\">H0008-H0010</a>, Small Meker gas burners
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>




</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_02/H0011-H0012/index.php\"><img src=\"/oesper/museum/case04/shelf_02/H0011-H0012/views/H0011-H0012_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Large Meker gas burners\" title=\"Large Meker gas burners\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_02/H0011-H0012/index.php\">H0011-H0012</a>, Large Meker gas burners
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0013/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0013/views/H0013_view1_thumb_smaller.jpg\" width=\"59\" height=\"100\" alt=\"Vitrified earthenware burner guard and support stand\" title=\"Vitrified earthenware burner guard and support stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0013/index.php\">H0013</a>, Vitrified earthenware burner guard and support stand
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0014-H0015/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0014-H0015/views/H0014-H0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"96\" alt=\"Metal burner chimneys or draft guards\" title=\"Metal burner chimneys or draft guards\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0014-H0015/index.php\">H0014-H0015</a>, Metal burner chimneys or draft guards</a>
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0016-H0017/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0016-H0017/views/H0016-H0017_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Three-burner heating train and gas burner\" title=\"Three-burner heating train and gas burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0016-H0017/index.php\">H0016-H0017</a>, Three-burner heating train and gas burner
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0018/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0018/views/H0018_view1_thumb_smaller.jpg\" width=\"72\" height=\"100\" alt=\"All ceramic corrosion-proof Chaddock burner\" title=\"All ceramic corrosion-proof Chaddock burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0018/index.php\">H0018</a>, All ceramic corrosion-proof Chaddock burner
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0019/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0019/views/H0019_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Roger ring burner for crucibles\" title=\"Roger ring burner for crucibles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0019/index.php\">H0019</a>, Roger ring burner for crucibles
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0020-H0022/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0020-H0022/views/H0020-H0022_view1_thumb_smaller.jpg\" width=\"100\" height=\"63\" alt=\"Micro burners\" title=\"Micro burners\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0020-H0022/index.php\">H0020-H0022</a>, Micro burners
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0023/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0023/views/H0023_view1_thumb_smaller.jpg\" width=\"69\" height=\"100\" alt=\"Ring burner\" title=\"Ring burner\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0023/index.php\">H0023</a>, Ring burner
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case04/shelf_03/H0024/index.php\"><img src=\"/oesper/museum/case04/shelf_03/H0024/views/H0024_view1_thumb_smaller.jpg\" width=\"100\" height=\"58\" alt=\"Cast iron gas hot plate\" title=\"Cast iron gas hot plate\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case04/shelf_03/H0024/index.php\">H0024</a>, Cast iron gas hot plate
<br/><a href=\"/oesper/museum/case04/index.html\">Case 04</a>, Heating Devices &amp; Assaying Equipment
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0001-SG0005/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0001-SG0005/views/SG0001-SG0005_view1_thumb_smaller.jpg\" width=\"66\" height=\"100\" alt=\"Assorted hydrometers and hydrometer jars\" title=\"Assorted hydrometers and hydrometer jars\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0001-SG0005/index.php\">SG0001-SG0005</a>, Assorted hydrometers and hydrometer jars
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


</tr>";


if ($varall=="false")
  pageend ($varpagenum,$varorder);
}



function subpage3case ()
{

global $varall;
	global $varorder;
	global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0006-SG0009/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0006-SG0009/views/SG0006-SG0009_view1_thumb_smaller.jpg\" width=\"80\" height=\"100\" alt=\"Assorted pycnometers\" title=\"Assorted pycnometers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0006-SG0009/index.php\">SG0006-SG0009</a>, Assorted pycnometers
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0010/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0010/views/SG0010_view1_thumb_smaller.jpg\" width=\"68\" height=\"100\" alt=\"Hydrometers and wooden storage rack\" title=\"Hydrometers and wooden storage rack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0010/index.php\">SG0010</a>, Hydrometers and wooden storage rack
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0011/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0011/views/SG0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Westphal specific gravity balance\" title=\"Westphal specific gravity balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0011/index.php\">SG0011</a>, Westphal specific gravity balance
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_01/SG0012/index.php\"><img src=\"/oesper/museum/case05/shelf_01/SG0012/views/SG0012_view1_thumb_smaller.jpg\" width=\"78\" height=\"100\" alt=\"Student specific gravity balance\" title=\"Student specific gravity balance\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_01/SG0012/index.php\">SG0012</a>, Student specific gravity balance
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_02/V0001-V0005/index.php\"><img src=\"/oesper/museum/case05/shelf_02/V0001-V0005/views/V0001-V0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted metric and English graduated measuring glasses\" title=\"Assorted metric and English graduated measuring glasses\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_02/V0001-V0005/index.php\">V0001-V0005</a>, Assorted metric and English graduated measuring glasses
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>



</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_02/V0006-V0009/index.php\"><img src=\"/oesper/museum/case05/shelf_02/V0006-V0009/views/V0006-V0009_view1_thumb_smaller.jpg\" width=\"86\" height=\"100\" alt=\"Assorted volumetric flasks\" title=\"Assorted volumetric flasks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_02/V0006-V0009/index.php\">V0006-V0009</a>, Assorted volumetric flasks
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_02/V0010-V0014/index.php\"><img src=\"/oesper/museum/case05/shelf_02/V0010-V0014/views/V0010-V0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Assorted graduated cylinders\" title=\"Assorted graduated cylinders\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_02/V0010-V0014/index.php\">V0010-V0014</a>, Assorted graduated cylinders
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0015/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0015/views/V0015_view1_thumb_smaller.jpg\" width=\"88\" height=\"100\" alt=\"Descroizilles chlorometer or &quot;Berthollimeter&quot; with accompanying pipette and beaker\" title=\"Descroizilles chlorometer or &quot;Berthollimeter&quot; with accompanying pipette and beaker\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0015/index.php\">V0015</a>, Descroizilles chlorometer or &quot;Berthollimeter&quot; with accompanying pipette and beaker
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0016-V0017/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0016-V0017/views/V0016-V0017_view1_thumb_smaller.jpg\" width=\"59\" height=\"100\" alt=\"Large graduated mixing cylinder with stopper and large volumetric flask\" title=\"Large graduated mixing cylinder with stopper and large volumetric flask\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0016-V0017/index.php\">V0016-V0017</a>, Large graduated mixing cylinder with stopper and large volumetric flask
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0018/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0018/views/V0018_view1_thumb_smaller.jpg\" width=\"37\" height=\"100\" alt=\"Gay-Lussac burette with wooden stand\" title=\"Gay-Lussac burette with wooden stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0018/index.php\">V0018</a>, Gay-Lussac burette with wooden stand
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0019/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0019/views/V0019_view1_thumb_smaller.jpg\" width=\"42\" height=\"100\" alt=\"Binks or English burette with wooden stand\" title=\"Binks or English burette with wooden stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0019/index.php\">V0019</a>, Binks or English burette with wooden stand
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0020/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0020/views/V0020_view1_thumb_smaller.jpg\" width=\"50\" height=\"100\" alt=\"Wooden pipette stand and assorted pipettes\" title=\"Wooden pipette stand and assorted pipettes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0020/index.php\">V0020</a>, Wooden pipette stand and assorted pipettes
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0021/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0021/views/V0021_view1_thumb_smaller.jpg\" width=\"100\" height=\"59\" alt=\"Large pipette with wire support stand\" title=\"Large pipette with wire support stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0021/index.php\">V0021</a>, Large pipette with wire support stand
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case05/shelf_03/V0022/index.php\"><img src=\"/oesper/museum/case05/shelf_03/V0022/views/V0022_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Mohr burettes with wooden support stand, assorted pinch clamps, and burette floats\" title=\"Mohr burettes with wooden support stand, assorted pinch clamps, and burette floats\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case05/shelf_03/V0022/index.php\">V0022</a>, Mohr burettes with wooden support stand, assorted pinch clamps, and burette floats
<br/><a href=\"/oesper/museum/case05/index.html\">Case 05</a>, Specific Gravity and Volumetric Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_01/GL0001-GL0006/index.php\"><img src=\"/oesper/museum/case06/shelf_01/GL0001-GL0006/views/GL0001-GL0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted lime glass and early borosilicate glass beakers\" title=\"Assorted lime glass and early borosilicate glass beakers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_01/GL0001-GL0006/index.php\">GL0001-GL0006</a>, Assorted lime glass and early borosilicate glass beakers
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>


</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_02/GL0007-GL0011/index.php\"><img src=\"/oesper/museum/case06/shelf_02/GL0007-GL0011/views/GL0007-GL0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted lime glass and early borosilicate glass flasks\" title=\"Assorted lime glass and early borosilicate glass flasks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_02/GL0007-GL0011/index.php\">GL0007-GL0011</a>, Assorted lime glass and early borosilicate glass flasks
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_03/GL0012-GL0015/index.php\"><img src=\"/oesper/museum/case06/shelf_03/GL0012-GL0015/views/GL0012-GL0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted test glasses and footed test tubes\" title=\"Assorted test glasses and footed test tubes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_03/GL0012-GL0015/index.php\">GL0012-GL0015</a>, Assorted test glasses and footed test tubes
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0001/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0001/views/MP0001_view1_thumb_smaller.jpg\" width=\"84\" height=\"100\" alt=\"Brass mortar and pestle\" title=\"Brass mortar and pestle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0001/index.php\">MP0001</a>, Brass mortar and pestle
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0002/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0002/views/MP0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"88\" alt=\"Brass mortar and pestle\" title=\"Brass mortar and pestle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0002/index.php\">MP0002</a>, Brass mortar and pestle
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0003/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0003/views/MP0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"87\" alt=\"Cast iron mortar and pestle\" title=\"Cast iron mortar and pestle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0003/index.php\">MP0003</a>, Cast iron mortar and pestle
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>


</tr>";


if ($varall=="false")
  pageend ($varpagenum,$varorder);
}


function subpage4case () 
{
global $varall;
	global $varorder;
	global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_05/MP0004/index.php\"><img src=\"/oesper/museum/case06/shelf_05/MP0004/views/MP0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Porcelain mortar and pestle with wooden handle\" title=\"Porcelain mortar and pestle with wooden handle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_05/MP0004/index.php\">MP0004</a>, Porcelain mortar and pestle with wooden handle
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_04/PR0001-PR003/index.php\"><img src=\"/oesper/museum/case06/shelf_04/PR0001-PR003/views/PR0001-PR003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted porcelain casseroles and evaporating dishes\" title=\"Assorted porcelain casseroles and evaporating dishes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_04/PR0001-PR003/index.php\">PR0001-PR003</a>, Assorted porcelain casseroles and evaporating dishes
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>



<td valign=\"top\">
<a href=\"/oesper/museum/case06/shelf_03/TT0001/index.php\"><img src=\"/oesper/museum/case06/shelf_03/TT0001/views/TT0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Test tube and reagent rack\" title=\"Test tube and reagent rack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case06/shelf_03/TT0001/index.php\">TT0001</a>, Test tube and reagent rack
<br/><a href=\"/oesper/museum/case06/index.html\">Case 06</a>, Basic Apparatus
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case07/shelf_01/DS0001/index.php\"><img src=\"/oesper/museum/case07/shelf_01/DS0001/views/DS0001_view1_thumb_smaller.jpg\" width=\"61\" height=\"100\" alt=\"17th-century alembic, furnace, bellows, and assorted flasks\" title=\"17th-century alembic, furnace, bellows, and assorted flasks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case07/shelf_01/DS0001/index.php\">DS0001</a>, 17th-century alembic, furnace, bellows, and assorted flasks
<br/><a href=\"/oesper/museum/case07/index.html\">Case 07</a>, Distillation&nbsp;I
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_01/DS0002/index.php\"><img src=\"/oesper/museum/case08/shelf_01/DS0002/views/DS0002_view1_thumb_smaller.jpg\" width=\"54\" height=\"100\" alt=\"Crushed ice condenser for highly-volatile liquids\" title=\"Crushed ice condenser for highly-volatile liquids\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_01/DS0002/index.php\">DS0002</a>, Crushed ice condenser for highly-volatile liquids
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>


</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_01/DS0003/index.php\"><img src=\"/oesper/museum/case08/shelf_01/DS0003/views/DS0003_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Br&uuml;hl fraction collector for vacuum distillation\" title=\"Br&uuml;hl fraction collector for vacuum distillation\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_01/DS0003/index.php\">DS0003</a>, Br&uuml;hl fraction collector for vacuum distillation
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_01/DS0004/index.php\"><img src=\"/oesper/museum/case08/shelf_01/DS0004/views/DS0004_view1_thumb_smaller.jpg\" width=\"89\" height=\"100\" alt=\"Liebig counter-current condenser with iron stand\" title=\"Liebig counter-current condenser with iron stand\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_01/DS0004/index.php\">DS0004</a>, Liebig counter-current condenser with iron stand
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_02/DS0005/index.php\"><img src=\"/oesper/museum/case08/shelf_02/DS0005/views/DS0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"95\" alt=\"Assorted reflux condensers\" title=\"Assorted reflux condensers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_02/DS0005/index.php\">DS0005</a>, Assorted reflux condensers
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_02/DS0006/index.php\"><img src=\"/oesper/museum/case08/shelf_02/DS0006/views/DS0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted fractionation columns and adapters\" title=\"Assorted fractionation columns and adapters\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_02/DS0006/index.php\">DS0006</a>, Assorted fractionation columns and adapters
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case08/shelf_02/DS0007/index.php\"><img src=\"/oesper/museum/case08/shelf_02/DS0007/views/DS0007_view1_thumb_smaller.jpg\" width=\"88\" height=\"100\" alt=\"Complete Liebig distillation train\" title=\"Complete Liebig distillation train\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case08/shelf_02/DS0007/index.php\">DS0007</a>, Complete Liebig distillation train
<br/><a href=\"/oesper/museum/case08/index.html\">Case 08</a>, Distillation&nbsp;II
</td>


</tr>

<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_01/DS0009/index.php\"><img src=\"/oesper/museum/case09/shelf_01/DS0009/views/DS0009_view1_thumb_smaller.jpg\" width=\"88\" height=\"100\" alt=\"Round-bottom alembic with woven support ring\" title=\"Round-bottom alembic with woven support ring\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_01/DS0009/index.php\">DS0009</a>, Round-bottom alembic with woven support ring
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_01/DS0010-DS0011/index.php\"><img src=\"/oesper/museum/case09/shelf_01/DS0010-DS0011/views/DS0010-DS0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"63\" alt=\"Assorted flat-bottom alembics\" title=\"Assorted flat-bottom alembics\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_01/DS0010-DS0011/index.php\">DS0010-DS0011</a>, Assorted flat-bottom alembics
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_02/DS0012/index.php\"><img src=\"/oesper/museum/case09/shelf_02/DS0012/views/DS0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"68\" alt=\"Brown-glass retort with quilled receiver and charcoal furnace\" title=\"Brown-glass retort with quilled receiver and charcoal furnace\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_02/DS0012/index.php\">DS0012</a>, Brown-glass retort with quilled receiver and charcoal furnace
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_02/DS0013/index.php\"><img src=\"/oesper/museum/case09/shelf_02/DS0013/views/DS0013_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Three-necked retort receiver with woven support ring\" title=\"Three-necked retort receiver with woven support ring\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_02/DS0013/index.php\">DS0013</a>, Three-necked retort receiver with woven support ring
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case09/shelf_03/DS0014/index.php\"><img src=\"/oesper/museum/case09/shelf_03/DS0014/views/DS0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Large lime-glass retort with receiver, alcohol lamp, cast-iron stands, and woven support ring\" title=\"Large lime-glass retort with receiver, alcohol lamp, cast-iron stands, and woven support ring\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case09/shelf_03/DS0014/index.php\">DS0014</a>, Large lime-glass retort with receiver, alcohol lamp, cast-iron stands, and woven support ring
<br/><a href=\"/oesper/museum/case09/index.html\">Case 09</a>, Distillation&nbsp;III
</td>


</tr>

<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_01/CA0001-CA0008/index.php\"><img src=\"/oesper/museum/case10/shelf_01/CA0001-CA0008/views/CA0001-CA0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted absorption and drying towers for both solid and liquid absorbents\" title=\"Assorted absorption and drying towers for both solid and liquid absorbents\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_01/CA0001-CA0008/index.php\">CA0001-CA0008</a>, Assorted absorption and drying towers for both solid and liquid absorbents
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>



<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_02/CA0009/index.php\"><img src=\"/oesper/museum/case10/shelf_02/CA0009/views/CA0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"52\" alt=\"Early Liebig combustion train (option for carbon and hydrogen analysis)\" title=\"Early Liebig combustion train (option for carbon and hydrogen analysis)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_02/CA0009/index.php\">CA0009</a>, Early Liebig combustion train (option for carbon and hydrogen analysis)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_02/CA0010/index.php\"><img src=\"/oesper/museum/case10/shelf_02/CA0010/views/CA0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Early Liebig combustion train (option for nitrogen analysis)\" title=\"Early Liebig combustion train (option for nitrogen analysis)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_02/CA0010/index.php\">CA0010</a>, Early Liebig combustion train (option for nitrogen analysis)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_02/CA0011/index.php\"><img src=\"/oesper/museum/case10/shelf_02/CA0011/views/CA0011_view1_thumb_smaller.jpg\" width=\"69\" height=\"100\" alt=\"Assorted absorption bulbs (Front: Liebig potash bulb, Rear: Giessler&nbsp;&#47;&nbsp;Mohr potash bulb)\" title=\"Assorted absorption bulbs (Front: Liebig potash bulb, Rear: Giessler&nbsp;&#47;&nbsp;Mohr potash bulb)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_02/CA0011/index.php\">CA0011</a>, Assorted absorption bulbs (Front: Liebig potash bulb, Rear: Giessler&nbsp;&#47;&nbsp;Mohr potash bulb)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case10/shelf_03/CA0012/index.php\"><img src=\"/oesper/museum/case10/shelf_03/CA0012/views/CA0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"82\" alt=\"Combustion train (carbon and hydrogen analysis)\" title=\"Combustion train (carbon and hydrogen analysis)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case10/shelf_03/CA0012/index.php\">CA0012</a>, Combustion train (carbon and hydrogen analysis)
<br/><a href=\"/oesper/museum/case10/index.html\">Case 10</a>, Combustion Analysis
</td>



</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder);
}



function subpage5case ()
{

global $varall;
	global $varorder;
	global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
	echo "<tr style=\"page-break-before:always;\">";

echo "<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_01/PN0001/index.php\"><img src=\"/oesper/museum/case11/shelf_01/PN0001/views/PN0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Gas bladder with wooden spigot\" title=\"Gas bladder with wooden spigot\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_01/PN0001/index.php\">PN0001</a>, Gas bladder with wooden spigot
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_01/PN0002/index.php\"><img src=\"/oesper/museum/case11/shelf_01/PN0002/views/PN0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Wooden pneumatic trough with collection containers and gas generators\" title=\"Wooden pneumatic trough with collection containers and gas generators\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_01/PN0002/index.php\">PN0002</a>, Wooden pneumatic trough with collection containers and gas generators
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_02/PN0003/index.php\"><img src=\"/oesper/museum/case11/shelf_02/PN0003/views/PN0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Retort, charcoal furnace and gas bladder receiver\" title=\"Retort, charcoal furnace and gas bladder receiver\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_02/PN0003/index.php\">PN0003</a>, Retort, charcoal furnace and gas bladder receiver
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_03/PN0004/index.php\"><img src=\"/oesper/museum/case11/shelf_03/PN0004/views/PN0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"89\" alt=\"Apparatus for the preparation of oxygen gas\" title=\"Apparatus for the preparation of oxygen gas\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_03/PN0004/index.php\">PN0004</a>, Apparatus for the preparation of oxygen gas
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_03/PN0005/index.php\"><img src=\"/oesper/museum/case11/shelf_03/PN0005/views/PN0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"83\" alt=\"Burning lens with pneumatic trough and bell jar\" title=\"Burning lens with pneumatic trough and bell jar\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_03/PN0005/index.php\">PN0005</a>, Burning lens with pneumatic trough and bell jar
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case11/shelf_03/PN0006/index.php\"><img src=\"/oesper/museum/case11/shelf_03/PN0006/views/PN0006_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Glass pneumatic trough, wooden tripod and inverted flask \" title=\"Glass pneumatic trough, wooden tripod and inverted flask \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case11/shelf_03/PN0006/index.php\">PN0006</a>, Glass pneumatic trough, wooden tripod and inverted flask 
<br/><a href=\"/oesper/museum/case11/index.html\">Case 11</a>, Pneumatic Chemistry I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case12/shelf_01/PN0007/index.php\"><img src=\"/oesper/museum/case12/shelf_01/PN0007/views/PN0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"68\" alt=\"Gas generator, reagents, safety trap, pneumatic trough, and deflagration spoon\" title=\"Gas generator, reagents, safety trap, pneumatic trough, and deflagration spoon\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case12/shelf_01/PN0007/index.php\">PN0007</a>, Gas generator, reagents, safety trap, pneumatic trough, and deflagration spoon
<br/><a href=\"/oesper/museum/case12/index.html\">Case 12</a>, Pneumatic Chemistry&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case12/shelf_02/PN0008/index.php\"><img src=\"/oesper/museum/case12/shelf_02/PN0008/views/PN0008_view1_thumb_smaller.jpg\" width=\"76\" height=\"100\" alt=\"Retort, charcoal furnace, pneumatic trough and gas bladder\" title=\"Retort, charcoal furnace, pneumatic trough and gas bladder\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case12/shelf_02/PN0008/index.php\">PN0008</a>, Retort, charcoal furnace, pneumatic trough and gas bladder
<br/><a href=\"/oesper/museum/case12/index.html\">Case 12</a>, Pneumatic Chemistry&nbsp;II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_01/PN0009-PN0015/index.php\"><img src=\"/oesper/museum/case13/shelf_01/PN0009-PN0015/views/PN0009-PN0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Assorted multi-necked Woulfe bottles\" title=\"Assorted multi-necked Woulfe bottles\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_01/PN0009-PN0015/index.php\">PN0009-PN0015</a>, Assorted multi-necked Woulfe bottles
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_02/PN0016-PN0018/index.php\"><img src=\"/oesper/museum/case13/shelf_02/PN0016-PN0018/views/PN0016-PN0018_view1_thumb_smaller.jpg\" width=\"93\" height=\"100\" alt=\"Assorted Kipp gas generators\" title=\"Assorted Kipp gas generators\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_02/PN0016-PN0018/index.php\">PN0016-PN0018</a>, Assorted Kipp gas generators
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>


</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_02/PN0019/index.php\"><img src=\"/oesper/museum/case13/shelf_02/PN0019/views/PN0019_view1_thumb_smaller.jpg\" width=\"100\" height=\"98\" alt=\"Babo gas generator \" title=\"Babo gas generator \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_02/PN0019/index.php\">PN0019</a>, Babo gas generator 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_02/PN0020-PN0021/index.php\"><img src=\"/oesper/museum/case13/shelf_02/PN0020-PN0021/views/PN0020-PN0021_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Assorted gas generator bottles \" title=\"Assorted gas generator bottles \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_02/PN0020-PN0021/index.php\">PN0020-PN0021</a>, Assorted gas generator bottles 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0022/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0022/views/PN0022_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Enameled metal pneumatic trough with collection bottles \" title=\"Enameled metal pneumatic trough with collection bottles \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0022/index.php\">PN0022</a>, Enameled metal pneumatic trough with collection bottles 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0023/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0023/views/PN0023_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Galvanized metal pneumatic trough with collection bottle \" title=\"Galvanized metal pneumatic trough with collection bottle \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0023/index.php\">PN0023</a>, Galvanized metal pneumatic trough with collection bottle 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0024/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0024/views/PN0024_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Porcelain pneumatic trough with collection bottle\" title=\"Porcelain pneumatic trough with collection bottle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0024/index.php\">PN0024</a>, Porcelain pneumatic trough with collection bottle 
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>


</tr>


<tr>


<td valign=\"top\">
<a href=\"/oesper/museum/case13/shelf_03/PN0025/index.php\"><img src=\"/oesper/museum/case13/shelf_03/PN0025/views/PN0025_view1_thumb_smaller.jpg\" width=\"100\" height=\"85\" alt=\"Pneumatic trough with porcelain beehive stand and collection bottle \" title=\"Pneumatic trough with porcelain beehive stand and collection bottle \" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case13/shelf_03/PN0025/index.php\">PN0025</a>, Pneumatic trough with porcelain beehive stand and collection bottle  
<br/><a href=\"/oesper/museum/case13/index.html\">Case 13</a>, Pneumatic Chemistry&nbsp;III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/EX0001/index.php\"><img src=\"/oesper/museum/case14/shelf_01/EX0001/views/EX0001_view1_thumb_smaller.jpg\" width=\"64\" height=\"100\" alt=\"Separatory funnel\" title=\"Separatory funnel\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/EX0001/index.php\">EX0001</a>, Separatory funnel
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/EX0002/index.php\"><img src=\"/oesper/museum/case14/shelf_01/EX0002/views/EX0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Glass extraction or percolation cone\" title=\"Glass extraction or percolation cone\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/EX0002/index.php\">EX0002</a>, Glass extraction or percolation cone
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/EX0003/index.php\"><img src=\"/oesper/museum/case14/shelf_01/EX0003/views/EX0003_view1_thumb_smaller.jpg\" width=\"50\" height=\"100\" alt=\"Soxhlet fat extractor with steam bath\" title=\"Soxhlet fat extractor with steam bath\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/EX0003/index.php\">EX0003</a>, Soxhlet fat extractor with steam bath
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/FL0001/index.php\"><img src=\"/oesper/museum/case14/shelf_01/FL0001/views/FL0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Set of nested brass particle sieves\" title=\"Set of nested brass particle sieves\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/FL0001/index.php\">FL0001</a>, Set of nested brass particle sieves
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>


</tr>";


if ($varall=="false")
  pageend ($varpagenum,$varorder);
}

function subpage6case ()
{
global $varall;
	global $varorder;
	global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
echo "<tr style=\"page-break-before:always;\">";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0002/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0002/views/FL0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"91\" alt=\"Buchner vacuum filtration setup with phpirator and pressure gauge\" title=\"Buchner vacuum filtration setup with phpirator and pressure gauge\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0002/index.php\">FL0002</a>, Buchner vacuum filtration setup with phpirator and pressure gauge
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0003-FL0004/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0003-FL0004/views/FL0003-FL0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Porcelain supports for cloth filtration\" title=\"Porcelain supports for cloth filtration\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0003-FL0004/index.php\">FL0003-FL0004</a>, Porcelain supports for cloth filtration
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0005/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0005/views/FL0005_view1_thumb_smaller.jpg\" width=\"90\" height=\"100\" alt=\"Wooden filtration stand and accessories\" title=\"Wooden filtration stand and accessories\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0005/index.php\">FL0005</a>, Wooden filtration stand and accessories
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0006/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0006/views/FL0006_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Brass funnel jacket for hot filtration\" title=\"Brass funnel jacket for hot filtration\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0006/index.php\">FL0006</a>, Brass funnel jacket for hot filtration
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_02/FL0007/index.php\"><img src=\"/oesper/museum/case14/shelf_02/FL0007/views/FL0007_view1_thumb_smaller.jpg\" width=\"77\" height=\"100\" alt=\"Brass funnel coil for hot or cold filtration\" title=\"Brass funnel coil for hot or cold filtration\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_02/FL0007/index.php\">FL0007</a>, Brass funnel coil for hot or cold filtration
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>


</tr>


<tr>



<td valign=\"top\">
<a href=\"/oesper/museum/case14/shelf_01/SD0001/index.php\"><img src=\"/oesper/museum/case14/shelf_01/SD0001/views/SD0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"94\" alt=\"Glazed earthenware sedimentation vat\" title=\"Glazed earthenware sedimentation vat\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case14/shelf_01/SD0001/index.php\">SD0001</a>, Glazed earthenware sedimentation vat
<br/><a href=\"/oesper/museum/case14/index.html\">Case 14</a>, Separations and Extractions
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0001-HD0002/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0001-HD0002/views/HD0001-HD0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metal stands with assorted rings\" title=\"Metal stands with assorted rings\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0001-HD0002/index.php\">HD0001-HD0002</a>, Metal stands with assorted rings
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0003/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0003/views/HD0003_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metal stand with assorted utility clamps\" title=\"Metal stand with assorted utility clamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0003/index.php\">HD0003</a>, Metal stand with assorted utility clamps
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0004/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0004/views/HD0004_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metal stand with assorted burette clamps\" title=\"Metal stand with assorted burette clamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0004/index.php\">HD0004</a>, Metal stand with assorted burette clamps
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_01/HD0005-HD0007/index.php\"><img src=\"/oesper/museum/case15/shelf_01/HD0005-HD0007/views/HD0005-HD0007_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Assorted laboratory stirring devices\" title=\"Assorted laboratory stirring devices\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_01/HD0005-HD0007/index.php\">HD0005-HD0007</a>, Assorted laboratory stirring devices
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_02/HD0008/index.php\"><img src=\"/oesper/museum/case15/shelf_02/HD0008/views/HD0008_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Gay-Lussac universal support stand (wood)\" title=\"Gay-Lussac universal support stand (wood)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_02/HD0008/index.php\">HD0008</a>, Gay-Lussac universal support stand (wood)
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_02/HD0009/index.php\"><img src=\"/oesper/museum/case15/shelf_02/HD0009/views/HD0009_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Wood stand with assorted wood utility clamps\" title=\"Wood stand with assorted wood utility clamps\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_02/HD0009/index.php\">HD0009</a>, Wood stand with assorted wood utility clamps
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case15/shelf_02/HD0010/index.php\"><img src=\"/oesper/museum/case15/shelf_02/HD0010/views/HD0010_view1_thumb_smaller.jpg\" width=\"60\" height=\"100\" alt=\"Adjustable wood support table or lab jack\" title=\"Adjustable wood support table or lab jack\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case15/shelf_02/HD0010/index.php\">HD0010</a>, Adjustable wood support table or lab jack
<br/><a href=\"/oesper/museum/case15/index.html\">Case 15</a>, Hardware
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/DA0001/index.php\"><img src=\"/oesper/museum/case16/shelf_02/DA0001/views/DA0001_view1_thumb_smaller.jpg\" width=\"40\" height=\"100\" alt=\"Hofmann lecture apparatus for volumetric synthesis\" title=\"Hofmann lecture apparatus for volumetric synthesis\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/DA0001/index.php\">DA0001</a>, Hofmann lecture apparatus for volumetric synthesis
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0001/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0001/views/EC0001_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Daniell gravity cell (Crowfoot form)\" title=\"Daniell gravity cell (Crowfoot form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0001/index.php\">EC0001</a>, Daniell gravity cell (Crowfoot form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0002/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0002/views/EC0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Daniell gravity cell (Meidinger form)\" title=\"Daniell gravity cell (Meidinger form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0002/index.php\">EC0002</a>, Daniell gravity cell (Meidinger form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0003/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0003/views/EC0003_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Leclanch&eacute; cell\" title=\"Leclanch&eacute; cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0003/index.php\">EC0003</a>, Leclanch&eacute; cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_01/EC0004/index.php\"><img src=\"/oesper/museum/case16/shelf_01/EC0004/views/EC0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"95\" alt=\"Edison-Lalande cell\" title=\"Edison-Lalande cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_01/EC0004/index.php\">EC0004</a>, Edison-Lalande cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0005/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0005/views/EC0005_view1_thumb_smaller.jpg\" width=\"53\" height=\"100\" alt=\"Voltaic pile\" title=\"Voltaic pile\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0005/index.php\">EC0005</a>, Voltaic pile
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0006/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0006/views/EC0006_view1_thumb_smaller.jpg\" width=\"69\" height=\"100\" alt=\"Hofmann electrolysis cell (V-form)\" title=\"Hofmann electrolysis cell (V-form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0006/index.php\">EC0006</a>, Hofmann electrolysis cell (V-form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>


</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder);
}


function subpage7case ()
{
global $varall;
	global $varorder;
	global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
echo "<tr style=\"page-break-before:always;\">";

echo "<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0007/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0007/views/EC0007_view1_thumb_smaller.jpg\" width=\"71\" height=\"100\" alt=\"Grove nitric acid cell\" title=\"Grove nitric acid cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0007/index.php\">EC0007</a>, Grove nitric acid cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0008/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0008/views/EC0008_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Electrolysis cell\" title=\"Electrolysis cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0008/index.php\">EC0008</a>, Electrolysis cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0009/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0009/views/EC0009_view1_thumb_smaller.jpg\" width=\"89\" height=\"100\" alt=\"Bunsen carbon cell\" title=\"Bunsen carbon cell\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0009/index.php\">EC0009</a>, Bunsen carbon cell
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0010/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0010/views/EC0010_view1_thumb_smaller.jpg\" width=\"60\" height=\"100\" alt=\"Hofmann electrolysis cell (H-form)\" title=\"Hofmann electrolysis cell (H-form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0010/index.php\">EC0010</a>, Hofmann electrolysis cell (H-form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case16/shelf_02/EC0011/index.php\"><img src=\"/oesper/museum/case16/shelf_02/EC0011/views/EC0011_view1_thumb_smaller.jpg\" width=\"66\" height=\"100\" alt=\"Dichromate cell (Grenet form)\" title=\"Dichromate cell (Grenet form)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case16/shelf_02/EC0011/index.php\">EC0011</a>, Dichromate cell (Grenet form)
<br/><a href=\"/oesper/museum/case16/index.html\">Case 16</a>, Electrochemistry
</td>


</tr>


<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_01/MW0001/index.php\"><img src=\"/oesper/museum/case17/shelf_01/MW0001/views/MW0001_view1_thumb_smaller.jpg\" width=\"66\" height=\"100\" alt=\"Beckmann freezing-point apparatus\" title=\"Beckmann freezing-point apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_01/MW0001/index.php\">MW0001</a>, Beckmann freezing-point apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_01/MW0002/index.php\"><img src=\"/oesper/museum/case17/shelf_01/MW0002/views/MW0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Beckmann boiling-point apparatus\" title=\"Beckmann boiling-point apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_01/MW0002/index.php\">MW0002</a>, Beckmann boiling-point apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_01/MW0003/index.php\"><img src=\"/oesper/museum/case17/shelf_01/MW0003/views/MW0003_view1_thumb_smaller.jpg\" width=\"65\" height=\"100\" alt=\"McCoy boiling-point apparatus\" title=\"McCoy boiling-point apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_01/MW0003/index.php\">MW0003</a>, McCoy boiling-point apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_02/MW0004/index.php\"><img src=\"/oesper/museum/case17/shelf_02/MW0004/views/MW0004_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Glass balloon with brass stopcock for weighing gases\" title=\"Glass balloon with brass stopcock for weighing gases\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_02/MW0004/index.php\">MW0004</a>, Glass balloon with brass stopcock for weighing gases
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_02/MW0005/index.php\"><img src=\"/oesper/museum/case17/shelf_02/MW0005/views/MW0005_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Dumas vapor-density apparatus\" title=\"Dumas vapor-density apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_02/MW0005/index.php\">MW0005</a>, Dumas vapor-density apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case17/shelf_02/MW0006/index.php\"><img src=\"/oesper/museum/case17/shelf_02/MW0006/views/MW0006_view1_thumb_smaller.jpg\" width=\"54\" height=\"100\" alt=\"Schilling gas-effusion apparatus\" title=\"Schilling gas-effusion apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case17/shelf_02/MW0006/index.php\">MW0006</a>, Schilling gas-effusion apparatus
<br/><a href=\"/oesper/museum/case17/index.html\">Case 17</a>, Molecular Weight Determination
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_01/MD0001-MD0002/index.php\"><img src=\"/oesper/museum/case18/shelf_01/MD0001-MD0002/views/MD0001-MD0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Crystal models\" title=\"Crystal models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_01/MD0001-MD0002/index.php\">MD0001-MD0002</a>, Crystal models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_01/MD0003/index.php\"><img src=\"/oesper/museum/case18/shelf_01/MD0003/views/MD0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Chemical slide-rule\" title=\"Chemical slide-rule\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_01/MD0003/index.php\">MD0003</a>, Chemical slide-rule
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_01/MD0004-MD0005/index.php\"><img src=\"/oesper/museum/case18/shelf_01/MD0004-MD0005/views/MD0004-MD0005_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Three-dimensional periodic tables\" title=\"Three-dimensional periodic tables\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_01/MD0004-MD0005/index.php\">MD0004-MD0005</a>, Three-dimensional periodic tables
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_02/MD0006/index.php\"><img src=\"/oesper/museum/case18/shelf_02/MD0006/views/MD0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Metal Bragg folding stereoviewer for viewing stereoviews of crystal structures and printed booklet of hand-drawn stereoviews of crystal structures\" title=\"Metal Bragg folding stereoviewer for viewing stereoviews of crystal structures and printed booklet of hand-drawn stereoviews of crystal structures\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_02/MD0006/index.php\">MD0006</a>, Metal Bragg folding stereoviewer for viewing stereoviews of crystal structures and printed booklet of hand-drawn stereoviews of crystal structures
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_02/MD0007/index.php\"><img src=\"/oesper/museum/case18/shelf_02/MD0007/views/MD0007_view1_thumb_smaller.jpg\" width=\"100\" height=\"90\" alt=\"Ionic lattice model\" title=\"Ionic lattice model\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_02/MD0007/index.php\">MD0007</a>, Ionic lattice model
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_02/MD0008-MD0009/index.php\"><img src=\"/oesper/museum/case18/shelf_02/MD0008-MD0009/views/MD0008-MD0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"67\" alt=\"Wood and plastic Stuart-Briegleb space-filling models\" title=\"Wood and plastic Stuart-Briegleb space-filling models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_02/MD0008-MD0009/index.php\">MD0008-MD0009</a>, Wood and plastic Stuart-Briegleb space-filling models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_03/MD0010/index.php\"><img src=\"/oesper/museum/case18/shelf_03/MD0010/views/MD0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Kekul&eacute;-von Baeyer tetrahedral ball and wire models\" title=\"Kekul&eacute;-von Baeyer tetrahedral ball and wire models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_03/MD0010/index.php\">MD0010</a>, Kekul&eacute;-von Baeyer tetrahedral ball and wire models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_03/MD0011/index.php\"><img src=\"/oesper/museum/case18/shelf_03/MD0011/views/MD0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"73\" alt=\"Student wooden ball and stick models\" title=\"Student wooden ball and stick models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_03/MD0011/index.php\">MD0011</a>, Student wooden ball and stick models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_04/MD0012/index.php\"><img src=\"/oesper/museum/case18/shelf_04/MD0012/views/MD0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Equivalency blocks\" title=\"Equivalency blocks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_04/MD0012/index.php\">MD0012</a>, Equivalency blocks
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

</tr>";

if ($varall=="false") 
  pageend ($varpagenum,$varorder);
}

function subpage8case ()
{
global $varall;
	global $varorder;
	global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
echo "<tr style=\"page-break-before:always;\">";


echo "<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_04/MD0013/index.php\"><img src=\"/oesper/museum/case18/shelf_04/MD0013/views/MD0013_view1_thumb_smaller.jpg\" width=\"100\" height=\"73\" alt=\"Ceramic Kekul&eacute; &quot;sausage&quot; models\" title=\"Ceramic Kekul&eacute; &quot;sausage&quot; models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_04/MD0013/index.php\">MD0013</a>, Ceramic Kekul&eacute; &quot;sausage&quot; models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case18/shelf_04/MD0014/index.php\"><img src=\"/oesper/museum/case18/shelf_04/MD0014/views/MD0014_view1_thumb_smaller.jpg\" width=\"72\" height=\"100\" alt=\"Wood and brass glyptic models\" title=\"Wood and brass glyptic models\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case18/shelf_04/MD0014/index.php\">MD0014</a>, Wood and brass glyptic models
<br/><a href=\"/oesper/museum/case18/index.html\">Case 18</a>, Models and Devices
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0001/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0001/views/GA0001_view1_thumb_smaller.jpg\" width=\"63\" height=\"100\" alt=\"Orsat apparatus\" title=\"Orsat apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0001/index.php\">GA0001</a>, Orsat apparatus
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0002/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0002/views/GA0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Hempel gas pipette\" title=\"Hempel gas pipette\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0002/index.php\">GA0002</a>, Hempel gas pipette
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0003-GA0004/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0003-GA0004/views/GA0003-GA0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"72\" alt=\"Metal and glass gas collection tubes\" title=\"Metal and glass gas collection tubes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0003-GA0004/index.php\">GA0003-GA0004</a>, Metal and glass gas collection tubes
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_01/GA0005/index.php\"><img src=\"/oesper/museum/case19/shelf_01/GA0005/views/GA0005_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Hempel gas burette with leveling bottle\" title=\"Hempel gas burette with leveling bottle\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_01/GA0005/index.php\">GA0005</a>, Hempel gas burette with leveling bottle
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_02/BP0001/index.php\"><img src=\"/oesper/museum/case19/shelf_02/BP0001/views/BP0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Burner with adaptor and plate for blowpipe analysis and assorted accessories\" title=\"Burner with adaptor and plate for blowpipe analysis and assorted accessories\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_02/BP0001/index.php\">BP0001</a>, Burner with adaptor and plate for blowpipe analysis and assorted accessories
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_02/BP0003-BP0008/index.php\"><img src=\"/oesper/museum/case19/shelf_02/BP0003-BP0008/views/BP0003-BP0008_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Reagent box and assorted blowpipes\" title=\"Reagent box and assorted blowpipes\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_02/BP0003-BP0008/index.php\">BP0003-BP0008</a>, Reagent box and assorted blowpipes
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case19/shelf_02/BP0009/index.php\"><img src=\"/oesper/museum/case19/shelf_02/BP0009/views/BP0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Berzelius lamp and assorted apparatus\" title=\"Berzelius lamp and assorted apparatus\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case19/shelf_02/BP0009/index.php\">BP0009</a>, Berzelius lamp and assorted apparatus
<br/><a href=\"/oesper/museum/case19/index.html\">Case 19</a>, Gas and Blowpipe Analysis
</td>


<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_01/RF0001/index.php\"><img src=\"/oesper/museum/case20/shelf_01/RF0001/views/RF0001_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Abbe refractometer\" title=\"Abbe refractometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_01/RF0001/index.php\">RF0001</a>, Abbe refractometer
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_01/RF0002/index.php\"><img src=\"/oesper/museum/case20/shelf_01/RF0002/views/RF0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Pulfrich refractometer\" title=\"Pulfrich refractometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_01/RF0002/index.php\">RF0002</a>, Pulfrich refractometer
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_01/RF0003/index.php\"><img src=\"/oesper/museum/case20/shelf_01/RF0003/views/RF0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Bausch &amp; Lomb refractometer with water jacket\" title=\"Bausch &amp; Lomb refractometer with water jacket\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_01/RF0003/index.php\">RF0003</a>, Bausch &amp; Lomb refractometer with water jacket
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/EC0012/index.php\"><img src=\"/oesper/museum/case20/shelf_02/EC0012/views/EC0012_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Apparatus for electrogravimetric analysis\" title=\"Apparatus for electrogravimetric analysis\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/EC0012/index.php\">EC0012</a>, Apparatus for electrogravimetric analysis
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/MS0001/index.php\"><img src=\"/oesper/museum/case20/shelf_02/MS0001/views/MS0001_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Optical microscope\" title=\"Optical microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/MS0001/index.php\">MS0001</a>, Optical microscope
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/MS0002/index.php\"><img src=\"/oesper/museum/case20/shelf_02/MS0002/views/MS0002_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Polarizing microscope\" title=\"Polarizing microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/MS0002/index.php\">MS0002</a>, Polarizing microscope
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_02/MS0003/index.php\"><img src=\"/oesper/museum/case20/shelf_02/MS0003/views/MS0003_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Metallurgical microscope\" title=\"Metallurgical microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_02/MS0003/index.php\">MS0003</a>, Metallurgical microscope
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_03/PS0001/index.php\"><img src=\"/oesper/museum/case20/shelf_03/PS0001/views/PS0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Polariscope with constant temperature bath\" title=\"Polariscope with constant temperature bath\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_03/PS0001/index.php\">PS0001</a>, Polariscope with constant temperature bath
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_03/PS0002/index.php\"><img src=\"/oesper/museum/case20/shelf_03/PS0002/views/PS0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"65\" alt=\"Hand-held polarizers\" title=\"Hand-held polarizers\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_03/PS0002/index.php\">PS0002</a>, Hand-held polarizers
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case20/shelf_03/PS0003/index.php\"><img src=\"/oesper/museum/case20/shelf_03/PS0003/views/PS0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Large mounted crystal of iceland spar with printed sign to illustrate double refraction\" title=\"Large mounted crystal of iceland spar with printed sign to illustrate double refraction\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case20/shelf_03/PS0003/index.php\">PS0003</a>, Large mounted crystal of iceland spar with printed sign to illustrate double refraction 
<br/><a href=\"/oesper/museum/case20/index.html\">Case 20</a>, Instrumentation I
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_01/CL0001/index.php\"><img src=\"/oesper/museum/case21/shelf_01/CL0001/views/CL0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"96\" alt=\"Hellige disk colorimeter with sample tubes and color comparison wheels\" title=\"Hellige disk colorimeter with sample tubes and color comparison wheels\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_01/CL0001/index.php\">CL0001</a>, Hellige disk colorimeter with sample tubes and color comparison wheels
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder);
}



function subpage9case ()
{

global $varall;
	global $varorder;
	global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
echo "<tr style=\"page-break-before:always;\">";

echo "<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_01/CL0002/index.php\"><img src=\"/oesper/museum/case21/shelf_01/CL0002/views/CL0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"LaMotte comparison colorimeter with sealed pH standards\" title=\"LaMotte comparison colorimeter with sealed pH standards\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_01/CL0002/index.php\">CL0002</a>, LaMotte comparison colorimeter with sealed pH standards
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_01/CL0003/index.php\"><img src=\"/oesper/museum/case21/shelf_01/CL0003/views/CL0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"93\" alt=\"Hellige disk colorimeter with electric light source\" title=\"Hellige disk colorimeter with electric light source\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_01/CL0003/index.php\">CL0003</a>, Hellige disk colorimeter with electric light source
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0004/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0004/views/CL0004_view1_thumb_smaller.jpg\" width=\"80\" height=\"100\" alt=\"Duboscq balancing colorimeter\" title=\"Duboscq balancing colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0004/index.php\">CL0004</a>, Duboscq balancing colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0005/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0005/views/CL0005_view1_thumb_smaller.jpg\" width=\"75\" height=\"100\" alt=\"Wolff balancing colorimeter\" title=\"Wolff balancing colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0005/index.php\">CL0005</a>, Wolff balancing colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0006/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0006/views/CL0006_view1_thumb_smaller.jpg\" width=\"80\" height=\"100\" alt=\"Bock-Benedict balancing colorimeter\" title=\"Bock-Benedict balancing colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0006/index.php\">CL0006</a>, Bock-Benedict balancing colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0007/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0007/views/CL0007_view1_thumb_smaller.jpg\" width=\"67\" height=\"100\" alt=\"Hellige wedge colorimeter\" title=\"Hellige wedge colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0007/index.php\">CL0007</a>, Hellige wedge colorimeter
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_02/CL0008/index.php\"><img src=\"/oesper/museum/case21/shelf_02/CL0008/views/CL0008_view1_thumb_smaller.jpg\" width=\"87\" height=\"100\" alt=\"Leitz wedge colorimeter with electric light source\" title=\"Leitz wedge colorimeter with electric light source\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_02/CL0008/index.php\">CL0008</a>, Leitz wedge colorimeter with electric light source
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_03/CL0009/index.php\"><img src=\"/oesper/museum/case21/shelf_03/CL0009/views/CL0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"100\" alt=\"Nessler tubes and racks\" title=\"Nessler tubes and racks\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_03/CL0009/index.php\">CL0009</a>, Nessler tubes and racks
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case21/shelf_03/CL0010/index.php\"><img src=\"/oesper/museum/case21/shelf_03/CL0010/views/CL0010_view1_thumb_smaller.jpg\" width=\"95\" height=\"100\" alt=\"Wooden wedge colorimeter with standards and calibration charts for water\" title=\"Wooden wedge colorimeter with standards and calibration charts for water\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case21/shelf_03/CL0010/index.php\">CL0010</a>, Wooden wedge colorimeter with standards and calibration charts for water
<br/><a href=\"/oesper/museum/case21/index.html\">Case 21</a>, Instrumentation II
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_01/SP0001/index.php\"><img src=\"/oesper/museum/case22/shelf_01/SP0001/views/SP0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Spectrometer\" title=\"Spectrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_01/SP0001/index.php\">SP0001</a>, Spectrometer
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_01/SP0002/index.php\"><img src=\"/oesper/museum/case22/shelf_01/SP0002/views/SP0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"66\" alt=\"Student demonstration spectroscope with battery operated electric light for the scale\" title=\"Student demonstration spectroscope with battery operated electric light for the scale\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_01/SP0002/index.php\">SP0002</a>, Student demonstration spectroscope with battery operated electric light for the scale
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_02/SP0003/index.php\"><img src=\"/oesper/museum/case22/shelf_02/SP0003/views/SP0003_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Browning student spectroscope\" title=\"Browning student spectroscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_02/SP0003/index.php\">SP0003</a>, Browning student spectroscope
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_02/SP0004/index.php\"><img src=\"/oesper/museum/case22/shelf_02/SP0004/views/SP0004_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Bunsen-Kirchhoff spectroscope with gas light for scale\" title=\"Bunsen-Kirchhoff spectroscope with gas light for scale\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_02/SP0004/index.php\">SP0004</a>, Bunsen-Kirchhoff spectroscope with gas light for scale
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0005/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0005/views/SP0005_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Spectrometer\" title=\"Spectrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0005/index.php\">SP0005</a>, Spectrometer
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0006/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0006/views/SP0006_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Bausch &amp; Lomb wave-length spectrometer\" title=\"Bausch &amp; Lomb wave-length spectrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0006/index.php\">SP0006</a>, Bausch &amp; Lomb wave-length spectrometer
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0007/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0007/views/SP0007_view1_thumb_smaller.jpg\" width=\"98\" height=\"100\" alt=\"Hand-held direct-vision spectroscope\" title=\"Hand-held direct-vision spectroscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0007/index.php\">SP0007</a>, Hand-held direct-vision spectroscope
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/case22/shelf_03/SP0008/index.php\"><img src=\"/oesper/museum/case22/shelf_03/SP0008/views/SP0008_view1_thumb_smaller.jpg\" width=\"96\" height=\"100\" alt=\"Spectroscopic eyepiece for a microscope\" title=\"Spectroscopic eyepiece for a microscope\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/case22/shelf_03/SP0008/index.php\">SP0008</a>, Spectroscopic eyepiece for a microscope
<br/><a href=\"/oesper/museum/case22/index.html\">Case 22</a>, Instrumentation III
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/PH0001/index.php\"><img src=\"/oesper/museum/table/PH0001/views/PH0001_view1_thumb_smaller.jpg\" width=\"100\" height=\"86\" alt=\"Coleman pH electrometer (Model 3)\" title=\"Coleman pH electrometer (Model 3)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/PH0001/index.php\">PH0001</a>, Coleman pH electrometer (Model 3)
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/PH0002/index.php\"><img src=\"/oesper/museum/table/PH0002/views/PH0002_view1_thumb_smaller.jpg\" width=\"100\" height=\"84\" alt=\"Coleman pH electrometer (Style 200)\" title=\"Coleman pH electrometer (Style 200)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/PH0002/index.php\">PH0002</a>, Coleman pH electrometer (Style 200)
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/PH0003/index.php\"><img src=\"/oesper/museum/table/PH0003/views/PH0003_view1_thumb_smaller.jpg\" width=\"98\" height=\"100\" alt=\"Beckman electronic pH meter (Model 6)\" title=\"Beckman electronic pH meter (Model 6)\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/PH0003/index.php\">PH0003</a>, Beckman electronic pH meter (Model 6)
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

</tr>";

if ($varall=="false")
  pageend ($varpagenum,$varorder);
}



function subpage10case ()
{
global $varall;
	global $varorder;
	global $varpagenum;
if ($varall=="false")
  pagestart ($varpagenum,$varorder);

else
echo "<tr style=\"page-break-before:always;\">";

echo "<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0009/index.php\"><img src=\"/oesper/museum/table/SP0009/views/SP0009_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Aminco spectrophotometer with external galvanometer\" title=\"Aminco spectrophotometer with external galvanometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0009/index.php\">SP0009</a>, Aminco spectrophotometer with external galvanometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0010/index.php\"><img src=\"/oesper/museum/table/SP0010/views/SP0010_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Aminco spectrophotometer with split-field visual readout\" title=\"Aminco spectrophotometer with split-field visual readout\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0010/index.php\">SP0010</a>, Aminco spectrophotometer with split-field visual readout
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0011/index.php\"><img src=\"/oesper/museum/table/SP0011/views/SP0011_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Aminco spectrophotometer with external galvanometer\" title=\"Aminco spectrophotometer with external galvanometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0011/index.php\">SP0011</a>, Aminco spectrophotometer with external galvanometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0012/index.php\"><img src=\"/oesper/museum/table/SP0012/views/SP0012_view1_thumb_smaller.jpg\" width=\"100\" height=\"56\" alt=\"Bausch &amp; Lomb universal spectrophotometer\" title=\"Bausch &amp; Lomb universal spectrophotometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0012/index.php\">SP0012</a>, Bausch &amp; Lomb universal spectrophotometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0013/index.php\"><img src=\"/oesper/museum/table/SP0013/views/SP0013_view1_thumb_smaller.jpg\" width=\"100\" height=\"64\" alt=\"Beckman quartz spectrophotometer\" title=\"Beckman quartz spectrophotometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0013/index.php\">SP0013</a>, Beckman quartz spectrophotometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

</tr>

<tr>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0014/index.php\"><img src=\"/oesper/museum/table/SP0014/views/SP0014_view1_thumb_smaller.jpg\" width=\"100\" height=\"65\" alt=\"Rouy Photrometer\" title=\"Rouy Photrometer\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0014/index.php\">SP0014</a>, Rouy Photrometer
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

<td valign=\"top\">
<a href=\"/oesper/museum/table/SP0015/index.php\"><img src=\"/oesper/museum/table/SP0015/views/SP0015_view1_thumb_smaller.jpg\" width=\"100\" height=\"75\" alt=\"Klett-Summerson photoelectric colorimeter\" title=\"Klett-Summerson photoelectric colorimeter\" border=\"1\" align=\"left\" vspace=\"0\" hspace=\"0\"/></a>
<br clear=\"all\"/><a href=\"/oesper/museum/table/SP0015/index.php\">SP0015</a>, Klett-Summerson photoelectric colorimeter
<br/><a href=\"/oesper/museum/table/index.html\">table</a>, Instrumentation IV
</td>

</tr>

</table>";


if ($varall=="false")
  pageend ($varpagenum,$varorder);
}


   switch ($varpagenum)
   {
     case "1" :
        subpage1case();
		break;
     case "2":
        subpage2case();
		break;
     case "3":
        subpage3case();
		break;
     case "4":
        subpage4case();
		break;
     case "5":
        subpage5case();
		break;
     case "6":
        subpage6case();
		break;
     case "7":
        subpage7case();
		break;
     case "8":
        subpage8case();
		break;
     case "9":
        subpage9case();
		break;
     case "10":
        subpage10case();
		break;
     case "true":
        subpage1case();
        subpage2case();
        subpage3case();
        subpage4case();
        subpage5case();
        subpage6case();
        subpage7case();
        subpage8case();
        subpage9case();
        subpage10case();
		break;
     default:
        echo "error";
   }



}


echo "</div>";
echo "</div>";

//<!--#include virtual=\"/includes/footer_oesper.inc\" -->";
include("../../includes/footer_oesper.inc");

echo "</body>";
echo "</html>";

?>