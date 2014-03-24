<?php include('_top.php');?>

<table class="dataGrid">
	<thead>
		<tr>
			<th><?php echo $sort->link('id'); ?></th>
		    <th><?php echo $sort->link('catalog_name'); ?></th>
		    <th><?php echo $sort->link('catalog_name_alias'); ?></th>
		    <th><?php echo $sort->link('create_time'); ?></th>
			<th>Actions</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach($models as $n=>$model): ?>
			<tr class="<?php echo $n%2?'even':'odd';?>">
				<td><?php echo CHtml::link($model->id,array('show','id'=>$model->id)); ?></td>
				
				<?php if ($model->parent_id != 0):?>
					<td><?php echo CHtml::link("- ".($model->catalog_name),array('show','id'=>$model->id)); ?></td>
				<?php else:?>
					<td><?php echo CHtml::link($model->catalog_name,array('show','id'=>$model->id)); ?></td>
				<?php endif;?>
				
				<td><?php echo CHtml::encode($model->catalog_name_alias); ?></td>
				<td><?php echo CHtml::encode($model->create_time); ?>
				
				<td>
			      <?php echo CHtml::link('update',array('update','id'=>$model->id)); ?>
			      <?php echo CHtml::linkButton('delete',array(
			      	  'submit'=>'',
			      	  'params'=>array('command'=>'delete','id'=>$model->id),
			      	  'confirm'=>"delete confirm? #{$model->id}?")); ?>
				</td>
		<?php endforeach; ?>
	</tbody>
</table>

<br/>
<?php $this->widget('CLinkPager', array(  
    'pages' => $pages,  
)) ?> 