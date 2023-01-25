<?php
    class gaugingController
    {
        public function index()
        {
            $gauging_list = Gauging::getAll();
            require_once('views/Gauging/index.php');
        }
        public function newGauging()
        {
            $gauging_list = Gauging::getAll();
            $river = river::getriver();
            require_once('views/Gauging/newGauging.php');
        }
        public  function addGuaging()
        {
            $gauging_name = $_GET['gauging_name'];
            $river_id = $_GET['river_id'];
            Gauging::Add($gauging_name,$river_id);
            gaugingController::index();
        }
        public function search()
        {
            $key = $_GET['gaugingstation_id'];
            $gauging_list = Gauging::search($key);
            require_once('views/Gauging/index.php');
        }

        public function deleteConfirm()
        {
            $key = $_GET['gaugingstation_id'];
            $gauging_list = Gauging::get($key);
            require_once('views/Gauging/gauging_deleteConfirm.php');
        }
        public function delete()
        {
            $key = $_GET['gaugingstation_id'];
            Gauging::delete($key);
            GaugingController::index();
        }

        public function updateForm()
        {
            $id = $_GET['gaugingstation_id'];
            $gauging = Gauging::get($id);
            $river = river::getriver();
            require_once('views/Gauging/gaugingupdateFrom.php');

        }
        public function update()
        {
            $key = $_GET['gaugingstation_id'];
            $gauging_name = $_GET['gauging_name'];
            $river_id = $_GET['river_id'];
            gauging::update($key,$gauging_name,$river_id);
            GaugingController::index();
        }
    }
?>