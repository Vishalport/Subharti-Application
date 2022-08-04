<?php
    $connect = mysqli_connect("localhost", "root", "");

    try
    {
        $query = "create database if not exists svsuapp";
        $connect->query($query);
    }
    finally{
        $connect->select_db("svsuapp");
    }

    $query = "create table if not exists ceoaccess (
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


    $query = "create table if not exists vcaccess (
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

    $query = "create table if not exists registraraccess (
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
    
?>