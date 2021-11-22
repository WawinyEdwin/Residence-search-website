<br>
        <div class ="container" id ="search">
            <div class ="text-center row" style ="background-image:<?=site_url('images/bedroom3.jpg')?>;" >
                <form  action ="<?=site_url('Book/search_action')?>" class ="form-group">
                    <h4> Search and find residence.</h4>
                    <label class ="form-label">Preferred location</label>
                    <br>
                    <input type="text" name ="location" class ="form-control" placeholder ="where do you want to live?" required>
                    <br>
                    <label for="" class ="form-label"> Maximum Price </label>
                    <br>
                    <input type="number" name ="price" class ="form-control" placeholder ="KES">
                    <br><br>
                    <button class ="btn btn-primary" value ="search" name =" Search Query">
                     Search   <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
        <p class ="lead text-center"> Browse this month's featured categories. </p>
        <div class ="row">
            <div class ="col">
                <div class="card">
                <h5 class="card-title text-center"> Rentals  </h5>
                    <img class="card-img-top" src="<?=site_url('images/bedroom1.jpg')?>" alt="rentals" id ="img">
                    <div class="card-body">
                        <a href="<?=site_url('houses/rentals')?>" class="btn btn-primary"> More rentals</a>
                    </div>
                </div>
                <br>
                <div class="card">
                <h5 class="card-title text-center"> Apartments </h5>
                    <img class="card-img-top" src="<?=site_url('images/apartment.jpg')?>" alt="apartments" id ="img">
                    <div class="card-body">
                        <a href="<?=site_url('houses/apartment')?>" class="btn btn-primary"> More apartments</a>
                    </div>
                </div>
                <br>
                <div class="card">
                <h5 class="card-title text-center"> Mabatini </h5>
                    <img class="card-img-top" src="<?=site_url('images/bedroom3.jpg')?>" alt="mabatini" id ="img">
                    <div class="card-body">
                        
                        <a href="<?=site_url('houses/mabatini')?>" class="btn btn-primary"> More mabatini</a>
                    </div>
                </div>
                <br>
                <div class="card">
                <h5 class="card-title text-center"> Flats </h5>
                    <img class="card-img-top" src="<?=site_url('images/flats.jpg')?>" alt="flats" id ="img">
                    <div class="card-body">
                        <a href="<?=site_url('houses/flats')?>" class="btn btn-primary"> More flats</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col">
                <div class="card">
                <h5 class="card-title text-center"> One Bedrooms </h5>
                    <img class="card-img-top" src="<?=site_url('images/bedroom1.jpg')?>" alt="one bedroom" id = "img">
                    <div class="card-body">
                        <a href="<?=site_url('houses/bedroom1')?>" class="btn btn-primary"> More single bedrooms</a>
                    </div>
                </div>
                <br>
                <div class="card">
                <h5 class="card-title text-center"> Two Bedrooms </h5>
                    <img class="card-img-top" src="<?=site_url('images/apartment.jpg')?>" alt="two_bedroom" id ="img">
                    <div class="card-body">
                        <a href="<?=site_url('houses/bedroom2')?>" class="btn btn-primary"> More two bedrooms</a>
                    </div>
                </div>
                <br>
                <div class="card">
                <h5 class="card-title text-center"> Three Bedrooms </h5>
                    <img class="card-img-top" src="<?=site_url('images/bedroom3.jpg')?>" alt="three_bedroom" id ="img">
                    <div class="card-body">
                        <a href="<?=site_url('houses/bedroom3')?>" class="btn btn-primary"> More three bedrooms</a>
                    </div>
                </div>
                <br>
                <div class="card">
                <h5 class="card-title text-center"> Four Bedroom </h5>
                    <img class="card-img-top" src="<?=site_url('images/bedroom4.jpg')?>" alt="four_bedroom" id ="img">
                    <div class="card-body">
                        <a href="<?=site_url('houses/bedroom4')?>" class="btn btn-primary"> More four bedrooms</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class ="mailist text-center" id ="link">
        <form class="form-group" action="User/sub_action" method="POST">
            <h6> Be Ahead in residencial news and get the best deals </h6>
            <label class ="form-label"> Subscribe to our mailist </label>
            <input type= "email" name ="email" class ="form-control" placeholder ="mail@example.com"
             required > <br>
            <button class= "btn btn-primary" name ="subscribe" value ="Subscribe Me"> Subscribe </button>
        </form>
        </div>
 