<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        session_start();
        class Admn extends Controller {
                function Admn(){
                        parent::Controller();
                        $this->load->model('user');
                }        
                function index(){
                        if($this->session->userdata('logged_in'))
                        {
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
