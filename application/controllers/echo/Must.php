<?php
/**
 * Created by PhpStorm.
 * User: Lel
 * Date: 2018-01-31
 * Time: 11:59 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Must extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Echo Controller
     */
    public function wehave()
    {
        // Show index 5
        $this->show(5);
    }
}