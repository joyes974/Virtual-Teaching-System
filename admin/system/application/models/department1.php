<?php
Class Department1 extends Model
{
        function department_getall()
        {
                $this->db->select('department_id,parent_id,name,status');
                $query = $this->db->get('department');
                return $query->result();
        }
        function select_parent_id()
        {
                $sql="select department_id,name from department where parent_id='0'";
                        $sql_query = $this->db->query($sql);
                        return $sql_query->result_array();
        }
        function update($department_id=''){
                                $this->load->database();
                                $data = array(
                                          'status'=>'deactive',                                           
                          );
                                  $this->db->where('department_id',$department_id);
                                    $this->db->update('department',$data);
                                        
                        }         
                        function update1($department_id=''){
                                $this->load->database();
                                $data = array(
                                                  'status'=>'active',                                           
                          );
                                  $this->db->where('department_id',$department_id);
                                    $this->db->update('department',$data);
                        }        
                        
                function entry_insert(){
                                $this->load->database();
                            $a=$this->input->post('department_id');
                            $b=$this->input->post('name');
                                $c=$this->input->post('status');
                                if (!($b== '')&& !($c == ''))
                                {
                            $data = array(
                                'parent_id'=>$a,
                                'name'=>$b,
                                  'status'=>$c,
                     );
            $this->db->insert('department',$data);
          }        
          } 
          
          function entry_update($department_id=''){
          $this->load->database();
          $data = array(
                        'name'=>$this->input->post('name'),
                        'status'=>$this->input->post('status'),
                        );
          $this->db->where('department_id',$department_id);
          $this->db->update('department',$data);
        }
        function delete($department_id){
          $this->load->database();
          $this->db->delete('department', array('department_id' => $department_id));
        }
}
?>
