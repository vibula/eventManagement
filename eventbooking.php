<html>
<head>
<title>
</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.css">
<link type="text/css" href="assets/css/theme.css" rel="stylesheet">
<link type="text/css" href="assets/css/demo.css" rel="stylesheet">
<style>

</style>
</head>
<body>
<?php include('nav.php'); ?>

<section class="spotlight parallax bg-cover bg-size--cover" data-spotlight="fullscreen" style="background-image: url('assets/images/backgrounds/bg2.jpg')">

<div class="spotlight-holder py-lg pt-lg-xl text-center">
                    <h1 class="heading h1 text-tertiary mt-9">
                    Vib's Event Management
                    </h1>
                    <h2 class="heading h4 text-tertiary mt-8 ">
                    Book Your Events Here...We will take care 
                      </h2>
                    
                  </div> 
         </section>

    <div class="container-fluid bg-blue h-50">
     
    <div class="row">  
     <div class="col">
     <div class="spotlight-holder py-lg ptxl text-center mt-8 ">
             <h1 class="heading h1 font-italic text-uppercase text-light  ">Don't Miss our Organization</h1> 
            <p class="text-light">Our team understands that a properly executed event can be<br>
             leveraged to support an organization’s strategic vision, incorporated<br>
              into a company’s marketing plan,
or used to build networks and client loyalty.</p>
            </div>  
      </div> 
   </div>  
    </div>
    <div class="container mt-3 mb-3 ">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class=" h-75 w-100" src="assets/images/backgrounds/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class=" h-75 w-100" src="assets/images/backgrounds/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class=" h-75 w-100" src="assets/images/backgrounds/3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php
          include 'config.php';    
    $sql = "SELECT * from `form`"; 
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $event[]=$row["event name"];
        $eventdate[]=$row["date"];
      
      }
     
    }
    ?> 
    <div class="container-fluid bg-blue h-50">
     
     <div class="row">  
      <div class="col">
      <div class="spotlight-holder py-lg ptxl text-center mt-8 ">
              <h1 class="heading h1 font-italic text-uppercase text-light  ">Don't Miss our Organization</h1> 
             <p class="text-light">Our team understands that a properly executed event can be<br>
              leveraged to support an organization’s strategic vision, incorporated<br>
               into a company’s marketing plan,
 or used to build networks and client loyalty.</p>
             </div>  
       </div> 
    </div>  
     </div>
<div id='calendar'></div>
<?php include('footer.php'); ?>
<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'/*,
        //  events: [
    {
    <?php //$ev=json_encode($event); 
          // $even=json_encode($eventdate);
    //echo $ev,$even;
    ?>
    }
  ],color: 'yellow',   // an option!
  textColor: 'black'*/
        });
        calendar.render();
      });
     
      </script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.1/main.min.js"></script>
      <!-- Core -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/popper/popper.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <!-- FontAwesome 5 -->
  <script src="assets/vendor/fontawesome/js/fontawesome-all.min.js" defer></script>
  <!-- Page plugins -->
  <script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <script src="assets/vendor/input-mask/input-mask.min.js"></script>
  <script src="assets/vendor/nouislider/js/nouislider.min.js"></script>
  <script src="assets/vendor/textarea-autosize/textarea-autosize.min.js"></script>
  <!-- Theme JS -->
  <script src="assets/js/theme.js"></script>
</body>

</html>