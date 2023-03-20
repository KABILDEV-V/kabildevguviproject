
<?php


$conn = mysqli_connect("localhost", "root","", "project01");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();


$email = $_POST['mailr'];
$password = $_POST['upwdr'];


$sql="SELECT * from userregister where mailr='$email' and upwdr='$password'";
$SESSION['mail'] = 'mailr';
$SESSION['password'] = 'upwdr';

$ff=mysqli_query($conn, $sql);

if (mysqli_num_rows($ff)==1) {
    
    mysqli_close($conn);
    echo "Login Successful";
    $lifetime = 30*60//30 minutes;
    session_set_cookie_params($lifetime);
    if(isset($_SESSION['LAST_ACTIVITY']) && (time()-$_SESSION['LAST_ACTIVITY']>$lifetime)){
    	session_unset();
    	session_destroy();
    }
    $_SESSION['LAST_ACTIVITY']=time();

} else {

    echo 1;

}

?>