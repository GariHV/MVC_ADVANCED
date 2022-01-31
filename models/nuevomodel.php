<?php

class NuevoModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($datos){
        //insertar datos en la DB
        $query = $this->db->connect()->prepare('INSERT INTO EMPLOYEES (ID, NAME, LAST_NAME, EMAIL, GENDER_ID, AGE, PHONE_NUMBER, CITY, STREET_ADDRESS, STATE, POSTAL_CODE) VALUES (: id, :name, :last_name, :email, :gender_id, :age, :phone_number, :city, :street_address, :state, :postal_code)');
        $query->execute(['id' => $datos['id'], 'name' => $datos['name'], 'last_name' => $datos['last_name'], 'email' => $datos['email'], 'gender_id' => $datos['gender_id'], 'age' => $datos['age'], 'phone_number' => $datos['phone_number'], 'city' => $datos['city'], 'street_address' => $datos['street_address'], 'state' => $datos['state'], 'postal_code' => $datos['postal_code']]);
        echo "insertar datos";
    }
}