<?php
include_once 'teacher_header.php';

  ?>

 <div id="content">
                <div id="about">

                    Lecture Name   <br/> <br/><br/>

                        <?php
          foreach($query as $row){
                $a=$row['lecture_id'];
                  ?>
                         <li>
                         <?php
                           echo anchor('teacher_home/show_lecture/'.$a,($row['lecture_title']));
                            echo "<br/><br/>";
                            ?>
                            </li>
                      <?php   }    ?>

                </div>
        </div>
<?php include_once 'footer.php'; ?>
