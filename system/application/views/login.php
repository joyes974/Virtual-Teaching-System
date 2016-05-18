<?php include_once 'header.php'; ?>
        <div id="content">
                <div>
                        <div id="account">
                                <div>
                                        <?php echo form_open('login'); ?>
                                                <span>SIGN-IN</span>
                                                <?php if(isset($msg)){
                                                        echo $msg;
                                                        }
                                                ?>
                                                <table>
                                                        <tr>
                                                            <td> <label for="username">User Type</label></td>
                                                            <td><select name="type">
                                                                <option value=""> - Select User Type -</option>
                                                                <option value="1" > - Teacher-</option>
                                                                <option value="2"> - User -</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr><td></td><td><font color="red"><?php echo form_error('type'); ?></font></td></tr>
                                                        <tr>
                                                                <td><label for="email">Email</label></td>
                                                                <td><input type="text" id="email" name="username" />
                                                                 </td>
                                                        </tr>
                                                        <tr><td></td><td><font color="red"><?php echo form_error('username'); ?></font></td></tr>
                                                        <tr>
                                                                <td><label for="password">Password</label></td>
                                                                <td><input type="password" id="password" name="password"/>
                                                                 </td>
                                                        </tr>
                                                       <tr><td></td><td><font color="red"><?php echo form_error('password'); ?></font></td></tr>
                                                        <tr>
                                                                <td></td>
                                                                <td class="rememberme"><label for="rememberme"><?php echo anchor('sign/forget_password/','Forget Your Password'); ?></label></td>
                                                        </tr>
                                                </table>
                                                <input type="submit" name="login" value="Login" class="submitbtn"/>
                                         <?php echo form_close(); ?>
                                </div>
                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
