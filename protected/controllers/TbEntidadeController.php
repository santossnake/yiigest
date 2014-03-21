<?php

class TbEntidadeController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TbEntidade'),
		));
	}

	public function actionCreate() {
		$model = new TbEntidade;

		$this->performAjaxValidation($model, 'tb-entidade-form');

		if (isset($_POST['TbEntidade'])) {
			$model->setAttributes($_POST['TbEntidade']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_entidade));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'TbEntidade');

		$this->performAjaxValidation($model, 'tb-entidade-form');

		if (isset($_POST['TbEntidade'])) {
			$model->setAttributes($_POST['TbEntidade']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_entidade));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TbEntidade')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TbEntidade');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TbEntidade('search');
		$model->unsetAttributes();

		if (isset($_GET['TbEntidade']))
			$model->setAttributes($_GET['TbEntidade']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}