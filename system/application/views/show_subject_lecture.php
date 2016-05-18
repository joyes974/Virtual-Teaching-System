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

                          Lecture Name   <br/><br/>

<?php
          foreach($query as $row){
                $a=$row['lecture_id'];
                  ?>
                         <li>
                         <?php
                           echo anchor('lecture/show_lecture/'.$a,($row['lecture_title']));
                            echo "<br/><br/>";
                            ?>
                            </li>
                      <?php   }    ?>


                </div>
        </div>
<?php include_once 'teacher/footer.php'; ?>
