<?php include('_top.php');?>

<table class="dataGrid">
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('title')); ?>
</th>
    <td><?php echo CHtml::encode($model->title); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('content')); ?>
</th>
    <td><?php echo ($model->content); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('catalog_id')); ?>
</th>
    <td><?php echo CHtml::encode($model->catalog_id); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('create_time')); ?>
</th>
    <td><?php echo CHtml::encode($model->create_time); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('update_time')); ?>
</th>
    <td><?php echo CHtml::encode($model->update_time); ?>
</td>
</tr>
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('view_count')); ?>
</th>
    <td><?php echo CHtml::encode($model->view_count); ?>
</td>
</tr>
</table>