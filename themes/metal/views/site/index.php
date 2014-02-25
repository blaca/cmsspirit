<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- Slide picture -->
<div id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
 		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    	<li data-target="#myCarousel" data-slide-to="1"></li>
    	<li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    	<div class="item active">
        	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slide/slide-01.jpg" alt="">
          	<div class="container">
	            <div class="carousel-caption">
	              <h1>Spirit CMS v1.0.0 is going to release, want some suprise?</h1>
	              <p class="lead"></p>
	              <a class="btn btn-large btn-primary" href="#">Try it now</a>
	            </div>
          	</div>
        </div>
        <div class="item">
        	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slide/slide-02.jpg" alt="">
	    	<div class="container">
	        	<div class="carousel-caption">
	            	<h1>Another example headline.</h1>
	              	<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	              	<a class="btn btn-large btn-primary" href="#">Learn more</a>
	            </div>
          	</div>
        </div>
        <div class="item">
        	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slide/slide-03.jpg" alt="">
          	<div class="container">
            	<div class="carousel-caption">
	              	<h1>One more for good measure.</h1>
	              	<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	              	<a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            	</div>
          	</div>
        </div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<hr>
    
<!-- Content -->
<div class="index">
	<div class="module clear">
	<div class="wrap">
	    <div class="moduleBox about">
	      <div class="col">
	        <h4><a>ABOUT</a></h4>
	        <div class="con">
	          <p> SpiritCMS is a fast, safe CMS written by php. it's simple but with full features, ease to extend to meet your needs, You are free to use this software, Please contact us if you want some support.</p>
	            <li><i class="icon-home"></i> Pudong New District, Shanghai</li>
	            <li><i class="icon-envelope"></i> menggangcsu@gmail.com</li>
	            <li><i class="icon-leaf"></i>13788938565</li>
	          <p><button class="btn btn-primary" type="button">Read More</button></p>
	        </div>
	      </div>
	    </div>
	    <div class="moduleBox cultural">
	      <div class="col">
	        <h4><a href="site/page?view=about">FEATURES</a></h4>
	      </div>
	      <div class="con">
	        <p>SAFE it's safe</p>
	        <p>SIMPLE</p>
	        <p>STATBLE</p>
	        <p><button class="btn btn-primary" type="button">The handbook</button></p>
	      </div>
	    </div>
	    <div class="moduleBox post">
	      <div class="col">
	        <h4><a href="index.php?r=post/list">NEWS</a></h4>
	      <div class="con">
	        <ul>
	        	<?php foreach($post as $key=>$value):?>
	        	<li><em class="date"><?php echo date('m-d',strtotime($value['create_time']))?></em>
	        	<a href="<?php echo $this->createUrl('post/show',array('id'=>$value['id']))?>" target="_blank"><?php echo $value['title']?></a></li>
	        	<?php endforeach?>
	        </ul>
	      </div>
	    </div>
	</div>
	</div>
</div>
</div>
