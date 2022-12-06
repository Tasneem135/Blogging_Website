<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Gallery</title> 
        <link href="gallery.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
    <!----------------------------------------nav----------------------------------->

    <nav class="navbar">
        <div class="left">
            <p>Blog Circle</p>
        </div>
        <div class="center">
        <ul>
        <li><a href="userhome.php" ><i class="bi bi-house-door" class="active">Home</i></a></li>
        <li><div class="nav">
            <button class="drop"><i class="bi bi-view-list">Catgory</i></button>
            <div class="dropdown">
            <a href="#">Cooking</a>
            <a href="#">Travelling</a>
            <a href="#">Tec</a>
            <a href="#">Sports</a>
            <a href="#">Others</a>
            </div>
            </div>
        </li>
        <li><a href="#"><i class="bi bi-box-arrow-right">Logout</i></a></li>

        </ul>
        </div>
        <div class="right">
            <img src="img/img90.jpg" class="navimg">
        </div>

    </nav>

    <!----------------------------------------nav finished----------------------------------->


    <!----------------------------------------Page----------------------------------->
  
    <div class="container">
    
               <!-----------------LEFT---------------->
              
        <div class="coleft">
            <div class="coverpic">
                <img src="img/img91.jpg" width="100%">
                <div class="profilepic">
                    <img src="img/img90.jpg" width="100%"><br><br>
                    <h1>ABCDEFG</h1>
                    <h3>Cooking Bloger</h3><br><br>
                </div>
            </div>
            <div class="profile">

                <ul>
                    <li><a href="profile.php"><i class="bi bi-person-circle">Profile</i></a></li>
                    <li><a href="myinfo.php"><i class="bi bi-pencil">My Info</i></a></li>
                    <li><a href=""#></a><i class="bi bi-pencil-square">Change Password</i></li>
                    <li><a href="gallery.php"><i class="bi bi-images">Gallery</i></a></li>
                    <li><a href="post.php"><i class="bi bi-bookmark-fill">Posts</i></a></li>

                </ul>
            </div>
        </div>
           <!-----------------LEFT FINISHED---------------->

           <!-----------------RIGHT---------------->
           
           <div class="coright">
            <h1>Gallery</h1>
           <div class="full-img" id="fullimgBox">
            <img src="img/img1.jpg" id="fullimg">
            <div class="cross"><i class="bi bi-x-circle-fill" onclick="closefullimg()"></i></div>
            </div>
            <div class="images">
                <img src="img/img101.jpg" onclick="openfullimg(this.src)">
                <img src="img/img4.jpg" onclick="openfullimg(this.src)">
                <img src="img/img5.jpg" onclick="openfullimg(this.src)">
                <img src="img/img6.jpg" onclick="openfullimg(this.src)">
                <img src="img/img7.jpg" onclick="openfullimg(this.src)">
                <img src="img/img8.jpg" onclick="openfullimg(this.src)">
                <img src="img/img9.jpg"  onclick="openfullimg(this.src)">
                <img src="img/img10.jpg" onclick="openfullimg(this.src)">
                <img src="img/img11.jpg" onclick="openfullimg(this.src)">
                <img src="img/img12.jpg" onclick="openfullimg(this.src)">
                <img src="img/img13.jpg" onclick="openfullimg(this.src)">
                <img src="img/img103.jpg" onclick="openfullimg(this.src)">
                <img src="img/img104.jpg" onclick="openfullimg(this.src)">
                <img src="img/img111.jpg" onclick="openfullimg(this.src)">

            </div>
             
            </div>
           <!-----------------RIGHT FINISHED---------------->

           </div>
    <!----------------------------------------Page Finished----------------------------------->

    <!----------------------------script----------------------------->
    <script>
         var fullimgBox=document.getElementById("fullimgBox");
         var fullimg=document.getElementById("fullimg");

         function openfullimg(pic){
            fullimgBox.style.display="flex";
            fullimg.src=pic;
         }

         function closefullimg() {
            fullimgBox.style.display="none";
         }
    </script>
    <!----------------------------script----------------------------->

  </body>
</html>