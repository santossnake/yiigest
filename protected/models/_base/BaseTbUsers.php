<?php

/**
 * This is the model base class for the table "tb_users".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TbUsers".
 *
 * Columns in table "tb_users" available as properties of the model,
 * followed by relations of table "tb_users" available as properties of the model.
 *
 * @property integer $id_user
 * @property string $nome
 * @property string $NIF
 * @property string $user
 * @property string $pw
 * @property string $data_nasc
 * @property string $email
 *
 * @property TbAgendaMov[] $tbAgendaMovs
 * @property TbContas[] $tbContases
 * @property TbDespesasCarros[] $tbDespesasCarroses
 * @property TbMovimentos[] $tbMovimentoses
 * @property TbSeguros[] $tbSeguroses
 */
abstract class BaseTbUsers extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tb_users';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'User|Users', $n);
	}

	public static function representingColumn() {
		return 'nome';
	}

	public function rules() {
		return array(
			array('nome, NIF, pw, email', 'length', 'max'=>255),
			array('user', 'length', 'max'=>45),
			array('data_nasc', 'safe'),
			array('nome, NIF, user, pw, data_nasc, email', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_user, nome, NIF, user, pw, data_nasc, email', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tbAgendaMovs' => array(self::HAS_MANY, 'TbAgendaMov', 'user'),
			'tbContases' => array(self::HAS_MANY, 'TbContas', 'user'),
			'tbDespesasCarroses' => array(self::HAS_MANY, 'TbDespesasCarros', 'user'),
			'tbMovimentoses' => array(self::HAS_MANY, 'TbMovimentos', 'user'),
			'tbSeguroses' => array(self::HAS_MANY, 'TbSeguros', 'user'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_user' => Yii::t('app', 'Id User'),
			'nome' => Yii::t('app', 'Nome'),
			'NIF' => Yii::t('app', 'Nif'),
			'user' => Yii::t('app', 'User'),
			'pw' => Yii::t('app', 'Pw'),
			'data_nasc' => Yii::t('app', 'Data Nasc'),
			'email' => Yii::t('app', 'Email'),
			'tbAgendaMovs' => null,
			'tbContases' => null,
			'tbDespesasCarroses' => null,
			'tbMovimentoses' => null,
			'tbSeguroses' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_user', $this->id_user);
		$criteria->compare('nome', $this->nome, true);
		$criteria->compare('NIF', $this->NIF, true);
		$criteria->compare('user', $this->user, true);
		$criteria->compare('pw', $this->pw, true);
		$criteria->compare('data_nasc', $this->data_nasc, true);
		$criteria->compare('email', $this->email, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}