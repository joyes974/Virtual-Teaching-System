<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        session_start();
        class Department extends Controller {
                function Department(){
                        parent::Controller();
                        $this->load->model('department1');
                }        
                function index(){
                        
                        if($this->session->userdata('logged_in'))
                        {
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->department1->department_getall();

                        $this->load->view('department',$data);
                        }
                        else
                        {
                                redirect('home');
                        }
                }
                
                function mithun($department_id='',$status=''){
                        //echo $status;
                        //echo $user_id;
                        if($this->session->userdata('logged_in'))
                        {
                        if($status=='active'){
                                $this->department1->update($department_id);
                        }
                        else{
                        $this->department1->update1($department_id);
                        }                        
                        
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
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
