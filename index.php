
<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  // Include autoload.php file
  require 'vendor/autoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);
   
  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'doertech0@gmail.com';
      // Gmail Password
      $mail->Password = 'DoerTech?/0';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('doertech0@gmail.com');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('farihachy009@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Form Submission of DOER TECH';
      $mail->Body = "<p>Name : $name <br>Email : $email <br>Message : $message<p>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <p>Thankyou! for contacting us, We\'ll get back to you soon!<p>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   


    
    <title>DOER TECH</title>
   <?php include 'style.php';?>
   <?php include 'links.php';?>
   <?php include 'script.php';?>
   <?php include 'db.php';?>
</head>
<body>
  



    <div class="header" id="tophedaer">
        <nav class="navbar navbar-expand-lg navbar-dark fixed">
          <div class="container text-uppercase p-2">
            <a class="navbar-brand font-weight-bold text-white " href="index.html">DOER Technology</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#extra">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#services">Service</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#about">About Us</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>  
                
                
              </ul>
              
            </div>
            </div>
          </nav>

          <section class="header-section fixed-top" >
            <div class="center-div" >
              <h1 class="font-weight-500 " id="extra">
               <span class="moveLeft">ELECTRICAL ESTIMATION & DESIGN SERVICES</span> 
                <!-- <br> <span class="moveRight">and medium sized businesses, made easy.</span> -->
               
              </h1>
              <br>
              <br>
              <div class="header-button">
                <a href="#services">Setup a service</a>
                
              </div>

            </div>
          </section>
         
    </div>
    
    
    <!-- header part end -->
    <section class="header-extradiv text-center">
      <h1 class="section-title">WHY US?</h1>
       <div class="border"></div>
      <div class="container">
        <div class="row">
           <div class="extra-div col-lg-4  col-12 ">
             <a href=""><i class="fa-3x fa fa-check-square-o" aria-hidden="true"></i></a>
            
            
             <p class="content">Fast, Accurate,and Reliable Service</p>
            
           </div> 
            <span></span>
            <div class=" extra-div col-lg-4 col-md-4 col-12">
             <a href=""><i class="fa-3x fa fa-thumbs-up" aria-hidden="true"></i></a>
             <p class="content">Professional and Dedicated Team</p>

           </div>

            <div class="extra-div col-lg-4 col-md-4 col-12">
             <a href=""><i class="fa-3x fa fa-rocket" aria-hidden="true"></i></a>
             <p class="content">Flexible and Cost-effective </p>
             
             
           </div>             
        </div>
      </div>

      <div class="container">
        <div class="row">
           <div class="extra-div col-lg-4  col-12 ">
             <a href=""><i class="fa-3x fa fa-check-square-o" aria-hidden="true"></i></a>
            
            
             <p class="content">Reduce Overhead Cost</p>
            
           </div> 
            <span></span>
            <div class=" extra-div col-lg-4 col-md-4 col-12">
             <a href=""><i class="fa-3x fa fa-thumbs-up" aria-hidden="true"></i></a>
             <p class="content">Identify Opportunities</p>

           </div>

            <div class="extra-div col-lg-4 col-md-4 col-12">
             <a href=""><i class="fa-3x fa fa-rocket" aria-hidden="true"></i></a>
             <p class="content">Strict Confidentiality </p>
             
             
           </div>             
        </div>
      </div>
    </section>






<section class="services" id="services">
    <div class="section-title">Our Services</div>
    <div class="border"></div>
  <div class="flex-container">
    <div>
      <div class="icon-container">
        <img src="img/solar-energy.png" alt="" style="height: 50px; width: 50px;">
      </div>
     <p>Electrical Project Take-Off</p> 
    </div>

    <div>
      <div class="icon-container">
      <img src="img/cost.png" alt="" style="height: 50px; width: 50px;">
    </div>
     <p>Electrical Estimation</p> 
    </div>

    <div>
      <div class="icon-container">
      <img src="img/cost (1).png" alt="" style="height: 50px; width: 50px;">
      </div>
      <p>Cost Calculation</p>
    </div> 

    <div>
      <div class="icon-container">
      <img src="img/workflow.png" alt="" style="height: 50px; width: 50px;">
    </div>
      <p>Tender Submission</p>
    </div>

    <div>
      <div class="icon-container">
      <img src="img/project.png" alt="" style="height: 50px; width: 50px;">
    </div>
      <p>D&C Project Design</p>
     </div>

    <div>
      <div class="icon-container">
      <img src="img/contract.png" alt="" style="height: 50px; width: 50px;">
    </div>
      <p>Contract Administration</p>
    </div>  

    <div class="special">
      <div class="icon-container">
      <img src="img/excavator.png" alt="" style="height: 50px; width: 50px;">
    </div>
      <p>Sub-Contractor Management</p>
    </div>

    <div class="special">
      <div class="icon-container">
      <img src="img/sketch.png" alt="" style="height: 50px; width: 50px;">
    </div>
      <p>Tekla Design Services <br> ( Structural Engineers)</p>
    </div>
    <div class="special">
      <div class="icon-container">
      <img src="img/code.png" alt="" style="height: 50px; width: 50px;">
    </div>
      <p>Website Development <br> for Small Business</p> 
    </div>  
     
  </div>


</section>

<section id="about" class=" about-section">
   
  <div class="section-title">
   <br>
   <div class="section-subtitle">About us</div>
   <h2 class="section-main-title">WE ARE <strong>CREATIVE</strong></h2> 

  </div>
  
          <div class="container">
            <div class="row">
              <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="about-item">
                  <p class="about-content">
                   You may be an Electrical contractor, Builder, or Steel fabricator. <br> 

                  At DEOR Technologies, we have tailor-made services for all our customers. <br> 
 
                  Our team at DOER has successfully submitted and won tenders in Retail,Commercial,

                   Age Care and Special Needs Homes, Apartments, and Townhouse Development projects. <br> <br>

                  We can complete your project take-off, cost estimation, and bid letters using “simPRO” and other software. <br> 

                   We are committed to providing reliable and cost-time effective solutions to your business needs. <br> 

                   For more information, please send us your project details and we will provide you our free no obligation quotation.
                   </p>
                 
             </div>
              </div>
              <div class="col-lg-5 col-md-12 col-sm-12 prob">
                  <div class="composition">
                    <img src="img/Abbotsford.jpg" style="height: 200px; width:55%;" alt="" class="composition_photo composition_photo_p1">
                    <img src="img/electrical-estimating-software.jpg" style="height: 200px; width:55%;" alt="" class="composition_photo composition_photo_p2">
                    <img src="img/architects-interior-designers-discussing-floor-plan-blueprints_8087-2945.jpg" style="height: 200px; width: 55%px;" alt="" class="composition_photo composition_photo_p3">
                  </div>

              </div>
            </div>
          </div>
      
</section>
































  <section class="contact" id="contact">
    <div class="contact-heading">
        <h1>Contact</h1>
        <h6>Lets Work Together</h6>
        <br>
        <?= $output; ?>
        <br>
        <br>
    </div>

                
              
    <div class="main-contact">
        <form action="" method="POST">
           
            <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Name.." required>
            <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter Your Email.." required>   
          
            <label for="subject">Subject</label>
            <textarea  id="message" cols="10" name="message"
             rows="10"></textarea>
            <input type="submit"  name="submit">
        </form>
    </div>
</section> 


<!-- ----------------------------------footer---------------------------------- -->

<footer>
  <div class="footer-content">
    


  </div>
  


  <div class="footer-bottom">
    <p>&copy; 2020 DUAR TECHNOLOGIES</p>
    <p><a href="mailto:farihachy009@gmail.com">doertech0@gmail.com</a></p>
    <div class="phone"> <img src="img/phone.png " style="height: 15px; width: 15px;" alt="phone"> +61 401 226 797</div>
  </div>
  </footer>

 










   <script>
  AOS.init({
    easing:'ease',
    duration:1500
});






</script> 



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
</body>
</html>


