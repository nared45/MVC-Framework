<?php
    class result {
        public $gauging_date ;
        public $river_id;
        public $gauging_level ;
        public $river_name;

        public function __construct($gauging_date,$river_id,$gauging_level,$river_name)
        {
            $this->gauging_date = $gauging_date;
            $this->river_id = $river_id;
            $this->gauging_level = $gauging_level;
            $this->river_name = $river_name;
        }

        public static function getAVG()
        {
            $AVG_list = [];
            require("connection_db.php");
            $sql = "SELECT GaugingStationDaily.gauging_date ,River.river_id, River.river_name , AVG(GaugingStationDaily.gauging_level) AS AVG_level FROM `GaugingStation` NATURAL JOIN River NATURAL JOIN GaugingStationDaily GROUP BY GaugingStationDaily.gauging_date , GaugingStation.river_id";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $gauging_date =$my_row['gauging_date'];
                $river_id	=$my_row['river_id'];
                $river_name = $my_row['river_name'];
                $gauging_level = $my_row['AVG_level'];

                $AVG_list[] = new result($gauging_date,$river_id,$gauging_level,$river_name);
            }
            require("close_db.php");
            return $AVG_list;
        }
    }
?>