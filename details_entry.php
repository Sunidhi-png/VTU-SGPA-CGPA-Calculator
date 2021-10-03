<?php
$server_name="localhost";
$username="root";
$usn="";
$database_name="signup2";

$conn=mysqli_connect($server_name,$username,$usn,$database_name);
if(!$conn)
{
  die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
  $name = $_POST['name'];
  $usn = $_POST['usn'];
  $email = $_POST['email'];

  $sql_query="INSERT INTO user_details (name,usn,email)
  VALUES ('$name','$usn','$email')";

  if (mysqli_query($conn, $sql_query))
  {
    echo "New Details Entry inserted successfully !";
  }
  else
  {
    echo "Error: " .$sql . "" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>
