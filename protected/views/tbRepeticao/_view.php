<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_repeticao')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_repeticao), array('view', 'id' => $data->id_repeticao)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('descricao')); ?>:
	<?php echo GxHtml::encode($data->descricao); ?>
	<br />

</div>