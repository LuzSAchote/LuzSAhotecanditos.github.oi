<?php
class Reporte extends CI_Model
{
  function __Contructor()
  {
     parent::__constructor();
  }
  function obtenerPresidentes(){
     $this->db->where('dignidad_can', 'PRESIDENTES');///llamar o consultar datos
     $listadoCandidatos=$this->db->get("candidato");
     if ($listadoCandidatos->num_rows()>0){///validar datos, si hay datos,comprobacion con if y else
         return $listadoCandidatos->result();
     }//no hay datos
     return false;
     }
     //NACIONALES
     function obtenerNacionales(){
        $this->db->where('dignidad_can', 'ASAMBLEISTAS NACIONALES');///llamar o consultar datos
        $listadoCandidatos=$this->db->get("candidato");
        if ($listadoCandidatos->num_rows()>0){///validar datos, si hay datos,comprobacion con if y else
            return $listadoCandidatos->result();
        }//no hay datos
        return false;
        }
      ///provinciales
      function obtenerProvinciales(){
         $this->db->where('dignidad_can', 'ASAMBLEISTAS PROVINCIALES');///llamar o consultar datos
         $listadoCandidatos=$this->db->get("candidato");
         if ($listadoCandidatos->num_rows()>0){///validar datos, si hay datos,comprobacion con if y else
             return $listadoCandidatos->result();
         }//no hay datos
         return false;
         }
         function obtenerIdeologia(){
            $this->db->where('tipo_can', 'IDEOLOGIA');///llamar o consultar datos
            $listadoCandidatos=$this->db->get("candidato");
            if ($listadoCandidatos->num_rows()>0){///validar datos, si hay datos,comprobacion con if y else
                return $listadoCandidatos->result();
            }//no hay datos
            return false;
            }
            
 }
 ?>
