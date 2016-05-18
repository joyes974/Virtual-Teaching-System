<?php include_once 'user_header.php'; ?>

 <div id="content">
                <div>

                        <div id="account">
                                <div>
                                        <?php echo form_open('user_home/update/'); ?>
                                                <span>Edit User</span>
                                                <table>
                                                        <tr>
                                                                <td><label for="id">Id</label></td>
                                                                <td><input type="text" id="id" name="" value="<?= (isset($user_id))?$user_id:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="name">Name</label></td>
                                                                <td><input type="text" id="name" name="user_name" value="<?= (isset($user_name))?$user_name:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="email">Email</label></td>
                                                                <td><input type="text" id="email" name="user_email" value="<?= (isset($user_email))?$user_email:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="password">Password</label></td>
                                                                <td><input type="password" id="password" name="user_password" value="<?= (isset($user_password))?$user_password:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="occupation">Occupation</label></td>
                                                                <td><input type="text" id="occupation" name="user_occupation" value="<?= (isset($user_occupation))?$user_occupation:'';?>"/></td>
                                                        </tr>
                                                        <tr>
                                                                <td><label for="user_country">Country</label></td>
                                                                <td>
                                                                <select name="user_country" id="user_country">
                                                                <option name="<?= (isset($user_country))?$user_country:'';?>"><?= (isset($user_country))?$user_country:'';?></option>
                                                                <option name="Bangladesh">Bangladesh</option>
                                                                <option name="Pakistan">Pakistan</option>
                                                                <option name="Srilanka">Srilanka</option>
                                                                <option name="india">India</option>
                                                                </select>
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

