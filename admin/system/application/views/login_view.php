<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 
        <head>
                
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                
                <title>Virtual Teaching Admin | Sign In</title>
                
                <!--                       CSS                       -->
                 <base href="<?=base_url()?>" />
          
                <!-- Reset Stylesheet -->
                <link rel="stylesheet" href="<?=site_url()?>resources/css/reset.css" type="text/css" media="screen" />
          
                <!-- Main Stylesheet -->
                <link rel="stylesheet" href="<?=site_url()?>resources/css/style.css" type="text/css" media="screen" />
                
                <!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
                <link rel="stylesheet" href="<?=site_url()?>resources/css/invalid.css" type="text/css" media="screen" />        
                
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
                <script type="text/javascript" src="<?=site_url()?>resources/scripts/jquery-1.3.2.min.js"></script>
                
                <!-- jQuery Configuration -->
                <script type="text/javascript" src="<?=site_url()?>resources/scripts/simpla.jquery.configuration.js"></script>
                
                <!-- Facebox jQuery Plugin -->
                <script type="text/javascript" src="<?=site_url()?>resources/scripts/facebox.js"></script>
                
                <!-- jQuery WYSIWYG Plugin -->
                <script type="text/javascript" src="<?=site_url()?>resources/scripts/jquery.wysiwyg.js"></script>
                
                <!-- Internet Explorer .png-fix -->
                
                <!--[if IE 6]>
                        <script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
                        <script type="text/javascript">
                                DD_belatedPNG.fix('.png_bg, img, li');
                        </script>
                <![endif]-->
                
        </head>
        
        <?php //include_once 'header.php';?>
         <body id="login">
         <div id="login-wrapper" class="png_bg">
         
         <div id="login-top">
                        
                                Welcome To Our Virtual Teaching System Administrative panel</br>
                                <?=date('l F d, Y') ?>
         <a href="<?=site_url('login') ?>" title="Login">Login</a>
                                <!-- Logo (221px width) -->
                                
                        </div> <!-- End #logn-top -->
                        
         
         <div id="login-content">
                  
           
                   <form action='<?=site_url('verifylogin')?>' method='post'>
                 <?php 
          echo validation_errors();
            ?>
                
                                        <div class="notification information png_bg">
                                                <div>
                                                        Just click "Sign In".
                                                </div>
                                        </div>
             <p>
                                                <label for="username">Username</label>
                                                <input class="text-input" type="text" id="username" name="username"/>
                                        </p>
                                        <div class="clear"></div>
                                        <p>
                                                <label for="password">Password</label>
                                                <input class="text-input" type="password" id="passowrd" name="password"/>
                                        </p>

                                        <div class="clear"></div>
                                        <p>
                                                <input class="button" type="submit" value="Login" />
                                        </p>
           </form>
          
           </div>
           </div>
         </body>
</html>
