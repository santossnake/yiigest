<?php

class TbUsersController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TbUsers'),
		));
	}

	public function actionCreate() {
		$model = new TbUsers;

		$this->performAjaxValidation($model, 'tb-users-form');

		if (isset($_POST['TbUsers'])) {
			$model->setAttributes($_POST['TbUsers']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_user));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'TbUsers');

		$this->performAjaxValidation($model, 'tb-users-form');

		if (isset($_POST['TbUsers'])) {
			$model->setAttributes($_POST['TbUsers']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_user));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TbUsers')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TbUsers');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TbUsers('search');
		$model->unsetAttributes();

		if (isset($_GET['TbUsers']))
			$model->setAttributes($_GET['TbUsers']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}