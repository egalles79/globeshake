
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class verificar_mail extends controlador {
		$data = $this->load_page();
        $data['email'] = $email;
        $data['main_template']  = 'users/verificar_mail';
        //$data['title'] = lang('user.verificar_mail');
        //$data['description'] = '';        
        $this->load->view('main_template', $data); 
}