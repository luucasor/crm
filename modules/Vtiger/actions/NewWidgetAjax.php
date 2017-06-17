<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Vtiger_NewWidgetAjax_Action extends Vtiger_IndexAjax_View {

	public function process(Vtiger_Request $request) {		
		$name = $request->get('name');
		$name = $this->camelCase($name);
		//Código usado para criar o widget
		$home = Vtiger_Module::getInstance('Home');
		$home->addLink("DASHBOARDWIDGET", $name, "index.php?module=Home&view=ShowWidget&name=".$name,"", "1");

		$response = new Vtiger_Response();
		$response->setResult(array('Save' => 'OK'));
		$response->emit();
	}

	function camelCase($str, array $noStrip = []) {
			$str = preg_replace('/[^a-z0-9' . implode("", $noStrip) . ']+/i', ' ', $str);
			$str = trim($str);
			$str = ucwords($str);
			$str = str_replace(" ", "", $str);
			$str = ucfirst($str);

			return $str;
	}
}
