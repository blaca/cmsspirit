<?php
	$action = $this->action->id;
// 	$cate_id = !empty($model->catalog_id) ? $model->catalog_id : Yii::app()->request->getParam('cate_id');
	
	// $cate_name = find the cate_name in catelog table;
?>
<h2>Catalog Setting</h2>

<div class="actionBar">
<?php
	if ($action == 'admin')
		echo CHtml::link('add',array('create','id'=>""),array('class'=>'thickbox'));
	elseif ($action == 'show')
		echo CHtml::link('update',array('update','id'=>$model->id)) . CHtml::linkButton('delete',array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure?'));
	elseif ($action == 'create' OR $action == 'update' OR $action == 'show' )
		echo CHtml::link('back',array('admin'));
?>
</div>
