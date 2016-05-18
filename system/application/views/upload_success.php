<?php $type=$this->session->userdata('type'); ?>
<?php
if($type==1)
{
include_once 'teacher/teacher_header.php';
}
else
 {
    include_once 'user/user_header.php';
 }
 
  ?>
  <?$session_data = $this->session->userdata('logged_in');
  echo $session_data;?>

 <br><br><br><div align="center">
<h3>Your Lecture was successfully uploaded!</h3>


</div>
