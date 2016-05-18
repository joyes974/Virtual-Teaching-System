<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
         
        class Login extends Controller {
         
         function construct()
         {
                   parent::construct();
         }
         
         function index()
         {
                       
           $this->load->helper(array('form', 'url'));
           $this->load->view('login_view');
             
         }
 }         
?>
