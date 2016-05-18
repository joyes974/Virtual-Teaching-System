<?php include_once 'teacher_header.php';   ?>

 <div id="content">
                <div id="about">

                           My uploded lecture list category <br/><br/><br/><br/>
                            <?
                                                        //$i=1;
                           foreach($query as $row){
                                $a=$row['department_id'];
                         ?>
                         <li>
                         <?php
                                echo anchor('teacher_home/lecture_list/'.$a,($row['name']));
                                echo "<br/><br/>";
                        ?>
                        </li>
                     <?}?>


                </div>
        </div>
<?php include_once 'footer.php'; ?>
