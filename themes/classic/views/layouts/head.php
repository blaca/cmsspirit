<!DOCTYPE HTML>
<html>

<!-- THE HEAD -->
<div id="header" class="header">
	<div class="wrap">
	<div class="logo floatL">
		<h1><?php echo Yii::app()->params['site_name']?></h1>
	</div>
	<div class="nav floatL">
	<div class="clear">
	<dl class="tnLeft">
		<dd>
			<h3><a href="<?php echo Yii::app()->homeUrl?>">Home</a></h3>
		</dd>
		<?php $catalog = Catalog::model()->findAll(new CDbCriteria)?>
		<?php foreach($catalog as $key=>$model):?>
			<?php if($model['parent_id'] == 0):?>
			<dd>
				<h3>
					<a href="<?php echo $this->createUrl('post/index',array('catalog'=>$model['catalog_name_alias'])) ?>"><?php echo $model['catalog_name']?></a>
		        </h3>
		    	<ul>
					<?php foreach ($catalog as $name=>$value):?>
						<?php if ($model['id'] == $value['parent_id']) {
							$naviLink = $this->createUrl('post/index',array('catalog'=>$value['catalog_name_alias'])).">";
							echo "<li><a href= $naviLink", $value['catalog_name'],"</a></li>";
						}?>
					<?php endforeach;?>	
		    	</ul>
		    </dd>
		    <?php endif?>
		<?php endforeach?>
	    <dd>
	    	<h3><a href="<?php echo $this->createUrl('/special')?>">Subject</a></h3>
	    </dd>
	    <dd>
	    	<h3><a href="<?php echo $this->createUrl('/service')?>">Support Service</a></h3>
	    </dd>
	    <dd>
	    	<h3><a href="<?php echo $this->createUrl('/question')?>">Contact US</a></h3>
	    </dd>
	 </dl>
	 </div>
	 </div> <!-- nav floatL -->
	    <script type="text/javascript">jQuery(".nav").slide({ type:"menu",  titCell:"dd", targetCell:"ul", delayTime:0,defaultPlay:false,returnDefault:true  });</script> 
	</div>
</div>
<!-- END THE HEAD--> 