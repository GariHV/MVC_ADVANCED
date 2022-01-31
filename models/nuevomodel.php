<?php

class NuevoModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($datos){
        //insertar datos en la DB
        try{
            $query = $this->db->connect()->prepare('INSERT INTO employees (id, name , last_name , gender_id, email, age, phone_number, city, street_address, state, postal_code) values (:id, :name , :last_name , :gender_id, :email, :age, :phone_number, :city, :street_address, :state, :postal_code)');
            $query->execute(['id' => $datos['id'], 'name' => $datos['name'], 'last_name' => $datos['last_name'], 'email' => $datos['email'], 'gender_id' => $datos['gender_id'], 'age' => $datos['age'], 'phone_number' => $datos['phone_number'], 'city' => $datos['city'], 'street_address' => $datos['street_address'], 'state' => $datos['state'], 'postal_code' => $datos['postal_code']]);
            return true;
        }catch(PDOException $e){
            echo "Email duplicado";
        }
    }
}



public function delEmployee()