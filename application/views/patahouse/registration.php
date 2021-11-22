
    <div>
<style>
.form-group {
    padding: 25px;
}
</style>
    <div class ="text-center">
        <p class ="lead"> Thanks for your interest in pataHouse!</p>
        <h4> Create Account </h4>
    </div>
    <div class ="container form-group"  >
        <form action="<?=site_url('User/sign_up')?>" method="POST">
        <?php echo @$error; ?>
        <div class ="">
            <label name ="phone" class ="form-label"> Phone Number </label>
            <input type="tel" name ="user_phone" class ="form-control" required>
        </div>
        <div class ="">
           <label name ="psw1" class ="form-label">  Password </label>
            <input type="password" name ="user_psw1"  class ="form-control" required>
            <small class ="text-muted">
            Password must be 8-20 characters long
            </small>
        </div>
        <div class ="">
            <label name ="psw1" > Confirm Password </label>
            <br>
            <input type="password" name ="user_psw2" class ="form-control" required>
            <br>
        </div>  
            
            <!--
            <label for="code"> Enter the verification code </label>
            <br>
            <input type="number" name="" id="verCode" required>
            -->
            <div class ="text-center">
                <p class ="lead"> By clicking register you agree to pataHouse <a href ="<?=site_url('patahouse/policy')?>"> Privacy Policy </a> and <a href ="terms.html"> Terms and Conditions </a> !
                </p>
                <button class ="btn btn-primary"  value ="Register Me" name = "register" type ="submit"> 
                REGISTER 
                </button>
                <hr>
                <p> Already have an account? <a href= "<?=site_url('patahouse/login')?>"> LOGIN </a></p>
            </div>
        </form>
        </div>
 