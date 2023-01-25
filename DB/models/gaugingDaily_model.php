<?php
    class GaugingDaily {
        
        public $gaugingstation_id ;
        public $gauging_name;
        public $river_id ;
        public $gauging_date;
        public $gauging_level;
        public $daily_id;
    
        public function __construct($gaugingstation_id,$daily_id,$gauging_date,$gauging_level)
        {
            $this->gaugingstation_id = $gaugingstation_id;
            $this->daily_id = $daily_id;
            $this->gauging_date = $gauging_date;
            $this->gauging_level = $gauging_level;
        }

        public static function get($id)
        {
            require("connection_db.php");
            $sql = "SELECT GaugingStation.gaugingstation_id,GaugingStationDaily.daily_id,GaugingStationDaily.gauging_date , GaugingStationDaily.gauging_level FROM GaugingStation NATURAL JOIN GaugingStationDaily WHERE daily_id = '$id'";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $gaugingstation_id = $my_row['gaugingstation_id'];
                $daily_id = $my_row['daily_id'];
                $gauging_date = $my_row['gauging_date'];
                $gauging_level = $my_row['gauging_level'];
            }
            
            require("close_db.php");
            return new GaugingDaily($gaugingstation_id,$daily_id,$gauging_date,$gauging_level);
        }

        public static function getAll($key)
        {
            $daily_list = [];
            require("connection_db.php");
            $sql = "SELECT GaugingStation.gaugingstation_id,GaugingStationDaily.daily_id,GaugingStationDaily.gauging_date , GaugingStationDaily.gauging_level FROM GaugingStation NATURAL JOIN GaugingStationDaily WHERE gaugingstation_id = '$key'";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $gaugingstation_id = $my_row['gaugingstation_id'];
                $daily_id     =$my_row['daily_id'];
                $gauging_date =$my_row['gauging_date'];
                $gauging_level=$my_row['gauging_level'];

                $daily_list[] = new GaugingDaily($gaugingstation_id,$daily_id,$gauging_date,$gauging_level);
            }
            require("close_db.php");
            return $daily_list;
        }

        public static function update($daily_id,$gauging_date,$gauging_level)
        {
            require("connection_db.php");
            $sql = "UPDATE GaugingStationDaily SET gauging_date = '$gauging_date', gauging_level = '$gauging_level' WHERE daily_id ='$daily_id'";
            $result=$conn->query($sql);
            require("close_db.php");
            return "update success $result row";
        }

        public static function Add($key,$gauging_date,$gauging_level)
        {
            require("connection_db.php");
            $sql = "INSERT INTO GaugingStationDaily (daily_id, gaugingstation_id, gauging_level, gauging_date) VALUES (NULL, '$key', '$gauging_level','$gauging_date');";
            $result=$conn->query($sql);
            require("close_db.php");
            return "add success $result row";
        }

        public static function delete($key)
        {
            require("connection_db.php");
            $sql = "DELETE FROM GaugingStationDaily WHERE daily_id = '$key';";
            $result=$conn->query($sql);
            require("close_db.php");
            return "delete success $result row";
        }

        public static function search($id,$key)
        {
            $daily_list = [];
            require("connection_db.php");
            $sql = "SELECT GaugingStation.gaugingstation_id,GaugingStationDaily.daily_id,GaugingStationDaily.gauging_date , GaugingStationDaily.gauging_level FROM GaugingStation NATURAL JOIN GaugingStationDaily WHERE gaugingstation_id = '$id' and `gauging_date` = '$key';
            ";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $gaugingstation_id = $my_row['gaugingstation_id'];
                $daily_id     =$my_row['daily_id'];
                $gauging_date =$my_row['gauging_date'];
                $gauging_level=$my_row['gauging_level'];

                $daily_list[] = new GaugingDaily($gaugingstation_id,$daily_id,$gauging_date,$gauging_level);
            }
            require("close_db.php");
            return $daily_list;
        }
    }
?>

