<html>
    <head>
    <link type="text/css" href="assets/css/theme.css" rel="stylesheet">
<link type="text/css" href="assets/css/demo.css" rel="stylesheet">

        
   
    </head><body style="background-image: url('assets/images/backgrounds/b1.jpg');background-size: cover; background-repeat: no-repeat;">
  
        <div class="container-md mt-5 ml-5 border border-primary rounded bg-white text- w-25 h-70" >
            <div  class="row mt-5  justify-content-center align-items-center">
            <div class="col">
                    <div id="login-box" class="col">
                    <form name="f1" action="#" class="align-items-center px-5 " method="post">
                    <h3 class="text-center text-primary">Sign Up</h3>
                       Password<br>
                        <input type="password" class="form-control" name="pass" placeholder="enter the password "  require/><br>
                        Confirm password<br>
                        <input type="password" class="form-control" name="cpass" placeholder="enter the conform password"  require/><br>
                        <button type="submit" class="btn btn-primary btn-icon">
                        <span class="btn-inner--icon"><i class="fas fa-user"></i></span>
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
    session_start();

    $password = $_POST["pass"];  
    $cpassword = $_POST["cpass"]; 
    $email=$_SESSION['email'];
      if(($password == $cpassword) ) { 
        $sql = "UPDATE `signup` SET `password`='$password' where `emailid`='$email'"; 
        if(mysqli_query($con,$sql))
        {
            echo "your password has been updated";
        header('Location:login.php');
        }
        else{
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"><i class="fas fa-exclamation"></i></span>
            <span class="alert-inner--text"><strong>Warning!</strong>error</span>
            <button type="button" class="undo" aria-label="Undo">Undo</button>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
        echo "Error updating record: " . mysqli_error($con);

        }
    }else{
        echo "enter the same password";
    }
}
?>
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
</body>
    </html>