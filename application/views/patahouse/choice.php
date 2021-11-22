<script src="<?=site_url('script/choice.js')?>"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="<?=site_url('style/pata.css')?>">
<body>
    <div id = "page-content">
    <div id = "content-wrap">
        <nav class="navbar navbar-expand-lg mr-3" >
        <div class ="navbar-nav">
            <h2 class="navbar-brand mb-3"> PataHouse </h2>
           
           <div class="nav-item">
               <a href ="<?=site_url('patahouse/myaccount')?>"  class ="nav-link"> My Account </a>
           </div>
           <div class="nav-item">
               <a href="<?=site_url('patahouse/about')?>" class ="nav-link"> About </a>
           </div>
           <div class="nav-item">
               <a href="<?=site_url('houses/houses')?>" class="nav-link"> Residencial </a>
           </div>
        </div>
        </nav>
    <div class="text-center container">
        <h4> Please confirm your residencial choice </h4>
        <p> After confirmation you will be redirected to make payment via lipa na mpesa , enter your mpesa pin to authorize the payment</p>
    </div>
    <div class="text-center">
        <div class="form-bg">
            <form name="myForm" action="<?=site_url('payment')?>" onsubmit="validate()" method="POST">
                <label for="name"> NAMES </label> <br>
                <input type="text" name="name" id="" >
                <br>
                <label for=""> Phone Number : </label> <br>
                <input type="tel" name="tel" id="" >
                <br>
                <br>
                <button type="submit" class="btn btn-primary" > 
                    <h6> Confirm Details </h6>
                </button>
            </form>
        </div>
        <br>
        <button class=" btn btn-primary" id="pay" onmouseover="payReg()">
            <h6> Confirm payment </h6>
        </button>
    </div>
    </div>
</body>
    
