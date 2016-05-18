<?php
Class Delete extends Model
{
        function delete_lecture($lecture_id){
                        $this->load->database();
                        $this->db->delete('lecture', array('lecture_id' => $lecture_id));
        }
        
        function delete_question($answer_id){
                        $this->load->database();
                        $this->db->delete('teacher_answer', array('answer_id' => $answer_id));
        }
}
?>
