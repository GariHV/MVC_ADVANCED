<?php

class notFound extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = 'Error en la solicitud o no existe la página';
        $this->view->render('errores/index');
        
    }
}