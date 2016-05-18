<?php include_once 'header.php'; ?>
        <div id="content">
                <div>
                        <h1>Contact us</h1>

                       <?php echo form_open('contact'); ?>
                                <p>If you need assistance feel free to contact with us. </p>
                                <input type="text" maxlength="30"  class="textcontact" name="name" value="name"/>
                                <font color="red"><?php echo form_error('name'); ?></font><br />
                                <input type="text" maxlength="30" name="email_address" class="textcontact" value="email"/>
                                <font color="red"><?php echo form_error('email_address'); ?></font><br />
                                <input type="text" maxlength="30" name="subject" class="textcontact" value="subject"/>
                                <font color="red"><?php echo form_error('subject'); ?></font><br />
                                <textarea rows="17" cols="70" name="message"></textarea>
                                <font color="red"><?php echo form_error('message'); ?><font><br />
                                <input type="submit" value="Submit" class="submit" />
                        <?php echo form_close(); ?>
                </div>
        </div>
<?php include_once 'footer.php'; ?>
