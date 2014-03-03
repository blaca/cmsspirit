<?php

class PostController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $defaultAction = "admin";
	/**
	 * the split character.
	 * @var unknown
	 */
	protected $comma = ",";	
	/**
	 * 
	 * @var int
	 */
	const DEFAULT_PAGE_SIZE=10;
	/**
	 * @var The title to display the artical
	 */
	public $_model;
	
	public $catalog_list;
	
	/**
	 * (non-PHPdoc)
	 * @see CController::init()
	 */
	public function init(){
		$criteria = new CDbCriteria();
		$criteria->condition .= " parent_id != 0";
		
		$models = Catalog::model()->findAll($criteria);
		
		$this->catalog_list = CHtml::listData($models,
								'id', 'catalog_name');
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionShow()
	{
		$this->render('show',array(
			'model'=>$this->loadPost(),
		));
	}
	

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->processCommand();
		
		$criteria = new CDbCriteria();
		
		$cata_id = Yii::app()->request->getParam('cate_id');
		$title = Yii::app()->request->getParam('title');
		
		//
		$pages = new CPagination(Post::model()->count($criteria));
		$pages->pageSize = self::DEFAULT_PAGE_SIZE;
		$pages->applyLimit($criteria);
		
		$sort = new CSort('Post');
		$criteria->order = "id desc";
		$sort->applyOrder($criteria);
		
		$models = Post::model()->findAll($criteria);
		
		$this->render('admin', array(
			'models'=>$models,
			'pages'=>$pages,
			'sort'=>$sort,
		));
	}
	
	/**
	 * Executes any command triggered on the admin page.
	 */
	protected function processCommand()
	{
		if(isset($_POST['command'], $_POST['id']) && $_POST['command']==='delete')
		{
			$this->loadPost($_POST['id'])->delete();
			// reload the current page to avoid duplicated delete actions
			$this->refresh();
		}
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param string $id the primary key value. Defaults to null, meaning using the 'id' GET variable
	 */
	protected  function loadPost($id=null)
	{
		if($this->_model===null)
		{
			if($id!==null || isset($_GET['id']))
				$this->_model=Post::model()->findbyPk($id!==null ? $id : $_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		
		return $this->_model;
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Post();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];			
			if($model->save()) {
				$this->insertTags($model);
				
				$this->redirect(array('show','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			
			if($model->save()) {				
				$this->insertTags($model);
					
				$this->redirect(array('show','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	/**
	 * inset the post-id to tag table.
	 * @param Post $model
	 */
	protected function insertTags($model)
	{
		// Save the tags into Tag table.
		if ($model->tags !== null) {
			$tagVars = explode($this->comma, $model->tags);
			
			$tag = new Tag();
			$criteria=new CDbCriteria;
			
			foreach ($tagVars as $tagItem ) {
				// parse ecah tag, add the each tag_name and it's post_id
				// to the db.
				$criteria->condition = " tag_name = \"$tagItem\"";
				$tagRecord = $tag->find($criteria);
		
				// if this record exist, update this record.
				if ($tagRecord !== null) {
					// already have post-id recored. update it.
					if ($tagRecord->post_id !== "") {
						$post_ids = explode($this->comma, $tagRecord->post_id);
						
						foreach ($post_ids as $var) {
							if ($var != $model->id) {
								$tagRecord->post_id = $tagRecord->post_id.$this->comma.$model->id;
								
								// write the new $postid to the db.
								$tagRecord->update();
							}
						}
					} else {
						$tagRecord->post_id = $model->id;
						$tagRecord->update();
					}					
				} else {
					// add new record.
					$tag = new Tag();
					$tag->post_id = $model->id;
					$tag->tag_name = $tagItem;
					$tag->save();
				}
			}						
		}
	}
	
	/**
	 * Delete the releated tags from Tag table.
	 * @param Post $model
	 */
	protected function deleteTags($model)
	{
		if ($model->tags != null) {
			$tagVars = explode($this->comma, $model->tags);
			
			$tag = new Tag();
			$criteria=new CDbCriteria;
			
			foreach ($tagVars as $tagItem ) {
				// search in the db, delete the tag.
				$criteria->condition = " tag_name = \"$tagItem\"";
				$tagRecord = $tag->find($criteria);
				
				// find this tagRecord, delete it's post_id if have multi-article
				// related. delete this record if have only one-article related.
				if ($tagRecord !== null) {
					$post_ids = explode($this->comma, $tagRecord->post_id);
					
					if (count($post_ids) == 1) {
						// delete the total record.
						$tagRecord->delete();
					} else if (count($post_ids) > 1) {
						// delete the post_id.
						$index = 0;
						foreach ($post_ids as $var) {
							$index ++;
							
							if ($var == $model->id) {
								array_splice ($post_ids[$var], $index, 1);
							}
						}
						
						// rewrite the ids;
						foreach ($post_ids as $var) {
							$target_ids += $var.$comma;
						}
					}
					
					// update to db.
					$tagRecord->post_id = $target_ids;
					$tagRecord->update();
				}
			}
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();
		
		$this->delteTags();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$post = new Post();
		$criteria=new CDbCriteria;
		
		$post = Post::model()->findAll($criteria);
		
		$dataProvider = array(
			'post'=>$post
		);
		
		$this->render('index', $dataProvider);
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
