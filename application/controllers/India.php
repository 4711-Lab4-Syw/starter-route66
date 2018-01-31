<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class India extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Displays the special image
	 */
	public function index()
	{
		$source = '../data/image.png';

        // set the mime type for that image (jpeg, png, etc)
        header("Content-type: image/png");
        header('Content-Disposition: inline');
        readfile($source); // dish it
	}

}
