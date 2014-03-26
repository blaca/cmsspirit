
<div id="content_wrapper_outer">
	<div id="content_wrapper_inner">
		<div id="content_wrapper">

			<div id="content">
				<h2>About Spirit CMS</h2>
            
            	<p><b>SpiritCMS</b> is a fast, safe CMS written by php. 
					it's simple but with full features, ease to extend to meet your needs, 
					You are free to use this software, Please contact us if you want some support.</p>
					
       			<div class="cleaner_h40"></div>
            
           		<h2>Features</h2>
            
            	<ul>
            	    <li>SIMPLE</li>
			      	<li>SAFE</li>
			      	<li>STATBLE</li>
            	</ul>           
            	<cite><span><a href="#">Read more</a></span></cite>
            
            	<div class="cleaner_h40"></div>
            
            	<h2>Our Works</h2>
            	<div id="recent_project">
                	<ul>
                    	<li>
                        	<a href="#" title="Pro"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/gallery/thumbnail/image_04.jpg" alt="web template 1"></a><h5>Professional</h5>
                    	</li>
                    	<li>
                        	<a href="#" title="Motor"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/gallery/thumbnail/image_06.jpg" alt="web template 2"></a><h5>Motorcycle</h5>
                    	</li>
                	</ul>
                
                	<div class="cleaner"></div>
                	<div class="button float_l"><a href="gallery.html">View All</a></div>
        		</div>
                     
        	</div> <!-- end of content -->
        
        	<div id="sidebar">

           	<div id="news_section">
                
                <h2>Recent News</h2>
                
               	<?php foreach($post as $key=>$value):?>
               	
               	<div class="news_box">
	           		<a href="index.php?r=post/show&id=<?php echo $value->id?>"><?php echo $value->title?></a>
	                <p> <?php echo $value->intro;?></p>
	            </div>
	            <?php endforeach?>
                               	
                <div class="cleaner"></div>   
            </div>
            
            <div class="section_rss_weibo">
        
                <div class="rss_weibo weibo">
                <a href="#" target="_parent">FOLLOW US <span>on Weibo</span></a>
                </div>
                
                <div class="margin_bottom_20"></div>
                
                <div class="rss_weibo rss">
                <a href="#">SUBSCRIBE <span>rss feeds</span></a>
                </div>
            
            </div>
        
            <div class="cleaner"></div>
        	</div> <!-- end of sidebar -->

			<div class="cleaner"></div>
		</div>
	</div>
</div>