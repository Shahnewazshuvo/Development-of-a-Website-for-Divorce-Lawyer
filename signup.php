<?php
    session_start();
    require_once 'includes/db_connect.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $file = $_POST['file'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $message = $_POST['message'];
  

    if (!$_POST['first_name']) {
    header('location:index.php#signup');
    $_SESSION['first_name'] = "Please input your First Name ";
    die();
    }
    
    if (!$_POST['last_name']) {
    header('location:index.php#signup');
    $_SESSION['last_name'] = "Please input your Last Name ";
    die();
    }
    if (!$_POST['email']) {
    header('location:index.php#signup');
    $_SESSION['email'] = "Please input your valid email address";
    die();
    }

    if (!$_POST['number']) {
    header('location:index.php#signup');
    $_SESSION['number'] = "Please input your Mobile number ";
    die();
    }

    if (!$_POST['age']) {
    header('location:index.php#signup');
    $_SESSION['age'] = "Please input Age ";
    die();
    }

    if (!$_POST['date']) {
    header('location:index.php#signup');
    $_SESSION['date'] = "Please input date ";
    die();
    }

    if (!$_POST['city']) {
    header('location:index.php#signup');
    $_SESSION['city'] = "Please input your City ";
    die();
    }

    if (!$_POST['zip']) {
    header('location:index.php#signup');
    $_SESSION['zip'] = "Please input your Zip code ";
    die();
    }

    if (!$_POST['file']) {
    header('location:index.php#signup');
    $_SESSION['file'] = "Please attached file ";
    die();
    }
    if (!$_POST['gender']) {
    header('location:index.php#signup');
    $_SESSION['gender'] = "Please input your gender ";
    die();
    }
    if (!$_POST['religion']) {
    header('location:index.php#signup');
    $_SESSION['religion'] = "Please input your religion ";
    die();
    }
    else{
    $insert_query= "INSERT INTO registration(first_name, last_name, email, number,
    age,date,city,zip,file,gender,religion,message)VALUES('$first_name','$last_name'
    ,'$email',$number,$age,'$date' ,'$city' , $zip, '$file', '$gender', '$religion', '$message')";
    mysqli_query($db_connect,$insert_query);
    header('location:index.php#signup');
    $_SESSION['status'] = "Thank you ! You are Successfully registered ";
    }

?>