<?php
    $controllers = array('pages'=>['home','error','index','index1'],
    'waterbarrier'=>['index','search','deleteConfirm','updateForm','update','newwater','addwater','delete'],
    'result'=>['index'],
    'gaugingDaily'=>['index','newGGdate','addGGdate','updateForm','update','deleteConfirm','delete','search'],
    'gauging'=>['index','newGauging','addGuaging','search','deleteConfirm','delete','updateForm','update']);


    function call($controller,$action){
        require_once("controller/".$controller."_controller.php"); 
        switch($controller)
        {
            case "pages": require_once('models/gauging_model.php'); 
                          $controller = new PageController();
                          break;
            case "waterbarrier":require_once('models/waterbarrier_model.php');
                                require_once('models/agency_model.php');
                                require_once('models/subarea_model.php');
                                $controller = new waterbarrierController();
                                break;
            case "result": require_once('models/result_model.php');
                                $controller = new resultController();
                                break;

            case "gauging":     require_once('models/gauging_model.php'); 
                                require_once('models/gaugingDaily_model.php');
                                require_once('models/river_model.php');
                                
                                 $controller = new gaugingController();
                                 break;

            case "gaugingDaily": require_once('models/gauging_model.php'); 
                                require_once('models/gaugingDaily_model.php');
                                 $controller = new gaugingDailyController();
                                 break;
        }
        
        $controller->{$action}();
    }

    if (array_key_exists($controller,$controllers)){

        if(in_array($action,$controllers[$controller])){

            call($controller,$action);
           // echo "action : ".$action.", controller : ".$controller;
        }
        else{
            // echo "action : ".$action.", controller : ".$controller;
            call('pages','error');
        }
    }
    else{
        // echo "3333333333333333333333";
        //echo "action : ".$action.", controller : ".$controller;
        call('pages','error');
    }
?>