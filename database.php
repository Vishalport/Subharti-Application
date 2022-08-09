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

    $query = "create table if not exists users(
        name varchar(50),
        email varchar(50),
        mobile varchar(10),
        position varchar(30),
        designation varchar(100),
        department varchar(100),
        image varchar(100),
        username varchar(20),
        password varchar(30)
    )";
    $connect->query($query);
    $query = "select username, password from users";
    $result = $connect->query($query);
    if($result->num_rows == 0)
    {
        $query = "insert into users (position, username, password) values('CEO', 'ceo@subharti', 'ceo@123')";
        $connect->query($query);
        $query = "insert into users (position, username, password) values('Vice-Chancellor', 'vc@subharti', 'vc@123')";
        $connect->query($query);
        $query = "insert into users (position, username, password) values('Registrar', 'registrar@subharti', 'registrar@123')";
        $connect->query($query);
    }

    $query = "create table if not exists letter(
        digit int,
        ref varchar(20),
        appdate varchar(10),
        remark varchar(100),
        remarkdate varchar(10),
        status varchar(10),
        position varchar(30),
        source varchar(50),
        name varchar(50),
        sourceuser varchar(20),
        destuser varchar(20)
    )";
    $connect->query($query);
?>