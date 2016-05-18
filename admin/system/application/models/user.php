<?php
Class User extends Model
{
         function login($username, $password)
         {
           $this -> db -> select('admin_id,admin_name,admin_password');
           $this -> db -> from('admin');
           $this -> db -> where('admin_name = ' . "'" . $username . "'");
           $this -> db -> where('admin_password = ' . "'" . $password . "'");
           $this -> db -> limit(1);
         
           $query = $this -> db -> get();
         
           if($query -> num_rows() == 1)
           {
             return $query->result();
           }
           else
           {
             return false;
           }
         }
         function admin_getall(){
                        $this->load->database();
                        $this->db->select('admin_id,admin_name,admin_password,admin_email');
                        $query = $this->db->get('admin');
                        return $query->result();
                }
                
        function entry_insert(){
                                $this->load->database();
                            $a=$this->input->post('admin_name');
                                $b=$this->input->post('admin_passwrod');
                                $c=$this->input->post('admin_email');
                                 if (!($a == '') && !($b == '') && !($c == ''))
                                {
                            $data = array(
                      'admin_name'=>$a,
                      'admin_password'=>$b,
                      'admin_email'=>$c,
                      );
            $this->db->insert('admin',$data);
          }         
          }
        function entry_update($admin_id=''){
          $this->load->database();
          $data = array(
                                  'admin_name'=>$this->input->post('admin_name'),
                                  'admin_password'=>$this->input->post('admin_passwrod'),
                  );
          $this->db->where('admin_id',$admin_id);
          $this->db->update('admin',$data); 
        }
        function delete($admin_id){
          $this->load->database();
          $this->db->delete('admin', array('admin_id' => $admin_id));          
        }
}
?>
