<br>
        <div id ="page-container">
        <div class ="text-center form-group" id ="content-wrap">
            <div>
                <h4> pataHouse LOGIN </h4>
                <p><?=$this->session->userdata('msg');?></p>
            </div>
            <form action ="<?site_url('auth')?>" method ="POST">
                <label name ="user_phone"> user_phone </label>
                <br>
                <input type="tel" name ="user_phone" required>
                <br>
                <br>
                <label name ="psw"> password </label>
                <br>
                <input type ="password" name="psw" required>
                <br>
                <br>
                <div>
                <button>
                 LOG IN 
                 </button>
                  <a href ="<?=site_url('patahouse/index')?>" class ="btn btn-primary "> Back </a>
                </div>
            </form>
        </div>
        </div>
 