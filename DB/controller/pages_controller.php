<?php
    class PageController
    {
        public function index()
        {
            $gauging_list = Gauging::getAll();
            require_once('views/Gauging/index.php');
        }

        public function index1()
        {
            require_once('home.php');
        }

    }
?>