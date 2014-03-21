<?php

class TbAgendaMovController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TbAgendaMov'),
		));
	}

	public function actionCreate() {
		$model = new TbAgendaMov;

		$this->performAjaxValidation($model, 'tb-agenda-mov-form');

		if (isset($_POST['TbAgendaMov'])) {
			$model->setAttributes($_POST['TbAgendaMov']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_agenda_mov));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'TbAgendaMov');

		$this->performAjaxValidation($model, 'tb-agenda-mov-form');

		if (isset($_POST['TbAgendaMov'])) {
			$model->setAttributes($_POST['TbAgendaMov']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_agenda_mov));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'TbAgendaMov')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TbAgendaMov');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TbAgendaMov('search');
		$model->unsetAttributes();

		if (isset($_GET['TbAgendaMov']))
			$model->setAttributes($_GET['TbAgendaMov']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}