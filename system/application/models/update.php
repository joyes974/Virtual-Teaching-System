<?php
Class Update extends Model
{
   function entry_update($teacher_email=''){
          $teacher_name=$this->input->post('teacher_name');
          $teacher_password=$this->input->post('teacher_password');
          $current_institution=$this->input->post('current_institution');
          $other_institution=$this->input->post('other_institution');
          $graduate_institution=$this->input->post('graduate_institution');
          $post_graduate_institution=$this->input->post('post_graduate_institution');
          $interest_subject=$this->input->post('interest_subject');
          $other_degree=$this->input->post('other_degree');
          
          $ql="update teacher set teacher_name='$teacher_name',teacher_password='$teacher_password',current_institution='$current_institution',
                other_institution='$other_institution',graduate_institution='$graduate_institution',post_graduate_institution='$post_graduate_institution',
                other_degree='$other_degree',interest_subject='$interest_subject'  where teacher_email='".$teacher_email."'";
          $sql_query = $this->db->query($ql);
          return true;
        }
        
        function user_update($user_email=''){
          $user_name=$this->input->post('user_name');
          $user_password=$this->input->post('user_password');
          $user_occupation=$this->input->post('user_occupation');
          $user_country=$this->input->post('user_country');

          $ql="update user set user_name='$user_name',user_password='$user_password',user_occupation='$user_occupation',
                user_country='$user_country'  where user_email='".$user_email."'";
          $sql_query = $this->db->query($ql);
          return true;
        }
        
        function click_update_teacher($ran_id='')
        {
                $ql="update teacher set status='active'  where random='".$ran_id."'";
                $sql_query = $this->db->query($ql);
                return true;
        }
        
        function click_update_student($ran_id='')
        {
                $ql="update user set status='active'  where random='".$ran_id."'";
                $sql_query = $this->db->query($ql);
                return true;
        }
}
?>
