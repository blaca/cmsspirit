<?php include('_top.php');?>

<table class="dataGrid">
  <thead>
  <tr>
    <th><?php echo $sort->link('userid'); ?></th>
    <th><?php echo $sort->link('username'); ?></th>
    <th><?php echo $sort->link('email'); ?></th>
    <th><?php echo $sort->link('regIp'); ?></th>
    <th><?php echo $sort->link('regTime'); ?></th>
    <th><?php echo $sort->link('lastLoginIp'); ?></th>
    <th><?php echo $sort->link('lastLoginTime'); ?></th>
	<th>Actions</th>
  </tr>
  </thead>
  <tbody>
<?php foreach($models as $n=>$model): ?>
  <tr class="<?php echo $n%2?'even':'odd';?>">
    <td><?php echo CHtml::link($model->userid,array('show','id'=>$model->userid)); ?></td>
    <td><?php echo CHtml::link($model->username,array('show','id'=>$model->userid)); ?></td>
    <td><?php echo CHtml::encode($model->email); ?></td>
    <td><?php echo CHtml::encode($model->regIp); ?></td>
    <td><?php echo CHtml::encode(date('Y-m-d',strtotime($model->regTime))); ?></td>
    <td><?php echo CHtml::encode($model->lastLoginIp); ?></td>
    <td><?php echo CHtml::encode($model->lastLoginTime); ?></td>
    <td>
      <?php echo CHtml::link('update',array('update','id'=>$model->userid)); ?>
      <?php echo CHtml::linkButton('delete',array(
      	  'submit'=>'',
      	  'params'=>array('command'=>'delete','id'=>$model->userid),
      	  'confirm'=>"confirm delete#{$model->userid}?")); ?>
	</td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>