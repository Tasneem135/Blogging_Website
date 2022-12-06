<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title> 
        <link href="contactus.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />   
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body>
    <!----------------------------------------nav----------------------------------->
    <?php include 'homeheader.php';?>
    <!----------------------------------------nav finished----------------------------------->

    
    <!---------------------------contact us--------------------------->
    <div class="contact">                                  
            <div class="container">
                <div class="left">
                    <div class="para2"> <h1>Contact Us</h1> </div><br><br>
                    <div class="para3"><h6 style="color:  aliceblue;">Any question or Remarks?</h6> </div>
                    <div class="para3"><h6 style="color:   aliceblue">Fill up the form Our Team will get back to you with in 24 hours</h6> </div>
                 <br><br>
                <br>
                <div class="icon">
                <ul>
                  <li><i class="bi bi-telephone">012345678</i></li>
                  <li><i class="bi bi-envelope">blogcircle@gmail.com</i></li>
                  <li><i class="bi bi-geo-alt">Bashundhara R/A,Dhaka</i></li>
                 </ul>
                 </div>
                </div>
                <div class="right">
                    <div class="message">
                    <button type="submit" class="edi" name="submit"  onclick="openPopup()"><i class="bi bi-envelope-open"></i>Drop Down Message Here</button>
                    <div class="gif"><img src="img/contact1.gif"></div>
                    </div>
                </div>


                <!---------------------popup-------------------->
            <div class="box" id="box">
            <div class="cross"><i class="bi bi-x-circle-fill" onclick="closePopup()"></i></div>
                 <form method="post">
                 <p><input type="text"  id="fname" name="fname" placeholder="Full Name"  > </p>
                 <p><input type="email"  id="email" name="email" placeholder="E-mali" ></p>
                 <textarea  rows="12" id="write" name="postt" placeholder="Your Message"  required=" "></textarea><br>
                 <button type="submit" class="editt" name="edittt" onclick="closePopup()"> Submit </button>
            </form>

         </div>
            <!-------------------------popup------------------>
            </div>    
    </div>
    <!---------------------------contact us--------------------------->


     <!----------------------------------------Script----------------------------------------->
     <script>
    let popup=document.getElementById("box");

    function openPopup(){
        open-popup.classList.add("open-popup"); 
    } 

    function closePopup(){
        open-popup.classList.remove("open-popup"); 
    } 
    
    </script>

    <!----------------------------------------Script----------------------------------------->


</body>
</html>