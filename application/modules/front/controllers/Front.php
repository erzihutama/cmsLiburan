<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
  $this->load->model('admin/Dbs');
      $this->load->helper('admin/url');
    //Codeigniter : Write Less Do More
  }

  function index()
  { 
    $q['nama_tempat'] = $this->T_tempat_budaya->index();
    $this->load->view('front/header.php');
    $this->load->view('front/index.php');
    $this->load->view('front/footer.php');
    
  }

  

}
