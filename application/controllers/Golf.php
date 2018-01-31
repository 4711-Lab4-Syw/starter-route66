<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golf extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Show page for George Wyner
	 */
	public function index()
	{
		$this->show(6);
	}

}
