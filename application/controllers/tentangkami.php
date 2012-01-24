<?php
class Tentangkami extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('model_menu','model');
    }
    
    public function index(){
        $data = reset($this->model->getWhere(array('menu' => 'sambutan_rektor'))->result());
        $this->load->view('tentangkami-view', compact('data'));
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
