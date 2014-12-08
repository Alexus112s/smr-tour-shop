<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\dataModels\User;
use Yii;
use app\models\LoginForm;

class LoginController extends Controller {
	public function actionLogin() {
		$model = new LoginForm();
		if ($model->load ( Yii::$app->request->get (), '' )) {
			$user = $model->getUser();
			echo json_encode ( [ 
					'name' => $user->name,
					'accessToken' => $user->accessToken 
			], JSON_UNESCAPED_UNICODE );
		}
	}
}