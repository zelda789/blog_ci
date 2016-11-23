<?php

class Dashboard{

		protected $_ci;
		function __construct(){
			$this->_ci = &get_instance();
		}


function views( $template = NULL, $data = NULL ){
	if( $template != NULL )
		$data['_body']	= $this->_ci->load->view($template, $data, TRUE);
		$data['_content']	= $this->_ci->load->view($template, $data, TRUE);
		$data['_dashboard']	= $this->_ci->load->view('dashboard/dashboard', $data, TRUE);
		$data['_css']	= $this->_ci->load->view('dashboard/css', $data, TRUE);
		$data['_sidebar_kiri']	= $this->_ci->load->view('dashboard/sidebar_kiri', $data, TRUE);
		$data['_crud']	= $this->_ci->load->view('dashboard/tables/crud', $data, TRUE);
		$data['_js']	= $this->_ci->load->view('dashboard/js', $data, TRUE);
		$data['_footer']	= $this->_ci->load->view('dashboard/footer', $data, TRUE);
		echo $data['_template']	= $this->_ci->load->view('admin', $data, TRUE);
	
}
}

?>