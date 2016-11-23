<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {


	public function index()
	{
		$data['module'] = 'blog';
		
		$this->templateblog->views('blog/index', $data);

	}


}

?>