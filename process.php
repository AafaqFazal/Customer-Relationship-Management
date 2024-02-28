<?php

session_start();

$mysqli = new mysqli('localhost','root','','alazbreal') or die(mysqli_error($mysqli));

$id = 0;
$name = "";
$phonenumber = "";
$email = "";
$isLead = "1";
$update = false;
if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $isLead = $_POST['isLead'];

    $mysqli->query("INSERT INTO customers (name,phonenumber,email,lead) VALUES('$name','$phonenumber','$email','$isLead')") 
    or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: admindashboard.php");
}

if (isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM customers WHERE id = $id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: admindashboard.php");
}

if (isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM customers WHERE id=$id") or die($myseqli->error());
    if(count(array($result))==1)
    {
        $row = $result->fetch_array();
        $name = $row['name'];
        $phonenumber = $row['phonenumber'];
        $email = $row['email'];
        $isLead = $row['lead'];
        
    }
}

if (isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $isLead = $_POST['isLead'];

    $mysqli->query("UPDATE customers SET name='$name',phonenumber='$phonenumber',email='$email',lead='$isLead' WHERE id=$id")
    or die ($myseqli->error);
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    header("location: admindashboard.php");
}



