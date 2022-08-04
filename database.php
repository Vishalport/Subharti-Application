<?php
    $connect = mysqli_connect("localhost", "root", "");

    $query = "create database svsuapp";
    $connect->query($query);
    $connect->select_db("svsuapp");

    try {
        //code...
        $query = "select * from ceoaccess";
        $result = $connect->query($query);
    } 
    finally
    {

        $query = "create table ceoaccess (
            username varchar(20),
            password varchar(20)
        )";
        $connect->query($query);
        $query = "select username, password from ceoaccess";
        $result = $connect->query($query);
        if($result->num_rows == 0)
        {
            $query = "insert into ceoaccess (username, password) values('ceo@subharti', 'ceo@123')";
            $connect->query($query);
        }
        
    }
    try {
        //code...
        $query = "select * from vcaccess";
        $result = $connect->query($query);
    } 
    finally
    {

        $query = "create table vcaccess (
            username varchar(20),
            password varchar(20)
        )";
        $connect->query($query);
        $query = "select username, password from vcaccess";
        $result = $connect->query($query);
        if($result->num_rows == 0)
        {
            $query = "insert into vcaccess (username, password) values('vc@subharti', 'vc@123')";
            $connect->query($query);
        }
        
    }
    try {
        //code...
        $query = "select * from registraraccess";
        $result = $connect->query($query);
    } 
    finally
    {

        $query = "create table registraraccess (
            username varchar(20),
            password varchar(20)
        )";
        $connect->query($query);
        $query = "select username, password from registraraccess";
        $result = $connect->query($query);
        if($result->num_rows == 0)
        {
            $query = "insert into registraraccess (username, password) values('registrar@subharti', 'registrar@123')";
            $connect->query($query);
        }
        
    }
    
?>