<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> <?php echo Yii::app()->params['site_name']?></title>
	<meta name="generator" content="CMS Spirit" />
	<meta name="author" content= <?php echo Yii::app()->params['site_author']?> />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
	<?php Yii::app()->clientScript->registerCoreScript('jquery',CClientScript::POS_END); ?>
</head>

<body>
	<?php require_once 'head.php';?>

	<!-- Slide picture -->
	<div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slide/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Try it today</a>
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
    
    
    <!-- the main area -->
    <?php echo $content; ?>
    
    <div class="clear"></div>
	
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
