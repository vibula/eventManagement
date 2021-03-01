
<link type="text/css" href="assets/css/theme.css" rel="stylesheet">
<link type="text/css" href="assets/css/demo.css" rel="stylesheet">

<nav class="navbar  navbar-expand-lg navbar-transprent navbar-dark bg-blue py-9">
    <a class="navbar-brand text-white" href="#">VIB'S</a>
        <div class="collapse navbar-collapse" >
        <ul class="navbar-nav float-right ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="#">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="form.php">Book an Event</a>
            </li>
          
         
            <li class="nav-item active">
                <a class="nav-link text-white" href="#"><?php session_start(); echo $_SESSION['email']; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="home.php">Log Out</a>
            </li>
           
            
        </ul>
    </div>
</nav>

