
<?php

class Call extends Controller {

        function Call()
        {
                parent::Controller();
                $this->load->model('show');
        }

        function index()
        {
                $this->load->view('teacher/call');
        }
}



?>
