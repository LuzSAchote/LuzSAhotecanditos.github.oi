<?php
   class Nuevos extends CI_Controller
   {
    // cosntructor
    function __construct()
    {

        parent::__construct();
        $this->load->model('Nuevo');

    }
    // renderizacion de la vista
    public function candidatos(){
        $this->load->view('header');
        $this->load->view('nuevos/candidatos');
        $this->load->view('footer');
    }
    public function index(){
        $data['nuevos']=$this->Nuevo->obtenerTodos();
        $this->load->view('header');
        $this->load->view('nuevos/index',$data);
        $this->load->view('footer');
    }
    public function normativas(){
        $this->load->view('header');
        $this->load->view('nuevos/normativas');
        $this->load->view('footer');
    }
    //datos a cargar
    public function guardar(){
            $datosNuevoCandidato=array(
                "dignidad_can"=>$this->input->post('dignidad_can'),
                "tipo_can"=>$this->input->post('tipo_can'),
                "cedula_can"=>$this->input->post('cedula_can'),
                "apellidos_can"=>$this->input->post('apellidos_can'),
                "nombres_can"=>$this->input->post('nombres_can'),
                "movimiento_can"=>$this->input->post('movimiento_can'),
                "latitud_can"=>$this->input->post('latitud_can'),
                "longitud_can"=>$this->input->post('longitud_can'),
                "propuestas_can"=>$this->input->post('propuestas_can'),
                "compromiso_can"=>$this->input->post('compromiso_can')
            );
            if($this->Nuevo->insertar($datosNuevoCandidato)){///!para un error
                redirect('nuevos/index');
            }else{
                echo "<h1>ERROR AL INSERTAR</h1>";///para poner un error
            }
        }
        public function eliminar($id_can){
            if($this->Nuevo->borrar($id_can)){
                redirect('nuevos/index');
            }else{
                echo "ERROR AL BORRAR:(";
            }
        }


   }//no borrar es el cierre de la clase
?>
