<?php
include_once 'teacher_header.php';
?>

 <div id="content">
                <div id="about">
                        <div align="center">
                         Lecture      <br/><br/>
                         <?php
                        if(isset($msg)){   echo $msg; }
                        ?>
        <?php
                //echo $lecture;
                echo "&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                 echo anchor('teacher_home/delete_lecture/'.$lecture_id,'Delete This Lecture');
                 echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                 echo anchor('teacher_home/post_question/'.$lecture_id,'Add Question In This Lecture');
                 echo "&nbsp;&nbsp;&nbsp;";
                 echo anchor('teacher_home/unsolved_question/'.$lecture_id,'Check the unsolved question');
                 echo "<br/><br/>";
                 echo $lecture_title."</br></br>";

                $p="https://viewer.zoho.com/docs/urlview.do?url=http//vts/admin/uploads/";
                $a=$p.$lecture;
                ?>
                <iframe src="<?php echo $a; ?>" width="800" height="500" style="border: 2;margin:0 auto;"></iframe>
                <br/><br/><br/>
                Question List    <br/><br/><br/>
                <?
                                                        //$i=1;
                           foreach($query as $row){
                              $a=$row['answer_id'];
                         ?>
                         <li>
                         <?php
                                echo anchor('teacher_home/show_question/'.$a,($row['question']));
                                echo "<br/><br/>";
                        ?>
                        </li>
                     <?}?>
                </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
