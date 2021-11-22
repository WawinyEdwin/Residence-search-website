<br>
        <div id ="main">
            <div class="text-center form-group">
                <h3> Create new user account </h1>
                <form action="<?=site_url('Admin/add')?>" method="POST" class="form-group"> 
                    <?php @$error ?>
                    <label name="phone" class ="form-label"> PHONE NUMBER </label><br>
                    <input type="tel" name= "user_phone"  class ="form-control" required>
                    <br>
                    <label name ="psw1" class ="form-label"> SET PASSWORD </label> <br>
                    <input type="password" name ="user_psw1" class ="form-control" required>
                    <br>
                    <label name ="psw1" class ="form-label"> CONFIRM PASSWORD </label><br>
                    <input type="password" name ="user_psw2" class ="form-control" required>
                    <br>
                    <br>
                    <button class=" btn btn-primary" type ="submit" value = "Add User" name ="adduser">
                        ADD USER 
                    </button>
                </form>
            </div>
        </div>
