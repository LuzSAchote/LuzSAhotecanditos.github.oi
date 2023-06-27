<?php
   class Nuevo extends CI_Model
   {
    function __Contructor()
    {
        parent::__constructor();
    }
    ////funcion para insertar instructor de mysql
    function insertar($datos){
        return $this->db->insert("candidato",$datos);
    }

    //funcion para consultar instructores
    function obtenerTodos(){
        $listadoNuevos=$this->db->get("candidato");///llamar o consultar datos
        if($listadoNuevos->num_rows()>0){///validar datos, si hay datos,comprobacion con if y else
            return $listadoNuevos;
        }else{//no hay datos
            return false;
        }
    }
    ////borrar instructores
    function borrar($id_can){
        $this->db->where("id_can",$id_can);
        if($this->db->delete("candidato")){
            return true;
        } else{
            return false;
        }
    }

   }//cire de la clase

?>
