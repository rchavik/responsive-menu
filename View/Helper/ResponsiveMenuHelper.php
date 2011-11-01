<?php

class ResponsiveMenuHelper extends AppHelper {

	public $helpers = array(
		'Html',
		);

	public function beforeRender() {
		parent::beforeRender();
		$this->log('beforeRender called');
		if (! isset($this->request->params['admin']) && !$this->request->isAjax()) {
			$this->Html->css('/ResponsiveMenu/css/menu', null, array('inline' => false));
			$this->Html->script('/ResponsiveMenu/js/menu', false, array('once' => true, 'inline' => false));
		}
	}

}
