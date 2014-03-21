<?php

class TbMovimentosController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TbMovimentos'),
		));
	}

	public function actionCreate() {
		$model = new TbMovimentos;

		$this->performAjaxValidation($model, 'tb-movimentos-form');

		if (isset($_POST['TbMovimentos'])) {
			$model->setAttributes($_POST['TbMovimentos']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_movimento));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'TbMovimentos');

		$this->performAjaxValidation($model, 'tb-movimentos-form');

		if (isset($_POST['TbMovimentos'])) {
			$model->setAttributes($_POST['TbMovimentos']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_movimento));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TbMovimentos')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TbMovimentos');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TbMovimentos('search');
		$model->unsetAttributes();

		if (isset($_GET['TbMovimentos']))
			$model->setAttributes($_GET['TbMovimentos']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}