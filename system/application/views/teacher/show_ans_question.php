<?php
include_once 'teacher_header.php';
  ?>

 <div id="content">
                <div id="about">
                        <div align="center">
                        Show Question Answer   <br/><br/>
                <?php  foreach($query as $row){
                $answer=$row['answer'];
                $question=$row['question'];
                //echo $answer;
                $answer_id=$row['answer_id'];
                //$lecture_id=$row['lecture_id'];

                 echo anchor('teacher_home/delete_question/'.$answer_id,'Delete This Question');
                 echo "<br>";

                 echo "</br>";
                 echo $question;  echo"</br></br>";
                $p="https://viewer.zoho.com/docs/urlview.do?url=http//vts/admin/questionuploads/";
                $a=$p.$answer;

                } ?>
                <iframe src="<?php echo $a; ?>" width="800" height="500"></iframe>
                <br/><br/>

                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
