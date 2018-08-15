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

        $enlacesController = $_GET["action"];

           
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuesta;
        
    }

}

?>