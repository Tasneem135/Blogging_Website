<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title> 
        <link href="home.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body onload="slider()">
     <!----------------------------------1st Section------------------------------->

     <!--------------------------------------NAVBAR--------------------->

     <nav class="navbars">
     <div class="social">
            <ul>
            <li><a href="#"><i class="bi bi-search"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></i></a></li>
            <li><a href="#"><i class="bi bi-youtube"></i></i></a></li>
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-google"></i></i></a></li>
           </ul>
     </div>
</div>

     <nav class="navbar">
    
        <div class="left">
            <p>Blog Circle</p>
        </div>
        <div class="center">
        <ul>
        <li><a href="userhome.php" ><i class="bi bi-house-door" class="active">Home</i></a></li>
        <li><div class="nav">
           <div class="drop"> <a href="#"><i class="bi bi-view-list">Catgory</i>
            <div class="dropdown">
            <a href="#">Cooking</a>
            <a href="#">Travelling</a>
            <a href="#">Tec</a>
            <a href="#">Sports</a>
            <a href="#">Others</a>
            </div>
             </div>
            </div>
        </li>
        <li><a href="#"><i class="bi bi-people">About Us</i></a></li>
        <li><a href="#"><i class="bi bi-telephone">contact Us</i></a></li>

        </ul>
        </div>
       
        
    </nav>


            <!-------------------------navbar--------------------------------->
        <div class="banner">
            <div class="slider">
                <img src="img/img101.jpg" id="slideimg">
            </div>
            <div class="overlay">
           
            <div class="content">
                <h1>Welcome To Blog Circle<h1>
                <h4>Lets Start Blogging<h4>
            </div>
            <div>
            <a href="registration.php"><button type="submit" class="reg" name="submit"  >Register</button></a>
            </div>
            </div>
        </div>

        <div class="main">
        </div>

         <!----------------------------------1st Section------------------------------->
         <div class="text"><h2>Catagory</h2></div>
         <div class="line"></div>
         <!----------------------------------2nd Section------------------------------->
        <div class="container">
            <!----card---->
            <div class="card">
                <div class="imgbox">
                    <img src="img/img103.jpg">
                 </div>
                <div class="content">
                    <h2>Cooking</h2>
                    <p>easy cooking hacks in 5 min</p>
                    <button type="submit" class="view" name="submit"  >VIEW</button>
                </div>
            </div>

            <!----card---->
            <div class="card">
                <div class="imgbox">
                    <img src="img/img104.jpg">
                 </div>
                <div class="content">
                    <h2>Tec</h2>
                    <p>Tec hacks in 5 min</p>
                    <button type="submit" class="view" name="submit"  >VIEW</button>
                </div>
            </div>

            <!----card---->
            <div class="card">
                <div class="imgbox">
                    <img src="img/img95.webp">
                 </div>
                <div class="content">
                    <h2>Travelling</h2>
                    <p>easy Travelling hacks in 5 min</p>
                    <button type="submit" class="view" name="submit"  >VIEW</button>
                </div>
            </div>

            <!----card---->
            <div class="card">
                <div class="imgbox">
                    <img src="img/img80.jpg">
                 </div>
                <div class="content">
                    <h2>Sports</h2>
                    <p>easy Sports hacks in 5 min</p>
                    <button type="submit" class="view" name="submit"  >VIEW</button>
                </div>
            </div>

            <!----card---->
            <div class="card">
                <div class="imgbox">
                    <img src="img/img3.jpg">
                 </div>
                <div class="content">
                    <h2>Other</h2>
                    <p>Easy  hacks in 5 min</p>
                    <button type="submit" class="view" name="submit"  >VIEW</button>
                </div>
            </div>
        </div>

<!----------------------------------2nd Section------------------------------->
<div class="text"><h2>Recent Blogs</h2></div>
         <div class="line"></div>
<!----------------------------------3rd Section------------------------------->

        <div class="recent">
        
        <!---------------recent post------------->
        <div class="con">
        <div class="imgbox">
            <img src="img/img66.jpg">
        </div>
            <div class="details">
              <span>Make Parata in the easiest way</span>
              <p>Take 1 cup flour 1 cup warm water make a thik liquied ............</p><br>
              <button type="submit" class="more" name="submit"  >READ</button>
            </div>

         </div>


         <!---------------recent post------------->
        <div class="con">
        <div class="imgbox">
            <img src="img/img66.jpg">
        </div>
            <div class="details">
              <span>Make Parata in the easiest way</span>
              <p>Take 1 cup flour 1 cup warm water make a thik liquied ............</p><br>
              <button type="submit" class="more" name="submit"  >READ</button>
            </div>
         </div>

         <!---------------recent post------------->
        <div class="con">
        <div class="imgbox">
            <img src="img/img66.jpg">
        </div>
            <div class="details">
              <span>Make Parata in the easiest way</span>
              <p>Take 1 cup flour 1 cup warm water make a thik liquied ............</p><br>
              <button type="submit" class="more" name="submit"  >READ</button>
            </div>
         </div>
       
        </div>
     
<!----------------------------------3rd Section------------------------------->

<!----------------------------------Script------------------------------->

        <script>
            var slideimg = document.getElementById("slideimg");
            var images = new Array(
                "img/img101.jpg",
                "img/img1.jpg",
                "img/img101.jpeg",
            );
            var len = images.length;
            var i = 0;
            function slider(){
                if (i > len-1){
                    i=0;
                }

                slideimg.src=images[i];
                i++;
                setTimeout('slider()',1000);
            }
        </script>


    <body>

    
</html>

