<?php
    class waterbarrier {

        public $waterbarrier_id ;
        public $waterbarrier_name;
        public $agency_id ;
        public $sub_area_id;
        public $distance;
        public $waterbarrier_height;
        public $agency_name;
        public $sub_area_name;
    
        public function __construct($waterbarrier_id,$waterbarrier_name	,$agency_id,$sub_area_id,$distance,$waterbarrier_height,$agency_name,$sub_area_name)
        {
            $this->waterbarrier_id = $waterbarrier_id;
            $this->waterbarrier_name = $waterbarrier_name;
            $this->agency_id = $agency_id;
            $this->sub_area_id = $sub_area_id;
            $this->distance = $distance;
            $this->waterbarrier_height = $waterbarrier_height;
            $this->agency_name = $agency_name;
            $this->sub_area_name = $sub_area_name;
        }

        public static function get($id)
        {
            require("connection_db.php");
            $sql = "SELECT waterbarrier_id,waterbarrier_name,agency_id,sub_area_id,distance,waterbarrier_height,Agency.agency_name,SubArea.sub_area_name FROM Agency NATURAL JOIN WaterBarrier NATURAL JOIN SubArea WHERE waterbarrier_id = '$id';";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $waterbarrier_id =$my_row['waterbarrier_id'];
                $waterbarrier_name	=$my_row['waterbarrier_name'];
                $agency_id = $my_row['agency_id'];
                $sub_area_id = $my_row['sub_area_id'];
                $distance = $my_row['distance'];
                $waterbarrier_height = $my_row['waterbarrier_height'];
                $agency_name = $my_row['agency_name'];
                $sub_area_name = $my_row['sub_area_name'];
            }
            require("close_db.php");
            return new waterbarrier($waterbarrier_id,$waterbarrier_name,$agency_id,$sub_area_id,$distance,$waterbarrier_height,$agency_name,$sub_area_name);
        }

        public static function getAll()
        {
            $water_list = [];
            require("connection_db.php");
            $sql = "SELECT waterbarrier_id,waterbarrier_name,agency_id,sub_area_id,distance,waterbarrier_height,Agency.agency_name,SubArea.sub_area_name FROM Agency NATURAL JOIN WaterBarrier NATURAL JOIN SubArea;
            ";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $waterbarrier_id =$my_row['waterbarrier_id'];
                $waterbarrier_name	=$my_row['waterbarrier_name'];
                $agency_id = $my_row['agency_id'];
                $sub_area_id = $my_row['sub_area_id'];
                $distance = $my_row['distance'];
                $waterbarrier_height = $my_row['waterbarrier_height'];
                $agency_name = $my_row['agency_name'];
                $sub_area_name = $my_row['sub_area_name'];

                $water_list[] = new waterbarrier($waterbarrier_id,$waterbarrier_name,$agency_id,$sub_area_id,$distance,$waterbarrier_height,$agency_name,$sub_area_name);
            }
            require("close_db.php");
            return $water_list;
        }
        public static function add($waterbarrier_name,$agency_id,$sub_area_id,$distance,$waterbarrier_height)
        {
            require("connection_db.php");
            $sql = "INSERT INTO WaterBarrier (`waterbarrier_id`, `waterbarrier_name`, `agency_id`, `sub_area_id`, `distance`, `waterbarrier_height`) VALUES (NULL, '$waterbarrier_name', '$agency_id', '$sub_area_id', '$distance', '$waterbarrier_height')";
            $result=$conn->query($sql);
            require("close_db.php");
            return "add success $result row";
        }

        public static function search($key)
        {
            $water_list = [];
            require("connection_db.php");
            $sql = "SELECT waterbarrier_id,waterbarrier_name,agency_id,sub_area_id,distance,waterbarrier_height,Agency.agency_name,SubArea.sub_area_name FROM Agency NATURAL JOIN WaterBarrier NATURAL JOIN SubArea 
            WHERE waterbarrier_name like '%$key%' OR waterbarrier_id like '%$key%' OR agency_id like '%$key%' OR sub_area_id like '%$key%' OR distance like '%$key%' OR waterbarrier_height like '%$key%' OR Agency.agency_name like '%key%' OR SubArea.sub_area_name like '%$key%';
            ";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $waterbarrier_id =$my_row['waterbarrier_id'];
                $waterbarrier_name	=$my_row['waterbarrier_name'];
                $agency_id = $my_row['agency_id'];
                $sub_area_id = $my_row['sub_area_id'];
                $distance = $my_row['distance'];
                $waterbarrier_height = $my_row['waterbarrier_height'];
                $agency_name = $my_row['agency_name'];
                $sub_area_name = $my_row['sub_area_name'];

                $water_list[] = new waterbarrier($waterbarrier_id,$waterbarrier_name,$agency_id,$sub_area_id,$distance,$waterbarrier_height,$agency_name,$sub_area_name);
            }
            require("close_db.php");
            return $water_list;
        }
        
        public static function delete($id)
        {
            require("connection_db.php");
            $sql = "DELETE FROM WaterBarrier where waterbarrier_id = '$id'";
            $result=$conn->query($sql);
            require("close_db.php");
            return "delete success $result row";
        }

        public static function update($key,$waterbarrier_name,$agency_id,$sub_area_id,$distance,$waterbarrier_height)
        {
            require("connection_db.php");
            $sql = "UPDATE WaterBarrier SET waterbarrier_name = '$waterbarrier_name', agency_id = '$agency_id', sub_area_id = '$sub_area_id',distance = '$distance',waterbarrier_height = '$waterbarrier_height' WHERE waterbarrier_id = '$key' ";
            // echo "sql: "; is_null($sql) ? print_r("True\n") : print_r("False\n");
            $result=$conn->query($sql);
            require("close_db.php");
            return "update success $result row";
        }
    }
?>