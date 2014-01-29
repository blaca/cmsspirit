<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>View Post #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'nickname',
		'author',
		'title',
		'title_second',
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
	),
)); ?>
