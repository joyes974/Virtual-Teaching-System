<?php

class Teacher extends Controller {

        function Teacher()
        {
                parent::Controller();
                 $this->load->model('insert');
                 $this->load->model('update');
        }

        function index()
        {

              if($this->form_validation->run('valid_teacher'))
                {
                      $data['msg']=$this->insert->teacher();
                      $this->load->view('success',$data);
                }
                else{
                $this->load->view('teacher1');
                }
        }
        
        function click_teacher($ran_id='')
        {
                $this->update->click_update_teacher($ran_id);
                $data['msg']="Update Successfully";
                $this->load->view('welcome_message',$data);
        }

}
?>
