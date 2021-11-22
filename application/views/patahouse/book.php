
<div class ="container form-group">
    <form action="<?=site_url('Book/savebooking')?>" method="post">
        <p class ="lead text-center"> Conviniently book to get your choice reserved so you can pay later.</p>
        <div >
            <label for="first_name" class ="form-label"> First Name </label>
            <input type="text" name="first_name" class ="form-control" required>
            <label for="last_name" class ="form-label"> Last Name </label>
            <input type="text" name="last_name" class ="form-control" required>
            <label for="phone" class ="form-label"> Phone Number </label> 
            <input type="tel" name="phone" class ="form-control" required> 
            <label for="house_no" class ="form-label"> House No </label> <p class ="text-info">(Assigned)</p>
            <input type="number" name="house_no" class ="form-control" required>
            <label for="" class ="form-label"> Date moving In </label>
        `   <input type="date" name ="dateIn" class ="form-control" required>
            <label for="" class ="form-label"> Expected Time In</label> 
            <input type="time" name ="timeIn" class ="form-control" required><br>
            <br>
        </div>
        <br>
        <div class ="text-center">
            <button type="submit" class ="btn btn-primary" value ="Save Data" name ="save">
                <h5> BookNow </h5>
            </button>
        </div>
    </form>
</div>