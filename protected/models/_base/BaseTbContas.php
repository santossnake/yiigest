<?php

/**
 * This is the model base class for the table "tb_contas".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TbContas".
 *
 * Columns in table "tb_contas" available as properties of the model,
 * followed by relations of table "tb_contas" available as properties of the model.
 *
 * @property integer $id_conta
 * @property string $nome
 * @property string $descricao
 * @property string $NIB
 * @property string $data_abertura
 * @property integer $banco
 * @property integer $user
 * @property string $cartao
 *
 * @property TbAgendaMov[] $tbAgendaMovs
 * @property TbAgendaMov[] $tbAgendaMovs1
 * @property TbBancos $banco0
 * @property TbUsers $user0
 * @property TbMovimentos[] $tbMovimentoses
 * @property TbMovimentos[] $tbMovimentoses1
 */
abstract class BaseTbContas extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tb_contas';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Conta|Contas', $n);
	}

	public static function representingColumn() {
		return 'nome';
	}

	public function rules() {
		return array(
			array('banco, user', 'numerical', 'integerOnly'=>true),
			array('nome, descricao', 'length', 'max'=>255),
			array('NIB, cartao', 'length', 'max'=>45),
			array('data_abertura', 'safe'),
			array('nome, descricao, NIB, data_abertura, banco, user, cartao', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_conta, nome, descricao, NIB, data_abertura, banco, user, cartao', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tbAgendaMovs' => array(self::HAS_MANY, 'TbAgendaMov', 'conta_deb'),
			'tbAgendaMovs1' => array(self::HAS_MANY, 'TbAgendaMov', 'conta_cred'),
			'banco0' => array(self::BELONGS_TO, 'TbBancos', 'banco'),
			'user0' => array(self::BELONGS_TO, 'TbUsers', 'user'),
			'tbMovimentoses' => array(self::HAS_MANY, 'TbMovimentos', 'conta_deb'),
			'tbMovimentoses1' => array(self::HAS_MANY, 'TbMovimentos', 'conta_cred'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_conta' => Yii::t('app', 'Id Conta'),
			'nome' => Yii::t('app', 'Nome'),
			'descricao' => Yii::t('app', 'Descricao'),
			'NIB' => Yii::t('app', 'Nib'),
			'data_abertura' => Yii::t('app', 'Data Abertura'),
			'banco' => null,
			'user' => null,
			'cartao' => Yii::t('app', 'Cartao'),
			'tbAgendaMovs' => null,
			'tbAgendaMovs1' => null,
			'banco0' => null,
			'user0' => null,
			'tbMovimentoses' => null,
			'tbMovimentoses1' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_conta', $this->id_conta);
		$criteria->compare('nome', $this->nome, true);
		$criteria->compare('descricao', $this->descricao, true);
		$criteria->compare('NIB', $this->NIB, true);
		$criteria->compare('data_abertura', $this->data_abertura, true);
		$criteria->compare('banco', $this->banco);
		$criteria->compare('user', $this->user);
		$criteria->compare('cartao', $this->cartao, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}