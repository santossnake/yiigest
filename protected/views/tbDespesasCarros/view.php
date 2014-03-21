<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id_despesa_carro)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_despesa_carro), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id_despesa_carro',
'descricao',
array(
			'name' => 'tipoDesp',
			'type' => 'raw',
			'value' => $model->tipoDesp !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tipoDesp)), array('tbTipoDesp/view', 'id' => GxActiveRecord::extractPkValue($model->tipoDesp, true))) : null,
			),
array(
			'name' => 'movimento0',
			'type' => 'raw',
			'value' => $model->movimento0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->movimento0)), array('tbMovimentos/view', 'id' => GxActiveRecord::extractPkValue($model->movimento0, true))) : null,
			),
'data',
'kms',
array(
			'name' => 'carro0',
			'type' => 'raw',
			'value' => $model->carro0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->carro0)), array('tbCarros/view', 'id' => GxActiveRecord::extractPkValue($model->carro0, true))) : null,
			),
'lt_combust',
'preco_lt',
array(
			'name' => 'user0',
			'type' => 'raw',
			'value' => $model->user0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user0)), array('tbUsers/view', 'id' => GxActiveRecord::extractPkValue($model->user0, true))) : null,
			),
	),
)); ?>

