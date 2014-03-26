<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> <?php echo Yii::app()->params['site_name']?></title>
	<meta name="generator" content="CMS Spirit" />
	<meta name="author" content= <?php echo Yii::app()->params['site_author']?> />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.ennui.contentslider.css" />
</head>

<body>
	<div id="header_wrapper">

		<div id="header">
	    
	    	<div id="site_title">
	            <h1><a href="#" target="_parent">
	                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" alt="Web Templates">
	                <span>Simple Fast CMS</span>
	            </a></h1>
	        </div>
	        
	        <div id="search_box">
	            <form action="#" method="get">
	                <input type="text" value="" name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)">
	                <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search">
	            </form>
	        </div>
	        
	        <div class="cleaner"></div>
		</div><!-- end of header -->

    	<div id="menu">
            <ul>
                <li><a href="index.php" class="brand">Home</a></li>
                <?php foreach ($this->mainMenu as $id=>$menuArray) : ?>
            		<?php if (count($menuArray) > 0) : ?>
            		<li class="dropdown"> 
            			<?php foreach ($menuArray as $key=>$value) : ?>
            			<!-- create the parent menu -->
            			<a href="<?php echo $this->createUrl('post/list') ?>"class="dropdown-toggle js-activated"><?php echo $key;?>
							<b class="caret"></b>
						</a>
									
						<!-- create its submenu -->										            					
						<ul class="dropdown-menu">
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
					</li>
            		<?php endif;?>
            	<?php endforeach;?> 
            	   
                <li><a href="index.php?r=site/contact">Contact Us</a></li>
            </ul>    	
    	</div><!-- end of menu -->
        
        <div id="banner">
        	<div id="one" class="contentslider">
            	<div class="cs_wrapper">
                	<div class="cs_slider">
                	
                		<div class="cs_article">
                        	<div class="left">
                            	<h2>Spirit v1.0.0 is released.</h2>
                                
                                <p>Spirit CMS is a simple but powerful CMS with full features, and it's easy to extend to meet variable needs, now it's aviable for download.</p>
                                    
                                <div class="button"><a href="https://github.com/GeorgeMeng">Download</a></div>
                             </div>
                             <div class="right">
                             	<a href="#" target="_parent">
                             	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/slider/slide02.jpg" alt="Template 1" /></a>
                             </div>
                        
                        </div><!-- End cs_article -->
                            
						<div class="cs_article">
                        	<div class="left">
                            	<h2>Suspendisse sed odio ut mi auctor blandit</h2>
                                <p>Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. </p>
                                    
                            	<div class="button"><a href="#">Read more</a></div>
                        	</div>
                            <div class="right">
                            	<a href="#" target="_parent"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/slider/slide01.jpg" alt="Template 2" /></a>
                            </div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <div class="left">
                                    <h2>Suspendisse sed odio ut mi auctor blandit</h2>
                                    <p>Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. </p>
                                    
                                    <div class="button"><a href="#">Read more</a></div>
                               	</div>
                            <div class="right">
                                <a href="#" target="_parent"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/slider/slide03.jpg" alt="Template 3" /></a>
                            </div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                                <div class="left">
                                    <h2>Suspendisse sed odio ut mi auctor blandit</h2>
                                    <p>Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. </p>
                                    
                                    <div class="button"><a href="#">Read more</a></div>
                               	</div>
                            <div class="right">
                                <a href="#" target="_parent"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/slider/slide04.jpg" alt="Template 4" /></a>
                            </div>
                            </div><!-- End cs_article -->
                      
                        </div><!-- End cs_slider -->
                    </div><!-- End cs_wrapper -->
                </div><!-- End contentslider -->   
        </div>
	</div> <!-- header_wrapper -->

	<?php echo $content; ?>    

	<div id="footer_wrapper">
		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div>
	</div><!-- footer -->
    
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.3.1.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.ennui.contentslider.js"></script>
	
	<?php 
		$leftBtn = Yii::app()->theme->baseUrl."/images/cs_leftImg.png";
		$rightBtn = Yii::app()->theme->baseUrl."/images/cs_rightImg.png";
	
		echo "
		<script>
			$(function() {
				$('#one').ContentSlider({
					leftBtn : '$leftBtn',
					rightBtn : '$rightBtn',
					width : '920px',
					height : '200px',
					speed : 800,
					easing : 'easeInOutBack'
				});
			});
		</script>"
	?>
</body>
</html>
