<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_entidade')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_entidade), array('view', 'id' => $data->id_entidade)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nome')); ?>:
	<?php echo GxHtml::encode($data->nome); ?>
	<br />

</div>