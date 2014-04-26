

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class country_model extends CI_Model {
 
    public function __construct()
  {
    parent::__construct();
  }
  
  
    function getCountries()
  {
      
        
    $idioma = $this->lang->lang();
    
    $this->db->start_cache();
      
    $this->db->distinct();
    $this->db->select('id, Code');
    $this->db->from('countries');
    $this->db->order_by('Code'); 
    
    $this->db->flush_cache();
    
    $query = $this->db->get();
       
    // si hay resultados
    if ($query->num_rows() > 0) {
      // almacenamos en una matriz bidimensional
      foreach($query->result() as $row) {
          $arrDato['id']   = $row->id;
          $arrDato['Code'] = $row->Code;
          $arrDatos[]      = $arrDato;
      }
      $query->free_result();
        

      return $arrDatos;
    }     
  }
}