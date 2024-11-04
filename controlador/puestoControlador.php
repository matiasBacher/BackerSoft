
<?php 
require_once ($_SERVER['DOCUMENT_ROOT']."/bootstrap.php");
use modelos\SolicitudEmpleo;
use modelos\Puestos;
class PuestosControlador{
    static function devolverTodos(){
        global $entityManager;
        $retorno = $entityManager->getRepository(Puestos::class)->findAll();
        return $retorno;

    }
}