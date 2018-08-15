<?php

class MvcController{

    // Bloque de llamada a la plantilla
    // ________________________________

    public function plantilla(){
        include "views/template.php";
    }

    //Bloque de interaccion del usuario
    // ________________________________
    public function enlacesPaginasController(){

        if(isset($_GET["action"])){

        $enlacesController = $_GET["action"];

    }

    else {

        $enlacesController = "index";
    }

           
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
        
    }

}

?>