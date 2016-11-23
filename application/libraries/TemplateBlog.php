<?php

class TemplateBlog{

		protected $_ci;
		function __construct(){
			$this->_ci = &get_instance();
		}


function views( $template = NULL, $data = NULL ){
	if( $template != NULL )
		$data['_body']	= $this->_ci->load->view($template, $data, TRUE);
		$data['_header']	= $this->_ci->load->view('blog/_layout/header', $data, TRUE);
		$data['_content']	= $this->_ci->load->view('blog/_layout/content', $data, TRUE);
		$data['_sidebar']	= $this->_ci->load->view('blog/_layout/sidebar', $data, TRUE);
		$data['_footer']	= $this->_ci->load->view('blog/_layout/footer', $data, TRUE);
		echo $data['_template']	= $this->_ci->load->view('blog/index', $data, TRUE);
	
}
}

?>