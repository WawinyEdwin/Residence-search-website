<!DOCTYPE html>
<body>
    <!--<div id ="page-content">
    <div id = "content-wrap">-->
        <nav class ="navbar navbar-expand-lg mr-3">
        <h2 class ="navbar-brand mb-3"> pataHouse</h2>
            <div class = "navbar-nav">
            <div class =" nav item" >
                <a href="<?=site_url('patahouse/login')?>" class = "nav-link" id ="link"> LOG IN </a>
            </div>
            </div>
        </nav>
        <div class ="dropdown">
            <div class ="dropdown-menu">
               <!-- <a <?=$this->session->userdata('user_phone');?>> </a> -->
                <div>
                    <a href="<?=site_url('mypage')?>" class ="dropdown-item"> My Account </a>
                    <hr>
                    <a href="<?=site_url('logout')?>" class ="dropdown-item"> Log Out </a>
                </div>
            </div>
        </div>
<br>
    <div class ="container">
        <div>
            <div class ="text-center" id ="find">
            <h4> Search and find residence.</h4>
                <form  action ="<?=site_url('search')?>">
                    <label>Preferred location</label>
                    <br>
                    <input type="text" placeholder ="where do you want to live?" required>
                    <br>
                    <label for=""> Maximum Price </label>
                    <br>
                    <input type="number" placeholder ="KES">
                    <br><br>
                    <button class ="btn btn-primary">
                     <h5> Search   <i class="fa fa-search" aria-hidden="true"></i></h5>
                    </button>
                </form>
            </div>
        </div>
        <hr>
        <h3>Featured Residences</h3>
        <br>
        <div class ="row">
            <div class ="col">
                <div class="card">
                    <img class="card-img-top" src="<?=site_url('images/bedroom1.jpg')?>" alt="rentals" id ="img">
                    <div class="card-body">
                        <h5 class="card-title"> Rentals  </h5>
                        <a href="<?=site_url('houses/rentals')?>" class="btn btn-primary"> More </a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <img class="card-img-top" src="<?=site_url('images/apartment.jpg')?>" alt="apartments" id ="img">
                    <div class="card-body">
                        <h5 class="card-title"> Apartments </h5>
                        <a href="<?=site_url('houses/apartment')?>" class="btn btn-primary"> More </a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <img class="card-img-top" src="<?=site_url('images/bedroom3.jpg')?>" alt="mabatini" id ="img">
                    <div class="card-body">
                        <h5 class="card-title"> Mabatini </h5>
                        <a href="<?=site_url('houses/mabatini')?>" class="btn btn-primary"> More </a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <img class="card-img-top" src="<?=site_url('images/flats.jpg')?>" alt="flats" id ="img">
                    <div class="card-body">
                        <h5 class="card-title"> Flats </h5>
                        <a href="<?=site_url('houses/flats')?>" class="btn btn-primary"> More </a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="<?=site_url('images/bedroom1.jpg')?>" alt="one bedroom" id = "img">
                    <div class="card-body">
                        <h5 class="card-title"> One Bedroom </h5>
                        <a href="<?=site_url('houses/bedroom1')?>" class="btn btn-primary"> More </a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <img class="card-img-top" src="<?=site_url('images/apartment.jpg')?>" alt="two_bedroom" id ="img">
                    <div class="card-body">
                        <h5 class="card-title"> Two Bedroom </h5>
                        <a href="<?=site_url('houses/bedroom2')?>" class="btn btn-primary"> More </a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <img class="card-img-top" src="<?=site_url('images/bedroom3.jpg')?>" alt="three_bedroom" id ="img">
                    <div class="card-body">
                        <h5 class="card-title"> Three Bedroom </h5>
                        <a href="<?=site_url('houses/bedroom3')?>" class="btn btn-primary"> More </a>
                    </div>
                </div>
                <br>
                <div class="card">
                    <img class="card-img-top" src="<?=site_url('images/bedroom4.jpg')?>" alt="four_bedroom" id ="img">
                    <div class="card-body">
                        <h5 class="card-title"> Four Bedroom </h5>
                        <a href="<?=site_url('houses/bedroom4')?>" class="btn btn-primary"> More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class ="mailist">
        <form class="form-group" action="" method="POST">
            <h6> Ahead in residencial news </h6>
            <label> <h6>Subscribe to our mailist </h6></label>
            <br>
            <input type= "email" name ="email" required>
            <button class= "btn btn-primary"> Subscribe </button>
        </form>
        </div>
 