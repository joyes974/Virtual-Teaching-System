<?php
Class Valid_user extends Model
{
  function teacher_valid_user(){
                $username=$_POST['username'];
                $userpass=$_POST['password'];
                $usertype=$_POST['type'];
                $sql = "SELECT * FROM teacher WHERE (teacher_email  = ? AND teacher_password = ?) AND status='active'";
                $query = $this->db->query($sql, array($username, $userpass));
                if($query -> num_rows() == 1)
                {
                 $this->session->set_userdata('logged_in', $username);
                 $this->session->set_userdata('type', $usertype);
                  return true;
                }
                else
                {
                return false;
                }
                }
  function user_valid_user(){
                $username=$_POST['username'];
                $userpass=$_POST['password'];
                $usertype=$_POST['type'];
                $sql = "SELECT * FROM user WHERE user_email  = ? AND user_password = ? AND status='active'";
                $query = $this->db->query($sql, array($username, $userpass));
                if($query -> num_rows() == 1)
                {
                $this->session->set_userdata('logged_in', $username);
                 $this->session->set_userdata('type', $usertype);
                return true;
                }
                else
                {
                return false;
                }
                }
}
?>
