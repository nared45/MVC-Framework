<?php
    class resultController
    {
        public function index()
        {
            $AVG = result::getAVG();
            require_once('views/Result/result.php');
        }

    }
?>