<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="menggangcsu@gmail.com"/>
<title><?php echo $this->pageTitle; ?></title>

<?php
	$resources = dirname(Yii::app()->controllerPath).DIRECTORY_SEPARATOR.'media';
	// publish the files
	$baseUrl = Yii::app()->assetManager->publish($resources);
	// register the files
	Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/admin.js');
	Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jquery.idTabs.min.js');
	// If skin
	Yii::app()->clientScript->registerCssFile($baseUrl.'/admin.css');
	//colorbox
	Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/colorbox/colorbox/jquery.colorbox-min.js');
	Yii::app()->clientScript->registerCssFile($baseUrl.'/js/colorbox/example1/colorbox.css');
?>

<script type="text/javascript">
	$(document).ready(function(){
		$(".colorbox").colorbox({opacity:0.4});
	});			
</script>
</head>

<body>
<div id="warp">
	<div id="header">
		<ul id="toolbar">
			<div id="logo"><a href="#" title="Spirit Content Manager System!">CMS</a></div>
			<div class="info">
			<?php if(!Yii::app()->user->isGuest) { ?>
				<?php echo CHtml::link('LOGOUT',array('/site/logout'),array('id'=>'logout')); ?> |
				USER: <span class="username">
				<?php echo CHtml::link(Yii::app()->user->username,array('/user/show','id'=>Yii::app()->user->id));?></span> |
				ROLE: <?php echo  Yii::app()->user->role;?> |
				LAST LOGON: <?php echo  Yii::app()->user->lastLoginTime;?>
				
				<?php echo CHtml::link('CLEAN CACHE',array('/website/CleanCache'));?>				
			<?php }?>
					
			</div>
		</ul>
	</div>
	<div id="mainarea">
		<div id="sidebar">
		</div>
	</div>
	
	<div id="primary">
			<?php echo $content; ?>
	</div>
	<div class="clear"></div>
</div>

<div id="footer">
	<div id="copyright">Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
				All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div>
</div>
</body>