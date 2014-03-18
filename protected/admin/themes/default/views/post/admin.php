<?php include('_top.php');?>

<table class="dataGrid">
	<thead>
		<tr>
			<th><?php echo $sort->link('id'); ?></th>
		    <th><?php echo $sort->link('catalog_id'); ?></th>
		    <th><?php echo $sort->link('title'); ?></th>
		    <th><?php echo $sort->link('update_time'); ?></th>
		    <th><?php echo $sort->link('view_count'); ?></th>
			<th>Actions</th>
		</tr>
	</thead>
	
	<tbody>
		<?php foreach($models as $n=>$model): ?>
			<tr class="<?php echo $n%2?'even':'odd';?>">
				<td><?php echo CHtml::link($model->id,array('show','id'=>$model->id)); ?></td>
				<td><?php echo CHtml::encode( $this->catalog_list[$model->catalog_id]); ?></td>
				<td><?php echo CHtml::link($model->title,array('show','id'=>$model->id)); ?></td>
				<td><?php echo CHtml::encode($model->update_time); ?>
				<td><?php echo CHtml::encode($model->view_count); ?>
				
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