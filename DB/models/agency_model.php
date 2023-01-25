<?php
    class agency {

        public $agency_id ;
        public $agency_name;

        public function __construct($agency_id,$agency_name)
        {
            $this->agency_id = $agency_id;
            $this->agency_name = $agency_name;
        }
        public static function getAgency()
        {
            $agency_list = [];
            require("connection_db.php");
            $sql = "SELECT * FROM Agency";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $agency_id = $my_row['agency_id'];
                $agency_name = $my_row['agency_name'];

                $agency_list[] = new agency($agency_id,$agency_name);
            }
            require("close_db.php");
            return $agency_list;
        }

    }
?>