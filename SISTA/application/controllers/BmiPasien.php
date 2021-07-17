<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class BmiPasien extends CI_Controller {

//  public function index()
//  {
//       $this->load->model('pasien_model','bmipasien1');
//       $this->bmipasien1->id=1;
//       $this->bmipasien1->tanggal='2021-04-11';
//       $this->bmipasien1->pasien='Faiz Fikri';
//       $this->bmipasien1->bmi=$bmi;
//       $this->bmipasien1->pasien = $this->pasien1;
//       $this->bmipasien1->bmi = $this->bmi1;
//       $this->bmipasien1->bmi->nilai = $this->bmi1->nilaiBMI();
//       $this->bmipasien1->bmi->status = $this->bmi1->statusBMI();


//       $this->load->model('pasien_model','bmipasien2');
//       $this->bmipasien2->id=2;
//       $this->bmipasien2->tanggal='2021-04-12';
//       $this->bmipasien2->pasien='Pandan Wangi';
//       $this->bmipasien2->bmi=$bmi;
      
//       $this->load->model('pasien_model','bmipasien3');
//       $this->bmipasien3->id=3;
//       $this->bmipasien3->tanggal='2021-04-12';
//       $this->bmipasien3->pasien='Riyadi Salim';
//       $this->bmipasien3->bmi=$bmi;

//       $list_bmipasien = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];
//       $data['list_bmipasien']=$list_bmipasien;

//       $this->load->view('header');
//       $this->load->view('bmi/index',$data);
//       $this->load->view('footer');
//    }
   public function list() {
      $this->load->model('m_bmi_pasien');
      $data['bmi_pasien'] = $this->m_bmi_pasien->getAll();

      $this->load->view('header');
      $this->load->view('bmi_pasien/list', $data);
      $this->load->view('footer');
   }

   public function view($id) {
      $this->load->model('m_bmi_pasien');
      $this->load->model('m_pasien');
      $data['bmi_pasien'] = $this->m_bmi_pasien->findById($id);
      $data['pasien'] = $this->m_pasien->findById($data['bmi_pasien']->pasien_id);

      $this->load->view('header');
      $this->load->view('bmi_pasien/view', $data);
      $this->load->view('footer');
   }

}