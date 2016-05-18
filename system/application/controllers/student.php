<?php

class Student extends Controller {

        function Student()
        {
                parent::Controller();
                 $this->load->model('insert');
                 $this->load->model('update');
        }

        function index()
         {
                if($this->form_validation->run('valid_student'))
                {
                      $data['msg1']=$this->insert->student();
                      $this->load->view('success',$data);
                }
                else{
                $this->load->view('student1');
                }
        }
        function click_student($ran_id='')
        {
                $this->update->click_update_student($ran_id);
                $data['msg']="Update Successfully";
                $this->load->view('welcome_message',$data);
        }
}
?>
