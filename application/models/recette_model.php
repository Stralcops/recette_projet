<?php
class recette_model extends CI_Model {

    public function get_recette() {
      $query=  $this->db->get("t_recette");
        return $query->result_array();
        }
}
 ?>
