<?php
/**
 * Created by PhpStorm.
 * User: Lel
 * Date: 2018-01-31
 * Time: 2:10 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Juliet extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Return JSON Data
     */
    public function index()
    {
        $record = $this->quotes->get(1);
        header("Content-type: application/json");
        echo json_encode($record);
    }


}