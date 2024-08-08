<?php
namespace App\Models;
class Student extends BaseModel{
    protected $list = 'sinh_vien';
    public function getListStudent() {
        $sql = "select * from $this->list";
        $this->setQuery($sql);
        return $this->loadAllRows([],$sql);
    }
    public function insertData($id, $name, $year_of_birth, $phone_number){
        $sql = "INSERT INTO $this->list VALUES (?, ?, ?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $year_of_birth, $phone_number]);
    }
    public function idStudent($id){
        $sql = "SELECT * FROM $this->list where id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function updateStudent($id, $name, $year_of_birth, $phone_number){
        $sql = "UPDATE $this->list SET `name` = ?, `year_of_birth`= ?, `phone_number`= ? WHERE `id`= ? ";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $year_of_birth, $phone_number]);
    }
    public function deleteStudent($id){
        $sql = "DELETE FROM $this->list WHERE `id` = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
?>