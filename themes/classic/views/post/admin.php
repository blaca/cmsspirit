<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#post-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Posts</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'nickname',
		'author',
		'title',
		'title_second',
		/*
		'title_alias',
		'title_style',
		'title_style_serialize',
		'html_path',
		'html_file',
		'template',
		'catalog_id',
		'special_id',
		'intro',
		'image_list',
		'seo_title',
		'seo_description',
		'seo_keywords',
		'content',
		'copy_from',
		'copy_url',
		'redirect_url',
		'tags',
		'view_count',
		'commend',
		'attach_status',
		'attach_file',
		'attach_thumb',
		'favorite_count',
		'attention_count',
		'top_line',
		'last_update_time',
		'reply_count',
		'reply_allow',
		'sort_desc',
		'acl',
		'status_is',
		'create_time',
		'update_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
