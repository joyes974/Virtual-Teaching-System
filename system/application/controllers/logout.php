<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        session_start();
class Logout extends Controller {

        function Logout()
        {
                parent::Controller();
                //$this->load->model('show');
        }

        function index()        {
           $this->session->unset_userdata('logged_in');
           session_destroy();
           redirect('welcome', 'refresh');
        }
        
        function logout1(){

        }
}
?>
