<?php
include_once 'teacher_header.php';
?>

 <div id="content">
                <div id="about">


                         <?php
                        if(isset($msg)){   echo $msg; }
                        ?>



               <div align="center"> Unsolved Question List </div>   <br/><br/><br/>
                <?
                        //$i=1;
                           foreach($query as $row){
                               $a=$row['question_id'];
                               $b=$row['lecture_id'];
                               $c=$row['question'];
                         ?>
                         <li>
                         <?php
                                echo anchor('teacher_home/answer_unsolved_question/'.$a.'/'.$b.'/'.$c,($row['question']));
                                echo "<br/><br/>";
                        ?>
                        </li>
                     <?}?>

                </div>
        </div>
<?php include_once 'footer.php'; ?>
