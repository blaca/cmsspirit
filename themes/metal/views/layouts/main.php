<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> <?php echo Yii::app()->params['site_name']?></title>
	<meta name="generator" content="CMS Spirit" />
	<meta name="author" content= <?php echo Yii::app()->params['site_author']?> />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
	<?php Yii::app()->clientScript->registerCoreScript('jquery',CClientScript::POS_END); ?>
</head>

<body>
	<?php require_once 'head.php';?>
	
	<div class="container">
	    <?php echo $content; ?>    
	    <div class="clear"></div>   
	</div> <!-- Container -->
	
	<hr>
	
	<div id="footer">
		<div class="wrap clear">
			<div class="act">
				Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
				All Rights Reserved.<br/>
				<?php echo Yii::powered(); ?>
			</div>
		</div>
	</div><!-- footer -->
    
	
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery/jquery-1.7.1.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-transition.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-dropdown.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-carousel.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-scrollspy.js"></script>	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-typeahead.js"></script>
	<script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/holder.js"></script>	
</body>
</html>
