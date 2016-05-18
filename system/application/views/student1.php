<?php include_once 'header.php'; ?>
<div id="content">
                <div>

                        <div id="account">
                                <div>
                                        <?php echo form_open('student'); ?>
                                                <span>Student Sign-Up</span>
                                                <table>
                                                        <tr>
                                                                <td><label for="user_name">Name</label></td>
                                                                <td><input type="text" id="name" name="user_name"/>
                                                                </td>
                                                        </tr>
                                                        <tr><td></td><td><font color="red"><?php echo form_error('user_name'); ?></font></td></tr>
                                                        <tr>
                                                                <td><label for="user_email">Email</label></td>
                                                                <td><input type="text" id="email" name="user_email"/>
                                                                </td>
                                                        </tr>
                                                        <tr><td></td><td><font color="red"><?php echo form_error('user_email'); ?></font></td></tr>
                                                        <tr>
                                                                <td><label for="user_password">Password</label></td>
                                                                <td><input type="password" id="password" name="user_password"/>
                                                                </td>
                                                        </tr>
                                                        <tr><td></td><td><font color="red"><?php echo form_error('user_password'); ?></font></td></tr>
                                                        <tr>
                                                                <td><label for="user_occupation">Occupation</label></td>
                                                                <td><input type="text" id="occupation" name="user_occupation"/>
                                                                </td>
                                                        </tr>
                                                        <tr><td></td><td><font color="red"><?php echo form_error('user_occupation'); ?></font></td></tr>
                                                        <tr>
                                                                <td><label for="user_country">Country</label></td>
                                                                <td>
                                                                <select name="user_country">
                                                                <option name="">Select Country</option>
                                                                <option name="Bangladesh">Bangladesh</option>
                                                                <option name="Pakistan">Pakistan</option>
                                                                <option name="Srilanka">Srilanka</option>
                                                                <option name="india">India</option>
                                                                </select>
                                                                </td>
                                                        </tr>
                                                        <tr><td></td><td><font color="red"><?php echo form_error('user_country'); ?></font></td></tr>
                                                </table>
                                                <input type="submit" value="Sign-up" class="submitbtn" />
                                         <?php echo form_close(); ?>
                                </div>
                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
