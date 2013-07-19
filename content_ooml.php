
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
        <a href="http://www.swisslink.com/" target="_blank"><img src="images/portfolio/ooml/swisslink.jpg"  width="450"/></a>		
        <h3><a href="http://www.swisslink.com/" target="_blank">www.swisslink.com</a></h3>        
        <p class="more">
           I developed some modules like "review part", the client space, the shopping cart and the webservice for payment.  
        </p>
        
        <p>
        
        </p>
    </div>
    
    <div>
    
       <a href="http://www.packandfly.fr/" target="_blank"> <img src="images/portfolio/ooml/packfly.jpg"  width="450"/></a>
        
        <h3><a href="http://www.packandfly.fr/" target="_blank">www.packandfly.fr</a></h3>
        
        <p class="more">
         
        </p>
        
        <p>
           
        </p>
    
    </div>
    
    
    <div>   
        <a href="http://www.zenon-media.com/" target="_blank"> <img src="images/portfolio/ooml/zenon.jpg"  width="450"/></a>
        
        <h3><a href="http://www.zenon-media.com/" target="_blank">www.zenon-media.com</a></h3>
        
        <p class="more">
         
        </p>
        
        <p>
            
        </p>		
    
    </div>		
     <div>   
        <a href="http://www.wallofsecret.com/" target="_blank"> <img src="images/portfolio/ooml/wallofsecret.jpg"  width="450"/></a>
        
        <h3><a href="http://www.wallofsecret.com/" target="_blank">www.wallofsecret.com</a></h3>
        
        <p class="more">
          
        </p>
        
        <p>
            
        </p>		
    
    </div>		
    <div>   
        <a href="http://www.webradiostore.fr/" target="_blank"> <img src="images/portfolio/ooml/webradio.jpg"  width="450"/></a>
        
        <h3><a href="http://www.webradiostore.fr/" target="_blank">www.webradiostore.fr</a></h3>
        
        <p class="more">
          
        </p>
        
        <p>
            
        </p>		
    
    </div>
     <div>   
        <a href="http://www.myprivatedinner.com/" target="_blank"> <img src="images/portfolio/ooml/myprivatedinner.jpg"  width="450"/></a>
        
        <h3><a href="http://www.myprivatedinner.com/" target="_blank">www.myprivatedinner.com</a></h3>
        
        <p class="more">
          
        </p>
        
        <p>
            
        </p>		
    
    </div>
    <div>   
        <a href="http://www.phfcom.com/" target="_blank"> <img src="images/portfolio/ooml/phfcom.jpg"  width="600"/></a>
        
        <h3><a href="http://www.phfcom.com/" target="_blank">www.phfcom.com</a></h3>
        
        <p class="more">
          
        </p>
        
        <p>
            
        </p>		
    
    </div>
</div>
<!-- Start carousel-demo2 -->
<div class="sliderkit carousel-demo2" style="display:block;">
    <div class="sliderkit-nav">
        <div class="sliderkit-nav-clip">
            <ul>
                <li>
                    <a href="#13">
                       <img src="images/portfolio/ooml/swisslink.jpg"  width="75" height="75"/>	
                        <strong>swisslink</strong>
        
                    </a>
                </li>
                <li>
                    <a href="#14">
                        <img src="images/portfolio/ooml/packfly.jpg" width="75" height="75"/>
                        <strong>packandfly</strong>
                      
                    </a>
        
                </li>
                <li>
                    <a href="#15">
                        <img src="images/portfolio/ooml/zenon.jpg" width="75" height="75"/>
                        <strong>zenon-media</strong>
                   
                    </a>
                </li>
             	<li>
                    <a href="#16">
                        <img src="images/portfolio/ooml/wallofsecret.jpg" width="75" height="75"/>
                        <strong>Wall of Secret</strong>
        
                    </a>
                </li>
                <li>
                    <a href="#17">
                        <img src="images/portfolio/ooml/webradio.jpg" width="75" height="75"/>
                        <strong>Webradio store</strong>
                    </a>
                </li>
                <li>
                    <a href="#16">
                        <img src="images/portfolio/ooml/myprivatedinner.jpg" width="75" height="75"/>
                        <strong>My Private dinner</strong>
                        Le Club des Gourmets en Ligne
                    </a>
                </li>
                <li>
                    <a href="#17">
                        <img src="images/portfolio/ooml/phfcom.jpg" width="75" height="75"/>
                        <strong>PHF COM</strong>
                       Studio Radio - Emetteur FM..
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
