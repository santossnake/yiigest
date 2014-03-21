<?php

class TbRepeticaoController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TbRepeticao'),
		));
	}

	public function actionCreate() {
		$model = new TbRepeticao;

		$this->performAjaxValidation($model, 'tb-repeticao-form');

		if (isset($_POST['TbRepeticao'])) {
			$model->setAttributes($_POST['TbRepeticao']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_repeticao));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'TbRepeticao');

		$this->performAjaxValidation($model, 'tb-repeticao-form');

		if (isset($_POST['TbRepeticao'])) {
			$model->setAttributes($_POST['TbRepeticao']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_repeticao));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TbRepeticao')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TbRepeticao');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TbRepeticao('search');
		$model->unsetAttributes();

		if (isset($_GET['TbRepeticao']))
			$model->setAttributes($_GET['TbRepeticao']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}