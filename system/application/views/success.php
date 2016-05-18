<?php include_once 'header.php'; ?>
<div id="content">
                <div class="home">
                        <div class="aside">

                        <?php
                        if(isset($msg)){
                        echo anchor('teacher/click_teacher/'.$msg,'Please Click Email');
                        }
                         if(isset($msg1)){
                         echo anchor('student/click_student/'.$msg1,'Please Click Email');
                        }
                        ?>
                        </div>

                </div>
</div>
<?php include_once 'footer.php'; ?>
