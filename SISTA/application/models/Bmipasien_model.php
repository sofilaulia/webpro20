<?php
class Bmipasien_model extends CI_Model {
    public $id;
    public $tanggal;
    public $pasien;
    public $bmi;

    public function getAll(){
        // select * from pasien
        $query = $this->db->get('bmi_pasien');
        return $query;
        }
       public function findById($id){
        // select * from pasien where id=$id
        $query = $this->db->get_where('bmi_pasien',['id'=>$id]);
        return $query->row();
       }
}