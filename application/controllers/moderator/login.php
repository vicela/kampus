<?php
class Login extends CI_Controller{
    
    private $msgNull = "Please fill all the field";
    private $msgWrong = "Wrong Username or Password";
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('model_administrator','model');
    }
    
    function index(){
        $this->load->view('moderator/include/login-page');
    }
    
    function doLogin(){
       $user        = $this->input->post('username'); 
       $password    = $this->input->post('password');
       
       if (!$user and !$password){
            $pesan = $this->msgNull;
            $this->load->view('moderator/include/login-page',  compact('pesan'));	
       } else {
           if ($this->model->getWhere($user, $password)->num_rows() > 0){
               $result = reset($this->model->getWhere($user, $password)->result());                  
               $this->session->set_userdata('username',$result->username);
               redirect('moderator/administrator');
           } else {
               $pesan = $this->msgWrong;
               $this->load->view('moderator/include/login-page',  compact('pesan'));	
           }
       }
    }
    
    function doLogout(){
        $this->session->sess_destroy();
        redirect('moderator/login');
	}
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
