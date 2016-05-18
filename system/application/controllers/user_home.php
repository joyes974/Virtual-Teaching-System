<?php

class User_home extends Controller {

        function User_home()
        {
                parent::Controller();
                $this->load->model('show');
                $this->load->model('update');
        }

        function index()        {
                if($this->session->userdata('logged_in'))
           {
             $session_data = $this->session->userdata('logged_in');
             $data['user_email'] = $session_data;
             $this->load->view('user/user_home',$data);
           }
            else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }

        }

        function user_info()        {
        if($this->session->userdata('logged_in'))
           {
             $session_data = $this->session->userdata('logged_in');
             $data['user_email'] = $session_data;
             $data['query']=$this->show->show_user($session_data);
            $this->load->view('user/user_info',$data);
           }
            else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }

        }
        
        function edit(){
            if($this->session->userdata('logged_in'))
             {
             $session_data = $this->session->userdata('logged_in');
             $sql="select * from user where user_email='".$session_data."'";
             $sql_query = $this->db->query($sql);
             $rows = $sql_query->result_array();
             foreach($rows as $val){
                        $data['user_id']=$val['user_id'];
                        $data['user_name']=$val['user_name'];
                        $data['user_email']=$val['user_email'];
                        $data['user_password']=$val['user_password'];
                        $data['user_occupation']=$val['user_occupation'];
                        $data['user_country']=$val['user_country'];
                        }
                $data['user_email1'] = $session_data;
                $this->load->view('user/edit_user',$data);
        }
        else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }

        }
        
        function update(){

                        $session_data = $this->session->userdata('logged_in');
                        $data['query']=$this->update->user_update($session_data);
                        redirect('user_home/user_info', 'refresh');

                   }
                   
         function show_all_user(){
         if($this->session->userdata('logged_in'))
             {
               $session_data = $this->session->userdata('logged_in');
               $data['user_email'] = $session_data;
               $data['query']=$this->show->show_all_user();
               $this->load->view('user/show_all_user',$data);
        }
        else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }

        }
}
?>
