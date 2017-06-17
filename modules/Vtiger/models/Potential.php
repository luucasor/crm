<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Potentials
 *
 * @author root
 */
class Potential_Model extends PearDatabase {
    
    private $contacts;

    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    public function getIdContacts($potentialid) {
        global $adb;

        $sql = "SELECT contact_id FROM vtiger_potential WHERE potentialid = ?";

        $this->contacts = array();
        $result = $adb->pquery($sql, array($potentialid));
        

        if ($adb->num_rows($result)) {
            while (!$result->EOF) {   
                array_push($this->contacts, $result->fields['contact_id']);
                $result->MoveNext();
            }
        }
        
        return $this->contacts;
    }
	
	public static function getPotentialById($potentialid){
        global $adb;

        $sql = "SELECT * FROM vtiger_potential WHERE potentialid = ?";

        $this->contacts = array();
        $result = $adb->pquery($sql, array($potentialid));
        
        return $result;		
	}

}
