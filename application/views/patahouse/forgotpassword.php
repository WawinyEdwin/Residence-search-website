<br>
    <div class="text-center">
      <h4> Reset Password</h4>  
    </div>
    <div class="container text-center form-group" style = "padding:25px;">
        <h5 class ="text-info"> Please Enter your phone number to recieve a reset code. </h5>
        <form action="<?=site_url('forgot')?>" method="get">
            <label class ="form-label"> <h5> Mobile Number </h5> </label>
            <input type= "tel" class ="form-control" placeholder ="07.." required>
            <div>
            <br>
            <button class="btn btn-primary" > Get Reset Code </button> 
            <a href ="<?=site_url('patahouse/login')?>" class ="btn btn-primary" style ="margin-left:30px;"> Cancel </a>
            </div>
        </form>
    </div>
</div>
</div>