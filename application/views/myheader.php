<!DOCTYPE html>
<html lang="en">
<head>
        <title> pataHouse </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="pataHouse is a legitimate service provider whose aim is to connect  you to your dream residence with ease.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel ="stylesheet" href ="<?=site_url('style/pata.css')?>">
</head>
<body>
    <nav class ="navbar navbar-expand-lg">
            <a class ="navbar-brand"> <a href ="<?=site_url('patahouse/index')?>"id ="link"> PataHouse </a> </h5>
                <button class ="navbar-toggler" type ="button" 
                    data-toggle ="collapse" data-target ="#navbarCollapse">
                    <span class ="navbar-toggler-icon"></span>
                </button>
                <div class ="collapse navbar-collapse" id ="navbarCollapse">
                  <div class ="navbar-nav mr-auto">
                        <a href="<?=site_url('patahouse/orders')?>" id ="link" class ="nav-item nav-link"> 
                        <img src="<?=site_url('images/inventory.svg')?>" alt=""> Booking </a>
                        <a  href="<?=site_url('patahouse/details')?>" id ="link" class ="nav-item nav-link"> 
                        <img src="<?=site_url('images/feed.svg')?>" alt=""> House Details  </a>
                        <a href="<?=site_url('patahouse/feedback')?>" id ="link" class ="nav-item nav-link"> 
                        <img src="<?=site_url('images/help.svg')?>" alt="">Feedback & Complaints </a>
                        <div class ="nav-item dropdown">
                            <a class =" dropdown-toggle  nav-link" role ="button" id ="navbarDropdown" 
                                data-toggle ="dropdown" aria-haspopup ="true" ariaexpanded ="false">
                            <img src="<?=site_url('images/account1.svg')?>" alt=""><?=$this->session->userdata('user_phone');?> 
                            </a>
                            <div class ="dropdown-menu" aria-labelledby = "navbarDropdown">
                                <a href="<?=site_url('patahouse/mypage')?>" class ="dropdown-item text-primary"> My Account </a>
                                <div class ="dropdown-divider"></div>
                                <a href="<?=site_url('User/logout')?>" class ="dropdown-item text-primary"> LogOut </a>
                            </div>
                        </div> 
                  </div>
                </div>   
        </nav>