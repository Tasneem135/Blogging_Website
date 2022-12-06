<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile Page</title> 
        <link href="profile.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
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
        <div class="profile">
            <!----------------profile info------------------>
        <div class="coverpic">
            <img src="img/img91.jpg">
            <div class="profilepic">
            <img src="img/img90.jpg"><br><br><br>
            </div>
            <div class="text">
            <h1>Name : Sumaiya </h1><br>
            <button type="submit"  name="submit" class="edit" ><a href="myinfo.php"><i class="bi bi-pencil">See Your Info</i></a></button><br>
            </div>
        </div>
        <!----------------profile info finished------------------>
        <!--------------------------POST------------------------------>
        <div class="post">
                <div class="postinput">
                  <img src="img/img90.jpg" >
                  <textarea rows="2" placeholder="Write a post"></textarea>
                </div>
                <div class="posts">
                     <li><a href=""#><i class="bi bi-camera-reels-fill">Video</i></a></li>
                    <li><a href="post.php"><i class="bi bi-file-earmark-arrow-up-fill">Post</i></a></li>
               </div>
        </div>
        <!----------------------------POST FINISHED---------------------------->
        
         <div class="yourpost">
            <h1>My Posts</h1>
         </div>


        <!----------------------Your POst---------------------------->
    
        <div class="up">
            <h1>Cooking </h1><br>
            <img src="img/img94.jpg">
        </div>
     
      <!---------------------Your POST FINISHED-------------------->
      <!----------------------Your POst---------------------------->
    
      <div class="up">
            <h1>Tec</h1><br>
            <img src="img/img1.jpg">
        </div>
     
      <!---------------------Your POST FINISHED-------------------->
             </div>
        </div>
    <!---------------------------------------page Finished--------------------------->

    
    </body>
</html>