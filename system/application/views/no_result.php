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

 <div id="content">
                <div id="about">

<h2>No Match Found</h2>                </div>
        </div>
<?php include_once 'teacher/footer.php'; ?>
