<?php
Class App_module extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('app_module/app_module/index');
    }
}