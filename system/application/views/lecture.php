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

                           Department Name <br/><br/><br/><br/>
                            <?    
                                                        //$i=1;
                           foreach($query as $row){
                                $a=$row['department_id'];
                         ?>
                         <li>
                         <?php
                                echo anchor('lecture/show_subject/'.$a,($row['name']));
                                echo "<br/><br/>";
                        ?>
                        </li>
                     <?}?>


                </div>
        </div>
<?php include_once 'teacher/footer.php'; ?>
