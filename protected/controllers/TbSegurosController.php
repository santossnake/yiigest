<?php

class TbSegurosController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TbSeguros'),
		));
	}

	public function actionCreate() {
		$model = new TbSeguros;

		$this->performAjaxValidation($model, 'tb-seguros-form');

		if (isset($_POST['TbSeguros'])) {
			$model->setAttributes($_POST['TbSeguros']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_seguro));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'TbSeguros');

		$this->performAjaxValidation($model, 'tb-seguros-form');

		if (isset($_POST['TbSeguros'])) {
			$model->setAttributes($_POST['TbSeguros']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_seguro));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TbSeguros')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TbSeguros');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TbSeguros('search');
		$model->unsetAttributes();

		if (isset($_GET['TbSeguros']))
			$model->setAttributes($_GET['TbSeguros']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}