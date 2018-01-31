<?php
/**
 * Created by PhpStorm.
 * User: Lel
 * Date: 2018-01-31
 * Time: 12:21 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');


class Juliet extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Juliet controller
     */
    public function index()
    {
        $record = $this->quotes->get(1);
        header("Content-type: application/json");
        echo json_encode($record);
    }
}