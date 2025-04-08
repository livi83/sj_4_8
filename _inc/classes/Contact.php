<?php

    class Contact{
        private $db;

        public function __construct(Database $database){
            $this->db = $database->getConnection();
        }

        public function index(){
            $stmt = $this->db->prepare("SELECT * FROM contact");
            $stmt->execute();
            //FETCH_ASSOC - ziskame asociativne pole
            //FETCH_OBJ - ziskame data ako objekt
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }
        public function destroy($id) {
            $stmt = $this->db->prepare("DELETE FROM contact WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT); //PDO::PARAM_INT - nepovinne
            return $stmt->execute();

        }
    
    }
?>