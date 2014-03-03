<?php

class PostController extends Controller
{
	public $defaultAction = "List";
	
	/**
	 * @var The title to display the artical
	 */
	public $title;


	/**
	 * Lists all models.
	 */
	public function actionList()
	{
		$post = new Post();
		
		$criteria=new CDbCriteria;
		$criteria->order = "id desc";
		$post = Post::model()->findAll($criteria);
		
		$dataProvider = array(
			'post'=>$post
		);
		
		$this->render('list', $dataProvider);
	}
	
	/*
	 * Show the selected post.
	 */
	public function actionShow( $id )
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
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
