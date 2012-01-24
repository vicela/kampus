<?php
class Model_administrator extends CI_Model {
    private $table = 'administrator';
    
    public function getWhere($user, $pass){
        $table = $this->table;
        return $this->db->get_where($table, array('username' => $user, 'password' => md5($pass)));
        #echo $this->db->last_query();
    }
    
    function getList($tabel, $where, $sort, $sortorder, $start, $rp){
        if($where != null){
            $this->db->like($where);
        }
        $this->db->order_by($sort, $sortorder);
        $this->db->limit($rp, $start);
        return $this->db->get($tabel);
    }
    
    function getRows($tabel, $where){
        if($where != null){
            $this->db->like($where);
        }
        return $this->db->get($tabel)->num_rows();
    }
    
    function insert($table, $data){
        $this->db->insert($table, $data);
    }
    
    function delete($table, $data){
        $datas = rtrim($data,',');
        $this->db->query("DELETE FROM $table WHERE id IN ($datas)");
        return $this->db->affected_rows();
    }
    
    function deleteClinic($table, $data){
        $datas = rtrim($data,',');
        $this->db->query("DELETE FROM $table WHERE id_clinic IN ($datas)");
        return $this->db->affected_rows();
    }
    
    function getItemById($table, $id){
        return $this->db->get_where($table, array('id' => $id));
    }
    
    function getItemByIdClinic($table, $id){
        return $this->db->get_where($table, array('id_clinic' => $id));
    }
    
    function update($table, $id, $data){
        $this->db->where(array('id' => $id));
        $this->db->update($table, $data);
    }
    
    function updateClinic($table, $id, $data){
        $this->db->where(array('id_clinic' => $id));
        $this->db->update($table, $data);
    }
    
    function getGallery(){
        $this->db->order_by('id', 'desc');
        $this->db->select('id, title');
        return $this->db->get('fa_gallery');
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
