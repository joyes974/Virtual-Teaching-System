<?php include_once 'header.php'; ?>
        <div id="content">
                <div>
                        <div id="account">
                                <div>
                                        <?php echo form_open('login/forget_password'); ?>
                                                <span>Forget Password</span>
                                                <table>
                                                        <tr><td></td><td><font color="red"><?php echo form_error('type'); ?></font></td></tr>
                                                        <tr>
                                                                <td><label for="email">Email</label></td>
                                                                <td><input type="text" id="email" name="email" />
                                                                 </td>
                                                        </tr>
                                                        <tr><td></td><td><font color="red"><?php echo form_error('email'); ?></font></td></tr>
                                                </table>
                                                <input type="submit" name="login" value="Submit" class="submitbtn"/>
                                         <?php echo form_close(); ?>
                                </div>
                        </div>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
