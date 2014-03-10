<!DOCTYPE HTML>
<html>

<!-- THE TOP CONTAINER -->
<div id="top-container">
  <div id="top">
	<div id="logo"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png" ></div>
	<div id="top-right"><p>中文 | English</p></div>
	<div class="clear"></div>
  </div>
</div>

<!-- THE NAVBAR -->
<div class="navbar navbar-static-top">
	<div class="navbar-inner">
    	<div class="container">
        	<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
            	<span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a href="index.php" class="brand">Home</a>

            <div class="nav-collapse">
            	<ul class="nav">
            	
            		<?php foreach ($this->mainMenu as $id=>$menuArray) : ?>
            			
            			<?php if (count($menuArray) > 0) : ?>
            			            				
            				<li class="dropdown"> 
            				
            					<?php foreach ($menuArray as $key=>$value) : ?>
            					
            						<!-- create the parent menu -->
            						<a href="<?php echo $this->createUrl('post/list') ?>" 
										class="dropdown-toggle" data-toggle="dropdown"><?php echo $key;?>
										<b class="caret"></b>
									</a>
									
									<!-- create its submenu -->										            					
									<ul class="dropdown-menu">
										<?php foreach ($value as $a => $b):?>
											
											<?php foreach ($b as $c => $d) :?>
											
												<?php 
													$naviLink = $this->createUrl('post/list',$b).">";
													echo "<li><a href= $naviLink", $c, "</a></li>";
												?>		
														
											<?php endforeach;?>
																		
										<?php endforeach;?>
									</ul>
									
								<?php endforeach;?>
								
							</li>
            			
            			<?php endif;?>
            			
            	    <?php endforeach;?>            	    
                        
	                <li><a href="<?php echo $this->createUrl('/special')?>">Subject</a></li>
	                
					<li><a href="<?php echo $this->createUrl('/service')?>">Support Service</a></li>
					
					<li><a href="<?php echo $this->createUrl('site/contact')?>">Contact US</a></li>                       
                        
            	</ul>

	            <form action="/search" class="navbar-search">
	            	<input type="text" placeholder="Search" class="search-query span2" name="q" value="">
	                <input type="hidden" name="scope" id="search_scope" value="posts">
	            </form>
                    
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div>
<!-- END THE NAVBAR -->
<!-- END THE HEAD--> 