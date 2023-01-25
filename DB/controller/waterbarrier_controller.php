<?php
    class waterbarrierController
    {
        public function index()
        {
            $water_list = waterbarrier::getAll();
            require_once('views/WaterBarrier/indexwater.php');
        }

        public function newwater()
        {
            $water_list = waterbarrier::getAll();
            $agency = agency::getAgency();
            $subarea = subarea::getSubarea();
            require_once('views/WaterBarrier/newwater.php');
        }

        public function addwater()
        {
            $waterbarrier_name = $_GET['waterbarrier_name'];
            $agency_id = $_GET['agency_id'];
            $sub_area_id = $_GET['sub_area_id'];
            $distance = $_GET['distance'];
            $waterbarrier_height = $_GET['waterbarrier_height'];
            waterbarrier::add($waterbarrier_name,$agency_id,$sub_area_id,$distance,$waterbarrier_height);
            waterbarrierController::index();
        }

        public function search()
        {
            $key = $_GET['key'];
            $water_list = waterbarrier::search($key);
            require_once('views/WaterBarrier/indexwater.php');
        }

        public function deleteConfirm()
        {
            $id = $_GET['waterbarrier_id'];
            $water = waterbarrier::get($id);
            require_once('views/WaterBarrier/water_deleteConfirm.php');
        }

        public function delete()
        {
            $id = $_GET['waterbarrier_id'];
            waterbarrier::delete($id);
            waterbarrierController::index();
        }

        public function updateForm()
        {
            $id = $_GET['waterbarrier_id'];
            $water = waterbarrier::get($id);
            // echo "water: "; is_null($water) ? print_r("True\n") : print_r("False\n");
            $agency = agency::getAgency();
            // echo "agency: "; is_null($agency) ? print_r("True\n") : print_r("False\n");
            $subarea = subarea::getSubarea();
            // echo "subarea: "; is_null($subarea) ? print_r("True\n") : print_r("False\n");
            require_once('views/WaterBarrier/waterupdateForm.php');
        } 

        public function update()
        {
            $key = $_GET['waterbarrier_id'];
            // echo "water: "; is_null($key) ? print_r("True\n") : print_r("False\n");
            $waterbarrier_name = $_GET['waterbarrier_name'];
            // echo "waterbarrier_name: "; is_null($waterbarrier_name) ? print_r("True\n") : print_r("False\n");
            $agency_id = $_GET['agency_id'];
            // echo "agency_id: "; is_null($agency_id) ? print_r("True\n") : print_r("False\n");
            $sub_area_id = $_GET['sub_area_id'];
            // echo "sub_area_id: "; is_null($sub_area_id) ? print_r("True\n") : print_r("False\n");
            $distance = $_GET['distance'];
            // echo "distance: "; is_null($distance) ? print_r("True\n") : print_r("False\n");
            $waterbarrier_height = $_GET['waterbarrier_height'];
            // echo "waterbarrier_height: "; is_null($waterbarrier_height) ? print_r("True\n") : print_r("False\n");
            waterbarrier::update($key,$waterbarrier_name,$agency_id,$sub_area_id,$distance,$waterbarrier_height);
            waterbarrierController::index();
        } 
    }
?>