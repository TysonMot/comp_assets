<?php
require("connect.php");

if(isset($_POST['done'])){
    $id = $_POST['user_id'];
    
    
    ///getting data
    $q = mysqli_query($con,"SELECT * FROM user_reg WHERE email = '$id'");
    $i = mysqli_fetch_array($q);
    
    $output .=
    "
    <style>
    img {
        width:100px !important;
        height:100px !important;
    }
    input {
        padding{
            padding:3%;
        }
    }
    </style>
    
    <h4>Company Name: ".$i["name"]."</h4>
    <img src='img/header_01.jpg'/>
    <h6>Description</h6>
    <textarea rows='4' cols='50'>
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
</textarea>
    <h6>model</h6>
    <input type='text' value=".$i["name"].">
    <h6>Rand value</h6>
    <input type='text' />
     <h6>Email</h6>
     <input type='email' />
      <h6>Website</h6>
      <input type='text' />
    ";
    
    echo $output;
}


?>