<?php

class TbTipoDespController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TbTipoDesp'),
		));
	}

	public function actionCreate() {
		$model = new TbTipoDesp;

		$this->performAjaxValidation($model, 'tb-tipo-desp-form');

		if (isset($_POST['TbTipoDesp'])) {
			$model->setAttributes($_POST['TbTipoDesp']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_tipo_desp));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'TbTipoDesp');

		$this->performAjaxValidation($model, 'tb-tipo-desp-form');

		if (isset($_POST['TbTipoDesp'])) {
			$model->setAttributes($_POST['TbTipoDesp']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_tipo_desp));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TbTipoDesp')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TbTipoDesp');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TbTipoDesp('search');
		$model->unsetAttributes();

		if (isset($_GET['TbTipoDesp']))
			$model->setAttributes($_GET['TbTipoDesp']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}