<?php

//get


$random_value =  rand(1,2000);

$errors = [];

if(isset($_POST['firstname'])){

    $firstname = $_POST['firstname'];
    if(strlen($firstname) == 0){
        $errors[] = "first name is required";
    }

    $lastname = $_POST['lastname'];
    if(strlen($lastname) == 0){
        $errors[] = "last name is required";
    }

    $address = $_POST['address'];
    if(strlen($address) == 0){
        $errors[] = "address is required";
    }
    $country = $_POST['country'];

    if(isset($_POST['skills'])){
        $skills = $_POST['skills'];
        if(empty($skills)){
            $errors[] = "skills is required";
        }
    }

    $username = $_POST['username'];
    if(strlen($username) == 0){
        $errors[] = "username is required";
    }
    if(isset($_POST['gender'])) {

        $gender = $_POST['gender'];
        if (strlen($gender) == 0) {
            $errors[] = "gender is required";
        }
    }
    $password = $_POST['password'];
    if(strlen($password) == 0){
        $errors[] = "password is required";
    }
    $department = $_POST['department'];
    if(strlen($department) == 0){
        $errors[] = "department is required";
    }

    $random = $_POST['random'];

    if(strlen($random) == 0){
        $errors[] = "random is required";
    }else {
        if($random != $_POST['random_value']){
            $errors[] = "random is not match";
        }
    }
}

$country = [
    "oman",
    "egypt",
    "usa"
];


include "form.html";
?>
