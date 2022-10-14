<?php
include 'php/classes/model/database.php';
class Test extends Database {
    public function getDishes()
    {

        $sql = "SELECT * FROM menu;";
        $stmt = $this->Connect()->query($sql);
        return $stmt->fetchAll();
        
    }

    public function getWetDishes()
    {

        $sql = "SELECT * FROM menu WHERE type='món nước';";
        $stmt = $this->Connect()->query($sql);
        return $stmt->fetchAll();
        
    }
    public function getDryDishes()
    {

        $sql = "SELECT * FROM menu WHERE type='món khô';";
        $stmt = $this->Connect()->query($sql);
        return $stmt->fetchAll();
        
    }
    public function getDrinks()
    {

        $sql = "SELECT * FROM menu WHERE type='đồ uống';";
        $stmt = $this->Connect()->query($sql);
        return $stmt->fetchAll();
        
    }
}