<?php
    class gaugingDailyController
    {
        public function index()
        {
            $key = $_GET['gaugingstation_id'];
            $id = Gauging::get($key);
            $daily_list = GaugingDaily::getAll($key);
            require_once('views/GaugingDaily/indexDaily.php');
        }

        public function updateForm()
        {
            $key = $_GET['daily_id'];
            $daily_list = GaugingDaily::get($key);
            require_once('views/GaugingDaily/ggupdateForm.php');
        }
        public function update()
        {
            $daily_id = $_GET['daily_id'];
            $gauging_date = $_GET['gauging_date'];
            $gauging_level = $_GET['gauging_level'];
            GaugingDaily::update($daily_id,$gauging_date,$gauging_level);
            gaugingDailyController::index();

        }

        public function newGGdate()
        {
            $key = $_GET['gaugingstation_id'];
            $id = Gauging::get($key);
            $daily_list = GaugingDaily::getAll($key);
            require_once('views/GaugingDaily/newGGdate.php');
        }

        public function addGGdate()
        {
            $key = $_GET['gaugingstation_id'];
            $gauging_date = $_GET['gauging_date'];
            $gauging_level = $_GET['gauging_level'];
            GaugingDaily::Add($key,$gauging_date,$gauging_level);
            gaugingDailyController::index();
        }

        public function deleteConfirm()
        {
            $key = $_GET['daily_id'];
            $daily_list = GaugingDaily::get($key);
            require_once('views/GaugingDaily/gaugingdaily_deleteConfirm.php');
        }

        public function delete()
        {
            $key = $_GET['daily_id'];
            GaugingDaily::delete($key);
            gaugingDailyController::index();
        }

        public function search()
        {
           $key = $_GET['gauging_date'];
           $ggid = $_GET['gaugingstation_id'];
           $id = Gauging::get($ggid);
           $daily_list = GaugingDaily::search($ggid,$key);
           require_once('views/GaugingDaily/indexDaily.php');
        }
    }
?>