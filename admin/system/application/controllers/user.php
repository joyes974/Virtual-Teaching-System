<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        session_start();
        class User extends Controller {
                function User(){
                        parent::Controller();
                        $this->load->model('user1');
                }        
                function index(){
                        
                        if($this->session->userdata('logged_in'))
                        {
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->user1->user_getall();
                        $this->load->view('user',$data);
                        }
                        else
                        {
                                redirect('home');
                        }
                }
                function search(){
                        $s=$_POST['search'];
                        if($s){
                        $data['query']=$this->user1->search($s);
                         $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $this->load->view('user',$data);
                        }
                        else{
                        redirect('user');
                        }
                        }
                function mithun($user_id='',$status=''){
                        //echo $status;
                        //echo $user_id;
                        if($this->session->userdata('logged_in'))
                        {
                        if($status=='active'){
                                $this->user1->update($user_id);
                        }
                        else{
                        $this->user1->update1($user_id);
                        }                        
                        
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['query']=$this->user1->user_getall();
                        $this->load->view('user',$data);
                        }
                        else
                        {
                                redirect('home');
                        }
                }
                function delete($user_id=''){
                if($this->session->userdata('logged_in'))
                        {
                        $this->user1->delete($user_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['username'] = $session_data['username'];
                        $data['id'] = $session_data['id'];
                        $data['query']=$this->user1->user_getall();
                        $this->load->view('user',$data);
                        }
                        else
                        {
                                redirect('home');
                        }
                }
        }
?>
