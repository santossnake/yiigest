<?php

class TbContasController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TbContas'),
		));
	}

	public function actionCreate() {
		$model = new TbContas;

		$this->performAjaxValidation($model, 'tb-contas-form');

		if (isset($_POST['TbContas'])) {
			$model->setAttributes($_POST['TbContas']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_conta));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'TbContas');

		$this->performAjaxValidation($model, 'tb-contas-form');

		if (isset($_POST['TbContas'])) {
			$model->setAttributes($_POST['TbContas']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_conta));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TbContas')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TbContas');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TbContas('search');
		$model->unsetAttributes();

		if (isset($_GET['TbContas']))
			$model->setAttributes($_GET['TbContas']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}