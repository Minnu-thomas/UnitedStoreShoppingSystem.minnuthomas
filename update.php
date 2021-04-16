<?php

//require "config/constants.php";
include_once 'db.php';
session_start();
if (!isset($_SESSION['uid'])) {
    header('location:index.php');
}

$user_id = $_SESSION['uid'];

       if (isset($_POST['f_name'])) {
           $fname = $_POST['f_name'];
           echo $fname;
       }
       if (isset($_POST['l_name'])) {
           $lname = $_POST['l_name'];
       }
        if (isset($_POST['mobile'])) {
            $mobile = $_POST['mobile'];
        }
        if (isset($_POST['address1'])) {
            $address1 = $_POST['address1'];
        }
        if (isset($_POST['address2'])) {
            $address2 = $_POST['address2'];
        }
        $user_id = $_SESSION['uid'];
        $name = '/^[a-zA-Z ]+$/';
        $number = '/^[0-9]+$/';

    if (empty($fname) || empty($lname) || empty($mobile) || empty($address1) || empty($address2)) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
        exit();
    } else {
        if (!preg_match($name, $fname)) {
            echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $f_name is not valid..!</b>
			</div>
		";
            exit();
        }
        if (!preg_match($name, $lname)) {
            echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $l_name is not valid..!</b>
			</div>
		";
            exit();
        }
        if (!preg_match($number, $mobile)) {
            echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
            exit();
        }
        if (!(strlen($mobile) == 10)) {
            echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
			</div>
		";
            exit();
        }

        $user = "UPDATE user_info SET first_name='$fname',last_name='$lname', mobile='$mobile', address1='$address1' , address2='$address2' WHERE user_id='$user_id'";
        $query = mysqli_query($con, $user);
        if ($query) {
            header('location:account.php');
        }
    }
