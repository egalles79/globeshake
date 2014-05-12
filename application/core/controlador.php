<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class controlador extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();  //make sure you extend the parent constructor

        //Your code:
        if( ! $this->session->userdata('lang') )
            $this->session->set_userdata('lang','es');
    }


    public function load_page()
    {

        $this->load->helper('language');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->lang->load('user');
        $this->lang->load('country');
        $this->lang->load('menu');
        
		$data['keywords'] = 'keywords';

        $data['logged'] = $this->flexi_auth->is_logged_in();
        $data['email'] = $this->flexi_auth->get_user_identity();
        $data['user'] = $this->flexi_auth->get_data($this->flexi_auth->get_user_id());
        $data['type'] = 'business';

        //$data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
        
/*
        $this->load->library('session');
        
        $sessio = $this->session->userdata('flexi_auth');
        
        if ($sessio['logged_in_via_password']) 
        {
            $data['logged'] = true;
            $data['user'] = $sessio['user_identifier'];

            if ($sessio['admin']) 
            {
                $data['admin'] = true;
            } else 
            {
                $data['admin'] =false;
            }                
        }
        else 
        {
            $data['user'] = "";
            $data['logged'] = false;
            $data['admin'] =false;
        }*/
        return $data;
    }

    public function redirect($pagina) 
    {
        redirect(base_url().$this->lang->lang()."/".$pagina);
    }


    function decrypt($string, $key) {
       $result = '';
       $string = urldecode($string);
       for($i=0; $i<strlen($string); $i++) {
          $char = substr($string, $i, 1);
          $keychar = substr($key, ($i % strlen($key))-1, 1);
          $char = chr(ord($char)-ord($keychar));
          $result.=$char;
       }
       return $result;
    }
}