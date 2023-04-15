<?php
$first_name=$_POST['first_name'];
$dateForService=$_POST['dateForService'];
$warranty=$_POST['warranty'];
$email=$_POST['email'];
$phone_no=$_POST['phone_no'];
$model= $_POST['submit'];
// $typeOfService=$POST['typeOfService'];

if(isset($model)){
    $selected_val = $_POST['model'];
    echo "you selected" .$selected_val;
}

$conn = new mysqli('localhost','root','','car_service_company');

if($conn->connect_error){

        die('connecton Failed :' .$conn->connect_error);
    }
    else{
        $stmt= $conn->prepare("insert into registration(Name,sdate,warranty,email,phone_no,model)values(?,?,?,?,?,?)");
        $stmt->bind_param('ssssis', $first_name,$dateForService,$warranty,$email,$phone_no,$model);
        $stmt->execute();
        echo"registration sucessfully..";
        $stmt ->close();
        $conn ->close();
           }
?>
        
