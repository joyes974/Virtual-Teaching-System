<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        session_start();
        class Teacher extends Controller {
                function Teacher(){
                        parent::Controller();
                        $this->load->model('teacher1');
                }        
                function index(){
                        
                        if($this->session->userdata('logged_in'))
                        {
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->teacher1->teacher_getall();
                        $this->load->view('teacher',$data);
                        }
                        else
                        {
                                redirect('home');
                        }
                }
                function search(){
                        $s=$_POST['search'];
                        if($s){
                        $data['query']=$this->teacher1->search($s);
                         $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $this->load->view('teacher',$data);
                        }
                        else{
                        redirect('teacher');
                        }
                        }
                function mithun($teacher_id='',$status=''){
                        //echo $status;
                        //echo $user_id;
                        if($this->session->userdata('logged_in'))
                        {
                        if($status=='active'){
                                $this->teacher1->update($teacher_id);
                        }
                        else{
                        $this->teacher1->update1($teacher_id);
                        }                        
                        
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->teacher1->teacher_getall();
                        $this->load->view('teacher',$data);
                        }
                        else{
                        redirect('teacher');
                        }
                        }
                function delete($teacher_id=''){
                if($this->session->userdata('logged_in'))
                        {
                        $this->teacher1->delete($teacher_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $data['query']=$this->teacher1->teacher_getall();
                        $this->load->view('teacher',$data);
                        }
                        else{
                        redirect('teacher');
                        }
                        }
}
?>
