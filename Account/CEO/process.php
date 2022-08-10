<?php

    $connect = mysqli_connect("localhost", "root", "");
    $connect->select_db("svsuapp");

    if(isset($_GET['viewapp'])){
        $digit = $_GET['viewapp'];
        header("Location:../../Letters/$digit.pdf");
    }

    if(isset($_GET['approve'])){
        $digit = $_GET['approve'];
        $query = "UPDATE letter SET status = 'Approved', remark = 'Approved', remarkdate = '".date("d/m/Y")."' WHERE digit = '".$digit."'";
        $connect->query($query);
        header("Location:View_Application.php");
    }

    if(isset($_GET['reject'])){
        $digit = $_GET['reject'];
        $query = "SELECT position FROM users WHERE username = '".$_SESSION['username']."'";
        $result = $connect->query($query);
        $data = $result->fetch_assoc();
        $remark = "Rejected By ".$data['position'];
        $query = "UPDATE letter SET status = 'Rejected', remark = '".$remark."', remarkdate = '".date("d/m/Y")."' WHERE digit = '".$digit."'";
        $connect->query($query);
        header("Location:View_Application.php");
    }

    if(isset($_GET["withdraw"])){
        $digit = $_GET["withdraw"];
        $file = "../../Letters/".$digit.".pdf";
        if(unlink($file)){
            $query = "DELETE FROM letter WHERE digit = '".$digit."'";
            $connect->query($query) or die($connect->error);
            header("Location:YourApp.php");
        }
    }
?>