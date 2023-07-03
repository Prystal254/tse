<section id="accessories-section" class="section accessories-section">
    <h2 class="heading"><?php echo $block["heading"]?></h2>
    <div class="inner">
        <div class="accessories">
            <?php foreach($block["products"] as $product){?>
                <a href="#tshirts-section" class="accessory">
                    <div class="name">
                        <?php echo $product["product"]["name"]?>
                    </div>
                    <div class="image">
                        <img class="image-img" src="<?php echo $product["product"]["image"]?>" alt="">
                        <div class="shadow"></div>
                    </div>
                    <div class="details">
                        <div class="price"><?php echo $product["product"]["price"] ?>Rs</div>
                        <div class="price free">FREE</div>
                    </div>
                    <div class="display-name">
                        <?php echo $product["product"]["name"]?>
                    </div>
                </a>
            <?php } ?>
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