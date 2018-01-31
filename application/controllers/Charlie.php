<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Charlie controller class
class Charlie extends Application
{

    function __construct()
    {
        parent::__construct();
    }
    

    // subcontroller brown inside charlie
    public function brown()
    {
        $this->show(3);
    }

}
