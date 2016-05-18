<?php
Class Show extends Model
{
        function show_teacher($teacher_email){

                        $ql="select * from teacher where teacher_email='".$teacher_email."'";
                           $sql_query = $this->db->query($ql);
                           return $sql_query->result_array();

        }
                                
         function show_all_teacher(){
                        $ql="select * from teacher";
                           $sql_query = $this->db->query($ql);
                           return $sql_query->result_array();
         }

         function show_all_department(){
                        $ql="select * from department where parent_id='0'";
                           $sql_query = $this->db->query($ql);
                           return $sql_query->result_array();
         }
         
         function show_user($user_email){

                        $ql="select * from user where user_email='".$user_email."'";
                           $sql_query = $this->db->query($ql);
                           return $sql_query->result_array();

        }
        
        function show_all_user(){
                        $ql="select * from user";
                           $sql_query = $this->db->query($ql);
                           return $sql_query->result_array();
         }

        function show_department(){
                        $ql="select department_id,parent_id,name,status from department where status='active' and parent_id ='0'";
                           $sql_query = $this->db->query($ql);
                           return $sql_query->result_array();
         }
         function show_department1(){
                        $ql="select department_id,parent_id,name,status from department where status='active' and parent_id !='0'";
                           $sql_query = $this->db->query($ql);
                           return $sql_query->result_array();
         }
        function show_subject($id){
                        $ql="select department_id,parent_id,name,status from department where status='active' and parent_id =$id";
                        $sql_query = $this->db->query($ql);
                        $rows= $sql_query->result_array();
                        $select="<select name='department_id' id='department_id'>";
                        foreach($rows as $row){
                        $select.='<option value=' . $row['department_id'] . '>' . $row['name'] . '</option>';
                        }
                        $select.='</select>';
                        echo $select ;
         }

         function show_subject1($department_id){
                        $sql = "select * from department where parent_id=".$department_id;
                        $sql_query = $this->db->query($sql);
                        return $sql_query->result_array();
         }
         
         function show_subject_lecture($department_id){
                        $sql = "select * from lecture where course_title=".$department_id;
                        $sql_query = $this->db->query($sql);
                        return $sql_query->result_array();
         }
         
         function show_question($lecture_id){
                        $sql = "select * from teacher_answer where lecture_id=".$lecture_id;
                        $sql_query = $this->db->query($sql);
                        return $sql_query->result_array();
         }
         
         function show_ans_question($question_id=''){
                        $sql = "select * from teacher_answer where answer_id=".$question_id;;
                        $sql_query = $this->db->query($sql);
                        return $sql_query->result_array();
         }
         
         function search($search=''){
                        $quer=$this->db->query("select * from lecture where lecture_title LIKE '%$search%' ");
                        return $quer->result_array();
        }
        
        
        function show_lecture_list_subject($teacher_email){

                        $ql="select distinct(name) as name,department_id from department,lecture where department.department_id=lecture.course_title and teacher_email='$teacher_email'";
                           $sql_query = $this->db->query($ql);
                           return $sql_query->result_array();

        }
        
       function show_lecture_list($department_id='',$session_data=''){

                        $ql="select * from lecture where course_title='$department_id' and teacher_email='$session_data'";
                           $sql_query = $this->db->query($ql);
                           return $sql_query->result_array();
        }
        
        function unsolved_question($lecture_id=''){

                        $ql="select * from user_question where lecture_id='$lecture_id' and status='active'";
                           $sql_query = $this->db->query($ql);
                           return $sql_query->result_array();
        }
}
?>
