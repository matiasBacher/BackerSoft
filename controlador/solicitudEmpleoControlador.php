<?php 
require_once ($_SERVER['DOCUMENT_ROOT']."/bootstrap.php");
use modelos\SolicitudEmpleo;
use modelos\Puestos;
class SolicitudEmpleoControlador{
    static function registrarSolicitud(
        string $nombre,
        string $apellido,
        int $dni,
        int $idPuesto,
        int $annosDeExperiencia = null,
        string $experiencia=null){
            global $entityManager;
            $puesto=$entityManager->find(modelos\Puestos::class, $idPuesto);
            $solicitud = new SolicitudEmpleo($nombre, 
                                            $apellido,
                                            $puesto, 
                                            strval($dni), 
                                            $annosDeExperiencia, 
                                            $experiencia );

        try{
            $entityManager->persist($solicitud);
            $entityManager->flush();
            return "ok";
        }
        catch(Exception $e){
            return "error{$e->getMessage()}";

        }
    }
        static function ModificarSolicitud(
                int $id, 
                string $nombre=null,
                string $apellido=null,
                int $dni=null,
                int $idPuesto=null,
                int $annosDeExperiencia = null,
                string $experiencia=null){

                global $entityManager;

                $solicitud=$entityManager->find(SolicitudEmpleo::class, $id);

                if($solicitud===null){
                    return "solNot";
                }

                // Comprobar si $nombre está definido y no es null
                if (isset($nombre)) {
                    $solicitud->setNombre($nombre);
                }

                // Comprobar si $apellido está definido y no es null
                if (isset($apellido)) {
                    $solicitud->setApellido($apellido);
                }

                // Comprobar si $dni está definido y no es null
                if (isset($dni)) {
                    $solicitud->setDni($dni); // No es necesario parse_str aquí, asumiendo que $dni ya es una cadena
                }

                // Buscar el puesto por ID

                if(isset($idPuesto)){

                    $puesto = $entityManager->find(Puestos::class, $idPuesto);



                    // Comprobar si el puesto existe
                    if ($puesto !== null) {
                        $solicitud->setPuestoRequerido($puesto);
                        
                    }
                    else{
                        return "puestoNot";
                    }
                }
                

                // Comprobar si $annosDeExperiencia está definido y no es null
                if (isset($annosDeExperiencia)) {
                    $solicitud->setAnnosDeExperiencia($annosDeExperiencia);
                }

                // Comprobar si $experiencia está definido y no es null
                if (isset($experiencia)) {
                    $solicitud->setOtrosTrabajos($experiencia);
                }
                try{
                    $entityManager->persist($solicitud);
                    $entityManager->flush();
                    return "ok";
                }
                catch(Exception $e){
                    return "error{$e->getMessage()}";

                }


        
    }

    static function ConsultarSolicitudes(?string $fechaMinima = null, ?string $fechaMaxima = null, array $idPuestosRequeridos ): array{
        global $entityManager;

        $fMax=new DateTime($fechaMaxima);
        $fMin=new DateTime($fechaMinima);
        
        $solicitudes=$entityManager->getRepository(SolicitudEmpleo::class)->createQueryBuilder("s")
                                    ->join('s.puestoRequerido', 'p')
                                    ->where('s.fechaCreacion BETWEEN :fechaInicio AND :fechaFin')
                                    ->andWhere('p.id IN (:puestosIds)')
                                    ->setParameters([
                                        "fechaInicio"=>$fMin,
                                        "fechaFin"=>$fMax,
                                        "puestosIds"=>$idPuestosRequeridos])
                                    ->getQuery()
                                    ->getResult();
        return $solicitudes;
                                            
    }
    static function buscarTodo(){
        global $entityManager;
        $solicitudes=$entityManager->getRepository(SolicitudEmpleo::class)->findAll();
        return $solicitudes;
    }
    static function devolverUna($id){
        global $entityManager;
        return $entityManager->find(SolicitudEmpleo::class, $id); 
    }
}