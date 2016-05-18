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
          <script type="text/javascript">
                <!--
                var image1=new Image()
                image1.src="<?=site_url()?>resources/images/banner7.png"
                var image2=new Image()
                image2.src="<?=site_url()?>resources/images/banner6.png"
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
                                          <a href="<?=site_url('teacher')?>">Teacher Sign Up</a>
                                          <a href="<?=site_url('student')?>">Student |</a>
                                          <a href="<?=site_url('sign')?>" class="last">Sign in |</a>

                                        </div>

                                </div>
                        </div>
                        <ul>
                                <?php
                               $current=$this->uri->segment(1); //current controllers
                                ?>
                                <li class="<?php if($current=='welcome') echo 'current';?>"><a href="<?=site_url('welcome')?>">Home</a></li>
                                <li class="<?php if($current=='about') echo 'current';?>"><a href="<?=site_url('about')?>">About us</a></li>
                                <li class="<?php if($current=='contact') echo 'current';?>"><a href="<?=site_url('contact')?>">Contact Us</a></li>
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
