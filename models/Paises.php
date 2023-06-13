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
            $stmt->execute();
            $countries = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $countries;
        }
        public function deleteByIdData($id){
            $response=[];
            $sql = "DELETE FROM countries WHERE id_country = :id_country";
            $stmt= self::$conn->prepare($sql);
            $stmt->bindParam(':id_country', $id, \PDO::PARAM_INT); 
            $stmt->execute();
            if ($stmt->rowCount()>0){
                $response=[[
                    'mensaje' => 'El registro fue eliminado correctamente',
                    'codEstado' => '200',
                    'totalreg' => $stmt->rowCount()
                ]];
            }else{
                $response=[[
                    'mensaje' => 'El registro no fue eliminado',
                    'reject' => 'Registro no encontrado o no existe',
                    'codEstado' => '204',
                    'totalreg' => $stmt->rowCount()
                ]];
            }
            return $response;
        }
        public static function setConn($connBd){
            self::$conn = $connBd;
        }
        public function editData($data){
            $sql = "UPDATE countries SET name_country=:name_country WHERE id_country=:id_country";
            $stmt= self::$conn->prepare($sql);
            $stmt->bindParam(':name_country', $data['name_country'], \PDO::PARAM_STR); 
            $stmt->bindParam(':id_country', $data['id_country'], \PDO::PARAM_INT); 
            $stmt->execute();
        }
    }
?>