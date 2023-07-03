<section id="tshirts-section" class="section tshirts-section">
    <h2 class="heading"><?php echo $block["heading"]?></h2>
    <div class="inner">
        <div class="tshirts">
            <?php foreach($block["products"] as $product){?>
                <div class="tshirt">
                    <div class="image">
                        <div class="card__face card__face--back">
                            <img class="back" src="<?php echo $product["product"]["back"]?>" alt="">
                        </div>
                        <div class="card__face card__face--front">
                            <img class="front" src="<?php echo $product["product"]["front"]?>" alt="">
                        </div>
                        <div class="shadow"></div>
                    </div>
                    <div class="name">
                        <?php echo $product["product"]["name"]?>
                    </div>
                    <div class="details">
                        <div class="price"><?php echo $product["product"]["original"] ?>rs</div>
                        <div class="price sale"><?php echo $product["product"]["price"] ?>rs</div>
                    </div>
                    <div class="display-name">
                        <?php echo $product["product"]["name"]?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>