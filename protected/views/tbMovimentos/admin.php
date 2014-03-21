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
	$.fn.yiiGridView.update('tb-movimentos-grid', {
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
	'id' => 'tb-movimentos-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id_movimento',
		'descricao',
		'valor',
		array(
				'name'=>'conta_deb',
				'value'=>'GxHtml::valueEx($data->contaDeb)',
				'filter'=>GxHtml::listDataEx(TbContas::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'conta_cred',
				'value'=>'GxHtml::valueEx($data->contaCred)',
				'filter'=>GxHtml::listDataEx(TbContas::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'entidade',
				'value'=>'GxHtml::valueEx($data->entidade0)',
				'filter'=>GxHtml::listDataEx(TbEntidade::model()->findAllAttributes(null, true)),
				),
		/*
		array(
					'name' => 'liquidada',
					'value' => '($data->liquidada === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
					'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
					),
		'data',
		array(
				'name'=>'user',
				'value'=>'GxHtml::valueEx($data->user0)',
				'filter'=>GxHtml::listDataEx(TbUsers::model()->findAllAttributes(null, true)),
				),
		'foto',
		array(
				'name'=>'tipo_desp',
				'value'=>'GxHtml::valueEx($data->tipoDesp)',
				'filter'=>GxHtml::listDataEx(TbTipoDesp::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>