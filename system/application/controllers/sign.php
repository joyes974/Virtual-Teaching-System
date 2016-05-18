<?php

class Sign extends Controller {

        function Sign()
        {
                parent::Controller();

        }

        function index()
        {
                $this->load->view('login');

        }
        
        function forget_password()
        {
                $this->load->view('forget_password');
        }
}
?>
