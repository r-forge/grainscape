
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
    <style type="text/css">

        html {
            height: 100%;
        }
        
        body {
            background-color: inherit; 
            color: inherit; 
            font-family: Verdana; 
            font-size: x-small; 
            margin: 0; 
            height: 100%;
        
        }
        
        a:active {
            color: #CC0000; 
        }
        
        a:link {
            color: #CC0000; 
        }
        
        a:visited {
            color: #CC0000; 
        }
        
        .msmMismatchAllele {
            background-color: #CC0000;
            color: white;
            font-weight: bold;
        }
        
        .msmMissingAllele {
            background-color: #FFCCCC;
        }
        
        .msmInterpolatedAllele {
            background-color: blue;
            color: white;
        }
        
        .msmGrid {
            border-collapse: separate;
        }
        
        .msmGridContent {
            padding: 0;	
            border: 1px solid #7EACB1; 			
        }
        

        .msmGridUpperPanel, .msmGridLowerPanel {
            padding: 3px;	
            border-left: 0;
            border-right: 0;	
            background-color: #F4FAFB; 
            color: #2A769D;	 
            font-family: Verdana; 
            font-size: x-small; 	
        }
        
        .msmGridUpperPanel {
            border-top: 0px;
            border-bottom: 1px solid;
            border-color: #7EACB1; 
        }
        
        .msmGridMiddlePanel {
            border: 0;	
        }
        
        .msmGridLowerPanel {
            border-top: 1px solid;
            border-bottom: 0px; 
            border-color: #C2D4DA; 
        }
        
        .msmGridUpperPanel td, .msmGridLowerPanel td {
            color: #2A769D;	 
            font-family: Verdana; 
            font-size: x-small; 		
        }
        
        
        .msmTable {
            border: 0;
            border-spacing: 0;
            border-collapse: collapse;
            empty-cells: show;
            width: 100%;
            font-family: Verdana; 
            font-size: x-small; 			
        }
        
        .msmTableSeparate {	
            border-collapse: separate;		
        }
        
        .msmTable td {
            padding: 3px; 
            border-bottom: 1px solid; 
            border-top: 0px;
            border-left: 0px;
            border-right: 1px solid; 
            border-color: #C2D4DA;  
            white-space:nowrap;
        }
        
            
        .msmTable .msmTableHeader, .msmTable .msmTableHeader td {
            background-color: #B7D8DC;	
            color: #000000; 
            border-bottom: 1px solid; 
            border-right: 1px solid; 
            border-color: #7EACB1; 
            background-repeat: repeat-x;		
            vertical-align: top;
            white-space:nowrap;
        }
        
        .msmPointer {
            cursor: pointer;
        }
        
        
        .msmTableHeaderBtn {
            width: 100%;
            font-family: Verdana; 
            font-size: x-small; 		
        }
        
        .msmTableHeader .msmTableHeaderBtn td {
            background: transparent;
            padding: 0;
            border: 0;
            white-space: nowrap;		
        }
        
        .msmTableSelectRow {
            background-color: #FFFF66; 
            color: #000000;
        }

</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31755441-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>

        <div style="margin-left:5%; margin-right:5%"><br>
        <table cellspacing="0" class="msmGrid">
                <tr>
                        <td class="msmGridContent">
                                <div class="msmGridUpperPanel">
                                        <div style="font-size:x-small;">
                                                <table>
                                                        <tr>
                                                                <td style="width:500px;">
                                                                <span style="font-size:18px;"><b>grainscape package</b></span><br>
                                                                
                                                                <br><span style="font-size:12px;">
                                                                <b>Efficient Modelling of Landscape Connectivity, Habitat, and Protected Area Networks</b><br>
                                                                <span style="font-size:9px;">Paul Galpern<sup>1,2,3</sup>, Sam Doctolero<sup>4</sup>, Alex M Chubaty<sup>5,6</sup><br><br>
                                                                <sup>1</sup>Faculty of Environmental Design (primary), University of Calgary, Calgary, AB, Canada<br>
                                                                <sup>2</sup>Department of Biological Sciences (adjunct), University of Calgary, Calgary, AB, Canada<br>
                                                                <sup>3</sup>Email: <a href="mailto:pgalpern@gmail.com">pgalpern@gmail.com</a>, Web: <a href="http://ecologics.ucalgary.ca/">ecologics.ucalgary.ca/</a><br><br>
                                                                <sup>4</sup>Email: <a href="mailto:sam.doctolero@gmail.com">sam.doctolero@gmail.com</a><br><br>
                                                                <sup>5</sup>Pacific Forestry Centre, Natural Resources Canada, Victoria, BC, Canada<br>
                                                                <sup>6</sup>Email: <a href="mailto:alexander.chubaty@canada.ca">alexander.chubaty@canada.ca</a>, Web: <a href="https://alexchubaty.com/">alexchubaty.com/</a><br><br>
                                                                </span>
                                                                <br>
                                                                Given a landscape resistance surface, functions in this package create grains of connectivity and minimum planar graph models that can be used to calculate effective distances for landscape connectivity at multiple scales.
                                                                <br>
                                                                <br>
                                                                <span style="color:indigo; font-size=12pt"><b>Development of this package has moved to GitHub (<a href="https://achubaty.github.io/grainscape">https://achubaty.github.io/grainscape</a>).</b></span>
                                                                <br>
                                                                <br>
                                                                <a href="https://github.com/achubaty/grainscape/" target="_blank">GitHub project page (versions >=0.3.0)</a><br><br>
                                                                <a href="https://r-forge.r-project.org/projects/grainscape/" target="_blank">R-Forge project page (version 0.3.0)</a><br><br>
                                                                </span>
                                                                </td>
                                                        </tr>
                                                </table>
                                        </div>
                                </div>
                        </td>
                </tr>
        </table>
        <br>
        <br>
        <span class="msmGridUpperPanel"><b><span style="font-size:18px;">Installation</span></b></span>
        <br>
        <br>
        <table cellspacing="0" class="msmGrid">
                <tr>
                        <td class="msmGridContent">
                                <div class="msmGridUpperPanel">
                                        <span style="font-size:small;">STEP 1:  Install package dependencies</span>
                                </div>
                                <div class="msmGridMiddlePanel">
                                        <table cellspacing="0" class="msmTable msmTableSeparate">
                                                
                                                <tr>
                                                        
                                                        <td width=500><span style="font-size:12px"><br>At the R prompt:<br>
                                                        <strong><code>install.packages("devtools")</code></strong></span><br><br></td>
                                                       
                                                </tr>
                                                <tr>
                                                        <td width=500>
                                                        <b>NOTE:</b>&nbsp;Building packages from source requires the appropriate development libraries for your operating system.<br>
                                                        See <a href="https://support.rstudio.com/hc/en-us/articles/200486498-Package-Development-Prerequisites">this guide</a> to get started.
                                                        </td>
                                                </tr>
                                            
                                        </table>
                                </div>
                        </td>
                </tr>
        </table>
        <br>
        <br>
        <table cellspacing="0" class="msmGrid">
                <tr>
                        <td class="msmGridContent">
                                <div class="msmGridUpperPanel">
                                        <span style="font-size:small;">STEP 2:  Install grainscape<br>...If you are using the most recent version of R...</span>
                                </div>
                                <div class="msmGridMiddlePanel">
                                        <table cellspacing="0" class="msmTable msmTableSeparate">
                                                
                                                <tr>
                                                        
                                                        <td width=500><span style="font-size:12px"><br>At the R prompt:<br>
                                                        <strong><code>devtools::install_github("achubaty/grainscape")</code></strong><br><br></span></td>
                                                       
                                                </tr>
                                                <tr>
                                                        <td width=500>This will download additional dependencies and install grainscape.</td>
                                                </tr>
                                            
                                        </table>
                                </div>
                        </td>
                </tr>
        </table>
        <br>
        <br>
        <table cellspacing="0" class="msmGrid">
                <tr>
                        <td class="msmGridContent">
                                <div class="msmGridUpperPanel">
                                        <span style="font-size:small;">STEP 3:  Get started</span>
                                </div>
                                <div class="msmGridMiddlePanel">
                                        <table cellspacing="0" class="msmTable msmTableSeparate">
                                                
                                               <tr>
                                                        
                                                    <td width=500><span style="font-size:12px"><br>1. At the R prompt:<br> 
                                                    <strong><code>library(grainscape)<br>
                                                    ?grainscape</code></span><br><br>
                                                       
                                                </tr>
                                                <tr>
                                                        <td width=500>Review the manual and the vignette tutorials.</td>
                                                </tr>
                                            
                                        </table>
                                </div>
                        </td>
                </tr>
        </table>
        <br>
        <br>
        </div>
</body>
</html>
