<?php include_once 'header.php'; ?>
<div id="content">
                <div>

                        <div id="account">
                                <div>
                                        <?php echo form_open('teacher'); ?>
                                                <span>Teacher Sign-Up</span>
                                                <table>
                                                        <tr>
                                                                <td><label for="name">Name</label></td>
                                                                <td><input type="text" id="name" name="teacher_name"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td><td><font color="red"><?php echo form_error('teacher_name'); ?></font></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="email">Email</label></td>
                                                                <td><input type="text" id="email" name="teacher_email"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td><td><font color="red"><?php echo form_error('teacher_email'); ?></font></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="password">Password</label></td>
                                                                <td><input type="password" id="password" name="teacher_password"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td><td><font color="red"><?php echo form_error('teacher_password'); ?></font></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="current_institution">Current institution</label></td>
                                                                <td><input type="text" id="current_institution" name="current_institution"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td><td> <font color="red"><?php echo form_error('current_institution'); ?></font></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="other_institution">Other institution</label></td>
                                                                <td><input type="text" id="other_institution" name="other_institution"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="graduate_institution">Graduate institution</label></td>
                                                                <td><input type="text" id="graduate_institution" name="graduate_institution"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td><td><font color="red"><?php echo form_error('graduate_institution'); ?></font></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="post_graduate_institution">Post Graduate institution</label></td>
                                                                <td><input type="text" id="post_graduate_institution" name="post_graduate_institution"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="other_degree">Other Degree</label></td>
                                                                <td><input type="text" id="other_degree" name="other_degree"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="interest_subject">Interest Subject</label></td>
                                                                <td><input type="text" id="interest_subject" name="interest_subject"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td><td><font color="red"><?php echo form_error('interest_subject'); ?></font></td>
                                                        </tr>
                                                </table>
                                                <input type="submit" value="Sign-up" class="submitbtn" />
                                         <?php echo form_close(); ?>
                                </div>
                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
