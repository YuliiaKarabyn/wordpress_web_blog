<?php
    $about = $args['data'];
?>
<div class="container">
    <div class="row">
        <div class="bg-img d-flex justify-content-between">
            <div class="col-md-5 d-flex  align-items-start">
                <div class="about-block">
                    <h2 class="dark-grey-color"><?php echo $about['title']; ?></h2>
                    <p class="blue-сolor"><?php echo $about['info']; ?></p>
                </div>      
            </div>
            <div class="col-md-6 containerr">
                    <?php if($about['images']){ $i=0;
                        foreach($about['images'] as $image){
                            $i++;
                            ?>
                            <img class="<?php echo $image['image_type']; ?>" src="<?php echo $image['picture']; ?>" alt="photo">
                        <?php } ?>
                    <?php } ?> 
            </div>
        </div>
    </div>
</div>
