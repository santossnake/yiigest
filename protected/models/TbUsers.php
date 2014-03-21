<?php

Yii::import('application.models._base.BaseTbUsers');

class TbUsers extends BaseTbUsers
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}