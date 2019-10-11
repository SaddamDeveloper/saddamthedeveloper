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
            $this->db->query("SELECT * FROM experience ORDER BY id DESC ");
            return $this->db->resultSet();
        }

        public function getBlogPosts(){
            $this->db->query("SELECT * FROM `blog-post` ORDER BY created_at DESC ");
            return $this->db->resultSet();
        }

        public function postExperinces($data){
            $this->db->query('INSERT INTO experience (title, company, description, doj, dol) VALUES (:title, :company, :description, :doj, :dol)');
            $this->db->bind(':title', $data['title']);
            $this->db->bind(':company', $data['company']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':doj', $data['doj']);
            $this->db->bind(':dol', $data['dol']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function postAbout($data){
            $this->db->query('INSERT INTO info (fname, lname, dob, email, phone, residence, address, about) VALUES (:fname, :lname, :dob, :email, :phone, :residence, :address, :about)');
            $this->db->bind(':fname', $data['fname']);
            $this->db->bind(':lname', $data['lname']);
            $this->db->bind(':dob', $data['dob']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':phone', $data['phone']);
            $this->db->bind(':residence', $data['residence']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':about', $data['about']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }