<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        session_start();
        class Answer extends Controller {
                function Answer(){
                        parent::Controller();
                        $this->load->model('answer1');
                }
                function index(){

                        if($this->session->userdata('logged_in'))
                        {
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->answer1->answer_getall();
                        $this->load->view('answer',$data);
                        }
                        else
                        {
                                redirect('home');
                        }
                }
                function search(){
                        $s=$_POST['search'];
                        if($s){
                        $data['query']=$this->answer1->search($s);
                         $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $this->load->view('answer',$data);
                        }
                        else{
                        redirect('answer');
                        }
                        }
                function mithun($answer_id='',$status=''){
                        //echo $status;
                        //echo $user_id;
                        if($this->session->userdata('logged_in'))
                        {
                        if($status=='active'){
                                $this->answer1->update($answer_id);
                        }
                        else{
                        $this->answer1->update1($answer_id);
                        }

                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->answer1->answer_getall();
                        $this->load->view('answer',$data);
                        }
                         else
                        {
                                redirect('home');
                        }
                }

                function delete($answer_id=''){
                if($this->session->userdata('logged_in'))
                        {
                        $this->answer1->delete($answer_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $data['query']=$this->answer1->answer_getall();
                        $this->load->view('answer',$data);
                        }
                         else
                        {
                                redirect('home');
                        }
                }
}
?>
