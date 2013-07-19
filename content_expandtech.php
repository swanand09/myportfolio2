
<script type="text/javascript">
			$(document).ready(function(){ //jQuery(window).load() must be used instead of jQuery(document).ready() because of Webkit compatibility				
					
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


<div id="paneCont">
    <div>
        <a href="javascript:void(0);" target="_blank"><img src="images/portfolio/expandtech/mt.jpg"  width="295"/></a>		
        
               
        <p class="more">
            Front-End: Flex/mxml/AS3/php<br>
            Back-End: Php
        </p>
        
        <p>
           - Implementation of some modules(google map, advanced datagrid, datagrid drill through and advanced datagrid tree) using as3, mxml and php<br>
		   - Customization of charts<br>
		   - Implementation of the back-office module using codeigniter framework
           - writing and validating user acceptance test documents            
        </p>
    </div>
    
    <div>
    
       <a href="javascript:void(0);" target="_blank"> <img src="images/portfolio/expandtech/vivo_frontend.jpg"  width="295" /></a>
        <a href="javascript:void(0);" target="_blank"> <img src="images/portfolio/expandtech/vivo_backend.jpg"  width="295" /></a>
              
      <p class="more">
           c#/asp.net/mvc3
    </p>
        
        <p>
           - Implementation of Asp.net mvc3 projects for the front-end and back-end <br>
           - integration of amcharts javascript framework and jquery UI features and layout<br>
           - working on the models c# libraries files, telerik open access ORM <br>
           - re-modelling the admin database and integrated windows service in the backend module.<br>
        </p>
    
    </div>
    <div>
    
       <a href="javascript:void(0);" target="_blank"> <img src="images/portfolio/expandtech/sipm1.jpg"  width="295" /></a>
        <a href="javascript:void(0);" target="_blank"> <img src="images/portfolio/expandtech/sipm2.jpg"  width="295" /></a>
              
        <p class="more">
           php/xml/html5
        </p>
        
        <p>
           - to design and develop an html5 version of the flash website in php, xml, and html5 components like the video.js
           - cross-browser validation of movie formats - mp4, ogv, webm
        </p>
    
    </div>
    
</div>
<!-- Start carousel-demo2 -->
<div class="sliderkit carousel-demo2" style="display:block;">
    <div class="sliderkit-nav">
        <div class="sliderkit-nav-clip">
            <ul>
                <li>
                    <a href="#1">
                       <img src="images/portfolio/expandtech/mt.jpg"  width="75" height="75"/>	
                        <strong>Flex 4.0 KPI dashboard solution</strong>
        
                    </a>
                </li>
                <li>
                    <a href="#2">
                        <img src="images/portfolio/expandtech/vivo_frontend.jpg" width="75" height="75"/>
                        <strong>MVC3 project</strong>
                      
                    </a>
        
                </li>
                <li>
                    <a href="#3">
                        <img src="images/portfolio/expandtech/sipm_original.jpg" width="75" height="75"/>
                        <strong>php/xml/html5</strong>
                   
                    </a>
                </li>
                
            </ul>
        </div>
        <div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a href="javascript:void(0);" title="Scroll to the left"><span>Previous</span></a></div>
        <div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a href="javascript:void(0);" title="Scroll to the right"><span>Next</span></a></div>

    </div>
</div>				
<!-- // end of carousel-demo2 -->

</div>
 <script>
	$(function() {	
		//$("#nav ul").tabs("#paneCont > div", {effect: 'fade', fadeOutSpeed: 400});
		$(".sliderkit-nav-clip ul").tabs("#paneCont > div", {effect: 'fade', fadeOutSpeed: 600});
	});
	</script>
   