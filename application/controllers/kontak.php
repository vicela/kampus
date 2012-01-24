<?php
class Kontak extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('kontak-view');
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
