<?php

class Vehicle_Model extends PearDatabase {

    private $id;
    private $idReference;
    private $tpReference;
    private $type;
    private $model;
    private $carPlate;
    private $year;
	private $idPotential;
	
    public static function getInstance() {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

    public function getVehicles(Vtiger_Request $request) {
        $idReference = $request->get('record');
        $module = $request->get('module');

        return $this->getVehiclesBy($idReference, $module);
    }

    public function getVehiclesBy($id_reference, $tp_reference) {
        $sql = "SELECT 
					id, id_reference, tp_reference ,type, model, car_plate, year, id_potential
                FROM 
					vtiger_vehicles_custom 
				WHERE 
					id_reference = ? AND 
					tp_reference = ? 
				ORDER BY id_potential, type";

        $vehicles = $this->executeSearch($sql, $id_reference, $tp_reference);
        return $vehicles;
    }

    public function getVehiclesAvailable($id_reference, $tp_reference) {
        $vehicles = array();
		$sql = "SELECT * 
				FROM vtiger_vehicles_custom
				WHERE
					id_reference = ? AND
					tp_reference LIKE ? AND
					(id_potential IS NULL OR id_potential = 0) 
				ORDER BY type";

        $vehicles = $this->executeSearch($sql, $id_reference, $tp_reference);
		//error_log("VEICULOS:: ".print_r($vehicles,1));
		
        return $vehicles;
    }
	
	public function getVehiclesAvailableByPotential($potentialid){
		global $adb;
        $sql = "SELECT vehicle_source, contact_id, related_to
				FROM vtiger_potential
				WHERE potentialid = ?";
		
        $cur = $adb->pquery($sql, array($potentialid));
		$tp_reference = $cur->fields('vehicle_source');
		$id_reference = ($tp_reference == 'Contacts') ? $cur->fields('contact_id') : $cur->fields('related_to');
	
		return $this->getVehiclesAvailable($id_reference, $tp_reference);		
	}

    public function getVehiclesByPotential($id_potential) {
        global $adb;
		
		$sql = "SELECT * 
				FROM vtiger_vehicles_custom
				WHERE
					id_potential = ? 
				ORDER BY type";
				
		$vehicles = array();
		$result = $adb->pquery($sql, array($id_potential));
        if ($adb->num_rows($result)) {
            while (!$result->EOF) {
                $vehicle = new Vehicle_Model();

                $vehicle->setId($result->fields['id']);
                $vehicle->setIdReference($result->fields['id_reference']);
                $vehicle->setTpReference($result->fields['tp_reference']);
                $vehicle->setType($result->fields['type']);
                $vehicle->setModel($result->fields['model']);
                $vehicle->setCarPlate($result->fields['car_plate']);
                $vehicle->setYear($result->fields['year']);
				$vehicle->setIdPotential($result->fields['id_potential']);

                array_push($vehicles, $vehicle);
                $result->MoveNext();
            }
        }
        return $vehicles;
    }
	
	private function executeSearch($sql, $id_reference, $tp_reference){
		global $adb;
				
		$vehicles = array();
		$result = $adb->pquery($sql, array($id_reference, $tp_reference));
		//error_log(print_r($adb,1));
        if ($adb->num_rows($result)) {
            while (!$result->EOF) {
                $vehicle = new Vehicle_Model();

                $vehicle->setId($result->fields['id']);
                $vehicle->setIdReference($result->fields['id_reference']);
                $vehicle->setTpReference($result->fields['tp_reference']);
                $vehicle->setType($result->fields['type']);
                $vehicle->setModel($result->fields['model']);
                $vehicle->setCarPlate($result->fields['car_plate']);
                $vehicle->setYear($result->fields['year']);
				$vehicle->setIdPotential($result->fields['id_potential']);

                array_push($vehicles, $vehicle);
                $result->MoveNext();
            }
        }
		return $vehicles;
	}

    public static function insertVehicles(Vtiger_Request $request) {
        $idReference = $request->get('record');
        $vehicles = $request->get('vehicles');
        $module = $request->get('module');

        Vehicle_Model::getInstance()->insertArray($vehicles, $idReference, $module);
    }

    public function delete($idReference, $module) {
      $this->deleteOldRecord($idReference, $module);
    }

    public function insertArray($vehicles, $idReference, $module) {
        $result = FALSE;
        if($this->deleteOldRecord($idReference, $module)){
            foreach($vehicles as $index => $value){
                $vehicle = Vehicle_Model::getInstance();

                $vehicle->setIdReference($idReference);
                $vehicle->setTpReference($module);
                $vehicle->setType($vehicles[$index]['type']);
                $vehicle->setModel($vehicles[$index]['model']);
                $vehicle->setCarPlate($vehicles[$index]['car_plate']);
                $vehicle->setYear($vehicles[$index]['year']);
				$vehicle->setIdPotential($vehicles[$index]['id_potential']);

                $result = $this->insert($vehicle);
            }
        }
        return $result;
    }

    private function deleteOldRecord($idReference, $module) {
        global $adb;
        $sql = "DELETE FROM vtiger_vehicles_custom WHERE id_reference = ? AND tp_reference = ?";
        $adb->pquery($sql, array($idReference, $module));
        return true;
    }


    private function insert(Vehicle_Model $vehicle) {
        $sql = $this->getQueryInsert($vehicle);
        $result = $this->query($sql);

        return $result;
    }
	
	public function updateVehicles($record, $vehicles, $idReference, $tpReference){
		$this->clearPotential($record);
		
		foreach($vehicles as $index => $value){
				$vehicle = Vehicle_Model::getInstance();
				$vehicle->setId($vehicles[$index]['id']);
				$vehicle->setIdReference($idReference);
				$vehicle->setTpReference($tpReference);
				$vehicle->setType($vehicles[$index]['type']);
				$vehicle->setModel($vehicles[$index]['model']);
				$vehicle->setCarPlate($vehicles[$index]['car_plate']);
				$vehicle->setYear($vehicles[$index]['year']);
				$vehicle->setIdPotential($record);
			
				$this->updatePotential($vehicle);
		}
	}
	
	private function clearPotential($idPotential){
		global $adb;
        $sql = "UPDATE vtiger_vehicles_custom 
				SET id_potential = ?
				WHERE 
					id_potential = ?";
        $adb->pquery($sql, array(NULL, $idPotential));
	}
	
	private function updatePotential($vehicle){
		global $adb;
        $sql = "UPDATE vtiger_vehicles_custom 
				SET id_potential = ?
				WHERE id = ?";
        $adb->pquery($sql, array($vehicle->getIdPotential(), $vehicle->getId()));
	}
	
	public function updateVehicleSource($potentialid, $source){
		global $adb;
        $sql = "UPDATE vtiger_potential
				SET vehicle_source = ?
				WHERE potentialid = ?";
        $adb->pquery($sql, array($source, $potentialid));
		return true;
	}
	
	public function getVehicleSource($potentialid){
		global $adb;
        $sql = "SELECT vehicle_source
				FROM vtiger_potential
				WHERE potentialid = ?";
		
        $vehicle_source = $adb->pquery($sql, array($potentialid));
		return $vehicle_source->fields('vehicle_source');
	}

    private function getQueryInsert(Vehicle_Model $vehicle) {

        $idReference = $vehicle->getIdReference();
        $tpReference = $vehicle->getTpReference();
        $type = $vehicle->getType();
        $model = $vehicle->getModel();
        $carPlate = $vehicle->getCarPlate();
        $year = $vehicle->getYear();
        $idPotential = $vehicle->getIdPotential();
		
        if(empty($year))
            $year = "null";

		if(empty($idPotential))
            $idPotential = "null";
		
        $sql = "INSERT INTO vtiger_vehicles_custom (id_reference, tp_reference, type, model, car_plate, year, id_potential)
                VALUES ({$idReference},'{$tpReference}','{$type}','{$model}','{$carPlate}', {$year}, {$idPotential})";
        
		//error_log("SQL:: ".$sql);
		return $sql;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdReference() {
        return $this->idReference;
    }

    public function setIdReference($idReference) {
        $this->idReference = $idReference;
    }

    public function getTpReference() {
        return $this->tpReference;
    }

    public function setTpReference($tpReference) {
        $this->tpReference = $tpReference;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getCarPlate() {
        return $this->carPlate;
    }

    public function setCarPlate($carPlate) {
        $this->carPlate = $carPlate;
    }
    
    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

	public function getIdPotential() {
        return $this->idPotential;
    }

    public function setIdPotential($idPotential) {
        $this->idPotential = $idPotential;
    }
	
	public function getJson(){
		return json_encode($this);
	}
}
