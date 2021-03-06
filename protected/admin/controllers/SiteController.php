<?php

class SiteController extends BaseController
{	
	public $defaultAction='login';
		
	/**
	 * show the login form.
	 */
	public function actionLogin()
	{
		if(!Yii::app()->user->isGuest)
		{
			$this->redirect(array('site/index'));
		}
		
		$form=new LoginForm;
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$form->attributes=$_POST['LoginForm'];
			// validate user input and redirect to previous page if valid
			if($form->validate())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('form'=>$form));
	}
		
	/**
	 * Show the backend index page.
	 * 
	 * the view file: /Protected/views/site/index.php
	 */
	public function actionIndex()
	{		
		$this->render('index');
	}
	
	/**
	 * Logout the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	/**
	 * clean cache
	 */
	public function actionCleanCache()
	{
		# code...
		Yii::app()->cache->flush();
		
		$request = Yii::app()->request;
		
		$url = $request->url != $request->urlReferrer ? $request->urlReferrer : array('site/index');
		$this->redirect($url);
	}
	
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
}