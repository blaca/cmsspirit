<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- Index -->

<div class="index">
	<div class="module clear">
	<div class="wrap">
	    <div class="moduleBox about">
	      <div class="col">
	        <div>
	          <h2>ABOUT<i class="icon-home"></i></h2>
	          <a href="<?php echo $this->createUrl('page/show',array('name'=>'about'))?>" class="move" target="_blank">More...</a></div>
	      </div>
	    </div>
	    <div class="moduleBox cultural">
	      <div class="col">
	        <h2>CULTURAL<em>CULTURAL</em></h2>
	        <a href="<?php echo $this->createUrl('page/show',array('name'=>'cultural'))?>" class="move" target="_blank">More...</a> </div>
	      <div class="con">
	        <h3>Will:</h3>
	        <p>To be the most responsable company.</p>
	      </div>
	    </div>
	    <div class="moduleBox post">
	      <div class="col">
	        <h2>NEWS<em>NEWS</em></h2>
	        <a href="<?php echo $this->createUrl('post/index',array('catalog'=>'company-news'))?>" class="move" target="_blank">More...</a> </div>
	      <div class="con">
	        <ul>
	        	<?php foreach($post as $key=>$value):?>
	        	<li><em class="date"><?php echo $value['create_time']?></em>
	        	<a href="<?php echo $this->createUrl('post/show',array('id'=>$value['id']))?>" target="_blank"><?php echo $value['title']?></a></li>
	        	<?php endforeach?>
	        </ul>
	      </div>
	    </div>
	</div>
	</div>
</div>

<div class="wrap clear ">
</div>
