<div id ="myCarousel" class ="carousel" data-bs-ride ="carousel">
    <ol class ="carousel-indicators">
        <li data-bs-target ="#myCarousel" class ="active" data-bs-slide-to ="0"></li>
        <li data-bs-target ="#myCarousel" data-bs-slide-to ="1"></li>
        <li data-bs-target ="#myCarousel" data-bs-slide-to ="3"> </li>
    </ol>
    <div class ="carousel-inner">
        <div class ="carousel-item">
            <img src="<?=site_url('images/apartment.jpg')?>" alt="" class ="d-block w-100">
        </div>
        <div class ="carousel-item ">
            <img src="<?=site_url('images/apartment.jpg')?>" alt="" class ="d-block w-100">
        </div>
        <div class ="carousel-item ">
            <img src="<?=site_url('images/apartment.jpg')?>" alt="" class ="d-block w-100">
        </div>
    </div>
    <a href="#myCarousel" class ="carousel-control-prev" data-bs-slide ="prev"> <span class ="carousel-control-icon"></span></a>
    <a href="#myCarousel" class ="carousel-control-next" data-bs-slide ="prev"> <span class ="carousel-control-icon"></span></a>
</div>
<script>
 $(document).ready(function()){
     $("#myCarousel").carousel();

 });
</script>