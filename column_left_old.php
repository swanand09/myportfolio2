<!-- accordion -->
            <div id="accordion">
                <h2 class="current" id="expandtech2"><a href="javascript:void(0);" class="ajaxLink" onclick="javascript:clickToggle('expandtech');">Expand Technology Ltd</a></h2>
                 
                <div class="pane"  id="expandtech" style="display:block">
                
                    <a href="http://www.expand-technology.com/" target="_blank"><img src="images/portfolio/expandtech.jpg" alt="Expand Technology Ltd" style="float:left; margin:0 15px 15px 0;border:none;" /></a>
                    
                    <h3>Web Developer</h3>
                    <p>Aug 2011 -  Aug 2012</p>
                    <p>
                        <strong>Skills: Php, Mysql, Javascript - Jquery, Html, XML, Css, Actionscript 3.0, MXML, C#/asp.net/mvc3</strong>
            
                    </p>
                    
                    <!--<p style="clear:both">
                        Consectetur adipiscing elit. Praesent bibendum eros ac nulla. Integer vel lacus ac neque viverra ornare. Nulla id massa nec erat laoreet elementum. Vivamus tristique auctor odio. Integer mi neque.
                    </p>-->
                    
                    
                </div>	
            
                <h2  id="chesteroc2"><a href="javascript:void(0);" class="ajaxLink" onclick="javascript:clickToggle('chesteroc');">Chesteroc Ltd/Mundocom Mauritius</a></h2>
                 
                <div class="pane"  id="chesteroc">
                
                    <a href="http://www.chesteroc.com/" target="_blank"><img src="images/portfolio/chesteroc.jpg" alt="Chesteroc Ltd - Mundocom Mauritius" style="float:left; margin:0 15px 15px 0;border:none;" /></a>
                    
                    <h3>Web Developer/Team Leader</h3>
                    <p>Oct 2009 - July 2011</p>
                    <p>
                        <strong>Skills: Php, Mysql, Javascript - Jquery, Html, XML, Css, Actionscript 3.0, Flash, Psd slicing</strong>
            
                    </p>
                    
                    <!--<p style="clear:both">
                        Consectetur adipiscing elit. Praesent bibendum eros ac nulla. Integer vel lacus ac neque viverra ornare. Nulla id massa nec erat laoreet elementum. Vivamus tristique auctor odio. Integer mi neque.
                    </p>-->
                    
                    
                </div>
                
                <h2 id="ooml2"><a href="javascript:void(0);" class="ajaxLink" onclick="javascript:clickToggle('ooml');">Online Outsourcing Mauritius Ltd</a></h2>
                
                <div class="pane" id="ooml">
                	  <a href="http://www.onlineoutsourcing.net/" target="_blank"><img src="images/portfolio/ooml.jpg" alt="Online Outsourcing Mauritius Ltd" style="float:left; margin:0 15px 15px 0;border:none;" /></a>
                    <h3>Web Developer</h3>
                    <p>Sept 2008 - Sept 2009</p>
                    <p>
                        Skills: Php, Mysql, Javascript - YUI, Html, Css	
                    </p>
                </div>
            
                <h2 id="netgroup2"><a href="javascript:void(0);" class="ajaxLink" onclick="javascript:clickToggle('netgroup');">Netgroup Ltd</a></h2>
                
                <div class="pane" id="netgroup">
                    <a href="http://www.netgroup.mu/" target="_blank"><img src="images/portfolio/netgroup.jpg" alt="Netgroup Ltd" style="float:left; margin:0 15px 15px 0;border:none;" /></a>
                    <h3>Web Developer</h3>   
                    <p>March 2007 - April 2008</p>                 
                    <p>            
                        Skills: Php, Mysql, Javascript - Jquery, Html, Css, Smarty templating, Xml
                    </p>
                </div>	
                
                 <h2 id="awp2"><a href="javascript:void(0);" class="ajaxLink" onclick="javascript:clickToggle('awp');">Alliance Web et Presse Ltd</a></h2>
                
                <div class="pane" id="awp">
                	 <a href="http://www.awppublishing.com/" target="_blank"><img src="images/portfolio/awp.jpg" alt="Alliance Web et Presse Ltd" style="float:left; margin:0 15px 15px 0;border:none;" /></a>
                    <h3>Web Developer</h3>      
                    <p>Nov 2006 - March 2007</p>              
                    <p>
            			Skills: Php, Mysql, Javascript, html, css
                    </p>
                </div>	
            
            </div>
            <script>
				/*$(function() { 
					$("#accordion").tabs("#accordion div.pane", {tabs: 'h2', effect: 'slide', initialIndex: null});
				});*/
				function clickToggle(idCon)
				{
					switch(idCon)
					{
						case 'expandtech':
							$('#expandtech').slideToggle('slow');
							$('#chesteroc').hide('slide','','slow');							
							$('#ooml').hide('slide','','slow');
							$('#netgroup').hide('slide','','slow');
							$('#awp').hide('slide','','slow');
							$("#accordion h2").removeClass("current");
							$("#expandtech2").addClass("current");
							//$index = ($('#chesteroc').index("#accordion div"));
							//$("#accordion h2:nth-child(" + $index + ")").addClass("current");
							$(".contentRight").empty().html("<div class='preloderContent'><div class='imgPrel'><img src='images/preloader/loading.gif'></div></div>").load('content_expandtech.php');
                                                        // $("#result").html(ajax_load).load(loadUrl);  
						break;
						case 'chesteroc':
							$('#chesteroc').slideToggle('slow');
							$('#ooml').hide('slide','','slow');
							$('#netgroup').hide('slide','','slow');
							$('#awp').hide('slide','','slow');
							$('#expandtech').hide('slide','','slow');
							$("#accordion h2").removeClass("current");
							$("#chesteroc2").addClass("current");
							//$index = ($('#chesteroc').index("#accordion div"));
							//$("#accordion h2:nth-child(" + $index + ")").addClass("current");
							$(".contentRight").empty().html("<div class='preloderContent'><div class='imgPrel'><img src='images/preloader/loading.gif'></div></div>").load("content_chesteroc.php");							
						break;
						case 'ooml':
							$('#chesteroc').hide('slide','','slow');
							$('#ooml').slideToggle('slow');
							$('#netgroup').hide('slide','','slow');
							$('#awp').hide('slide','','slow');
							$('#expandtech').hide('slide','','slow');
							$("#accordion h2").removeClass("current");
							$("#ooml2").addClass("current");	
							$(".contentRight").empty().html("<div class='preloderContent'><div class='imgPrel'><img src='images/preloader/loading.gif'></div></div>").load("content_ooml.php");	
													
						break;
						case 'netgroup':
							$('#chesteroc').hide('slide','','slow');
							$('#ooml').hide('slide','','slow');
							$('#netgroup').slideToggle('slow');
							$('#awp').hide('slide','','slow');
							$('#expandtech').hide('slide','','slow');
							$("#accordion h2").removeClass("current");
							$("#netgroup2").addClass("current");							
							$(".contentRight").empty().html("<div class='preloderContent'><div class='imgPrel'><img src='images/preloader/loading.gif'></div></div>").load("content_netgroup.php");		
						break;
						case 'awp':
							$('#chesteroc').hide('slide','','slow');
							$('#ooml').hide('slide','','slow');
							$('#netgroup').hide('slide','','slow');
							$('#awp').slideToggle('slow');
							$('#expandtech').hide('slide','','slow');
							$("#accordion h2").removeClass("current");
							$("#awp2").addClass("current");
							$(".contentRight").empty().html("<div class='preloderContent'><div class='imgPrel'><img src='images/preloader/loading.gif'></div></div>").load("content_awp.php");	
						break;
					}
				}
				
            </script>
