<?php
if(!Defined('BASEPATH')) exit('No direct script access allowed');

class pprogram extends CI_Controller {
    
    public function index()
    {
        $this->load->view('viewpprogram');
    }
}