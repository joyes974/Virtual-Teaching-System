<?php
Class User1 extends Model
{
        function user_getall()
        {
                $this->db->select('user_id,user_name,user_email,user_occupation,user_country,status');
                $query = $this->db->get('user');
                return $query->result();
        }
        function update($user_id=''){
                                $this->load->database();
                                $data = array(
                                          'status'=>'deactive',                                           
                          );
                                  $this->db->where('user_id',$user_id);
                                    $this->db->update('user',$data);
                                        
                        }         
        function update1($user_id=''){
                                $this->load->database();
                                $data = array(
                                                  'status'=>'active',                                           
                          );
                                  $this->db->where('user_id',$user_id);
                                    $this->db->update('user',$data);
                        }         
        function delete($user_id){
                        $this->load->database();
                        $this->db->delete('user', array('user_id' => $user_id));
        }
       function search($search=''){
                        $quer=$this->db->query("select * from user where user_name LIKE '%$search%' or user_occupation LIKE '%$search%' or user_country LIKE '%$search%'");

                        return $quer->result();
        }
}
?>
