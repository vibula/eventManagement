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
                        Name<br>
                        <input type="text" class="form-control" name="name" placeholder="enter your name" require/><br>
                        Email ID<br>
                        <input type="email" class="form-control" name="email" placeholder="enter your email"  require/><br>
                        Password<br>
                        <input type="password" class="form-control" name="pass" placeholder="enter the password "  require/><br>
                        Confirm password<br>
                        <input type="password" class="form-control" name="cpass" placeholder="enter the conform password"  require/><br>
                        <button type="submit" class="btn btn-primary btn-icon">
                        <span class="btn-inner--icon"><i class="fas fa-user"></i></span>
                        <span class="btn-inner--text">Create account</span>
                        </button>

</form>
                    </div>
                </div>
            </div>
        </div>
			
        
    
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST") { 
    include 'config.php';    
    $username = $_POST["name"]; 
    $email= $_POST["email"]; 
    $password = $_POST["pass"];  
    $cpassword = $_POST["cpass"]; 
    $subject = ' wlecome';
   
$message = 'congrats for being a part in to our famiy';
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <vibularoslin@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    if(($password == $cpassword) ) { 
        $sql = "INSERT INTO `signup` (`name`,`emailid`,`password`) VALUES ('$username', '$email','$password')"; 
        if(mysqli_query($con,$sql))
        {
           // ini_set("SMTP","ssl://smtp.gmail.com");
            $retval=mail($email,$subject,$message,$headers,);
            if( $retval == true ) {
                echo "Message sent successfully...";
             }else {
                echo "Message could not be sent...";
             }  
        echo "your record has been inserted";
        header('Location:login.php');
        }
        else{
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-inner--icon"><i class="fas fa-exclamation"></i></span>
            <span class="alert-inner--text"><strong>Warning!</strong>ARLEADY AN USER</span>
            <button type="button" class="undo" aria-label="Undo">Undo</button>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
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