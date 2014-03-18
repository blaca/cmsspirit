<?php
/* @var $this ConfigController */
/* @var $model Config */

$this->breadcrumbs=array(
	'Configs'=>array('index'),
	$model->item=>array('view','id'=>$model->item),
	'Update',
);

$this->menu=array(
	array('label'=>'List Config', 'url'=>array('index')),
	array('label'=>'Create Config', 'url'=>array('create')),
	array('label'=>'View Config', 'url'=>array('view', 'id'=>$model->item)),
	array('label'=>'Manage Config', 'url'=>array('admin')),
);
?>

<h1>Update Config <?php echo $model->item; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>