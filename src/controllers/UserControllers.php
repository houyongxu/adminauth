<?php

namespace adminauth\controllers;
use adminauth\common\AdminAuthController;

/**
 * 用户类
 * @author houyongxu
 * @date 2020-06-27
 *
 */
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