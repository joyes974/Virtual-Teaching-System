<?php
Class Teacher1 extends Model
{
        function teacher_getall()
        {
                $this->db->select('teacher_id,teacher_name,teacher_email,current_institution,other_institution,graduate_institution,post_graduate_institution,other_degree,interest_subject,status');
                $query = $this->db->get('teacher');
                return $query->result();
        }
        function update($teacher_id=''){
                                $this->load->database();
                                $data = array(
                                          'status'=>'deactive',                                           
                          );
                                  $this->db->where('teacher_id',$teacher_id);
                                    $this->db->update('teacher',$data);
                                        
                        }        
                        
                        function update1($teacher_id=''){
                                $this->load->database();
                                $data = array(
                                                  'status'=>'active',                                           
                          );
                                  $this->db->where('teacher_id',$teacher_id);
                                    $this->db->update('teacher',$data);
                        }

                        function delete($teacher_id){
          $this->load->database();
          $this->db->delete('teacher', array('teacher_id' => $teacher_id));
        }
        function search($search=''){
          $quer=$this->db->query("select * from teacher where teacher_name LIKE '%$search%' or interest_subject LIKE '%$search%'");

          return $quer->result();
        }
}
?>
