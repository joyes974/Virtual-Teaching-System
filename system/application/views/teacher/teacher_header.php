<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
        <meta charset="UTF-8" />
        <title>Virtual Teaching System</title>
        <link rel="stylesheet" type="text/css" href="<?=site_url()?>resources/css/style.css" />
        <!--[if IE 8]>
                <link rel="stylesheet" type="text/css" href="<?=site_url()?>resources/css/ie8.css" />
        <![endif]-->
        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" href="<?=site_url()?>resources/css/ie7.css" />
        <![endif]-->
        <!--[if IE 6]>
                <link rel="stylesheet" type="text/css" href="<?=site_url()?>resources/css/ie6.css" />
        <![endif]-->
                <script type="text/javascript" src="<?=site_url();?>script/jquery-1.4.2.min.js"></script>
                
        <script type="text/javascript">
                <!--
                var image1=new Image()
                image1.src="<?=site_url()?>resources/images/banner7.png"
                var image2=new Image()
                image2.src="<?=site_url()?>resources/images/banner4.png"
                var image3=new Image()
                image3.src="<?=site_url()?>resources/images/banner5.png"
                //-->
        </script>
                
</head>
<body>
        <div id="header">
                <div>
                        <div>
                                <div id="logo">
                                        <a href="<?=site_url('welcome')?>"><img src="<?=site_url()?>resources/images/logo_vts.png" alt="Logo"/></a>
                                </div>
                                <div>
                                        <div>
                                          You are logged in as <?php echo $teacher_email; ?> | <?=anchor('logout', 'Sign Out');?>
                                        </div>
                                        <form action="<?=site_url("lecture/search/");?>" method="post">
                                                <input type="text" id="search" maxlength="30" name="search" />
                                                <input type="submit" value="" name="submit" id="searchbtn" />
                                        </form>
                                </div>
                        </div>
                        <ul>
                                <?php
                               $current=$this->uri->segment(1); //current controllers
                               $current1=$this->uri->segment(2);
                               $current2= $current.'/'.$current1;
                                ?>
                                <li class="<?php if($current2=='teacher_home/') echo 'current';?>"><a href="<?=site_url('teacher_home/')?>">Home</a></li>
                                <li class="<?php if($current2=='teacher_home/teacher_info') echo 'current';?>"><a href="<?=site_url('teacher_home/teacher_info')?>">Teacher</a></li>
                                <li class="<?php if($current2=='department/') echo 'current';?>"><a href="<?=site_url('department')?>">Department</a></li>
                                <li class="<?php if($current2=='lecture/') echo 'current';?>"><a href="<?=site_url('lecture')?>">Lecture</a></li>
                                <li class="<?php if($current2=='teacher_home/post_lecture') echo 'current';?>"><a href="<?=site_url('teacher_home/post_lecture')?>">Post Lecture</a></li>
                                <li class="<?php if($current2=='teacher_home/lecture_list_subject') echo 'current';?>"><a href="<?=site_url('teacher_home/lecture_list_subject')?>">My Lecture List</a></li>
                        </ul>
                        <div id="section">
                            <img src="<?=site_url()?>resources/images/banner7.png" name="slide" width="940" alt="Image"/>


                <script type="text/javascript">
                                <!--
                                //variable that will increment through the images
                        var step=1
                        function slideit(){
                        //if browser does not support the image object, exit.
                        if (!document.images)
                        return
                        document.images.slide.src=eval("image"+step+".src")
                        if (step<3)
                        step++
                        else
                        step=1
                        //call function "slideit()" every 2.5 seconds
                        setTimeout("slideit()",2500)
                        }
                        slideit()
                        //-->
                </script>
                        </div>
                </div>
        </div>
