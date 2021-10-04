<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShivaniVemula</title>
    <?php include 'links/links.php'?>
    <?php include 'css/style.php'?>
    
</head>
<body>
    <?php include 'menu.php'; ?>
    <!----main-header starts------->
    <div class="container mt-3" id="homeid">
    <div class="row">
        <div class="col-12 col-md-8">
             <h1 style="font-family: 'Encode Sans SC', sans-serif; color: black;">“A successful website does three things:</h1>
            <p style="color: gray;">It attracts the right kinds of <b>visitors</b>.
              <br> Guides them to the main services or product you offer.
              <br> Collect Contact details for future ongoing relation."
           </p>
           <br>
           
           <br>
          <a href="#formid"><button class="btn btn-primary">Reach Me</button></a>
        </div>
        <div class="col-6 col-md-4">
            <figure>
                <img src="https://image.freepik.com/free-vector/woman-thinks-about-time-idea-illustration_45923-205.jpg" alt="" width="350px" height="460px">
            </figure>
        </div>
      </div>
    </div>
    <br>
    <br>
    <!----main-header ends------->
    <!----about section starts------->
    <div class="container pt-3 mt-5" id="aboutid" style="margin-top: 100px;">
         <h2 class="text-center" style="color: #FF4500; font-weight:600">About Me</h2>
        <p class="text-center" style="color: gray;">grow your business with me...!!!</p>

         <div class="row mt-5" >
            
            <div class="col-6 col-md-4">
                <figure>
                    <img src="https://epe.brightspotcdn.com/dims4/default/cbeb305/2147483647/strip/true/crop/2703x1834+43+0/resize/840x570!/quality/90/?url=https%3A%2F%2Fepe-brightspot.s3.amazonaws.com%2Fe3%2Fc5%2Ff829a2654ad5a5bdcb8245893988%2F06212021-37advance-problem-solving-decision-choice-direction-thinking-1252318414.jpg" alt="" width="350px" height="460px">
                </figure>
            </div>
            <div class="col-12 col-md-8" style="margin-top: -10px;">
                <h2 style="font-family: 'STIX Two Math', serif; color: #429FE5;"><b>Hi, I'm Shivani</b></h2>
               <p>
                   I'm a Computer Science Engineer specialised in React,
                   Angular, HTML, CSS, JavaScript, jQuery, Typescript, Python, Java. 
                   I have that passion to learn and I'm passionate about work.
                
                   I build interactive websites that run across platforms & devices
              </p>
              <a href="#reachmeid" style="text-decoration: none; color: black; "><b>Let's make Something Special</b></a>
           
           </div>
          </div>

     </div>
     <br>
     <br>
    <!----about section ends------->
    <!---portfolio section starts---->
    <div class="container mt-3" id="portfolioid" style="margin-top: 100px;" >
        <h2 class="text-center" style="color: #FF4500; font-weight:600">PortFolio</h2>
        <p class="text-center" style="color: gray;">Expand your business with my skills...!!</p>
        
      <br>
      <br>
      <a href="https://github.com/shivanidotcom/Chat-app" >
        <img src="https://www.pngitem.com/pimgs/m/650-6507348_mobile-app-group-chat-app-ui-design-hd.png"  title="chat-app" class="rounded float-left" alt="..." width="300px"
        height="300px">
        
      </a>
      <a href="https://github.com/shivanidotcom/React-Todo-List"><img src="https://i2.wp.com/www.csscodelab.com/wp-content/uploads/2020/04/react-js-todo-list-snippet.png?fit=1159%2C706&ssl=1"  title="react-todo-list" class="rounded float-left" alt="..."></a>
        <div class="text-center">
         <a href="https://github.com/shivanidotcom/Ecommerce-Angular"> <img src="https://siliguriinfoline.com/wp-content/uploads/2018/05/Ecommerce-business2.jpg" title="ecommerce-angular" class="rounded" alt="...">
         </a>
      
      
        </div>
        <a href="https://github.com/shivanidotcom/remainder-birthday">
          <img src="https://addons.prestashop.com/1457923-pbig/birthday-reminder.jpg" title="birthday-remainder-react" class="rounded float-left" alt="...">
        </a>    
        <a href="https://github.com/shivanidotcom/Vehicle-Service">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNMiCHrnLtRAQa0PwzgWtzTI5M4xdFicVWKw&usqp=CAU" title="book-your-vehicle-react" class="rounded float-left" alt="...">
        </a>    
        <a href="https://github.com/shivanidotcom/Medi-Safe">
          <img src="https://www.m-ventures.com/content/3-portfolio/27-medisafe/medisafe_logo_resize.png" title="medi-safe" class="rounded float-left" alt="...">
        </a> 
          </div>
       </div>

    <!---portfolio section ends------>
     <!---contact section starts---->
    
    
    <div class="container mt-3 pt-8" id="reachmeid">
      <h2 class="text-center" style="font-weight:600; color: #FF4500;">Contact Me</h2>
      <p class="text-center" style="color: gray;">grow your business with me..!!</p>
      <form action="userinfo.php" method="post">
        <div class="form-group" id="formid">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" name="user" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleFormControlInput1">
        </div>
       
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Message</label>
          <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary" id="button">Contact me</button>
      </form>
    </div>
    <br>
    <br>
    <!---contact section ends---->
     <!---footer section starts---->
     
    <div class="container mt-3 bg-dark">
      <hr>
      
      <div class="text-center">
               <!-- GitHub -->
      <a style="color:white" href="https://github.com/shivanidotcom" role="button"
      ><i class="fab fa-github fa-lg"></i
    ></a>
    
    <!-- LinkedIn -->
    <a style="color:white;" href="https://www.linkedin.com/in/vemula-shivani-20b904211/" role="button"
      ><i class="fab fa-linkedin fa-lg"></i
    ></a>
    
    <!-- Behance -->
    <a style="color:white" href="https://www.behance.net/shivanivemula" role="button"
      ><i class="fab fa-behance fa-lg"></i
    ></a>
    
    <!-- Whatsapp -->
    <a style="color:white" href="#!" role="button"
      ><i class="fab fa-whatsapp fa-lg"></i
    ></a> 
            <!-- Dribble -->
    <a style="color:white;" href="https://dribbble.com/Shivani_Vemula" role="button"
      ><i class="fab fa-dribbble fa-lg"></i
    ></a>
    
      </div>
      <br>
      <div class="text-center">
         <a href="#homeid" style="text-decoration: none; color:white">Created With <a class="footer">❤</a> <a href="#homeid" style="text-decoration: none; color:white">By <b>Shivani Vemula</b></a></a>
      </div>
      <br>
         
    </div>
    
     
    <!---footer section ends---->

</body>
</html>