<?php
    namespace Models;
    class Tipos{
        protected static $conn;
        protected static $columnsTbl=['id_housetype','name_housetype'];
        private $id_housetype;
        private $name_housetype;
        public function __construct($args = []){
            $this->id_housetype = $args['id_housetype'] ?? '';
            $this->name_housetype = $args['name_housetype'] ?? '';
        }
        public function saveData($data){
            $delimiter = ":";
            $valCols = $delimiter . join(',:',array_keys($data));
            $cols = join(',',array_keys($data));
            $sql = "INSERT INTO housetype ($cols) VALUES ($valCols)";
            $stmt= self::$conn->prepare($sql);
            $stmt->execute($data);
        }
        public function loadAllData(){
            $sql = "SELECT id_pais,nombre_pais FROM pais";
            $stmt= self::$conn->prepare($sql);
            //$stmt->setFetchMode(\PDO::FETCH_ASSOC);
            $stmt->execute();
            $clientes = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $clientes;
        }
        public static function setConn($connBd){
            self::$conn = $connBd;
        }
    }
?>