<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        session_start();
        Class Add_department extends Controller
        {
                function Add_department(){
                        parent::Controller();
                        $this->load->model('department1');
        }
        function index(){
                        
                if($this->session->userdata('logged_in'))
                {
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['id'] = $session_data['id'];
                $this->load->helper('form');
                $data['query']=$this->department1->select_parent_id();
                $this->load->view('add_department',$data);
                }
                else
                {
                        redirect('home');
                }
                }
                function a($department_id=''){
                        
                        if($this->session->userdata('logged_in'))
                        {
                          if($department_id){
                                        //echo $admin_id;
                                        $data['name']='';
                                        $this->department1->entry_update($department_id);
                        }else{
                                $this->department1->entry_insert();
                        }
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $data['query']=$this->department1->department_getall();
                        $this->load->view('department',$data);
                }
                else
                {
                        redirect('home');
                }
                }
                function edit($id='',$parent_id='',$name='',$status=''){
                 if($this->session->userdata('logged_in'))
                        {
                        if($id)
                        $data['post_id']=$id;
                        $data['parent_id']=$parent_id;
                        $data['name']=$name;
                        $data['status']=$status;
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $this->load->view('add_department',$data);
                }
                else
                {
                        redirect('home');
                }
                }
                function delete($department_id=''){
                if($this->session->userdata('logged_in'))
                        {
                        $this->department1->delete($department_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $data['query']=$this->department1->department_getall();
                        $this->load->view('department',$data);
                        }
                        else
                {
                        redirect('home');
                }
                }
}
?>
