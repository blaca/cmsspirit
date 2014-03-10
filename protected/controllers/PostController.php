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
	 * Lists all models.
	 */
	public function actionList()
	{
		$post = new Post();
		
		$criteria=new CDbCriteria;
		
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
