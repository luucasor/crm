<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author root
 */
require_once('include/database/PearDatabase.php');
 
class Contact_Model {

    private $contactid;
    private $firstname;
    private $lastname;
    private $email;
    private $phone;
    private $mobile;
    private $leadsource;
    private $status;
    private $entity;
    private $classification;
    private $description;

    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    public function getContact($id) {
        $adb = PearDatabase::getInstance();

        $sql = "SELECT * FROM vtiger_contactdetails AS CD 
                        INNER JOIN vtiger_contactdetails AS CS ON (CS.contactid = CD.contactid) 
                        INNER JOIN vtiger_contactscf AS CF ON (CF.contactid = CS.contactid) 
                        INNER JOIN vtiger_crmentity AS CRM ON (CRM.crmid = CS.contactid)
						INNER JOIN vtiger_contactsubdetails AS SUB ON (SUB.contactsubscriptionid = CS.contactid)
                WHERE CD.contactid = ?";

        $result = $adb->pquery($sql, array($id));
        if ($adb->num_rows($result)) {
            while (!$result->EOF) {

                $this->contactid = $result->fields['contactid'];
                $this->firstname = $result->fields['firstname'];
                $this->lastname = $result->fields['lastname'];
                $this->email = $result->fields['email'];
                $this->mobile = $result->fields['mobile'];
                $this->leadsource = $result->fields['leadsource'];
                $this->phone = $result->fields['cf_885'];
                $this->status = $result->fields['cf_893'];
                $this->entity = $result->fields['cf_859'];
                $this->classification = $result->fields['cf_891'];
                $this->description = $result->fields['description'];
                $result->MoveNext();
            }
        }
        
        return $this;
    }
	
	public function existsContact($email){
        $adb = PearDatabase::getInstance();

        $sql = "SELECT COUNT(*) AS count FROM vtiger_contactdetails AS CD 
                        INNER JOIN vtiger_contactdetails AS CS ON (CS.contactid = CD.contactid) 
                        INNER JOIN vtiger_contactscf AS CF ON (CF.contactid = CS.contactid) 
                        INNER JOIN vtiger_crmentity AS CRM ON (CRM.crmid = CS.contactid)
                WHERE CD.email LIKE ? AND CRM.deleted = 0";

        $result = $adb->pquery($sql, array($email));	
		if($result->fields("count") > 0) {
			return 1;
		}
		return 0;
	}

    public function getContactid() {
        return $this->contactid;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function getLeadsource() {
        return $this->leadsource;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getEntity() {
        return $this->entity;
    }

    public function getClassification() {
        return $this->classification;
    }
    
    public function getDescription() {
        return $this->description;
    }
}
