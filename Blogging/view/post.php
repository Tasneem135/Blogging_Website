<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile Page</title> 
        <link href="post.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
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
                    <li><a href="profile.php"#><i class="bi bi-person-circle">Profile</i></a></li>
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
             
            <div class="postbox">
               <h1>Create Blog</h1><br>
	             <hr>
                   <form method="post" action="" enctype="multipart/form-data">
	
	               <select name="write"id="blog" >
                   <option  name="write" value ="Traveling"></option>
	               <option  name="write" value ="Traveling">Traveling</option>
	               <option  name="write" value ="Tech">Tech</option>
	               <option  name="write" value ="Cooking">Cooking</option>
	               <option  name="write" value ="Others">Others</option>
                  </select>

                  <textarea  id="write" name="postt" placeholder="Write your blog..."  required=" "></textarea><br>
                   <table> <br>
                  
                   <input type="file" name="fileName" id="file" style="margin-left:30%;" class="file"><br><br>
                  </table> 
                </tr>
               </table>
               <button type="submit" class="post-log" name="submit"  ><h1>Post Now</h1></button>
            </div>
            </form>
            </div>
             
           </div>
           <!-----------------RIGHT FINISHED---------------->
           </div>
    </body>
</html>