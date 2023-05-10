<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phoneno = $_POST['phoneno'];
   $message = $_POST['message'];
   

   //database connection

   $conn = mysqli_connect('localhost','root','root123','test1');
   if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
   }else{
      $stmt = $conn->prepare("insert into petservice(name, email, phoneno, message) values(? ,? ,? ,?)");
      $stmt->bind_param('ssis',$name,$email,$phoneno,$message);
      $stmt->execute();
      echo "Submitted Successfully";
      $stmt->close();
      $conn->close();

   }



?>