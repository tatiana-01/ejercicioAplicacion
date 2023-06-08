<?php
    namespace Models;
    class Ciudades{
        protected static $conn;
        protected static $columnsTbl=['id_city','name_city','id_region'];
        private $id_city;
        private $name_city;
        private $id_region;
        public function __construct($args = []){
            $this->id_city = $args['id_city'] ?? '';
            $this->name_city = $args['name_city'] ?? '';
            $this->id_region = $args['id_region'] ?? '';
        }
        public function saveData($data){
            $delimiter = ":";
            $valCols = $delimiter . join(',:',array_keys($data));
            $cols = join(',',array_keys($data));
            $sql = "INSERT INTO cities ($cols) VALUES ($valCols)";
            $stmt= self::$conn->prepare($sql);
            $stmt->execute($data);
        }
        public function loadAllData(){
            $sql = "SELECT id_city,name_city,id_region FROM cities";
            $stmt= self::$conn->prepare($sql);
            //$stmt->setFetchMode(\PDO::FETCH_ASSOC);
            $stmt->execute();
            $regions= $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $regions;
        }
        public static function setConn($connBd){
            self::$conn = $connBd;
        }
    }
?>