<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        session_start();
        class Add_admin extends Controller {
                function Add_admin(){
                        parent::Controller();
                        $this->load->model('user');
                    }
                function index(){

                if($this->session->userdata('logged_in'))
                {
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['id'] = $session_data['id'];
                $this->load->helper('form');
                $this->load->view('add_admin',$data);
                }
                else
                {
                        redirect('home');
                }
                }
                function a($admin_id=''){
                
                        if($this->session->userdata('logged_in'))
                        {
                        if($admin_id){
                                        //echo $admin_id;
                                        $this->user->entry_update($admin_id);
                        }else{
                                $this->user->entry_insert();
                        }
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $data['query']=$this->user->admin_getall();
                        $this->load->view('admin',$data);
                }
                else
                {
                        redirect('home');
                }
                }
                function edit($id=''){
                
                        if($this->session->userdata('logged_in'))
                        {
                        if($id)
                        $sql = "select * from admin where admin_id=".$id;
                        $sql_query = $this->db->query($sql);
                        $rows = $sql_query->result_array();
                        foreach($rows as $val){
                        $data['post_id']=$val['admin_id'];
                        $data['name']=$val['admin_name'];
                        $data['password']=$val['admin_password'];
                        $data['email']=$val['admin_email'];
                                }
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $this->load->view('add_admin',$data);
                }
                else
                {
                        redirect('home');
                }
                }
                    
                function delete($admin_id=''){
                
                        if($this->session->userdata('logged_in'))
                        {
                        $this->user->delete($admin_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $data['query']=$this->user->admin_getall();
                        $this->load->view('admin',$data);
                        }
                        else
                {
                        redirect('home');
                }
                }
        }
?>
