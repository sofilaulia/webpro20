<?php
defined('BASEPATH') OR exit('No direct script access allowe
d');
class Bmi extends CI_Controller {

 public function index()
 {
    
   // data pasien 1
   $this->load->model('bmi_model','bmi1');
   $this->bmi1->tinggi=169;
   $this->bmi1->berat=64.2;

   $this->load->model('bmipasien_model','pasien1');
   $this->pasien1->id=1;
   $this->pasien1->kode='010001';
   $this->pasien1->nama='Faiz Fikri';
   $this->pasien1->tmp_lahir='Bogor';
   $this->pasien1->tgl_lahir='11-02-1999';
   $this->pasien1->gender='L';

   $this->load->model('pasien_model','bmipasien1');
   $this->bmipasien1->id=1;
   $this->bmipasien1->tanggal='2021-04-11';
   $this->bmipasien1->pasien = $this->pasien1;
   $this->bmipasien1->bmi = $this->bmi1;
   $this->bmipasien1->bmi->nilai = $this->bmi1->nilaiBMI();
   $this->bmipasien1->bmi->status = $this->bmi1->statusBMI();

   // data pasien 2
   $this->load->model('bmi_model','bmi2');
   $this->bmi2->tinggi=152;
   $this->bmi2->berat=40.2;

   $this->load->model('bmipasien_model','pasien2');
   $this->pasien2->id=2;
   $this->pasien2->kode='020001';
   $this->pasien2->nama='Pandan Wangi';
   $this->pasien2->tmp_lahir='Bandung';
   $this->pasien2->tgl_lahir='08-04-2000';
   $this->pasien2->gender='P';
   
   $this->load->model('pasien_model','bmipasien2');
   $this->bmipasien2->id=2;
   $this->bmipasien2->tanggal='2021-04-12';
   $this->bmipasien2->pasien = $this->pasien2;
   $this->bmipasien2->bmi = $this->bmi2;
   $this->bmipasien2->bmi->nilai = $this->bmi2->nilaiBMI();
   $this->bmipasien2->bmi->status = $this->bmi2->statusBMI();

   // data pasien 3
   $this->load->model('bmi_model','bmi3');
   $this->bmi3->tinggi=159;
   $this->bmi3->berat=90.8;

   $this->load->model('bmipasien_model','pasien3');
   $this->pasien3->id=3;
   $this->pasien3->kode='030001';
   $this->pasien3->nama='Riyadi Salim';
   $this->pasien3->tmp_lahir='Jakarta';
   $this->pasien3->tgl_lahir='24-06-1998';
   $this->pasien3->gender='L';

   $this->load->model('pasien_model','bmipasien3');
   $this->bmipasien3->id=3;
   $this->bmipasien3->tanggal='2021-04-12';
   $this->bmipasien3->pasien = $this->pasien3;
   $this->bmipasien3->bmi = $this->bmi3;
   $this->bmipasien3->bmi->nilai = $this->bmi3->nilaiBMI();
   $this->bmipasien3->bmi->status = $this->bmi3->statusBMI();

   $list_bmi = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];
   $data['list_bmi']=$list_bmi;

   $this->load->view('header');
   $this->load->view('bmi/index',$data);
   $this->load->view('footer');
 }
}