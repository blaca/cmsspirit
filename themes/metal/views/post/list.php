

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3">
      <div class="portlet">
        <div class="portlet-title">
          <div class="caption"> Navigation</div>
        </div>
        <div class="portlet-body">
      	</div>
      </div>
      <div class="portlet">
        <div class="portlet-title">
          <div class="caption"> Recent Post</div>
        </div>
        <div class="portlet-body">
      	</div>
      </div>
      <div class="portlet">
        <div class="portlet-title">
          <div class="caption"> Recent Comment</div>
        </div>
        <div class="portlet-body">
      	</div>
      </div>
    </div>
    
    <!-- The news area -->
    <div class="span9">
      <!-- the breadcrumbs -->
      <ul class="page-breadcrumb breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.php">Home</a> > 
		</li>
		<li>
			<a href="#">News</a>
		</li>
	  </ul>
      <ul id="notice">
		<?php foreach($post as $n=>$model): ?>
			<li class="post" id="post-<?php echo $model->id;?>">
				<?php echo CHtml::link( CHtml::label(date('Y-m-d',strtotime($model->create_time)),'',array('class'=>'notice_time'))." - ".$model->title,array('show','id'=>$model->id)); ?>
			</li>		
		<?php endforeach; ?>
	  </ul>
    </div>
  </div>
</div>