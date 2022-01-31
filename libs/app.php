<?php
require_once 'controllers/errores.php';

class App{

    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url']: "/main";
        $url = rtrim($url, '/');
        $url = explode ('/', $url);

        /* cuando entramos sin controlador especificado */
        if(empty($url[0])){
            $archivoController = "controllers/main.php";
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }

/*         var_dump($url); */
        $archivoController = "controllers/" . $url[0] . '.php';

        if(file_exists($archivoController)){

            require_once $archivoController;
            /* iniciar controlador */
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            /* si hau un metpdp que se requiere cargar */
            if(isset($url[1])){
                $controller->{$url[1]}();
            }else{
                $controller->render();
            }
        }else{
            $controller = new notFound();
        }


    }
}

?>