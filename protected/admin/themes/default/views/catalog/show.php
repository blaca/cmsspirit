<?php include('_top.php');?>

<table class="dataGrid">
<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('id')); ?>
</th>
    <td><?php echo CHtml::encode($model->id); ?>
</td>
</tr>

<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('parent_id')); ?>
</th>
    <td><?php echo CHtml::encode($model->parent_id); ?>
</td>
</tr>

<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('catalog_name')); ?>
</th>
    <td><?php echo CHtml::encode($model->catalog_name); ?>
</td>
</tr>

<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('catalog_name_alias')); ?>
</th>
    <td><?php echo CHtml::encode($model->catalog_name_alias); ?>
</td>
</tr>

<tr>
	<th class="label"><?php echo CHtml::encode($model->getAttributeLabel('content')); ?>
</th>
    <td><?php echo CHtml::encode($model->content); ?>
</td>
</tr>

</table>