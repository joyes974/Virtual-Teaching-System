<?php include_once 'teacher_header.php'; ?>


 <div id="content">
 
                <div>
                                
                        <div id="account">
                                                 
                        <div>


                        <?php echo form_open_multipart('teacher_home/question_uploads');?>
                        <table>
                                                <tr><td></td><td><?php
                        if(isset($msg)){   echo $msg; }
                        ?></td></tr>
                        <tr>
                        <td>Lecture Id:</td> <td><input name="lecture_id" type="text" readonly value="<?= (isset($lecture_id))?$lecture_id:'';?>" />  </td>
                        </tr>
                        <tr>
                        <td>Question:</td> <td><input name="question" type="text" /></td>
                        </tr>
                        <tr>
                        <td>Answer :</td><td><input type="file" name="userfile" size="20" />
                           (ppt,docx)</td>
                        </tr>
                        <tr> <td><td>
                        <td>
                        <input name="submit" type="submit" value="Submit" />
                        </td>
                        </tr>
                        </table>
                        </form>
                        </div>
                        </div>
                </div>
</div>
        
<?php include_once 'footer.php'; ?>
