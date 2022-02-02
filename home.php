<?php
include 'inc/header.php';

Session::CheckSession();

$logMsg = Session::get('logMsg');
if (isset($logMsg)) {
  echo $logMsg;
}
$msg = Session::get('msg');
if (isset($msg)) {
  echo $msg;
}
Session::set("msg", NULL);
Session::set("logMsg", NULL);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lost and Found</title>
<style>
    .header{
        min-height: 100vh;
        background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%), url(image/bgx.jpg); 
        background-position: center;
        background-size: cover; 
        position: absolute; 
        background-color: #2a2a72;
        top: 0; 
        left: 0; 
        width: 100%;
        height: auto;
        z-index: -1;
    }
    .bg-dark{
        background-color:#343a4000!important;
        border-bottom: none!important;
    }
    .how{
        padding-top: 780px!important;
    }
    .IMGLOG > img {
        width:860px;
    }
    .IMGLOG{
        right:120px;
    }
</style>
    </head>
   

    <body>

        
         <section class="header">





    


        <div class="text-box">
            <h1>Lost it. Find it</h1>
            
        </div>
        <div class="IMGLOG">
            <img src="image/home_lnf.png">
        </div>
    </section> 

    <!----------------How It Works?---------------->

    <section class="how">
        <div class="row"> 
            <div class="how-col">
                <img src="image/Register.jpg">
                <a href="Finder.html" style="color: white">
                <div class="layer">
                    <h3>REGISTER LOST ITEMS</h3>
                </div></a>
           
            </div>
            <div class="how-col">
                <img src="image/Picture2.jpg">
                <div class="layer">
                    <a href="ListItem.html" style="color: white">
                    <h3>RECORD OF LOST & FOUND OBJECTS</h3>
                </div></a>

            </div>
            <div class="how-col">
                <img src="image/pic.jpg">
                <div class="layer">
                    <a href="Inventory.html" style="color: white">
                    <h3>PERFORM INVENTORY</h3>
                </div></a>
            </div>

           
        </section>
        

            <!-- --------------------Contact Us---------------- -->

         <!-- <section>
             <div class="Contacttext">
                 <h1>Contact Us</h1>
                 <p>If there is something you want to suggest<br> or may be just a hello do reach out.</p>
             </div>
         </section>

          
   <section>
     <div class="contact">
        
        <form action="#">
            <div class="user-details">

                <div class="input-box">
                    <input type="text" placeholder="Enter Your Name"required>
                </div>
                
                <div class="input-box">
                    <input type="text" placeholder="Enter Email Address"required>
                </div>

                <div class="input-box">
                    <input type="text" placeholder="Enter Your Subject"required>
                </div>
                

                <div class="input-box">
                    <span class="details"></span>
                    <textarea rows="8"placeholder="Description" required></textarea>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="submit">
              </div>
      
        </form>
    </section> -->
         <!-- --------------------Location---------------- -->
  

         <section class="location" style="margin:75px;">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d74687.
            38268811672!2d123.84365216936708!3d10.320101631660462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
            1!3m3!1m2!1s0x33a99f7f2e5b509f%3A0xf09a8aaef00e1935!2sCebu%20City%2C%20Cebu!5e0!3m2!1sen!2sph!4v1630862452575!5m2!1sen!2sph" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section> 

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>   
        
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-database.js"></script>
    
        <!-- TODO: Add SDKs for Firebase products that you want to use
            https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-analytics.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-auth.js"></script>
        <script src="/js/firebase.js"></script>
        <script src="/js/main.js"></script>

    </body>
    
    
    

</html>

<?php
  include 'inc/footer.php';
?>