<html><head><title>
</title>
<link type="text/css" href="assets/css/theme.css" rel="stylesheet">
<link type="text/css" href="assets/css/demo.css" rel="stylesheet">
</head><body style="background-image: url('assets/images/backgrounds/f.jpg');background-size: cover; background-repeat: no-repeat;">
<?php include('nav.php'); ?>

<div class="container-md mx-auto mt-5 mb-5 border border-primary rounded  text- w-75" >
            <div  class="row mt-5  justify-content-center align-items-center">
            <div class="col">
                    <div id="login-box" class="col">
                    <form name="f1" action="#" class="align-items-center px-5 " method="post">
                    <h3 class="text-center text-primary">Event Booking</h3>
                    <input type="text" class="form-control" name="name" placeholder="Name"  require/><br>
                    <input type="text" class="form-control" name="ename" placeholder="Event Name"  require/><br>
                    <input type="text" class="form-control" name="add1" placeholder="Address Line 1"  require/><br>
                    <input type="text" class="form-control" name="add2" placeholder="Address Line 2"  require/><br>
                    <input type="text" class="form-control" name="city" placeholder="City"  require/><br>
                    <input type="text" class="form-control" name="state" placeholder="State"  require/><br>
                    <input type="number" class="form-control" name="phone" placeholder="Phone Number"  require pattern="[789][0-9]{9}"/><br>
                    <input type="date" class="form-control" name="edate" placeholder="Event Date"  require/><br>
                    <input type="time" class="form-control" name="etime" placeholder="Event Time"  require/><br>
                    <button type="submit" class="btn btn-primary mx-auto">
                    <span class="btn-inner--icon "><i class="fas fa-user"></i></span>
                    <span class="btn-inner--text">Enter</span>
                    </button>
                 
</form>
                    </div>
                </div>
            </div>
        </div>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
    include 'config.php';    
    $name= $_POST["name"]; 
    $ename= $_POST["ename"]; 
    $add1= $_POST["add1"]; 
    $add2= $_POST["add2"]; 
    $city= $_POST["city"]; 
    $state= $_POST["state"]; 
    $phone= $_POST["phone"]; 
    $edate= $_POST["edate"]; 
    $etime= $_POST["etime"]; 
    $sqli = "INSERT INTO `form` (`name`,`event name`,`address1`,`address2`,`city`,`state`,`phone`,`date`,`time`) VALUES ('$name', '$ename','$add1','$add2','$city','$state','$phone','$edate','$etime')"; 

    $sql = "SELECT * from `form` where date='$edate'"; 
    $result=mysqli_query($con,$sql);
   
    if((mysqli_num_rows($result)) > 0){
        echo 'The Event date is aready booked..!';
        header('Location:b/form.php');
    }else{
        if(mysqli_query($con,$sqli))
        {
        echo "your event has been registered.... we will contact you shortly";
        header('Location:eventbooking.php');

        }
        else{
            echo "error insetting error password:".mysqli_error($con);
        }
    }
}
?>
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