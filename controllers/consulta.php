<?php

class Consulta extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->empleados = [];

        //echo "<p>Nuevo controlador main</p>";
    }

    function render(){
        $empleados = $this->model->get();
        $this->view->empleados = $empleados;
        $this->view->render('consulta/index');

    }

    function getEmployee($getId = null){
        $id = $getId[0];
        $employee= $this->model->getEmployeeId($id);
        $this->view->employee = $employee;


        $this->view->render( 'consulta/index');



    }

    function updateEmployee($getId){
        $id = $getId[0];
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

        if($this->model->update([
        'id'             => $getId[0],
        'name'           => $name,
        'last_name'      => $last_name,
        'email'          => $email,
        'gender_id'      => $gender_id,
        'age'            => $age,
        'phone_number'   => $phone_number,
        'city'           => $city,
        'street_address' => $street_address,
        'state'          => $state,
        'postal_code'    => $postal_code])){
            // update employee

        $this->view->render('consulta/index');
        }else{
            //error
        }
    }

    function deleteEmployee($getId){
        echo $getId;
        $id= $getId[0];

        // if($this->model->delete($id)){
        //     echo 'deleted';
        // }else{
        //     echo 'Try Again';
        // }
        // $this->view->render('main/index');
        $this->view->render( 'ayuda/index');
    }

}