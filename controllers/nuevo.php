<?php

class Nuevo extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->render('nuevo/index');
    }

        function registrarEmpleado(){
            $id             = $_POST['id'];
            $name           = $_POST['name'];
            $last_name      = $_POST['last_name'];
            $email          = $_POST['email'];
            $gender_id      = $_POST['gender_id'];
            $age            = $_POST['age'];
            $phone_number   = $_POST['phone_number'];
            $city           = $_POST['city'];
            $street_address = $_POST['street_address'];
            $state          = $_POST['state'];
            $postal_code    = $_POST['postal_code'];

            $this->model->insert(['id' => $id, 'name' => $name, 'last_name' => $last_name, 'email' => $email, 'gender_id' => $gender_id, 'age' => $age, 'phone_number' => $phone_number, 'city' => $city,'phone_number' => $phone_number, 'street_address' => $street_address, 'state' => $state, 'postal_code' => $postal_code]);
            echo "Empleado creado";
        }

}

