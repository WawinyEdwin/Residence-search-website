
<br>
<div class ="container">
    <form action="<?=site_url('User/add_house')?>" method="post" class ="form-group">
        <label for="" class ="form-label"> Residence Name </label>
        <input type="text" class ="form-control" required>
        <label for="" class ="form-label"> Image </label> <br>
        <input type="file" id ="image" accept ="image/*" required> <br>
        <label for="" class ="form-label"> Price </label>
        <input type="number" class = "form-control" required> 
        <label for="" class ="form-label"> Requirements </label>
        <textarea  class ="form-control"> </textarea>
        <label for="" class ="form-label"> Amenities </label>
        <textarea type="text" class ="form-control" required> </textarea>
        <label for="" class ="form-label"> House Rules </label>
        <textarea type="text" class ="form-control" required> </textarea>
        <br>
        <div class ="text-center">
            <button type="submit" class ="btn btn-primary" name ="house" value ="Add House">
                ADD 
            </button>
        </div>
    </form>
    <br>
    <p class ="lead text-center text-info"> <img src="<?=site_url('images/info.svg')?>" >Please Note that the info you provided will be reviewed for
         authenticity before a change is reflected on the platform.
        <br>
        ,for more info read the <a href ="<?=site_url('patahouse/service')?>"> Service policy </a>
        </p>
</div>