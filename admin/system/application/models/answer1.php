<?php
Class Answer1 extends Model
{
        function answer_getall()
        {
                $this->db->select('answer_id,lecture_id,teacher_email,question,answer,status');
                $query = $this->db->get('teacher_answer');
                return $query->result();
        }
        function update($answer_id=''){
                                $this->load->database();
                                $data = array(
                                          'status'=>'deactive',
                          );
                                  $this->db->where('answer_id',$answer_id);
                                    $this->db->update('teacher_answer',$data);

                        }

        function update1($answer_id=''){
                                $this->load->database();
                                $data = array(
                                                  'status'=>'active',
                          );
                                  $this->db->where('answer_id',$answer_id);
                                    $this->db->update('teacher_answer',$data);
                      }
        function delete($answer_id){
          $this->load->database();
          $this->db->delete('teacher_answer', array('answer_id' => $answer_id));
        }
      function search($search=''){
          $quer=$this->db->query("select * from teacher_answer where answer LIKE '%$search%'");

          return $quer->result();
        }
}
?>
