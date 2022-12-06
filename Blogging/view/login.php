<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title> 
        <link href="login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
    </head>
    <body>                        
    <div class="banners">
            <div class="sliders">
                <img src="img/img2.jpg" id="slideimgs">
            </div>
            <div class="overlays">
            <div class="content">
                 <form class="form">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                    <div class="inside">
                     <h2>LOGIN</h2>
                     <input type="text" id="email" class="email" placeholder="Email"><br><br>
                     <input type="text" id="pass"class="pass" placeholder="Password"><br><br>
                     <input type="checkbox"  name="remember" class="cbox" ><p class="re">Remember me</p><br>
                     <button type="submit" class="log" name="submit"  ><a href="userhome.php">LOG IN<a></button><br>
                     <div class="forg"><a href="#">Forget Password?</a></div>
                    </div>
                    <br>
                    <hr>
                    <div class="icons">
                    <h5>OR</h5>
                    <h5>Login With Social Media</h5><br>
                            <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/768px-Facebook_Logo_%282019%29.png">
                                <img src="https://image.similarpng.com/very-thumbnail/2020/05/Glossy-Instagram-logo-PNG.png">
                            </div> 
                    <div class="do-reg">Don't have an account?<a href="registration.php">Register Here</a></div>
                    </form>    
            </div>
            </div>
        </div>  
    </body>
</html>