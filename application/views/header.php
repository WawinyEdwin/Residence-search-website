<!DOCTYPE html>
<html lang="en">
<head>
        <title> pataHouse </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="MobileOptimized" content="320">
        <meta name="description" content="pataHouse is a legitimate service provider whose aim is to connect  you to your dream residence with ease.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel ="stylesheet" href ="<?=site_url('style/pata.css')?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <nav class ="nav navbar navbar-expand-lg">
        <div class = "container">
            <a class ="navbar-brand"> pataHouse</a>
                <button class ="navbar-toggler" type ="button" data-toggle ="collapse" data-target ="#navbarCollapse">
                    <span class ="navbar-toggler-icon"></span>
                </button>
            <div class ="collapse navbar-collapse justify-content-start" id = "navbarCollapse">
                <div class = "navbar-nav mr-auto">
                        <a href="<?=site_url('patahouse/registration')?>"  class ="nav-link" id ="link"> Sign Up</a>
                        <a href="<?=site_url('houses/houses')?>" class="nav-link" id ="link"> Residencial </a>
                        <div>
                            <a href="<?=site_url('patahouse/login')?>" class = "nav-link" id ="link">
                            <img src="<?=site_url('images/login.svg')?>" alt=""> Sign In
                            </a> 
                        </div>
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
        </div>
    </nav>
