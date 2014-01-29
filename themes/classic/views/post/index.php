<div class="mainWrap">

<div class="topDesc">
  <div class="desc">
  </div>
</div>

<div class="mainBox">
	<ul id="notice">
		<?php foreach($post as $n=>$model): ?>
			<li class="post" id="post-<?php echo $model->id;?>">
				<?php echo CHtml::link( CHtml::label(date('Y-m-d',strtotime($model->create_time)),'',array('class'=>'notice_time'))." - ".$model->title,array('show','id'=>$model->id)); ?>
			</li>		
		<?php endforeach; ?>
	</ul>
</div>

</div>


