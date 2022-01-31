<?php
include_once 'models/empleado.php';
class DatosModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function get(){
        $items = [];
        try{
            $query = $this->db->connect()->query("SELECT*FROM employees");
            while($row = $query->fetch()){
                $item = new Empleado();
                    $item->id             = $row['id'];
                    $item->name           = $row['name'];
                    $item->last_name      = $row['last_name'];
                    $item->email          = $row['email'];
                    $item->gender_id      = $row['gender_id'];
                    $item->age            = $row['age'];
                    $item->phone_number   = $row['phone_number'];
                    $item->city           = $row['city'];
                    $item->street_address = $row['street_address'];
                    $item->state          = $row['state'];
                    $item->postal_code    = $row['postal_code'];
                    array_push($items, $item);
                }
                echo json_encode($items);
                return $items;
        }catch(PDOException $e){
            return [];
        }
    }
}

//echo 'pepe';