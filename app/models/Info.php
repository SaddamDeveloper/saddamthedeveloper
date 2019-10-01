<?php 
    class Info{
        private $db;
        public function __construct(){
            $this->db = new Database;
        }

        public function getInfo(){
            $this->db->query("SELECT * FROM info");
            return $this->db->resultSet();
        }

        public function getServices(){
            $this->db->query("SELECT * FROM services");
            return $this->db->resultSet();
        }

        public function getExperiences(){
            $this->db->query("SELECT * FROM experience");
            return $this->db->resultSet();
        }
    }