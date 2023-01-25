<?php
    class Gauging {

        public $gaugingstation_id ;
        public $gauging_name;
        public $river_id;
        public $river_name ;
        public $gauging_date;
        public $gauging_level;
    
        public function __construct($gaugingstation_id,$gauging_name,$river_name,$river_id)
        {

            $this->gaugingstation_id = $gaugingstation_id;
            $this->gauging_name = $gauging_name;
            $this->river_name = $river_name;
            $this->river_id = $river_id;
        }

        public static function getAll()
        {
            $gauging_list = [];
            require("connection_db.php");
            $sql = "SELECT gaugingstation_id,gauging_name,River.river_name,River.river_id FROM GaugingStation NATURAL JOIN River GROUP by gaugingstation_id;";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $gaugingstation_id =$my_row['gaugingstation_id'];
                $gauging_name=$my_row['gauging_name'];
                $river_name = $my_row['river_name'];
                $river_id = $my_row['river_id'];

                $gauging_list[] = new Gauging($gaugingstation_id,$gauging_name,$river_name,$river_id);
            }
            require("close_db.php");
            return $gauging_list;
        }

        public static function get($id)
        {
            require("connection_db.php");
            $sql = "SELECT gaugingstation_id,gauging_name,River.river_name,River.river_id FROM GaugingStation NATURAL JOIN River WHERE GaugingStation.gaugingstation_id = '$id' GROUP by gaugingstation_id;
            ";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $gaugingstation_id =$id;
                $gauging_name=$my_row['gauging_name'];
                $river_name = $my_row['river_name'];
                $river_id = $my_row['river_id'];
            }

            require("close_db.php");
            return new Gauging($gaugingstation_id,$gauging_name,$river_name,$river_id);

        }

        public static function Add($gauging_name,$river_id)
        {
            // echo "fekmgelkrmglkm";
            require("connection_db.php");
            $sql = "INSERT INTO GaugingStation (gaugingstation_id,gauging_name,river_id) values (NULL,'$gauging_name','$river_id')";
            $result=$conn->query($sql);
            require("close_db.php");
            return "add success $result row";
        }
       
        public static function search($key)
        {
            $gauging_list = [];
            require("connection_db.php");
            $sql = "SELECT `gaugingstation_id`,`gauging_name`,River.river_name,River.river_id FROM GaugingStation NATURAL JOIN River 
            WHERE gauging_name like '%$key%' OR gaugingstation_id like '%$key%' OR River.river_name like '%$key%';";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $gaugingstation_id =$my_row['gaugingstation_id'];
                $gauging_name=$my_row['gauging_name'];
                $river_name = $my_row['river_name'];
                $river_id = $my_row['river_id'];

                $gauging_list[] = new Gauging($gaugingstation_id,$gauging_name,$river_name,$river_id);
            }
            require("close_db.php");
            return $gauging_list;
        }
         public static function delete($id)
         {
            require("connection_db.php");
            $sql = "DELETE FROM GaugingStation WHERE `gaugingstation_id` = '$id' ;";
            $result=$conn->query($sql);
            require("close_db.php");
            return "delete success $result row";
         }

         public static function update($key,$gauging_name,$river_id)
         {
            require("connection_db.php");
            $sql = "UPDATE GaugingStation SET gauging_name = '$gauging_name',river_id = '$river_id' WHERE gaugingstation_id = '$key'; ";
            $result=$conn->query($sql);
            require("close_db.php");
            return "update success $result row";
         }
    }
?>