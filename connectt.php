<?php 
     $usrnm=$_POST['usrnm'];
     $model=$_POST['model'];
     $quantity=$_POST['quantity'];
     $city=$_POST['city'];
     $dealer=$_POST['dealer'];
     $custid=idate("U");
    // $odate=date("D/M/Y");
     $ordid=idate("U");
     //database connection
     $conn = new mysqli('localhost','root','','car_service_company');
     $sql="select car.unit_price from car where carid=$model";
     $unit_price=$conn->query($sql);
    
     $row = mysqli_fetch_array($unit_price);

   //   $ord_amt=$unit_price * $quantity;
    $ord_amt = $row[0] * $quantity;
    echo $ord_amt;
     if($conn->connect_error){
        die('Conection failed :'.$conn->connection_error);
     }
     else{
        // $stmt->reset();
        // $stmt->close();
        $stmt = $conn->prepare("insert into customer (custid,cname,city)
          values(?,?,?)");
          $stmt->bind_param("iss",$custid,$usrnm, $city);
          $stmt->execute();
        $stmt = $conn->prepare("insert into `order`(`ordid`,`custid`,`ord_amt`) values('$ordid','$custid','$ord_amt')");
        // INSERT INTO `order`(`ordid`, `odate`, `custid`, `ord_amt`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
        // $stmt->bind_param("iii",$ordid, $custid,$ord_amt);
        $stmt->execute();
        // $stmt->close();
        $stmt = $conn->prepare("insert into ord_car (ordid,carid,quantity)
        values(?,?,?)");
        $stmt->bind_param("iii",$ordid,$model,$quantity);

        $stmt->execute();
        echo "Regestration successful....";
        $stmt->close();
        $conn->close();
     }
?>