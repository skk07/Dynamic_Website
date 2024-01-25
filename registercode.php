<?php 
session_start();

include('admin/config/dbcon.php');

if(isset($_POST['submit']))
{
  $name = mysqli_real_escape_string($con,$_POST['name']) ;
  $phone = mysqli_real_escape_string($con,$_POST['phone']) ;
  $email = mysqli_real_escape_string($con,$_POST['email']) ;
  $password = mysqli_real_escape_string($con,$_POST['password']) ;
  $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']) ;

  if($password == $cpassword)
  {
    // Check email
    $checkemail = "SELECT email From user_form WHERE email='$email'";
    $checkemail_run = mysqli_query($con,$checkemail);

    if(mysqli_num_rows($checkemail_run) > 0)
    {
      // Already email exists
      $_SESSION['message'] = "Already Email exists";
      header("Location: register.php");
      exit(0);
    }
    else
    {
      $user_query = "INSERT INTO user_form (name,phone,email,password) VALUES ('$name','$phone','$email','$password')";
      $user_query_run = mysqli_query($con,$user_query);

      if($user_query_run)
      {
        $_SESSION['message'] = "Registered Successfully";
        header("Location: login.php");
        exit(0);
      }
      else
      {
        $_SESSION['message'] = "Something went Wrong";
        header("Location: register.php");
        exit(0);
      }
    }
  }
  else
  {
    $_SESSION['message'] = "Password and Confirm Password does not match";
    header("Location: register.php");
    exit(0);
  }

}
else
{
  header("Location: register.php");
  exit(0);
}
?>