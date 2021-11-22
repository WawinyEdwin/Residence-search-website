<!DOCTYPE html>
<html lang="en">
<head>
        <title> Patahouse Admin </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="pataHouse is a legitimate service provider whose aim is to connect  you to your dream residence with ease.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel ="stylesheet" href ="<?=site_url('style/pata.css')?>">
</head>
<body>
    <div id ="page-content">
        <div id = "content-wrap">
        <div class="sidenav" id="mynav">
        <span id = "link" class ="closebtn" onclick ="closeNav()" > <h5> &times; </h5> </span>
                <div class="dropdown">
                    <h5 onclick="myFunction()"> Users </h5>
                    <div id = "mydropdown" class="dropdown-content">
                        <a href="<?= site_url('admin/addusers')?>"> Add User </a>
                    </div>
                </div>
                <br>
                 <div class="dropdown">
                    <h5 onclick="myFunction()"> Utilities </h5>
                    <div class="dropdown-content" id="mydropdown">
                        <a href="<?=site_url('admin/newutilities')?>"> Add Utilities </a>
                    </div>
                </div>
                <div>
                 <h5 redirect<?=site_url('patahouse/index')?> onclick ="logout()"> LogOut </a>
                </div>
    </div>
    <nav class = "nav navbar navbar-lg">
        <h3 onclick = "openNav()" class ="navbar-brand mr-3" id ="link"> DASHB0ARD </h3>
        <div class ="navbar-nav-menu">
            <div class ="dropdown">
                <button class ="btn dropdown-toggle btn-light nav-item nav-link" type ="button" id ="dropdownMenuButton" data-toggle ="dropdown">
                    <img src="<?=site_url('images/account1.svg')?>" alt=""><?=$this->session->userdata('user_phone');?> 
                </button>
            <div class ="dropdown-menu">
                    <a href="<?=site_url('patahouse/index')?>" class ="dropdown-item text-primary"> Home </a>
                    <a href="<?=site_url('User/logout')?>" class ="dropdown-item text-primary">
                    <img src="<?=site_url('images/logout.svg')?>" alt=""> LogOut
                    </a>
            </div>
        </div> 
    </nav>
    
            