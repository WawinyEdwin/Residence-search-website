<!DOCTYPE html>
<html>
    <head>
        <title> Landlord PataHouse </title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=site_url('style/pata.css')?>">
    </head>
    <body>
        <nav class = "nav navbar navbar-lg">
            <h3 class ="navbar-brand mr-3" onclick= "openNav()" id ="link"> DASHBOARD </h3> 
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
        <div class="sidenav" id="mynav">
        <h5 class="closebtn" onclick="closeNav()"> &times;</h5>
        <div>
            <a href="<?=site_url('landlord/housing')?>"> <h4 id ="link"> Houses </h4></a>
            <a href="<?=site_url('landlord/booking')?>"> <h4 id ="link"> Bookings </h4></a>
            <a href="<?=site_url('landlord/tenants')?>"> <h4 id ="link"> Tenants </h4></a>
            <a href="<?=site_url('landlord/subscription')?>"> <h4 id ="link"> Subscription </h4></a>
            <a onclick = "logout()" redirect<?=site_url('patahouse/home')?>> <h4 id ="link"> LogOut </h4></a>
        </div>
    </div>