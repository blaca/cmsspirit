<?php

class BaseController extends SBaseController
{
	
	public $defaultAction='index';

	/**
	 * (non-PHPdoc)
	 * @see CController::actions()
	 */
	
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image
			// this is used by the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',

				'maxLength'=>'4',
				'minLength'=>'4',
			),
		);
	}
}