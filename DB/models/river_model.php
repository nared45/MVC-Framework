<?php
    class river {

        public $river_id ;
        public $river_name;

        public function __construct($river_id,$river_name)
        {
            $this->river_id = $river_id;
            $this->river_name = $river_name;
        }
        public static function getriver()
        {
            $river_list = [];
            require("connection_db.php");
            $sql = "SELECT river_id, river_name FROM River";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $river_id = $my_row['river_id'];
                $river_name = $my_row['river_name'];

                $river_list[] = new river($river_id,$river_name);
            }
            require("close_db.php");
            return $river_list;
        }

    }
?>