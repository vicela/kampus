<?php
class Berita extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('model_administrator','mod');
        $this->load->library('form_validation');
        $this->load->helper('text');
        parent::isLogin();
    }
    
    function index(){
        $this->load->view('moderator/berita/berita-view');
    }

    
    function getList(){
        $sortname = $this->input->post('sortname')== null ? 'id' : $this->input->post('sortname');
        $sortorder = $this->input->post('sortorder')== null ? 'desc' : $this->input->post('sortorder');
        $page = (!$this->input->post('page')) ? 1 : $this->input->post('page');
        $rp = (!$this->input->post('rp')) ? 10 : $this->input->post('rp');
        $start = (($page-1) * $rp);
        $query = $this->input->post('query');
        $qtype = $this->input->post('qtype');
        $tabel = 'berita_kampus';
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
                    $data->id, $data->judul, word_limiter($data->isi, 10), $data->status == '1' ? 'Published' : 'Unpublished', date('d F Y', strtotime($data->postdate))
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
    
    function addItem(){
        $this->load->view('moderator/berita/addview');
    }
    
    function doAdd(){
        $rules = array(
            array(
                'field' => 'judul',
                'label' => 'Judul',
                'rules' => 'required'
            ),
            array(
                'field' => 'isi',
                'label' => 'Isi',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($rules);
        $this->form_validation->set_error_delimiters('<span style="color:red">','</span>');
        if($this->form_validation->run() == false){
            self::addItem();
        }else {
            $insert = array(
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'status' => $this->input->post('status'),
                'postdate' => $this->input->post('postdate'),
            );
            $this->mod->insert('berita_kampus', $insert);
            redirect('moderator/berita');
        }
    }
    
    function deleteItem(){
        $deleted = $this->mod->delete('berita_kampus', $_POST['item']);
        
        header("Expires: Mon, 26 Jul 2011 05:00:00 GMT" );
        header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
        header("Cache-Control: no-cache, must-revalidate" );
        header("Pragma: no-cache" );
        header("Content-type: text/x-json");
        
        $array = array(
            'total' => $deleted,
        );
        echo json_encode($array);
    }
    
    function editItem($id){
        $data = reset($this->mod->getItemById('berita_kampus', $id)->result());
        $this->load->view('moderator/berita/editview', compact('data'));
    }
    
    function doEdit($id){
        $update = array(
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'status' => $this->input->post('status'),
            'postdate' => $this->input->post('postdate'),
        );
        $this->mod->update('berita_kampus', $id, $update);
        self::index();
    }
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
