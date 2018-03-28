<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
$mysql_select_db($db);

if(isset($_POST['username'])){}
     $uname=$_POST['username'];
     $password=$_POST['password'];

     $sql="select * from loginform where user='".$uname."'AND PASS='".$password."'
     limit 1";
  
      $result=mysql_query($sql);
     
      if(mysql_num_rows($result)==1){
        echo " YOU HAVE SUCCESSFULLY LOGGED IN ";
        exit();
        }
      else {
          echo "YOU HAVE INCORRECT PASSWORD";
          exit();
}


?>


<!DOCTYPE html>
<html>
   <head>
        <title>Form in Design</html>
         <link rel="stylesheet" a href="css3\style.css"/>
         <link rel="stylesheet" a href="css3\font-awesome.min.css"/>
    </head>
 <body>
   <div class="container">
      <img src=image\web.jpeg"/>
      <form method="POST" action="#">
         <div class="form_input">
            <input type="text" name="usernsme" placeholder="Enter your User Name"/>
            </div>
            <div class="form_input">
              <input type="password" name="password" placegolder="Enter your password"/>
            </div>
           <input type="submit value="LOGIN" class="btn-login"/>
         </form>
       </div>
   </body>
 </html>    
