<?php include_once 'teacher_header.php'; ?>
  <script type="text/javascript">
  function show()
{
                //var username = $('username').val();
                var department = document.getElementById('department').value;

                $.ajax({
                  url:  "<?=site_url();?>call",
                  type: "POST",
                  data: ( {id:department} ),
                  success: function(data){

                                        document.getElementById('check').innerHTML=data;

                  }
                });
}
</script>
 <div id="content">
                <div>
                        <div id="account">
                        <div>

                         <?php echo form_open_multipart('teacher_home/lecture_upload');?>

                                                <table>
                                                        <tr>
                                                                <td><label for="name">Department</label></td>
                                                                <td>
                                                                <select name="department" id="department" onchange="javascript:show();">
                                                                <option>select department</option>
                                                                <?php  foreach($query as $row){ ?>
                                                                <option value="<?php echo $row['department_id']?>"><?php echo $row['name'] ?></option>
                                                                <?php } ?>
                                                                </select>
                                                               </td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="course_title">Course Title</label></td>
                                                                <td><div id="check">
                                                                <select name="department_id" id="department_id">
                                                                <option>select subject</option>
                                                                </select>
                                                                </div>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="lecture_title">Lecture Title</label></td>
                                                                <td>
                                                                <input name="lecture_title" type="text" id="lecture_title" />
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="lecture">Lecture</label></td>
                                                                <td><input type="file" name="userfile" size="20" id="lecture"/>(ppt,docx)</td>
                                                        </tr>

                                                </table>
                                                <input name="submit" type="submit" value="Submit" class="submitbtn"/>
                                         <?php echo form_close(); ?>
                                         </div>
                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
