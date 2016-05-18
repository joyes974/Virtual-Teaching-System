<?php

class Lecture extends Controller {

        function Lecture()
        {
                parent::Controller();
                $this->load->model('show');
                $this->load->model('insert');
        }

        function index()       {
          if($this->session->userdata('logged_in'))
           {
             $session_data = $this->session->userdata('logged_in');
             $data['teacher_email'] = $session_data;
             $data['user_email'] = $session_data;
             $data['query']=$this->show->show_all_department();
             $this->load->view('lecture',$data);
           }
            else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }
        }
        
      function show_subject($department_id=''){
      
                if($this->session->userdata('logged_in'))
                  {
                        if($department_id)
                        $data['query']=$this->show->show_subject1($department_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['teacher_email'] = $session_data;
                        $data['user_email'] = $session_data;
                        $this->load->view('show_subject',$data);
                }
                
                else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }
        }
                
       function show_subject_lecture($department_id=''){
       
                if($this->session->userdata('logged_in'))
                     {
                        if($department_id)
                        $data['query']=$this->show->show_subject_lecture($department_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['teacher_email'] = $session_data;
                        $data['user_email'] = $session_data;
                        $this->load->view('show_subject_lecture',$data);
                }
                
                 else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }
        }
                
       function show_lecture($lecture_id=''){
                if($this->session->userdata('logged_in'))
                     {
                        if($lecture_id)
                        $sql = "select * from lecture where lecture_id=".$lecture_id;
                        $sql_query = $this->db->query($sql);
                        $rows = $sql_query->result_array();
                        foreach($rows as $val){
                        $data['lecture_id']=$val['lecture_id'];
                        $data['lecture']=$val['lecture'];
                        $data['lecture_title']=$val['lecture_title'];
                        }
                        $data['query']=$this->show->show_question($lecture_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['teacher_email'] = $session_data;
                        $data['user_email'] = $session_data;
                        $this->load->view('show_lecture',$data);
                 }
                 
                else
                {
             //If no session, redirect to login page
             redirect('login', 'refresh');
                }
                }
        
     function show_question($question_id=''){
        if($this->session->userdata('logged_in'))
                     {
                        $data['query']=$this->show->show_ans_question($question_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['teacher_email'] = $session_data;
                        $data['user_email'] = $session_data;
                        $this->load->view('show_ans_lecture',$data);
                    }
                     else
                {
             //If no session, redirect to login page
             redirect('login', 'refresh');
                }
                }
     
     function user_question(){

                       $data['query']=$this->insert->user_question();
					   $msg = 'Question insertted Successfully';
					   $this->session->set_userdata('msg',$msg);
					  
					   
                       redirect('lecture/show_lecture/'.$_POST['lecture_id']);
     }
     
     function search()
     {
                if($this->session->userdata('logged_in'))
                     {
                        $s=$_POST['search'];
                        if($s)
                        {
						
                                $data['query']=$this->show->search($s);
								if($data['query']){
                                $session_data = $this->session->userdata('logged_in');
                                $data['teacher_email'] = $session_data;
                                $data['user_email'] = $session_data;
                                $this->load->view('show_subject_lecture',$data);
								}
								 else
                        {
						$session_data = $this->session->userdata('logged_in');
                                $data['teacher_email'] = $session_data;
                                $data['user_email'] = $session_data;
                               $this->load->view('no_result',$data);
                        }
                        }
						else
                        {
						$session_data = $this->session->userdata('logged_in');
                                $data['teacher_email'] = $session_data;
                                $data['user_email'] = $session_data;
                               $this->load->view('no_result',$data);
                        }
						
                       
                 }
                 else
                {
             //If no session, redirect to login page
             redirect('login', 'refresh');
                }
                }
                 
}
?>
