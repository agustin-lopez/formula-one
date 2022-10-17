<?php

class authModel {

    private $db;

    public function __construct() {

        $this->db = new PDO('mysql:host=localhost;'.'dbname=formula1;charset=utf8', 'root', '');

    }

    public function getUserByEmail($email) {

        $query = $this->db->prepare("select * from users where email = ?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);

    }

}
