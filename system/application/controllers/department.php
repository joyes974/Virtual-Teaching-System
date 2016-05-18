<?php

class Department extends Controller {

        function Department()
        {
                parent::Controller();
                $this->load->model('show');
        }

        function index()        {
        if($this->session->userdata('logged_in'))
           {
             $session_data = $this->session->userdata('logged_in');
             $data['teacher_email'] = $session_data;
             $data['user_email'] = $session_data;
             $data['query']=$this->show->show_all_department();
             $this->load->view('department',$data);
           }
            else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }

        }
}
?>
