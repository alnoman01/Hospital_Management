<?php session_start(); ?>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    

      //$appointment_id = $_POST['1'];
      $appointment_time = $_POST['appointment_time'];
      $status = $_POST['status']; 
      $user_id = $_SESSION['user_id'];
      $doctor_id = $_POST['doctor_id'];

      include_once('db_connection.php');

      $sql = "INSERT INTO time(appointment_id,'doctor_id',appointment_time,status) VALUES ('$user_id','$doctor_id','$appointment_time','$status')";
      

     $db_con->query($sql);

     $sql = "UPDATE appointment SET status = 1 WHERE appointment_time = '$appointment_time' AND user_id = '$doctor_id'";
     $db_con->query($sql);

     header('location:login_form.php?msg=You Registered Successfully');exit;

  }else{}


    ?>