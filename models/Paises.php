<?php
    namespace Models;
    class Paises{
        protected static $conn;
        protected static $columnsTbl=['id_country','name_country'];
        private $id_country;
        private $name_country;
        public function __construct($args = []){
            $this->id_country = $args['id_country'] ?? '';
            $this->name_country = $args['name_country'] ?? '';
        }
        public function saveData($data){
            $delimiter = ":";
            $valCols = $delimiter . join(',:',array_keys($data));
            $cols = join(',',array_keys($data));
            $sql = "INSERT INTO countries ($cols) VALUES ($valCols)";
            $stmt= self::$conn->prepare($sql);
            $stmt->execute($data);
        }
        public function loadAllData(){
            $sql = "SELECT id_country,name_country FROM countries";
            $stmt= self::$conn->prepare($sql);
            //$stmt->setFetchMode(\PDO::FETCH_ASSOC);
            $stmt->execute();
            $countries = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $countries;
        }
        public static function setConn($connBd){
            self::$conn = $connBd;
        }
    }
?>