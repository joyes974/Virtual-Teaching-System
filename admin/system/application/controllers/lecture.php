<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        session_start();
        class Lecture extends Controller {
                function Lecture(){
                        parent::Controller();
                        $this->load->model('lecture1');
                }        
                function index(){
                        
                        if($this->session->userdata('logged_in'))
                        {
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->lecture1->lecture_getall();
                        $this->load->view('lecture',$data);
                        }
                        else
                        {
                                redirect('home');
                        }
                }
                
                function mithun($lecture_id='',$status=''){
                        //echo $status;
                        //echo $user_id;
                        if($this->session->userdata('logged_in'))
                        {
                        if($status=='active'){
                                $this->lecture1->update($lecture_id);
                        }
                        else{
                        $this->lecture1->update1($lecture_id);
                        }

                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->lecture1->lecture_getall();
                        $this->load->view('lecture',$data);
                        }
                        else
                        {
                                redirect('home');
                        }
                }
                function search(){
                        $s=$_POST['search'];
                        if($s){
                        $data['query']=$this->lecture1->search($s);
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $this->load->view('lecture',$data);
                        }
                        else{
                        redirect('lecture');
                        }
                        }

                function delete($lecture_id=''){
                if($this->session->userdata('logged_in'))
                        {
                        $this->lecture1->delete($lecture_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $data['query']=$this->lecture1->lecture_getall();
                        $this->load->view('lecture',$data);
                        }
                        else
                        {
                                redirect('home');
                        }
                }
}
?>
