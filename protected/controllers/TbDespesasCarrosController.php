<?php

class TbDespesasCarrosController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TbDespesasCarros'),
		));
	}

	public function actionCreate() {
		$model = new TbDespesasCarros;

		$this->performAjaxValidation($model, 'tb-despesas-carros-form');

		if (isset($_POST['TbDespesasCarros'])) {
			$model->setAttributes($_POST['TbDespesasCarros']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_despesa_carro));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'TbDespesasCarros');

		$this->performAjaxValidation($model, 'tb-despesas-carros-form');

		if (isset($_POST['TbDespesasCarros'])) {
			$model->setAttributes($_POST['TbDespesasCarros']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_despesa_carro));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TbDespesasCarros')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TbDespesasCarros');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TbDespesasCarros('search');
		$model->unsetAttributes();

		if (isset($_GET['TbDespesasCarros']))
			$model->setAttributes($_GET['TbDespesasCarros']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}