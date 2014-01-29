<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> <?php echo Yii::app()->params['site_name']?></title>
	<meta name="generator" content="CMS Spirit" />
	<meta name="author" content= <?php echo Yii::app()->params['site_author']?> />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
	<?php Yii::app()->clientScript->registerCoreScript('jquery',CClientScript::POS_END); ?>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl?>/static/js/jquery.SuperSlide.2.1.js"></script>
</head>

<body>

<div class="container" id="page">

	<?php require_once 'head.php';?>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div class="siteInfo clear">
  	<div class="wrap">
	    <div class="box">
	      <h2 class="title">Contact us</h2>
	      <div class="action">
	        <p class="home">home</p>
	        <p class="telephone">telephone</p>
	        <p class="telephone">telephone</p>
	        <p class="mobile">mobile</p>
	        <p class="email">email</p>
	      </div>
	    </div>
    </div>
    </div>
	
	<div id="footer">
		<div class="wrap clear">
			<div class="act">
				Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
				All Rights Reserved.<br/>
				<?php echo Yii::powered(); ?>
			</div>
		</div>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
