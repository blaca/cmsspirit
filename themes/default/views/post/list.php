

<div class="container-fluid">
	<!-- the breadcrumbs -->
    <ul class="page-breadcrumb breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.php">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="">News</a>
		</li>
	</ul>

    <div class="row-fluid">
  
    <!-- The news area -->
    <div class="span9">
	  
	  <!-- List the article -->	  
      <ul>
      	<?php foreach($post as $n=>$model):?>
      		<li>
      		  <h4><small><?php echo CHtml::link($model->title,array('show','id'=>$model->id)); ?></small></h4>
      		  <p><?php echo $model->intro;?></p>
      		  <ol class="breadcrumb">
      		    <li> 
      		      <i class="icon-calendar"></i><?php echo date('Y/m/d',strtotime($model->create_time)); ?>
      		      <i class="icon-eye-open"></i><?php echo $model->view_count; ?>
      		      <i class="icon-comment"></i><?php echo $model->commend; ?>
      		      <i class="icon-tag"></i><?php echo $model->tags; ?>
      		    </li>
      		  </ol>
      		</li>      	
      	<?php endforeach;?>
	  </ul>
	  
	  <!-- the Page indicator-->
	    <?php $this->widget('CLinkPager', array(  
    	  'pages' => $pages,  
  		)) ?> 
    </div>
  </div>
</div>