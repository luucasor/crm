<?php

class Vtiger_Filter_Model extends PearDatabase {

	private $filterid;
	private $cas;
	private $partner;
	private $responsible;
	private $initialdate;
	private $finaldate;
	private $id_user;

	private $cas_list;
	private $partner_list;
	private $responsible_list;

	function __construct($id_user) {
	   $this->id_user = $id_user;
	   $this->changeFilter();
	   return $this;
	}

    public function getWhere($alias = ""){
	   $whereResponsible = $this->getWhereResponsible($alias.".");
	   $whereDate = $this->getWhereDate($alias.".");
	   return $whereResponsible." ".$whereDate;
	}

	public function getWhereResponsible($alias){

	   if($this->responsibleIsSelected()){
			//error_log("1");
			return " AND ".$alias."smownerid=".$this->getResponsible();
	   } else {
			//error_log("2");
			if($this->partnerIsSelected()) {
				//error_log("3");
				$this->changeResponsibleList();
				return " AND ".$alias."smownerid IN ".$this->responsible_list;
			} else {
				//error_log("4");
				if($this->casIsSelected()){
					//error_log("5");
					$partner_list = $this->getPartnerList();
					//error_log("list::: ".print_r($partner_list,1));
					if(count($partner_list) > 0){
						//error_log("6");
						$currentResponsibles = array();
						for ($i = 0; $i < count($partner_list); $i++) {
							$currentPartner = $partner_list[$i];
							if($currentPartner['value'] != 'all'){
								$currentResponsibles = $this->getResponsiblesByPartner($currentPartner['value']);
								//error_log("currentResponsibles::: ".print_r($currentResponsibles,1));
							}
						}

						return " AND ".$alias."smownerid IN ".$currentResponsibles;
					}
				}
			}
	   }
	   //error_log("nenhum");
	   return "";
	}

	public function getWhereDate($alias){
			$whereDate = "";
			//if(method_exists($this, 'getInitialDate') and method_exists($this, 'getFinalDate')){
			$initialdate = $this->getInitialDate();	
			$finaldate = $this->getFinalDate();
				
			if(!empty($initialdate) and !empty($finaldate)){
    		 $initialDate = $this->getInitialDate();
    		 $finalDate = $this->getFinalDate();
    		 $whereDate = " AND ENT.createdtime BETWEEN '".$initialDate."' AND '".$finalDate."' ";
    		 if($initialDate == $finalDate){
    				$whereDate = " AND ENT.createdtime BETWEEN '".$finalDate." 00:00:01' AND '".$finalDate." 23:59:59'";
    		 }
    	}
			return $whereDate;
	}
	
	private function getPartnerList() {
        global $adb;

		$cas = $this->getCAS();
		$primaryKey = "partnersid";
		$fieldName = "contatoparceiro";
		$where = "";
		
		if($cas != "all")
			$where = " CF.cf_1093 LIKE '".$cas."' AND ";
		
        $sql = "SELECT PAR.".$primaryKey.", PAR.".$fieldName." FROM vtiger_partners AS PAR
					INNER JOIN vtiger_partnerscf AS CF ON (CF.partnersid = PAR.partnersid)
					INNER JOIN vtiger_crmentity AS ENT ON (ENT.crmid = PAR.partnersid)
				WHERE 
					".$where."
					ENT.deleted = 0 AND
					CF.cf_1095 != ''";

        $partners = array(0 => array('value' => 'all', 'text' => 'Todos'));
		
        $result = $adb->pquery($sql);
		$i = 1;

		while(!$result->EOF) {
			$partnersid = $result->fields('partnersid');
			$contatoparceiro = $result->fields('contatoparceiro');
			$reg = array('value' => $partnersid, 'text' => decode_html($contatoparceiro));
			array_push($partners, $reg);
			$i++;
			$result->MoveNext();
		}

        return $partners;
    }

	private function changeResponsibleList(){
		$partnerid = $this->getPartner();
		$responsible_list = $this->getResponsiblesByPartner($partnerid);
		$this->setResponsibleList($responsible_list);
	}
	
	private function getResponsiblesByPartner($partnersid){
		$groupName = $this->getGroupName($partnersid);
		$responsibles = $this->getResponsibles($groupName);
		return $responsibles;
	}
	
	private function getGroupName($partnersid){
        global $adb;
		$sql = "SELECT cf_1095 
				FROM vtiger_partnerscf 
				WHERE
					partnersid = ".$partnersid;
        $result = $adb->pquery($sql);
		$groupName = $result->fields('cf_1095');
		return $groupName;
		
	}
	
	public static function getResponsibles($groupName){
        global $adb;
		$sql = "SELECT US.id, concat(US.first_name,' ', US.last_name) AS name 
				FROM vtiger_users2group AS UG
						INNER JOIN vtiger_users AS US ON (UG.userid = US.id)
				WHERE 
					groupid IN (SELECT groupid FROM vtiger_groups WHERE groupname LIKE '".$groupName."') AND
					deleted = 0
			   ";
			   
		$result = $adb->pquery($sql);
		$responsibles = array();
		while(!$result->EOF) {
			array_push($responsibles, $result->fields('id'));
			$result->MoveNext();
		}
		$pear = PearDatabase::getInstance();
		$list = $pear->sql_expr_datalist($responsibles);
		return $list;
	}

	public function changeFilter(){
		global $adb;
		$sql = "SELECT * FROM vtiger_filter_custom WHERE id_user = {$this->id_user}";
		$result = $adb->pquery($sql);
		
		if ($adb->num_rows($result)) {
			while (!$result->EOF) {
				$this->setFilterId($result->fields('filterid'));
				$this->setCAS($result->fields('cas'));
				$this->setPartner($result->fields('partner'));
				$responsible = $result->fields('responsible') != 'all' ? $this->getIdByName($result->fields('responsible')) : $result->fields('responsible');
				$this->setResponsible($responsible);
				$this->setInitialDate($result->fields('initialdate'));
				$this->setFinalDate($result->fields('finaldate'));
				$this->setIdUser($result->fields('id_user'));
				break;
			}
		}
	}
	
	private function getIdByName($name){
		global $adb;
		$sql = "SELECT id 
				FROM vtiger_users
				WHERE
					concat(first_name,' ',last_name) LIKE '".$name."'";
        $result = $adb->pquery($sql);
		
		if(!$result->EOF){
			return $result->fields('id');
		}
		
		return $name;
	}

	public function casIsSelected(){
		$cas = $this->getCAS();
		return (!empty($cas) and $cas != 'Todos');
	}

	public function responsibleIsSelected(){
		$responsible = $this->getResponsible();
		return (!empty($responsible) and $responsible != 'all');
	}

	public function partnerIsSelected(){
		$partner = $this->getPartner();
		return (!empty($partner) and $partner != 'all');
	}

	public function getResponsible(){
		 return $this->responsible;
	}

	public function getFilterId(){
		 return $this->filterid;
	}
	
	public function getPartner(){
		 return $this->partner;
	}

	public function getCAS(){
		 return $this->cas;
	}

	public function getInitialDate(){
		 return $this->initialdate;
	}

	public function getFinalDate(){
		 return $this->finaldate;
	}

	public function setFilterId($filterid){
		$this->filterid = $filterid;
	}

	public function setCAS($cas){
		$this->cas = $cas;
	}

	public function setPartner($partner){
		$this->partner = $partner;
	}

	public function setResponsible($responsible){
		$this->responsible = $responsible;
	}

	public function setInitialDate($initialdate){
		$this->initialdate = $initialdate;
	}

	public function setFinalDate($finaldate){
		$this->finaldate = $finaldate;
	}

	public function setIdUser($id_user){
		$this->id_user = $id_user;
	}
	
	public function setResponsibleList($responsible_list){
		$this->responsible_list = $responsible_list;
	}
}

?>