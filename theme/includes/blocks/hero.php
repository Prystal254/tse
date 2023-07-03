<section id="home" class="section hero" style="background-image:url('<?php echo $block["background_image"]?>');">
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
            <a href="#tshirts-section" class="cta">
                <?php echo $block["cta_button"]["title"]?>
            </a>
        </div>
    </div>
    <div class="scroll">
        <?php for ($i=0; $i < 2; $i++) { ?>
            <div>
                <?php for ($j=0; $j < 4; $j++) { 
                    echo $block["ticker"];
                }?>
            </div>
        <?php }?>
    </div>
</section>