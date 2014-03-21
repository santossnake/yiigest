<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id_seguro)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_seguro), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id_seguro',
array(
			'name' => 'user0',
			'type' => 'raw',
			'value' => $model->user0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->user0)), array('tbUsers/view', 'id' => GxActiveRecord::extractPkValue($model->user0, true))) : null,
			),
array(
			'name' => 'carro0',
			'type' => 'raw',
			'value' => $model->carro0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->carro0)), array('tbCarros/view', 'id' => GxActiveRecord::extractPkValue($model->carro0, true))) : null,
			),
'num_seguro',
'data_inicio',
'data_fim',
'valor',
array(
			'name' => 'repeticao0',
			'type' => 'raw',
			'value' => $model->repeticao0 !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->repeticao0)), array('tbRepeticao/view', 'id' => GxActiveRecord::extractPkValue($model->repeticao0, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('tbCarroses')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->tbCarroses as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tbCarros/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>