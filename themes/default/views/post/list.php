<div id="content_wrapper_outer">
	<div id="content_wrapper_inner">
	<div id="content_wrapper">

    	<div id="content">
    
    	<?php foreach ($post as $n=>$model) : ?>
    		<div class="post_section">
    			<h2><?php echo $model->title; ?></h2>
    			
    			<?php echo date('Y/m/d',strtotime($model->create_time));?> | author <?php echo $model->author;?>
    			    			
    			<div class="post_content">
    			    					
    				<div class="left">
    					<p><?php echo $model->intro?></p>
    					
    					<?php echo CHtml::link("Continue reading...", array('show','id'=>$model->id)); ?> |
    					
    					<a href="#">Comments (<?php echo $model->reply_count;?>)</a>
    				</div>   			
    			</div>
    		
    			<div class="cleaner"></div>
    		</div>   	
    	<?php endforeach;?>
        
        <div class="cleaner"></div>
        
        <!-- the Page indicator-->
        <?php $this->widget('CLinkPager', array(  
    	  'pages' => $pages,  
  		)) ?> 
        </div>
        
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