<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['phone'];
    $message=$_POST['message'];

//    connect database
    $conn=mysqli_connect('localhost','root','','drool');
    if(!$conn){
        die("Connection failed");
    }
    else{
        $sql="INSERT INTO contact_details(name,email,phone,message) VALUES('$name','$email','$subject','$message')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Message sent successfully')</script>";
        }
        else{
            echo "<script>alert('Message not sent')</script>";
        }
    }
}

?>

