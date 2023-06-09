<?php
    namespace Models;
    class Regiones{
        protected static $conn;
        protected static $columnsTbl=['id_region
        ','name_region','id_country'];
        private $id_region;
        private $name_region;
        private $id_country;
        public function __construct($args = []){
            $this->id_region = $args['id_region'] ?? '';
            $this->name_region = $args['name_region'] ?? '';
            $this->id_country = $args['id_country'] ?? '';
        }
        public function saveData($data){
            $delimiter = ":";
            $valCols = $delimiter . join(',:',array_keys($data));
            $cols = join(',',array_keys($data));
            $sql = "INSERT INTO regions ($cols) VALUES ($valCols)";
            $stmt= self::$conn->prepare($sql);
            $stmt->execute($data);
        }
        public function loadAllData(){
            $sql = "SELECT id_region,name_region,id_country FROM regions";
            $stmt= self::$conn->prepare($sql);
            //$stmt->setFetchMode(\PDO::FETCH_ASSOC);
            $stmt->execute();
            $regions= $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $regions;
        }
        
        public function loadDataById($idSelect){
            
            $sql = "SELECT id_region,name_region,id_country FROM regions WHERE id_country=$idSelect";
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