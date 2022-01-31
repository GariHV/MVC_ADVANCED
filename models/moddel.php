<?php

class ModifyDelete extends Model{

    public function delEmployee($id){

        $query = $this->db->connect()->query("DELETE FROM employees where id= $id");
        try{
            $query-> execute();
            $employees= $query->fetchAll();
            return $employees;
        } catch(PDOException $e){
            return[];
        }
    }
}