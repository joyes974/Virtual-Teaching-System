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

                        <?php
                                foreach($query as $row){
                                        echo "<li>".$row['name']."</li>";
                                        echo "<br>";
                                }
                        ?>

                </div>
        </div>
<?php include_once 'footer.php'; ?>
