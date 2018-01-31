<?php
/**
 * Created by PhpStorm.
 * User: Piyotr-K
 * Date: 2018-01-31
 * Time: 11:47 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Force extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Homepage for our app
     */
    public function index()
    {
        // Show index 4
        $this->show(4);
    }

}
