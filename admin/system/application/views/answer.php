<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

        <head>

                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

                <title>Virtual Teaching System</title>

                <!--                       CSS                       -->
                 <base href="<?=base_url()?>" />

                <!-- Reset Stylesheet -->
                <link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />

                <!-- Main Stylesheet -->
                <link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />

                <!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
                <link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />

                <!-- Colour Schemes

                Default colour scheme is green. Uncomment prefered stylesheet to use it.

                <link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />

                <link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />

                -->

                <!-- Internet Explorer Fixes Stylesheet -->

                <!--[if lte IE 7]>
                        <link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
                <![endif]-->

                <!--                       Javascripts                       -->

                <!-- jQuery -->
                <script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>

                <!-- jQuery Configuration -->
                <script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>

                <!-- Facebox jQuery Plugin -->
                <script type="text/javascript" src="resources/scripts/facebox.js"></script>

                <!-- jQuery WYSIWYG Plugin -->
                <script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>

                <!-- Internet Explorer .png-fix -->

                <!--[if IE 6]>
                        <script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
                        <script type="text/javascript">
                                DD_belatedPNG.fix('.png_bg, img, li');
                        </script>
                <![endif]-->

        </head>

        <body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

                <div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

                        <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>

                        <!-- Logo (221px wide) -->
                        <a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>

                        <!-- Sidebar Profile links -->
                        <div id="profile-links">
                                <?php echo anchor('home/logout', 'Sign Out');?>
                        </div>

                        <ul id="main-nav">  <!-- Accordion Menu -->

                                <li>
                                        <a href="<?=site_url();?>" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                                                Dashboard
                                        </a>
                                </li>

                                
                                <li>
                                        <a href="#" class="nav-top-item">
                                                Settings
                                        </a>
                                        <ul>
                                                 <li><a href="<?=site_url();?>admn"><span>
                                      Admin
                                </span></a></li>

                                <li><a href="<?=site_url();?>user"><span>
                                        User
                                </span></a></li>

                                <li><a href="<?=site_url();?>department"><span>
                                        Department
                                </span></a></li>

                                <li><a href="<?=site_url();?>teacher"><span>
                                        Teacher
                                </span></a></li>

                                <li><a href="<?=site_url();?>lecture"><span>
                                        Lecture
                                </span></a></li>

                                <li><a href="<?=site_url();?>answer"><span>
                                        Answer
                                </span></a></li>

                                <li><a href="<?=site_url();?>question"><span>
                                        Question
                                </span></a></li>
                                                                
                                                                
                                        </ul>
                                </li>

                        </ul> <!-- End #main-nav -->

                        <div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->

                                <h3>3 Messages</h3>

                                <p>
                                        <strong>17th May 2009</strong> by Admin<br />
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                                        <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                                </p>

                                <p>
                                        <strong>2nd May 2009</strong> by Jane Doe<br />
                                        Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                                        <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                                </p>

                                <p>
                                        <strong>25th April 2009</strong> by Admin<br />
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                                        <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                                </p>

                                <form action="" method="post">

                                        <h4>New Message</h4>

                                        <fieldset>
                                                <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
                                        </fieldset>

                                        <fieldset>

                                                <select name="dropdown" class="small-input">
                                                        <option value="option1">Send to...</option>
                                                        <option value="option2">Everyone</option>
                                                        <option value="option3">Admin</option>
                                                        <option value="option4">Jane Doe</option>
                                                </select>

                                                <input class="button" type="submit" value="Send" />

                                        </fieldset>

                                </form>

                        </div> <!-- End #messages -->

                </div></div> <!-- End #sidebar -->

                <div id="main-content"> <!-- Main Content Section with everything -->

                        <noscript> <!-- Show a notification if the user has disabled javascript -->
                                <div class="notification error png_bg">
                                        <div>
                                                Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
                                        </div>
                                </div>
                        </noscript>

                        <!-- Page Head -->
                        <h2>You are logged in <?php echo $username; ?>
                        <form action="<?=site_url("answer/search/");?>" method="post" style="float:right;">
                        Answer :
                        <input name="search" type="text" /><input name="submit" type="submit" value="Search" />
                    </form>
                        </h2>
                        <div align="Right"> <?=date('l F d, Y') ?></div>

                        <ul class="shortcut-buttons-set"> <!-- Replace the icons URL's with your own -->

                                 <li><a class="shortcut-button" href="<?=site_url();?>admn"><span>
                                      Admin
                                </span></a></li>

                                <li><a class="shortcut-button" href="<?=site_url();?>user"><span>
                                        User
                                </span></a></li>

                                <li><a class="shortcut-button" href="<?=site_url();?>department"><span>
                                        Department
                                </span></a></li>

                                <li><a class="shortcut-button" href="<?=site_url();?>teacher"><span>
                                        Teacher
                                </span></a></li>

                                <li><a class="shortcut-button" href="<?=site_url();?>lecture"><span>
                                        Lecture
                                </span></a></li>

                                <li><a class="shortcut-button" href="<?=site_url();?>answer"><span>
                                        Answer
                                </span></a></li>

                                <li><a class="shortcut-button" href="<?=site_url();?>question"><span>
                                        Question
                                </span></a></li>
                                                                

                        </ul><!-- End .shortcut-buttons-set -->

                        <div class="clear"></div> <!-- End .clear -->

                        <div class="content-box"><!-- Start Content Box -->

                                <div class="content-box-header">

                                        <h3>Content box</h3>

                                      

                                        <div class="clear"></div>

                                </div> <!-- End .content-box-header -->

                                <div class="content-box-content">

                                        <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->

                                                

                                                <table>

                                                        <thead>
                                                                <tr>
                                                                <th colspan=8>Teacher Lecture Information</th>
                                                                </tr>
                                                                <tr>
                                                                   <th>Id</th>
                                                                   <th>Lecture Id</th>
                                                                   <th>Teacher Email</th>
                                                                   <th>Question</th>
                                                                   <th>Answer</th>
                                                                   <th>Status</th>
                                                                   <th>Delete</th>
                                                                </tr>

                                                        </thead>
        <tbody>

        <tr>
        <?php
                $ur=base_url();
                foreach($query as $row)
                {
                        $status=$row->status;
                        $ac=anchor('answer/mithun/'.$row->answer_id.'/'.$row->status,'Deactive');
                        $dac=anchor('answer/mithun/'.$row->answer_id.'/'.$row->status,'Active');
                        echo "<tr>";
                        echo "<th>".$row->answer_id."</th>";
                        echo "<th>".$row->lecture_id."</th>";
                        echo "<th>".$row->teacher_email ."</th>";
                        echo "<th>".$row->question."</th>";
                        echo "<th><a href='".$ur."answeruploads/".$row->answer."'>".$row->answer."</a></th>";
                        if($status=='active')
                        {
                                echo "<td>".$ac."</td>";
                        }
                        else
                        {
                                echo  "<td>".$dac."</td>";
                        }
                      echo "<th>".anchor('answer/delete/'.$row->answer_id,'delete')."</th>";
                 }?>


         </tbody>
         </table>
         <br><br>
         <?php include_once 'footer.php'; ?>
</body>
</html>
