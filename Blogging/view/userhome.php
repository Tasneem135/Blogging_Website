<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Homer Page</title> 
        <link href="userhome.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
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
                    <h1>Sumaiya</h1><br>
                </div>
            </div>
            <div class="profile">

                <ul>
                    <li><a href="profile.php"><i class="bi bi-person-circle">Profile</i></a></li>
                    <li><a href="myinfo.php"><i class="bi bi-pencil">My Info</i></a></li>
                    <li><a href=""#><i class="bi bi-pencil-square">Change Password</i></a></li>
                    <li><a href="gallery.php"><i class="bi bi-images">Gallery</i></a></li>
                    <li><a href="post.php"><i class="bi bi-bookmark-fill">Posts</i></a></li>

                </ul>
            </div>
        </div>
           <!-----------------LEFT FINISHED---------------->


           <!-----------------RIGHT---------------->

        <div class="coright">
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
              <!-----------------POST---------------->
              <div class="posted">
                 <div class="postedby">
                  <img src="img/img92.jpg" width="100%" >
                  <div>
                 <h1>User</h1>
                 <h6>Travel vlog | Posted 3hour ago</h6>
                 </div>
                 </div>
                 <div class="userpost">
                 <p>Before travelling checks the thing properly</p>
                 <img src="img/img95.webp" width="100%" >
                </div>
                <div class="like">
                <li><i class="bi bi-chat">Comments</i></li>
                <li><i class="bi bi-hand-thumbs-up">Like</i></li>
                </div>
               </div>
              <!-----------------POST---------------->
              <div class="posted">
                 <div class="postedby">
                  <img src="img/img93.jpg" width="100%" >
                  <div>
                 <h1>User</h1>
                 <h6>Cooking vlog | Posted 3days ago</h6>
                 </div>
                 </div>
                 <div class="userpost">
                 <p>Use a wooden spoon to stir </p>
                     <p>the mixture until well combined,</p> 
                     <p>then use your hands to bring the dough</p>
                     <p>together in the bowl. Turn onto a lightly</p>
                     <p>floured surface and knead for 10 minutes or until the dough is smooth and elastic.</p>
                 <img src="img/img94.jpg" width="100%" >
                </div>
                <div class="like">
                <li><i class="bi bi-chat">Comments</i></li>
                <li><i class="bi bi-hand-thumbs-up">Like</i></li>
                </div>
               </div>
             <!-----------------POST FINISHED---------------->
        </div>
          <!-----------------RIGHT FINISHED---------------->

    </div>
    <!----------------------------------------Page Finished----------------------------------->
    </body>
</html>