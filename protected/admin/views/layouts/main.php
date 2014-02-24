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
			<div id="logo"><a href="#" title="Spirit Content Manager System!">Dashboard</a></div>
			<div class="info">
			<?php if(!Yii::app()->user->isGuest) { ?>
				<?php echo CHtml::link('Logout',array('/site/logout'),array('id'=>'logout')); ?> |
				USER: <span class="username">
				<?php echo CHtml::link(Yii::app()->user->username,array('/user/show','id'=>Yii::app()->user->id));?></span> |
				ROLE: <?php echo  Yii::app()->user->role;?> |
				LAST LOGON: <?php echo  Yii::app()->user->lastLoginTime;?>
				
				<?php echo CHtml::link('clean cache',array('/site/cleancache'));?>				
			<?php }?>					
			</div>
		</ul>
	</div>
	<div id="mainarea">
		<div id="sidebar">
		<?php 
			$userid=Yii::app()->user->id;
			
			$cache_key=md5("getOpeartionList".$userid);
			if(!$data=Yii::app()->cache->get($cache_key))
			{	
				// check user roles. ('UserManger')
				if (Yii::app()->user->checkAccess('UserManager'))
				{
					$data['user'] = array(
						"text" => "User Center",
						"expanded" => true,
						"classes" => "important",
						"icon" => "user",
						"children" => array(
							'list' => array(
								'text'=> CHtml::link('User List',array('/user/')),
							),
						),
					);
				}
				
				// check user roles ('PostManager')
				if (Yii::app()->user->checkAccess('PostManager'))
				{
					$data['post'] = array(
						"text" => "Post Center",
						"expanded" => true,
						"classes" => "import",
						"icon" => "Post",
						"children"=>array(
							0 => array(
								'text' => CHtml::link('Post List', array('/post/')),
							),
							1 => array(
								'text' => CHtml::link('Comment List', array('/comment/')),
							),
							2 => array(
								'text' => CHtml::link('blocked comment', array('/comment/blocked')),
							)
						),
					);
				}
				
				// the site settings module.
				if (Yii::app()->user->checkAccess('Administrator')) {
					$data['setting'] = array(
						"text" => "Site Setting",
						"expanded" => true,
						"classes" => "config",
						"icon" => "config",
						"children" => array(
							0 => array(
								'text' => CHtml::link('Site info', array('/')),
							),
							1 => array(
								'text' => CHtml::link('Site Setting', array('/config/')),
							),
							2 => array(
								'text' => CHtml::link('Custom Setting', array('/config/')),
							),
							3 => array(
								'text' => CHtml::link('Catalog Setting', array('/catalog/')),
							) 
						),
					);
				}
				
				Yii::app()->cache->set($cache_key,$data);
			}
				
			$this->widget('CTreeView',array('persist'=>'cookie','data'=>$data,'htmlOptions'=>array('id'=>'treeview','class'=>'filetree  treeview-famfamfam')));		
		?>	
	
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
</div>
</body>
</html>