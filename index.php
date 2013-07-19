<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="Swanand Reddy Luthmoodoo - web developer - php - actionscript 3.0 - jquery" />	
<meta name="Keywords" content="portfolio, freelance web, programmer, developer, php, as3, css, html, jquery, codeigniter,symfony,doctrine,typo3,typoscript,flex,mxml, swanand, reddy, luthmoodoo" />
<title>Swanand Reddy Luthmoodoo - Portfolio</title>
<link rel="stylesheet" type="text/css" href="css/element.css"/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/png" />
<!--<link rel="stylesheet" type="text/css" href="/css/global-0.52.css?foo" />	 
-->
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js?foo"></script> 
<!--<script type="text/javascript" src="http://static.flowplayer.org/js/global-0.54.js"></script> -->
<link rel="stylesheet" type="text/css" href="css/tabs-accordion.css"/> 	
<!-- Launch Slider Kit -->
<script type="text/javascript" src="js/jquery.sliderkit.1.5.1.js"></script>
<!--<script type="text/javascript" src="../lib/js/jquery.sliderkit.1.5.1.pack.js"></script>-->
<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
<!--<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>-->
<script type="text/javascript" src="js/jquery-ajaxLink.js"></script>

<!-- Plugin styles -->
<link rel="stylesheet" type="text/css" href="css/sliderkit-core.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="css/sliderkit-demos.css" media="screen, projection" />
<!-- Site styles -->

<script type="text/javascript">
			jQuery(window).load(function(){ //jQuery(window).load() must be used instead of jQuery(document).ready() because of Webkit compatibility				
					
				// Carousel > Demo #2
				jQuery(".carousel-demo2").sliderkit({
					shownavitems:4,
					scroll:1,
					mousewheel:true,
					circular:true,
					start:2
				});

			});	
		
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".ajaxLink").ajaxLink();
		
	});
	
</script>

</head>

<body>
   <div id="global">
   		<div class="contentLeft">
        	<?php include("column_left.php");?>
            <br />
            <a href="Swanand_Reddy_Luthmoodoo_CV.pdf" style="text-decoration:none;color:#000;" title="My Curriculum Vitae" target="_blank"><img src="images/pdf_icon.png" style="border:none;margin-right:5px; vertical-align:middle;" alt="My Curriculum Vitae" />CV</a>
	    <br />
	     Presentation: <a href="http://prezi.com/gubjmwb2057_/flex-html-5-breaking-the-taboo/" style="text-decoration:none;color:#000;" title="Flex and html5: demystified" target="_blank"> Flex and html5: demystified</a> 	
        </div>
        
        <div class="contentRight" style="position:absolute;left:310px;">
           
			<?php include("content_expandtech.php");?>
           
   		</div>
</div> 
<!--end of div global-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12856783-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
