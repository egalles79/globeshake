<?php
	$data['title'] = $title;
	$this->load->view('plantilla/header',$data);
	$this->load->view('plantilla/menu',$data);
	$strPlantilla = ($logged) ? 'content_private' : 'content_public';
	$this->load->view('plantilla/'.$strPlantilla,$data);
	$this->load->view($main_template);
	$this->load->view('plantilla/footer_prev');
	$this->load->view('plantilla/footer');