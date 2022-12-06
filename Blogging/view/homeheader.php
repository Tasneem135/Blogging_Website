<html>
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Header Page</title> 
        <link href="homeheader.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
     
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
        <li><a href="aboutus.php"><i class="bi bi-people">About Us</i></a></li>
        <li><a href="contactus.php"><i class="bi bi-telephone">contact Us</i></a></li>
        </ul>
        </div>
    </nav>
            <!-------------------------navbar--------------------------------->

</body>
</html>