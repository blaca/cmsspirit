<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- Slide picture & Notice-->
<div class="container-fluid">
	<div class="row-fluid">
	    <div class="span9">
	      <!--Sidebar content-->
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
			              <p class="lead">Spirit CMS v1.0.0 is going to release, want some suprise?<p>
			              <a class="btn btn-large btn-primary" href="#">Try it now</a>
			            </div>
		          	</div>
		        </div>
		        <div class="item">
		        	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slide/slide-02.jpg" alt="">
			    	<div class="container">
			        	<div class="carousel-caption">
			            	<h2>Another example headline.</h2>
			              	<p class="lead">Cras justo odio, .</p>
			              	<a class="btn btn-large btn-primary" href="#">Learn more</a>
			            </div>
		          	</div>
		        </div>
		        <div class="item">
		        	<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slide/slide-03.jpg" alt="">
		          	<div class="container">
		            	<div class="carousel-caption">
			              	<h1>One more for good measure.</h1>
			              	<p class="lead">egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			              	<a class="btn btn-large btn-primary" href="#">Browse gallery</a>
		            	</div>
		          	</div>
		        </div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
		</div>
	    </div>
	    <div class="span3">
	      <!--Body content-->
	      <h4>Latest Notice</h4>
	      <ul>
	        <li>The SpiritCMS v1.0.0 released. Please visit github.com for download. <?php echo date("m-d")?></li>
	        <li>The SpiritCMS v1.1.0 released. Have a look. <?php echo date("m-d")?></li>
	      </ul>
	    </div>
  	</div>
</div>
<hr> 

<div class="row-fluid">
	<div class="span4">
	  <h4>ABOUT</h4>
	  <div class="con">
		<p> SpiritCMS is a fast, safe CMS written by php. it's simple but with full features, ease to extend to meet your needs, You are free to use this software, Please contact us if you want some support.</p>
	      <li><i class="icon-home"></i> Pudong New District, Shanghai</li>
	      <li><i class="icon-envelope"></i> menggangcsu@gmail.com</li>
	      <li><i class="icon-leaf"></i>13788938565</li>
	     <p><button class="btn btn-info" type="button">Read More</button></p>
	   </div> 
	</div>
	<div class="span4">
	  <h4>FEATURES</h4>
	  <div class="con">
	    <ul>
	      <li>SIMPLE</li>
	      <li>SAFE</li>
	      <li>STATBLE</li>
	    </ul>
	    <p><button class="btn btn-info" type="button">The handbook</button></p>
	  </div>
	</div>
	<div class="span4">
	  <h4>NEWS</h4>
	  <div class="con">
	  <ul>
	  	<?php foreach($post as $key=>$value):?>
	  	<li>
	  	<a href="<?php echo $this->createUrl('post/show',array('id'=>$value['id']))?>" target="_blank"><?php echo $value['title']?></a>
	  	<?php echo date('m-d',strtotime($value['create_time']))?>
	  	</li>
	  	<?php endforeach?>
	  </ul> 
	  </div>
	  <div class="pull-right">
			<a href="index.php?r=post/list" class="btn btn-info">More Post <i class="icon-arrow-right"></i></a>
	  </div>
	</div>
</div>
