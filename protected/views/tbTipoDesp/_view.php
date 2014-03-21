<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_tipo_desp')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_tipo_desp), array('view', 'id' => $data->id_tipo_desp)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('descricao')); ?>:
	<?php echo GxHtml::encode($data->descricao); ?>
	<br />

</div>