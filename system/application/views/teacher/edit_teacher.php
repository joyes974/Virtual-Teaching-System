<?php include_once 'teacher_header.php'; ?>
 <div id="content">
                <div>

                        <div id="account">
                                <div>
                                        <?php echo form_open('teacher_home/update/'); ?>
                                                <span>Edit Teacher</span>
                                                <table>
                                                        <tr>
                                                                <td><label for="id">Id</label></td>
                                                                <td><input type="text" id="id" name="" value="<?= (isset($teacher_id))?$teacher_id:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="name">Name</label></td>
                                                                <td><input type="text" id="name" name="teacher_name" value="<?= (isset($teacher_name))?$teacher_name:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="email">Email</label></td>
                                                                <td><input type="text" id="email" name="teacher_email" value="<?= (isset($teacher_email))?$teacher_email:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="password">Password</label></td>
                                                                <td><input type="password" id="password" name="teacher_password" value="<?= (isset($teacher_password))?$teacher_password:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="current_institution">Current institution</label></td>
                                                                <td><input type="text" id="current_institution" name="current_institution" value="<?= (isset($current_institution))?$current_institution:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="other_institution">Other institution</label></td>
                                                                <td><input type="text" id="other_institution" name="other_institution" value="<?= (isset($other_institution))?$other_institution:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="graduate_institution">Graduate institution</label></td>
                                                                <td><input type="text" id="graduate_institution" name="graduate_institution" value="<?= (isset($graduate_institution))?$graduate_institution:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="post_graduate_institution">Post Graduate institution</label></td>
                                                                <td><input type="text" id="post_graduate_institution" name="post_graduate_institution" value="<?= (isset($post_graduate_institution))?$post_graduate_institution:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="other_degree">Other Degree</label></td>
                                                                <td><input type="text" id="other_degree" name="other_degree" value="<?= (isset($other_degree))?$other_degree:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="interest_subject">Interest Subject</label></td>
                                                                <td><input type="text" id="interest_subject" name="interest_subject" value="<?=(isset($interest_subject))?$interest_subject:'' ?>"/>
                                                                </td>
                                                        </tr>
                                                </table>
                                                <input type="submit" value="Sign-up" class="submitbtn" />
                                         <?php echo form_close(); ?>
                                </div>
                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
