
<div class="span3">
	
  <aside id="sidebar-left" class="sidebar">
  	<!-- The nvai bar -->
  	<div id="post-list-widget" class="widget side-box mt-10 widget-posts">
      <div class="hd">
        <span>Category</span>
      </div>
      <div class="m15 widget-container">
        
        <?php foreach ($this->mainMenu as $id=>$menuArray) : ?>
        	<!-- the parent menu -->
        	<?php if (count($menuArray) > 0) : ?>    	
	        	<!-- print the menu -->
	        	<?php foreach ($menuArray as $key=>$value) : ?>
	        	
		        	<ul class="nav"><?php echo $key;?>
		        			        	
		        	<!-- create its submenu -->
		        	<?php foreach ($value as $a => $b):?>
						<?php foreach ($b as $c => $d) :?>
							<?php 
								$arr = array("catalog" => $d);
								$naviLink = $this->createUrl('post/list',$arr).">";
								echo "<li><a href= $naviLink", $c, "</a></li>";
							?>		
						<?php endforeach;?>
					<?php endforeach;?>
					
					</ul>
							        	
	        	<?php endforeach;?>      	
        	<?php endif;?>
        <?php endforeach;?>   	
        
        <div class="clear"></div>
      </div>
    </div>
  
    <div id="post-list-widget" class="widget side-box mt-10 widget-posts">
      <div class="hd">
        <span>Recent posts</span>
      </div>
      <div class="tab-v2 margin-bottom-40">
      	<ul class="nav nav-tabs">
      		<li class="active">
      			<a data-toggle="tab" href="#home-1">Recent Post</a>
      		</li>
      		<li>
      			<a data-toggle="tab" href="#home-2">Most Popular</a>
      		</li>
      	</ul>
      	
      	<div class="tab-content">
      		<div id="home-1" class="tab-pane active">
      			<ul>
      			<?php foreach ($this->recentPost as $id=>$e):?>
      				<li><a href="index.php?r=post/show&id=<?php echo $e->id?>"><?php echo $e->title?></a>  <?php echo $e->create_time;?></li>
      			<?php endforeach;?>
      			</ul>      			
      		</div>
      		<div id="home-2" class="tab-pane">
      			<ul>
      			<li>TBD.</li>
      			</ul>
      		</div>
      	</div>
      </div>
      
      <div class="clear"></div>
    
    </div>  
  </aside>	
	
</div>