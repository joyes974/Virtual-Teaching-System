<?php
Class Question1 extends Model
{
        function question_getall()
        {
                $this->db->select('question_id,lecture_id,user_email,question,status');
                $query = $this->db->get('user_question');
                return $query->result();
        }
        function update($question_id=''){
                                $this->load->database();
                                $data = array(
                                          'status'=>'deactive',
                          );
                                  $this->db->where('question_id',$question_id);
                                    $this->db->update('user_question',$data);

                        }

        function update1($question_id=''){
                                $this->load->database();
                                $data = array(
                                                  'status'=>'active',
                          );
                                  $this->db->where('question_id',$question_id);
                                    $this->db->update('user_question',$data);
                      }
        function delete($question_id){
          $this->load->database();
          $this->db->delete('user_question', array('question_id' => $question_id));
        }
      function search($search=''){
          $quer=$this->db->query("select * from user_question where question LIKE '%$search%'");

          return $quer->result();
        }
}
?>
