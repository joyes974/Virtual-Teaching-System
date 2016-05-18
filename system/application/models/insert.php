<?php
Class Insert extends Model
{

        function teacher(){
                            $this->load->database();
                            $a=$this->input->post('teacher_name');
                            $b=$this->input->post('teacher_email');
                            $c=$this->input->post('teacher_password');
                            $d=$this->input->post('current_institution');
                            $e=$this->input->post('other_institution');
                            $f=$this->input->post('graduate_institution');
                            $g=$this->input->post('post_graduate_institution');
                            $h=$this->input->post('other_degree');
                            $i=$this->input->post('interest_subject');
                            
                            $query = $this->db->query("SELECT * FROM `teacher` WHERE `teacher_email` = '$b'");

                                $r=rand();
                                if($query->num_rows() === 0)
                                {
                                $this->db->query("INSERT INTO `teacher` (teacher_name,teacher_email,teacher_password,current_institution,other_institution,graduate_institution,post_graduate_institution,other_degree,interest_subject,random,status) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$r', 'inactive')");
                                //$data['msg']=$r;
                                //$this->load->view('success',$data);
                                }
                                return $r;

  }
  function student(){
                            $this->load->database();
                            $a=$this->input->post('user_name');
                            $b=$this->input->post('user_email');
                            $c=$this->input->post('user_password');
                            $d=$this->input->post('user_occupation');
                            $e=$this->input->post('user_country');


                            $query = $this->db->query("SELECT * FROM `user` WHERE `user_email` = '$b'");
                            
                                $r=rand();
                                if($query->num_rows() === 0)
                                {
                                $this->db->query("INSERT INTO `user` (user_name,user_email,user_password,user_occupation,user_country,random,status) VALUES ('$a','$b','$c','$d','$e','$r','inactive')");
                                //$data['msg1']=$r;
                                
                                }
                                return  $r;
  }
  
  function lecture_uploads($data){

                        $session_data = $this->session->userdata('logged_in');

                        $a=$this->input->post('department_id');
                        $b=$this->input->post('lecture_title');
                       // $e=$this->input->post('status');
              $data=array(
                                                'teacher_email'=>$session_data,
                                                'course_title'=>$a,
                                                'lecture_title'=>$b,
                                                'lecture' =>$data['upload_data']['file_name'],
                                                'status' => 'active',
                                        );
                $this->db->insert('lecture', $data);

        }
        
        function question_uploads($data){

                        $session_data = $this->session->userdata('logged_in');

                        $b=$this->input->post('lecture_id');
                        $c=$this->input->post('question');
                        $data=array(
                                                'lecture_id'=>$b,
                                                'teacher_email'=>$session_data,
                                                'question'=>$c,
                                                'answer' =>$data['upload_data']['file_name'],
                                                'status' => 'active',
                                        );
                $this->db->insert('teacher_answer', $data);

        }
        
        function user_question(){

                        $session_data = $this->session->userdata('logged_in');

                        $a=$this->input->post('lecture_id');
                        $b=$this->input->post('user_question');
                        $data=array(
                                                'lecture_id'=>$a,
                                                'user_email'=>$session_data,
                                                'question'=>$b,
                                                'status' => 'active',
                                        );
                $this->db->insert('user_question', $data);

        }

}
?>
