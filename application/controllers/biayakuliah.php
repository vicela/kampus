<?php
class Biayakuliah extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('model_menu','model');
    }
    
    public function index(){
        $biaya= reset($this->model->getWhere(array('menu' => 'biaya_kuliah'))->result());
        $syarat = reset($this->model->getWhere(array('menu' => 'syarat_pendaftaran'))->result());
        $this->load->view('biayakuliah-view', compact('biaya','syarat'));
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
