<?php

class Datos extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->empleados = [];

        //echo "<p>Nuevo controlador main</p>";
    }

    function render(){
        $empleados = $this->model->get();
        $this->view->empleados = $empleados;
        $this->view->render('datos/index');

    }


}