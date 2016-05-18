<?php
Class Lecture1 extends Model
{
        function lecture_getall()
        {
                $this->db->select('lecture_id,teacher_email ,course_title,lecture_title ,lecture,status');
                $query = $this->db->get('lecture');
                return $query->result();
        }
        function update($lecture_id=''){
                                $this->load->database();
                                $data = array(
                                          'status'=>'deactive',                                           
                          );
                                  $this->db->where('lecture_id',$lecture_id);
                                    $this->db->update('lecture',$data);
                                        
                        }        
                        
        function update1($lecture_id=''){
                                $this->load->database();
                                $data = array(
                                                  'status'=>'active',                                           
                          );
                                  $this->db->where('lecture_id',$lecture_id);
                                    $this->db->update('lecture',$data);
                      }
        function delete($lecture_id){
          $this->load->database();
          $this->db->delete('lecture', array('lecture_id' => $lecture_id));
        }
        function search($search=''){
          $quer=$this->db->query("select * from lecture where course_title LIKE '%$search%' or lecture_title LIKE '%$search%'");

          return $quer->result();
        }
                        
}
?>
