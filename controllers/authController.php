<?php

session_start();

require 'config/login/db.php';

$errors = array();
$username = "";
$email = "";

//if user click on the sign up button
if(isset($_POST['signup-btn'])){
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $passwordConf =$_POST['passwordConf'];
    $names =$_POST['name'];
    $tel =$_POST['tel'];
    $address =$_POST['address'];
    if($username === 'admin'){
        $errors['username'] = 'Username not use admin';
    }
    if(empty($username)){
        $errors['username'] = 'Username required';
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Email address is invalid';
    }
    if(empty($email)){
        $errors['email'] = 'Email required';
    }
    if(empty($password)){
        $errors['password'] = 'Password required';
    }
    if(empty($names)){
        $errors['name'] = 'Name required';
    }
    if(empty($tel)){
        $errors['tel'] = 'Tel. required';
    }
    if(empty($address)){
        $errors['address'] = 'Address required';
    }
    if($password !== $passwordConf){
        $errors['password'] = 'The two password do not match ';
    }
    if($password === "password"){
        $errors['password'] = 'Do not use Password -> password';
    }
    $emailQuery = "SELECT * FROM user1 WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;

    if($userCount > 0){
        $errors['emaill'] = "Email already exists";
    }
    if(count($errors) === 0){
        $token = bin2hex(random_bytes(50));
        $verified = false;

        $sql = "INSERT INTO user1(username,email,verified,token,password,name,tel,address) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbsssss',$username,$email,$verified,$token,$password,$names,$tel,$address);
        if($stmt->execute()){
            //login
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;
            $_SESSION['name'] = $names;
            $_SESSION['tel'] = $tel;
            $_SESSION['address'] = $address;
            //message
            $_SESSION['message'] = "Success";
            $_SESSION['alert-class'] = "alert-success";

            header('location: login.php');
            exit();
        }else {
            $errors['db_error'] = "Database error: failed to register";
        }
    }
}

//if user click on the login button
if(isset($_POST['login-btn'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
    if(empty($username)){
        $errors['username'] = 'Username required';
    }
    if(empty($password)){
        $errors['password'] = 'Password required';
    }

    if(count($errors) === 0 ){
        $sql = "SELECT * FROM user1 WHERE email=?  OR username=? LIMIT 1";  
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss',$username,$username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if($password===$user['password']){
            //login
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['verified'] = $user['verified'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['tel'] = $user['tel'];
            $_SESSION['address'] = $user['address'];
            //message
            $_SESSION['message'] = "You are noe logged in!";
            $_SESSION['alert-class'] = "alert-success";
            header('location: order.php');
            exit();
        }
        if($username === 'admin' && $password === 'password'){
            header('location: admin.php');
            exit();
        }else{
            $errors['login fail'] = "wrong credentials";
        }
    }
}
if(isset($_POST['tobill-btn'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['category'] = $_POST['selectCategory'];
    $_SESSION['paper'] = $_POST['selectPaper'];
    $_SESSION['size1'] = $_POST['size1'];
    $_SESSION['size2'] = $_POST['size2'];
    $_SESSION['amount'] = $_POST['amount'];
    $_SESSION['note'] = $_POST['note'];

    $_SESSION['token'] = bin2hex(random_bytes(10));

    header('location: bill.php');
    exit();
}

//if user click on the pay button
if(isset($_POST['pay-btn'])){
        $userN = $_SESSION['id'];
        $category = $_SESSION['category'];
        $paper = $_SESSION['paper'];
        $size1 = $_SESSION['size1'];
        $size2 = $_SESSION['size2'];
        $amount = $_SESSION['amount'];
        $token = $_SESSION['token'];
        $note = $_SESSION['note'];
        
        mysqli_query($conn,"INSERT INTO order1 (name,category,paper,size1,size2,amount,note,byN,token) VALUES ('$name', '$category', '$paper', '$size1', '$size2', '$amount', '$note', '$userN', '$token')");

        header('location: payconf.php');
        exit();
}

//if user click on the change button.
if(isset($_POST['change-btn'])){
    $username =$_POST['username'];
    $passN =$_POST['passN'];
    $passNconf =$_POST['passNconf'];
    if(empty($username)){
        $errors['username'] = 'Username required';
    }
    if(empty($passN)){
        $errors['passN'] = 'Password required';
    }
    if(empty($passNconf)){
        $errors['passNconf'] = 'Password required';
    }
    if($passN !== $passNconf){
        $errors['passN'] = 'The two password do not match';
    }
    if(count($errors) === 0 ){
        $sql = "UPDATE user1 SET password=? WHERE username=? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss',$passN,$username);
        $stmt->execute();

        header("Location:profile.php");
        exit;
    }
}

if(isset($_POST['forget-btn'])){
    $username = $_POST['username'];
    $username2 = $_POST['username'];

    $sql = "SELECT * FROM user1 WHERE email=?  OR username=? LIMIT 1";  
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss',$username,$username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if($username2===$user['username'] || $username2===$user['email']){
        $_SESSION['username']= $user['username'];
        $_SESSION['password'] = $user['password'];

    }else{
        $errors['login fail'] = "wrong credentials";
    }
}

if(isset($_POST['conf-btn'])){
    // $ID =$_GET["ID"];
    // $status = 1;

    // $sql = "UPDATE order1 SET status=? WHERE id=? LIMIT 1";
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param('is',$status,$ID);
    // $stmt->execute();

    $_SESSION['n'] = '555';

    header("Location:order(a).php");
    exit;
}