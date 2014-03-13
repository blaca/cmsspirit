<?php

class PostController extends Controller
{
	public $defaultAction = "List";
	
	/**
	 * @var The title to display the artical
	 */
	public $title;
	/**
	 * the post in each page.
	 * @var int
	 */
	const DEFAULT_PAGE_SIZE = 10;		
	/**
	 * @var array Post. list the recent post.
	 */
	public $recentPost=array();
	/**
	 * @var most popular Post. list the recent most visited.
	*/
	public $mostPopular=array();
	
	
	public function init()
	{
		parent::init();
		
		// init the recent post.
		$post = new Post();
		$criteria=new CDbCriteria;
		$criteria->order = "id desc";
		$criteria->limit = 5;
		$post = Post::model()->findAll($criteria);
		
		$this->recentPost = $post;
		
		// init the most popular.
		
	}
		
	/**
	 * Lists all models.
	 */
	public function actionList()
	{	
		$post = new Post();
		$criteria=new CDbCriteria;
		
		// fill the catalog
		if (array_key_exists('catalog', $_GET)) 
		{
			$id = $_GET['catalog'];
						
			$criteria->condition = " catalog_id = $id";
		}
		
		// fill the tag.
		if (array_key_exists('tag', $_GET)) 
		{
			$tagName = $_GET['tag'];
			
			$criteria->condition = " tags like '%$tagName%'";
		}
		
		$pages = new CPagination(Post::model()->count($criteria));
		$pages->pageSize = self::DEFAULT_PAGE_SIZE;
		$pages->applyLimit($criteria);
		
		$sort = new CSort('Post');
		$criteria->order = "id desc";
		$sort->applyOrder($criteria);
		
		$post = Post::model()->findAll($criteria);
		
		$dataProvider = array(
			'post'=>$post,
			'pages'=>$pages
		);
		
		$this->render('list', $dataProvider);
	}
	
	/*
	 * Show the selected post.
	 */
	public function actionShow( $id )
	{
		$post = new Post();		
		$post = $this->loadModel($id);
		
		// update the view_count;
		$this->updateViewCount($id);
		
		$criteria = new CDbCriteria;
		$criteria->condition = "id > $id order by id asc";
		$preArticle = Post::model()->find($criteria);
		
		$criteria->condition = "id < $id order by id desc";
		$nextArticle = Post::model()->find($criteria);
						
		$dataProvider = array(
  			'post'=>$post,
			'pre'=>$preArticle,
			'next'=>$nextArticle
		);
		
		$this->render('view', $dataProvider);
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Post the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	/**
	 * Update the post view count.
	 * @param int $id
	 */
	protected function updateViewCount($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		
		$model->view_count;
		
		$model->updateCounters(array ('view_count' => 1 ), 'id=:id', array ('id' => $id ));
	}

	/**
	 * Performs the AJAX validation.
	 * @param Post $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
