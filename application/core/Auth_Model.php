<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth_Model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		echo "ini adalah model dari auth model";
	}
}