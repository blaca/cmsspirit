

<div class="container-fluid">
  <div class="row-fluid">
	<?php require '_side.php';?>
    
    <!-- The news area -->
    <div class="span9">
      <!-- the breadcrumbs -->
      <ul class="page-breadcrumb breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.php">Home</a> > 
		</li>
		<li>
			<a href="">News</a>
		</li>
	  </ul>
      <ul>
		<?php foreach($post as $n=>$model): ?>
			<li class="post" id="post-<?php echo $model->id;?>">
				<?php echo CHtml::link( CHtml::label(date('Y-m-d',strtotime($model->create_time)),'',array('class'=>'notice_time'))." - ".$model->title,array('show','id'=>$model->id)); ?>
			</li>		
		<?php endforeach; ?>
	  </ul>
	  
	  <!-- the Page indicator-->
		
    </div>
  </div>
</div>