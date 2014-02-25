<!DOCTYPE HTML>
<html>

<!-- THE TOP CONTAINER -->
<div id="top-container">
  <div id="top">
	<div id="logo"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.png" ></div>
	<div id="top-right"><p>中文 |English</p></div>
	<div class="clear"></div>
  </div>
</div>

<!-- THE NAVBAR -->
<div class="navbar-wrapper">
	<div class="container">
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
            	</button>
            	<!-- HOME -->
            	<a class="brand" href="<?php echo Yii::app()->homeUrl?>">Home</a>
            	
            	<div class="nav-collapse collapse">
              	<ul class="nav">
                	<li class="active"><a href="<?php echo Yii::app()->homeUrl?>">Home</a></li>
	                
	                <?php $catalog = Catalog::model()->findAll(new CDbCriteria)?>
	                
					<?php foreach($catalog as $key=>$model):?>
						<?php if($model['parent_id'] == 0):?>
						<li class="dropdown">
							<a href="<?php echo $this->createUrl('post/index',array('catalog'=>$model['catalog_name_alias'])) ?>" 
							class="dropdown-toggle" data-toggle="dropdown"><?php echo $model['catalog_name']?>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<?php foreach ($catalog as $name=>$value):?>
									<?php if ($model['id'] == $value['parent_id']) {
										$naviLink = $this->createUrl('post/index',array('catalog'=>$value['catalog_name_alias'])).">";
										echo "<li><a href= $naviLink", $value['catalog_name'],"</a></li>";
									}?>
								<?php endforeach;?>	
							</ul>					    	
					    </li>
					    <?php endif?>
					<?php endforeach?>
					
					<li><a href="<?php echo $this->createUrl('/special')?>">Subject</a></li>
					<li><a href="<?php echo $this->createUrl('/service')?>">Support Service</a></li>
					<li><a href="<?php echo $this->createUrl('/contact')?>">Contact US</a></li>
              </ul>
              
              <!-- The customize field -->
            </div>
			</div>
		</div>
	</div>
</div>
<!-- END THE HEAD--> 