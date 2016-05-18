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
                         Lecture   <br/><br/>
                         <?php
                        if(isset($msg)){   echo $msg; }
                        ?>
        <?php
                echo $lecture_title;
                echo "<br/>";
                //echo $lecture_id."</br>";
                echo "<br>";

                $p="https://viewer.zoho.com/docs/urlview.do?url=http//vts/admin/uploads/";
                $a=$p.$lecture;
                ?>
                <iframe src="<?php echo $a; ?>" width="800" height="500" style="border: 2;margin:0 auto;"></iframe>
                <br/><br/>


                Question List   <br/><br/>
                <? echo $this->session->userdata('msg');
				
                       $this->session->unset_userdata('msg');                              //$i=1;
                           foreach($query as $row){
                              $a=$row['answer_id'];
                         ?>
                         <li>
                         <?php
                                echo anchor('lecture/show_question/'.$a,($row['question']));
                                echo "<br/><br/>";
                        ?>
                        </li>
                     <?}?>
                <br/><br/>
                <?php
                if($type==2)
                {        ?>
               <form action="<?=site_url('lecture/user_question');?>" method="POST">
                <table>
                <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;Question:</td>
                <input type="hidden" name="lecture_id" value="<?= (isset($lecture_id))?$lecture_id:'';?>"/>
                <td><input type="text" name="user_question" id="user_question"></td>
                <td><input name="submit" type="submit" value="Question" /></td>
                </tr>
                </table>
                </form>
              <?php  }
                else
                {

                }
                ?>


                        </div>
                </div>
        </div>
<?php include_once 'teacher/footer.php'; ?>
