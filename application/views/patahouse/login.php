
<br>
<div class ="container">
        <div class ="form-group">
                <h4  class ="text-center"> pataHouse LOGIN </h4>
            <form action ="<?=site_url('User/auth')?>" method ="POST">
                <?php echo @$error; ?>
                <label name ="user_phone" class ="form-label"> Phone Number</label>
                <input type="tel" name ="user_phone" class ="form-control" autofocus ="autofocus" required>
                <br>
                    <div class ="clearfix">
                        <label name ="psw" class ="form-label"> Password </label>
                        <a href="<?=site_url('patahouse/forgotpassword')?>" class="float-right text-muted"><small>Forgot password?</small></a>
                    </div>
                <input type ="password" name="user_psw1" class ="form-control" required>
                <div class = "form-group form-check">
                    <label class="form-check-label"> <input type="checkbox" class ="form-check-input" > Remember Me </label>
                </div>
                 <div class ="text-center">
                    <button class ="btn btn-primary" style ="margin-right: 30px;" 
                        type = "submit" name ="login"  value ="Login">
                            Sign in
                    </button>
                        <a href ="<?=site_url('patahouse/index')?>" class ="btn btn-primary "> Back </a>
                 </div>
            </form>
            <div class ="text-center">
                <p class ="lead">Don't have an account? <a href ="<?=site_url('patahouse/registration')?>"> Register </a></p>
            </div>
        </div>
    </div>
</div>
        
 