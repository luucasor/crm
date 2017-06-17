<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * @@CUSTOM
 *************************************************************************************/

class Partners_Util_Helper {

    public static function getPickListValues($fieldName) {
        $cache = Vtiger_Cache::getInstance();
        if($cache->getPicklistValues($fieldName)) {
            return $cache->getPicklistValues($fieldName);
        }
        $db = PearDatabase::getInstance();
		$primaryKey = "groupid";

        $query = "SELECT ".$primaryKey.", ".$fieldName." FROM vtiger_groups
				  WHERE 
						".$fieldName." NOT IN(
							SELECT DISTINCT(CF.cf_1095)
							FROM 
								vtiger_partnerscf AS CF
										INNER JOIN vtiger_crmentity AS ENT ON (ENT.crmid = CF.partnersid)
							WHERE 
									CF.cf_1095 NOT LIKE '' AND
									ENT.deleted = 0)
				 ";

        $values = array();
        $result = $db->pquery($query, array());
        $num_rows = $db->num_rows($result);
        for($i=0; $i<$num_rows; $i++) {
            $values[$db->query_result($result,$i,$primaryKey)] = decode_html(decode_html($db->query_result($result,$i,$fieldName)));
        }
		
        $cache->setPicklistValues($fieldName, $values);

        return $values;
    }
}
