<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        session_start();
        class Question extends Controller {
                function Question(){
                        parent::Controller();
                        $this->load->model('question1');
                }
                function index(){

                        if($this->session->userdata('logged_in'))
                        {
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->question1->question_getall();
                        $this->load->view('question',$data);
                        }
                        else
                        {
                                redirect('home');
                        }
                }
                function search(){
                        $s=$_POST['search'];
                        if($s){
                        $data['query']=$this->question1->search($s);
                         $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $this->load->view('question',$data);
                        }
                        else{
                        redirect('question');
                        }
                        }
                function mithun($question_id='',$status=''){
                        //echo $status;
                        //echo $user_id;
                        if($this->session->userdata('logged_in'))
                        {
                        if($status=='active'){
                                $this->question1->update($question_id);
                        }
                        else{
                        $this->question1->update1($question_id);
                        }

                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->question1->question_getall();
                        $this->load->view('question',$data);
                        }
                         else
                        {
                                redirect('home');
                        }
                }

                function delete($question_id=''){
                if($this->session->userdata('logged_in'))
                        {
                        $this->question1->delete($question_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $data['query']=$this->question1->question_getall();
                        $this->load->view('question',$data);
                        }
                         else
                        {
                                redirect('home');
                        }
                }
}
?>
