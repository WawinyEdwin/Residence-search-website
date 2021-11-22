<div class = "page-container">
    <div class ="content-wrap">
        <div class ="container form-group">
            <p class ="lead"> At patahouse we value your feedback and are committed to giving out the quality of service you deserve!
            </p>
            <form action="<?=site_url('User/savefeedback')?>">
                <?php @$error ?>
            <label for="mail" class ="form-label"> Email </label> 
            <input type="email" name="mail" class ="form-control"  placeholder ="mail@example.com" required>
            <label for="message" class ="form-label"> Your Message </label> 
            <textarea name="feed" class ="form-control" cols="30" rows="10" placeholder ="Write here...."></textarea>
            <br>
                <div class ="text-center">
                    <button type="submit" class="btn btn-primary" value ="Feedback Data" name ="savefeed" >
                        SUBMIT
                    </button>
                </div>
            </form>
                <p class ="lead text-success text-center"> <img src="<?=site_url('images/info.svg')?>" >Thank you for taking time to share your feedback</p>
        </div>
    </div>
</div>