<?php

class Contact extends Controller {

        function Contact()
        {
                parent::Controller();
                $this->load->model('insert');
        }

        function index()
        {

                $this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
                $this->form_validation->set_rules('email_address', 'Email Address','required|valid_email|xss_clean');
                $this->form_validation->set_rules('subject', 'Subject', 'required|xss_clean');
                $this->form_validation->set_rules('message', 'Message', 'required|xss_clean');

                if($this->form_validation->run() == FALSE)
                {
                $this->load->view('contact');
                }
                else
                {
				mail();
                $data['name'] = $this->input->post('name');
                $data['email'] = $this->input->post('email_address');
                $data['subject'] = $this->input->post('subject');
                $data['message'] = $this->input->post('message');
                $data['msg']="Email Successfully Sent";
                $this->load->view('welcome_message',$data);
        }
        }

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
