<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id_movimento)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_movimento), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id_movimento',
'descricao',
'valor',
array(
			'name' => 'contaDeb',
			'type' => 'raw',
			'value' => $model->contaDeb !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->contaDeb)), array('tbContas/view', 'id' => GxActiveRecord::extractPkValue($model->contaDeb, true))) : null,
			),
array(
			'name' => 'contaCred',
			'type' => 'raw',
			'value' => $model->contaCred !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->contaCred)), array('tbContas/view', 'id' => GxActiveRecord::extractPkValue($model->contaCred, true))) : null,
			),
array(
			'name' => 'entidade0',
			'type' => 'raw',
			'value' => $model->entidade0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->entidade0)), array('tbEntidade/view', 'id' => GxActiveRecord::extractPkValue($model->entidade0, true))) : null,
			),
'liquidada:boolean',
'data',
array(
			'name' => 'user0',
			'type' => 'raw',
			'value' => $model->user0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user0)), array('tbUsers/view', 'id' => GxActiveRecord::extractPkValue($model->user0, true))) : null,
			),
'foto',
array(
			'name' => 'tipoDesp',
			'type' => 'raw',
			'value' => $model->tipoDesp !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tipoDesp)), array('tbTipoDesp/view', 'id' => GxActiveRecord::extractPkValue($model->tipoDesp, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('tbDespesasCarroses')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->tbDespesasCarroses as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tbDespesasCarros/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>