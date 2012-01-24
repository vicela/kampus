<?php
class Model_menu extends CI_Model {
    public function getWhere($where){
        $this->db->where($where);
        return $this->db->get('menu');
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
