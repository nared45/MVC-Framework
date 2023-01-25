<?php
    class subarea {

        public $sub_area_id ;
        public $sub_area_name;

        public function __construct($sub_area_id,$sub_area_name)
        {
            $this->sub_area_id = $sub_area_id;
            $this->sub_area_name = $sub_area_name;
        }
        public static function getSubarea()
        {
            $subarea_list = [];
            require("connection_db.php");
            $sql = "SELECT sub_area_id,sub_area_name FROM SubArea";
            // echo "sql: "; is_null($sql) ? print_r("True\n") : print_r("False\n");
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $sub_area_id = $my_row['sub_area_id'];
                $sub_area_name = $my_row['sub_area_name'];

                $subarea_list[] = new subarea($sub_area_id,$sub_area_name);
            }
            require("close_db.php");
            return $subarea_list;
        }

    }
?>