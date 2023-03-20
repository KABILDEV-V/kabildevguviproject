
<?php
// Connect to database
$conn = mysqli_connect("localhost", "root","", "project01");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$username = $_POST['unamer'];
$email = $_POST['mailr'];
$number=$_POST['num'];
$password = $_POST['upwdr'];
$cpassword=$_POST['cpwdr'];

if($password==$cpassword){

// Insert new user data into database
$sql = "INSERT INTO userregister (unamer,mailr,num,upwdr) VALUES ('$username', '$email','$number','$password')";

if (mysqli_query($conn, $sql)) {
    echo "New user registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
else
{
    echo 1;
}

?>