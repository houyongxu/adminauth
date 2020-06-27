<?php

namespace adminauth\controllers;


use adminauth\common\AdminAuthController;

class UserController extends AdminAuthController
{
	public function init()
	{
		parent::init();
	}
	
	public function actionIndex()
	{
		echo 'hello word';
	}
}