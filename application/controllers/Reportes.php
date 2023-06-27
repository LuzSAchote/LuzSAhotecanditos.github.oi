<?php
class Reportes extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("Reporte");
  }
  public function presidentes(){
      $data["candidato1"]=$this->Reporte->obtenerPresidentes();
      $this->load->view('header');
      $this->load->view('reportes/presidentes',$data);
      $this->load->view('footer');
  }
  public function nacionales(){
      $data["candidato2"]=$this->Reporte->obtenerNacionales();
      $this->load->view('header');
      $this->load->view('reportes/nacionales',$data);
      $this->load->view('footer');
  }
  public function provinciales(){
      $data["candidato3"]=$this->Reporte->obtenerProvinciales();
      $this->load->view('header');
      $this->load->view('reportes/provinciales',$data);
      $this->load->view('footer');
  }
  public function general(){
      $data["candidato1"]=$this->Reporte->obtenerPresidentes();
      $data["candidato2"]=$this->Reporte->obtenerNacionales();
      $data["candidato3"]=$this->Reporte->obtenerProvinciales();
      $this->load->view('header');
      $this->load->view('reportes/general',$data);
      $this->load->view('footer');
  }
  public function ideologia(){
      $data["candidato4"]=$this->Reporte->obtenerIdeologia();
      $this->load->view('header');
      $this->load->view('reportes/ideologia',$data);
      $this->load->view('footer');
  }
  // public function ideologia(){
  //     $data["candidato4"]=$this->Reporte->obtenerDerecha();
  //     $this->load->view('header');
  //     $this->load->view('reportes/ideologia',$data);
  //     $this->load->view('footer');
  // }
  // public function ideologia(){
  //     $data["candidato4"]=$this->Reporte->obtenerIzquierda();
  //     $this->load->view('header');
  //     $this->load->view('reportes/ideologia',$data);
  //     $this->load->view('footer');
  // }
  // public function ideologia(){
  //     $data["candidato4"]=$this->Reporte->obtenerIdeologia();
  //     $this->load->view('header');
  //     $this->load->view('reportes/ideologia',$data);
  //     $this->load->view('footer');
  // }
}//cierre

 ?>
