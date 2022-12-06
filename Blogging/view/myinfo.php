<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Information</title> 
        <link href="myinfo.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
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
            <a href="#">Tech</a>
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
                    <li><a href="Profile.php"><i class="bi bi-person-circle">Profile</i></a></li>
                    <li><a href="myinfo.php"><i class="bi bi-pencil">My Info</i></a></li>
                    <li><a href=""><i class="bi bi-pencil-square">Change Password</i></a></li>
                    <li><a href="gallery.php"><i class="bi bi-images">Gallery</i></a></li>
                    <li><a href="post.php"><i class="bi bi-bookmark-fill">Posts</i></a></li>

                </ul>
            </div>
        </div>
           <!-----------------LEFT FINISHED---------------->

           <!-----------------RIGHT---------------->
           
           <div class="coright">
           <div class="myinfo">
                    <div class="info">
                    <h1>MY INFORMATION</h1>
                    <!---<div class="ic"><a href="#" onclick="openPopup()"><i class="bi bi-pencil"><h2>Edit</h2></i></a></div>---->
                    <button type="submit" class="edi" name="submit"  onclick="openPopup()"><i class="bi bi-pencil"></i>Edit</button>
                    </div>
            </div>  
                
                <div class="myinfoo">
                    <div class="infoo">
                    <h1><lable>First Name: </lable>Sumaiya </h1>
                   </div>
                   <div class="infoo">
                    <h1><lable>Last Name: </lable>Sumaiya </h1>
                   </div>
                   <div class="infoo">
                    <h1><lable>Email: </lable>sumaiya@gmail.com </h1>
                   </div>
                   <div class="infoo">
                    <h1><lable>Gender: </lable>Female</h1>
                   </div>
                   <div class="infoo">
                    <h1><lable>Username: </lable>sumaiya123</h1>
                   </div>
                  
              </div>
             
            </div>
           <!-----------------RIGHT FINISHED---------------->
        <!--------------------------popup----------------->

        <div class="popup" id="popup">
                <div class="cross"><i class="bi bi-x-circle-fill" onclick="closePopup()"></i></div>
                 <form method="post"  >
                    <div class="infos">
                    <h1><lable>First Name: </lable><input type="text"  id="fname" name="fname" placeholder="First Name"  ></h1>
                   </div>
                   <div class="infos">
                    <h1><lable>Last Name: </lable><input type="text"  id="lname" name="lname" placeholder="Last Name" ></h1>
                   </div>
                   <div class="infos">
                    <h1><lable>Email: </lable><input type="email"  id="email" name="email" placeholder="E-mali" ></h1>
                   </div>
                   <div class="infos">
                    <h1><lable>Gender: </lable><input type="text" id="gender" name="gender" placeholder="Gender">
                   </div>
                   <div class="infos">
                    <h1><lable>Username: </lable><input type="text" id="uname" name="uname" placeholder="User Name"></h1>
                   </div>
                   <button type="submit" class="editt" name="edittt"  onclick="closePopup()">Save</button>
                   </form>

              </div>
        <!--------------------Popup----------------------->


    </div>
    <!----------------------------------------Page Finished----------------------------------->
    <!----------------------------------------Script----------------------------------------->
    <script>
    let popup=document.getElementById("popup");

    function openPopup(){
        open-popup.classList.add("open-popup"); 
    } 

    function closePopup(){
        open-popup.classList.remove("open-popup"); 
    } 
    
    </script>

    <!----------------------------------------Script----------------------------------------->

    </body>
</head>