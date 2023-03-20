<?php


require 'vendor/autoload.php';
$client = new MongoDB\Client('mongodb://localhost:27017');
$collection = $client->companydb->users;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  $name = $_POST['name'];
  $parent = $_POST['guardian'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $age = $_POST['age'];
  $blood_group = $_POST['blood_group'];
  $email = $_POST['email'];
  $alt_email = $_POST['alt_email'];
  $phone = $_POST['mobile'];
  $alt_phone = $_POST['alt_mobile'];
  $present_address = $_POST['present_address'];



  $document = [
    'name' => $name,
    'parent' => $parent,
    'gender' => $gender,
    'dob' => $dob,
    'age' => $age,
    'blood_group' => $blood_group,
    'email' => $email,
    'alt_email' => $alt_email,
    'phone' => $phone,
    'alt_phone' => $alt_phone,
    'present_address' => $present_address
  ];

  
  $result = $collection->insertOne($document);

 
 echo "sucessful";

}


function calculateAge($dob) {
  $birthdate = new DateTime($dob);
  $today = new DateTime();
  $age = $birthdate->diff($today)->y;
  return $age;
}

?>


