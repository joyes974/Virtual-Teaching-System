<?php

class Login extends Controller {

        function Login()
        {
                parent::Controller();
                $this->load->model('valid_user');
        }

        function index() {
                $data['msg']='';
                if($this->form_validation->run('valid_login'))
                {

                                  if($_POST['type']=='1')
                                  {
                                                 if($this->valid_user->teacher_valid_user())
                                                 {
                                                  redirect('teacher_home');
                                                  }else{
                                                                 $data['msg']='Useremail and password invalid';
                                                        }
                                   }
                                if($_POST['type']=='2'){
                                                if($this->valid_user->user_valid_user()){
                                                        redirect('user_home');
                                                                }else{
                                                                        $data['msg']='Username and password invalid';
                                                                }
                                                          }

                }
                $this->load->view('login',$data);
   }
   
   function forget_password()
   {
        if($this->form_validation->run('valid_forget_password'))
                {
                        //redirect();
                }
                $this->load->view('forget_password');
   }

}
?>
