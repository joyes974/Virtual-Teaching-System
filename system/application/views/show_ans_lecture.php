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
                        <div align="center">
                        Show Question Answer   <br/><br/>
                <?php  foreach($query as $row){
                echo $question=$row['question'];
                echo "<br/><br/>";
                $answer=$row['answer'];
                //echo $answer."</br>";
                $p="https://viewer.zoho.com/docs/urlview.do?url=http//vts/admin/questionuploads/";
                $a=$p.$answer;

                } ?>
 <iframe src="<?php echo $a; ?>" width="800" height="500"></iframe>
 <br/><br/>

                        </div>
                </div>
        </div>
<?php include_once 'teacher/footer.php'; ?>
