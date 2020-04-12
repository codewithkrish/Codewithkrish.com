
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="STYLE.CSS">
    
    
</head>
<body>
<link rel="stylesheet" href="STYLE.CSS">
<img src="bg.jpg" class="bg" alt="laptop">
    <nav id="navbar">
        <div id="logo">
            <!-- <img src="logo.png" alt="MyOnlineMeal.com"> -->
            
        </div>
        <ul>
        <li class="item"><a href="home.html">Home</a></li>
            <li class="item"><a href="video.html">video</a></li>
            <li class="item"><a href="index.php">sign up</a></li>
            <li class="item"><a href="contact.html">contact us</a></li>
            <li class="item"><a href="services.html">our services</a></li>
            <li class="item"><a href="android.html">Andriod development</a></li>
            <li class="item"><a href="hack.html">Ethical hacking</a></li>
            <li class="item"><a href="pro.html">Programming</a></li>
            <li class="item"><a href="web.html">web development</a></li>
            
            <!-- <form action="home.html" method="get"><input type="text" name="search" id="search" placeholder="search"><button id="btn">search</button></form> -->
        </ul>
    </nav>
     
    
    <div class="container">
        <h1>SIGN UP FROM HERE</h1>
        <p>ENTER YOUR DETAILS</p>
     <form action="index.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="int" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your Email">
        <input type="text" name="password" id="password" placeholder="Enter your password">
        <input type="varchar" name="phone" id="phone" placeholder="Enter your phone no">
        <textarea name="others" id="others" cols="30" rows="10" placeholder="Enter your another info"></textarea>
        <button class="btn">submit</button>
     </form>

    </div>
    <script src="INDEX.JS"></script>
    <footer>
    <div class="center">
        Copyright &copy; www.codewithkrish.com. All rights reserved!
    </div>
</footer>
</body>
</html>
<?php

    if(isset($_POST['name'])){
        $server = "localhost";
        $username = "root";
        $password = "";
        $con = mysqli_connect($server,$username,$password);
    
        if(!$con){ 
            die("connection to this database failed due to" .mysqli_connect_error());
        }
        //   echo"Success connecting to the db";
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = ($_POST ['password']);
        $phone = $_POST['phone'];
        $others = $_POST['others'];
        $sql = "INSERT INTO `signup_data`.`signup_data` ( `name`, `age`, `gender`, `email`, `password`, `phone`, `others`, `date`)
         VALUES ('$name', '$age', '$gender', '$email', '$password', '$phone', '$others', current_timestamp());";
        //   echo $sql;
        if($con->query($sql)==TRUE){
            // echo "success";
            
        }
         else{
              echo "error: $sql <br> $con->error";
         }
        $con->close(); 
        
    }
?>