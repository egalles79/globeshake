

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sectors_model extends CI_Model {
 
    public function __construct()
  {
    parent::__construct();
  }
  
  
    function getSectors()
  {
      
        
    $idioma = $this->lang->lang();
    
    $this->db->start_cache();
      
    $this->db->distinct();
    $this->db->select('id, Name');
    $this->db->from('sectors');
    $this->db->order_by('id'); 
    
    $this->db->flush_cache();
    
    $query = $this->db->get();
       
    // si hay resultados
    if ($query->num_rows() > 0) {
      // almacenamos en una matriz bidimensional
      foreach($query->result() as $row) {
          $arrDato['id']   = $row->id;
          $arrDato['Name'] = $row->Name;
          $arrDatos[]      = $arrDato;
      }
      $query->free_result();
        

      return $arrDatos;
    }     
  }
}