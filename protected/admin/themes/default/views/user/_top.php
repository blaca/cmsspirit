<?php
	$action = $this->action->id;
?>
<h2>User Center</h2>

<div class="actionBar">
<?php
	if ($action == 'admin')
		echo CHtml::link('add',array('create','id'=>""),array('class'=>'thickbox'));
	if($action == 'show')
		echo CHtml::link('update',array('update','id'=>$model->userid)) . CHtml::linkButton('delete',array('submit'=>array('delete','id'=>$model->userid),'confirm'=>'Are you sure?'));
	if($action == 'create' OR $action == 'update' OR $action == 'show' )
		echo CHtml::link('back',array('admin','id'=>""));
?>
</div>
