<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tb-despesas-carros-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'tb-despesas-carros-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id_despesa_carro',
		'descricao',
		array(
				'name'=>'tipo_desp',
				'value'=>'GxHtml::valueEx($data->tipoDesp)',
				'filter'=>GxHtml::listDataEx(TbTipoDesp::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'movimento',
				'value'=>'GxHtml::valueEx($data->movimento0)',
				'filter'=>GxHtml::listDataEx(TbMovimentos::model()->findAllAttributes(null, true)),
				),
		'data',
		'kms',
		/*
		array(
				'name'=>'carro',
				'value'=>'GxHtml::valueEx($data->carro0)',
				'filter'=>GxHtml::listDataEx(TbCarros::model()->findAllAttributes(null, true)),
				),
		'lt_combust',
		'preco_lt',
		array(
				'name'=>'user',
				'value'=>'GxHtml::valueEx($data->user0)',
				'filter'=>GxHtml::listDataEx(TbUsers::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>