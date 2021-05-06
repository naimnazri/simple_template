<?php
include 'db.php';

// if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
//     echo "Connected successfully";

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $phone = $_POST['phoneNo'];

    $insert_process = "INSERT INTO contact (name,phone_no) VALUES ('$fullname','$phone')";
    $insert =  mysqli_query($conn, $insert_process);

    if($insert){
        echo "<script>
            alert('Success')
            setTimeout(function() {
                window.location = 'location:index.php';
              }, 5000);
        </script>";
        header("location:index.php");
    }else{
        echo "<script>
            alert('Fail')
            setTimeout(function() {
                window.location = 'location:index.php';
              }, 5000);
        </script>";
    }
}



?>
