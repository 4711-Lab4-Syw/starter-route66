<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Able controller class
class Able extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Index function for able class
     */
    public function index()
    {
        $this->show(1);
    }

}
