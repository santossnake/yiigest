<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_conta')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_conta), array('view', 'id' => $data->id_conta)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nome')); ?>:
	<?php echo GxHtml::encode($data->nome); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descricao')); ?>:
	<?php echo GxHtml::encode($data->descricao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('NIB')); ?>:
	<?php echo GxHtml::encode($data->NIB); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_abertura')); ?>:
	<?php echo GxHtml::encode($data->data_abertura); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('banco')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->banco0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('user')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->user0)); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('cartao')); ?>:
	<?php echo GxHtml::encode($data->cartao); ?>
	<br />
	*/ ?>

</div>