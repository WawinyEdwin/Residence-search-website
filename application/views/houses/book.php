<style>
.form-group {
    padding: 25px;
}
</style>
<hr>
<div class = "container">
    <form action="<?=site_url('bookform')?>" method="post" class ="form-group">
        <label for="date"> Date moving In </label><br>
        <input type="date" required><br>
        <label for="timeIn"> Expected Time In</label> <br>
        <input type="time" required><br>
        <label for="house_no"> House NO assigned </label><br>
        <input type="text" required> <br><br>
        <button class ="btn btn-primary">
            Book
        </button>
    </form>
</div>