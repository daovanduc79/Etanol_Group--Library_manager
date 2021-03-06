<?php


namespace Model;

use PDO;
class StudentsDB extends LibraryDB
{
    public function __construct()
    {
        parent::__construct();
        $this->nameTable = 'students';
    }

    function add($student) {
        $id = $student->getId();
        $name = $student->getName();
        $birthDay = $student->getBirthDay();
        $address = $student->getAddress();
        $email = $student->getEmail();
        $phone = $student->getPhone();
        $image = $student->getImage();

        $sql = 'INSERT INTO students (id,name,birthday,address,email,phone,image) values (?,?,?,?,?,?,?);';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $name);
        $stmt->bindParam(3, $birthDay);
        $stmt->bindParam(4, $address);
        $stmt->bindParam(5, $email);
        $stmt->bindParam(6, $phone);
        $stmt->bindParam(7, $image);

        $stmt->execute();
    }

    function search($keyword) {
        $sql = "SELECT * FROM $this->nameTable WHERE id LIKE '%$keyword%' OR name LIKE '%$keyword%' OR email LIKE '%$keyword%' OR status LIKE '%$keyword%';";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}