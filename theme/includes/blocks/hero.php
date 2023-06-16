<section class="hero" style="background-image:url('<?php echo $block["background_image"]?>');">
    <div class="inner">
        <?php foreach($block["models"] as $model){?>
            <img src="<?php echo $model["model"]?>" alt="" class="model">    
        <?php } ?>
        <h1 class="campaign"><?php echo $block["campaign_name"]?></h1>
        <h1 class="campaign stroke"><?php echo $block["campaign_name"]?></h1>
        <div class="content">
            <p class="description">
                <?php echo $block["description"]?>
            </p>
            <a href="<?php echo $block["cta_button"]["url"]?>" class="cta">
                <?php echo $block["cta_button"]["title"]?>
            </a>
        </div>
    </div>
</section>