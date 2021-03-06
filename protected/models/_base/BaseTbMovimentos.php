<?php

/**
 * This is the model base class for the table "tb_movimentos".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TbMovimentos".
 *
 * Columns in table "tb_movimentos" available as properties of the model,
 * followed by relations of table "tb_movimentos" available as properties of the model.
 *
 * @property integer $id_movimento
 * @property string $descricao
 * @property double $valor
 * @property integer $conta_deb
 * @property integer $conta_cred
 * @property integer $entidade
 * @property integer $liquidada
 * @property string $data
 * @property integer $user
 * @property string $foto
 * @property integer $tipo_desp
 *
 * @property TbDespesasCarros[] $tbDespesasCarroses
 * @property TbEntidade $entidade0
 * @property TbContas $contaDeb
 * @property TbContas $contaCred
 * @property TbUsers $user0
 * @property TbTipoDesp $tipoDesp
 */
abstract class BaseTbMovimentos extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tb_movimentos';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Movimento|Movimentos', $n);
	}

	public static function representingColumn() {
		return 'descricao';
	}

	public function rules() {
		return array(
			array('conta_deb, conta_cred, entidade, liquidada, user, tipo_desp', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
			array('descricao', 'length', 'max'=>255),
			array('data, foto', 'safe'),
			array('descricao, valor, conta_deb, conta_cred, entidade, liquidada, data, user, foto, tipo_desp', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_movimento, descricao, valor, conta_deb, conta_cred, entidade, liquidada, data, user, foto, tipo_desp', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'tbDespesasCarroses' => array(self::HAS_MANY, 'TbDespesasCarros', 'movimento'),
			'entidade0' => array(self::BELONGS_TO, 'TbEntidade', 'entidade'),
			'contaDeb' => array(self::BELONGS_TO, 'TbContas', 'conta_deb'),
			'contaCred' => array(self::BELONGS_TO, 'TbContas', 'conta_cred'),
			'user0' => array(self::BELONGS_TO, 'TbUsers', 'user'),
			'tipoDesp' => array(self::BELONGS_TO, 'TbTipoDesp', 'tipo_desp'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_movimento' => Yii::t('app', 'Id Movimento'),
			'descricao' => Yii::t('app', 'Descricao'),
			'valor' => Yii::t('app', 'Valor'),
			'conta_deb' => null,
			'conta_cred' => null,
			'entidade' => null,
			'liquidada' => Yii::t('app', 'Liquidada'),
			'data' => Yii::t('app', 'Data'),
			'user' => null,
			'foto' => Yii::t('app', 'Foto'),
			'tipo_desp' => null,
			'tbDespesasCarroses' => null,
			'entidade0' => null,
			'contaDeb' => null,
			'contaCred' => null,
			'user0' => null,
			'tipoDesp' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_movimento', $this->id_movimento);
		$criteria->compare('descricao', $this->descricao, true);
		$criteria->compare('valor', $this->valor);
		$criteria->compare('conta_deb', $this->conta_deb);
		$criteria->compare('conta_cred', $this->conta_cred);
		$criteria->compare('entidade', $this->entidade);
		$criteria->compare('liquidada', $this->liquidada);
		$criteria->compare('data', $this->data, true);
		$criteria->compare('user', $this->user);
		$criteria->compare('foto', $this->foto, true);
		$criteria->compare('tipo_desp', $this->tipo_desp);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}