<?php

class Teacher_home extends Controller {

        function Teacher_home()
        {
                parent::Controller();
                 $this->load->model('show');
                 $this->load->model('update');
                 $this->load->model('insert');
                 $this->load->model('delete');
        }

        function index()       {
          if($this->session->userdata('logged_in'))
           {
             $session_data = $this->session->userdata('logged_in');
             $data['teacher_email'] = $session_data;
             $this->load->view('teacher/teacher_home',$data);
           }
            else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }
        }
        
        function teacher_info()
        {
         if($this->session->userdata('logged_in'))
           {
             $session_data = $this->session->userdata('logged_in');
             $data['teacher_email'] = $session_data;
             $data['query']=$this->show->show_teacher($session_data);
             $this->load->view('teacher/teacher_info',$data);
           }
            else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }

        }
        function update(){

                        $session_data = $this->session->userdata('logged_in');
                        $data['query']=$this->update->entry_update($session_data);
                        redirect('teacher_home/teacher_info', 'refresh');

                   }
        function edit(){
        
         if($this->session->userdata('logged_in'))
         {
             $session_data = $this->session->userdata('logged_in');
             $sql="select * from teacher where teacher_email='".$session_data."'";
             $sql_query = $this->db->query($sql);
             $rows = $sql_query->result_array();
             foreach($rows as $val){
                        $data['teacher_id']=$val['teacher_id'];
                        $data['teacher_name']=$val['teacher_name'];
                        $data['teacher_email']=$val['teacher_email'];
                        $data['teacher_password']=$val['teacher_password'];
                        $data['teacher_email']=$val['teacher_email'];
                        $data['current_institution']=$val['current_institution'];
                        $data['other_institution']=$val['other_institution'];
                        $data['graduate_institution']=$val['graduate_institution'];
                        $data['post_graduate_institution']=$val['post_graduate_institution'];
                        $data['other_degree']=$val['other_degree'];
                        $data['interest_subject']=$val['interest_subject'];
                        }
                $data['teacher_email1'] = $session_data;
                $this->load->view('teacher/edit_teacher',$data);
        }
        else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }
        }

        

        function show_all_teacher(){
        if($this->session->userdata('logged_in'))
         {
               $session_data = $this->session->userdata('logged_in');
               $data['teacher_email'] = $session_data;
               $data['query']=$this->show->show_all_teacher();
               $this->load->view('teacher/show_all_teacher',$data);
        }
           else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }
        }
        
        function post_lecture()
        {
              if($this->session->userdata('logged_in'))
           {
             $session_data = $this->session->userdata('logged_in');
             $data['query']=$this->show->show_department();
             $data['query1']=$this->show->show_department1();
             $data['teacher_email'] = $session_data;
             $this->load->view('teacher/post_lecture',$data);
           }
            else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }

        }
        function lecture_upload(){
                if($this->session->userdata('logged_in'))
                {
                $config['upload_path'] = './admin/uploads/';
                $config['allowed_types'] = 'docx|pdf|ppt';
                $config['max_size']        = '3000000';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
				 if($this->form_validation->run('lecture_validation'))
			 {
					 $session_data = $this->session->userdata('logged_in');
					 $data['query']=$this->show->show_department();
					 $data['query1']=$this->show->show_department1();
				     $data['teacher_email'] = $session_data;
					 $this->load->view('teacher/post_lecture', $data);
			 }
			 else{
                
				$session_data = $this->session->userdata('logged_in');

                        $data['user_email'] = $session_data;
                        $data = array('upload_data' => $this->upload->data());
                        $this->insert->lecture_uploads($data);
                        
                        $sql="select max(lecture_id) as lecture_id from lecture where teacher_email='".$session_data."'";
                        $sql_query = $this->db->query($sql);
                        $rows = $sql_query->result_array();
                        foreach($rows as $val){
                        $data['lecture_id']=$val['lecture_id'];
                        }
                        $data['teacher_email'] = $session_data;
                        $this->load->view('teacher/question_upload', $data);
                }
				}
        }
         else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }

        }
        
        function question_uploads(){
                if($this->session->userdata('logged_in'))
                {
                $config['upload_path'] = './admin/questionuploads/';
                $config['allowed_types'] = 'docx|pdf|ppt';
                $config['max_size']        = '3000000';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('lecture/question_upload', $error);
                }
                else
                {       $session_data = $this->session->userdata('logged_in');
                        $data['user_email'] = $session_data;
                        $data = array('upload_data' => $this->upload->data());
                        $this->insert->question_uploads($data);

                        $sql="select max(lecture_id) as lecture_id from lecture where teacher_email='".$session_data."'";
                        $sql_query = $this->db->query($sql);
                        $rows = $sql_query->result_array();
                        foreach($rows as $val){
                        $data['lecture_id']=$val['lecture_id'];
                        }
                        $data['teacher_email'] = $session_data;
						$data['msg'] ='Insert Another Question';
                        $this->load->view('teacher/question_upload', $data);
                }
                }
           else
           {
             //If no session, redirect to login page
             redirect('login', 'refresh');
           }

        }
        
        function lecture_list_subject()
        {
                if($this->session->userdata('logged_in'))
                {
                        $session_data = $this->session->userdata('logged_in');
                        $data['query']=$this->show->show_lecture_list_subject($session_data);
                        $data['teacher_email'] = $session_data;
                        $this->load->view('teacher/lecture_list_subject',$data);
                }
                else
                {
                        reditrect('login','refresh');
                }
        }
        
        function lecture_list($department_id='')
        {
                if($this->session->userdata('logged_in'))
                {
                        $session_data = $this->session->userdata('logged_in');
                        $data['query']=$this->show->show_lecture_list($department_id,$session_data);
                        $data['teacher_email'] = $session_data;
                        $this->load->view('teacher/lecture_list',$data);
                }
                else
                {
                        reditrect('login','refresh');
                }
        }
        
        function show_lecture($lecture_id='')
        {
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
                        $this->load->view('teacher/show_lecture',$data);
                 }

                else
                {
             //If no session, redirect to login page
             redirect('login', 'refresh');
                }
        }
        
        function delete_lecture($lecture_id='')
        {

                if($this->session->userdata('logged_in'))
                {
                        $sql = "select * from lecture where lecture_id=".$lecture_id;
                        $sql_query = $this->db->query($sql);
                        $rows = $sql_query->result_array();
                        foreach($rows as $val){
                        $data['lecture_id']=$val['lecture_id'];
                        $data['lecture']=$val['lecture'];
                        }
                        $a="admin/uploads";
                        $s= "$a/".$data['lecture'];
                        unlink($s);

                        $this->delete->delete_lecture($lecture_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['query']=$this->show->show_lecture_list($session_data);
                        $data['teacher_email'] = $session_data;
                        $this->load->view('teacher/lecture_list',$data);
                }
                
                else
                {
                //If no session, redirect to login page
                redirect('login', 'refresh');
                }
        }
        
        function delete_question($answer_id='')
        {

                if($this->session->userdata('logged_in'))
                {
                        $sql = "select * from teacher_answer where answer_id=".$answer_id;
                        $sql_query = $this->db->query($sql);
                        $rows = $sql_query->result_array();
                        foreach($rows as $val){
                        $data['answer_id']=$val['answer_id'];
                        $data['lecture_id']=$val['lecture_id'];
                        $data['answer']=$val['answer'];
                        }
                        
                        $sql1 = "select * from lecture where lecture_id=".$data['lecture_id'];
                        $sql_query1 = $this->db->query($sql1);
                        $rows1 = $sql_query->result_array();
                        foreach($rows1 as $val1){
                        $data['lecture_id']=$val1['lecture_id'];
                        $data['lecture']=$val1['lecture'];
                        }
                        $a="admin/questionuploads";
                        $s= "$a/".$data['answer'];
                        unlink($s);

                        $this->delete->delete_question($answer_id);
                        $session_data = $this->session->userdata('logged_in');
                        $data['query']=$this->show->show_question($data['lecture_id']);
                        $data['teacher_email'] = $session_data;
                        $this->load->view('teacher/show_lecture',$data);
                }

                else
                {
                //If no session, redirect to login page
                redirect('login', 'refresh');
                }
        }
        
        function search()
     {
                if($this->session->userdata('logged_in'))
                     {
                        $s=$_POST['search'];
                        if($s)
                        {       $session_data = $this->session->userdata('logged_in');
                                $data['query']=$this->show->search_teacher($s,$session_data);
                                $session_data = $this->session->userdata('logged_in');
                                $data['teacher_email'] = $session_data;
                                //$data['user_email'] = $session_data;
                                $this->load->view('teacher/lecture_list',$data);
                        }
                        else
                        {
                                redirect('welcome');
                        }
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
                        $this->load->view('teacher/show_ans_question',$data);
                    }
                     else
                {
             //If no session, redirect to login page
             redirect('login', 'refresh');
                }
                }
                
        function post_question($lecture_id='')
                {
                if($this->session->userdata('logged_in'))
                     {
                        $data['lecture_id']=$lecture_id;
                        $session_data=$this->session->userdata('logged_in');
                        $data['teacher_email'] = $session_data;
                        $this->load->view('teacher/question_upload', $data);
                }
                else
                {
                //If no session, redirect to login page
                redirect('login', 'refresh');
                }
                }
                
        function unsolved_question($lecture_id='')
                {
                 if($this->session->userdata('logged_in'))
                     {
                        $data['query']=$this->show->unsolved_question($lecture_id);
                        $session_data=$this->session->userdata('logged_in');
                        $data['teacher_email'] = $session_data;
                        $this->load->view('teacher/unsolved_question', $data);
                }
                else
                {
                //If no session, redirect to login page
                redirect('login', 'refresh');
                }
                }
                
        function answer_unsolved_question($question_id='',$lecture_id='',$question='')
                {
                  if($this->session->userdata('logged_in'))
                     {
                        $data['lecture_id']=$lecture_id;
                        $data['question_id']=$question_id;
                        $data['question']=$question;
                        $session_data=$this->session->userdata('logged_in');
                        $data['teacher_email'] = $session_data;
                        $this->load->view('teacher/unsolved_question_upload', $data);
                }
                else
                {
                //If no session, redirect to login page
                redirect('login', 'refresh');
                }

                }
                
        function answer_unsolved_question_uploads(){
                if($this->session->userdata('logged_in'))
                {
                $config['upload_path'] = './admin/questionuploads/';
                $config['allowed_types'] = 'docx|pdf|ppt';
                $config['max_size']        = '3000000';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('teacher_home/answer_unsolved_question_uploads', $error);
                }
                else
                {       $session_data = $this->session->userdata('logged_in');
                        $data['user_email'] = $session_data;
                        $data = array('upload_data' => $this->upload->data());
                        $this->insert->question_uploads($data);

                        $sql="update user_question set status='inactive'  where question_id='".$_POST['question_id']."'";
                        $sql_query = $this->db->query($sql);
                        $sql = "select * from lecture where lecture_id=".$_POST['lecture_id'];
                        $sql_query = $this->db->query($sql);
                        $rows = $sql_query->result_array();
                        foreach($rows as $val){
                        $data['lecture_id']=$val['lecture_id'];
                        $data['lecture']=$val['lecture'];
                        }
                        $data['teacher_email'] = $session_data;
                        $this->load->view('teacher/show_lecture', $data);
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
