<?php
class Editmenu extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('model_administrator','mod');
        $this->load->library('form_validation');
        parent::isLogin();
    }
    
    function index(){
        $this->load->view('moderator/editmenu/editmenu-view');
    }

    
    function getList(){
        $sortname = $this->input->post('sortname')== null ? 'id' : $this->input->post('sortname');
        $sortorder = $this->input->post('sortorder')== null ? 'desc' : $this->input->post('sortorder');
        $page = (!$this->input->post('page')) ? 1 : $this->input->post('page');
        $rp = (!$this->input->post('rp')) ? 10 : $this->input->post('rp');
        $start = (($page-1) * $rp);
        $query = $this->input->post('query');
        $qtype = $this->input->post('qtype');
        $tabel = 'menu';
        $where = ($query == null) ? null :  array($qtype => $query);
        $total = $this->mod->getRows($tabel, $where);
        $result = $this->mod->getList($tabel, $where , $sortname, $sortorder, $start, $rp)->result();
        
        header("Expires: Mon, 26 Jul 2011 05:00:00 GMT" ); 
        header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
        header("Cache-Control: no-cache, must-revalidate" ); 
        header("Pragma: no-cache" );
        header("Content-type: text/x-json");
        
        foreach($result as $data){
            $json[] = array(
                'id' => $data->id,
                'cell' => array(
                    $data->id, $data->menu, $data->isi
                )
            );	
        }
        $datas = array(
            'rows' => $json,
            'page' => $page,
            'total' => $total
        );
        echo json_encode($datas);
    }
    
    function editItem($id){
        $data = reset($this->mod->getItemById('menu', $id)->result());
        $this->load->view('moderator/editmenu/editview', compact('data'));
    }
    
    function doEdit($id){
        $update = array(
            'isi' => $this->input->post('isi'),
            'menu' => $this->input->post('menu'),
        );
        $this->mod->update('menu', $id, $update);
        self::index();
    }
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
