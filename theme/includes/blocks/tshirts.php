<section id="tshirts-section" class="section tshirts-section">
    <h2 class="heading"><?php echo $block["heading"]?></h2>
    <div class="inner">
        <div class="tshirt-wrap">
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
    </div>
</section>
<div class="product-modal">
    <div class="image">
        <?php foreach($block["products"] as $product){?>
            <img class="<?php echo $product["product"]["name"]?> full-img small" size="small" src="<?php echo $product["product"]["small"]?>" alt="">
            <img class="<?php echo $product["product"]["name"]?> full-img medium" size="medium" src="<?php echo $product["product"]["medium"]?>" alt="">
            <img class="<?php echo $product["product"]["name"]?> full-img large" size="large" src="<?php echo $product["product"]["large"]?>" alt="">
        <?php } ?>
    </div>
    <div class="window">
        <div class="wrapper">
            <div class="name">
                <?php foreach($block["products"] as $product){?>
                    <div class="single-name" item="<?php echo $product["product"]["name"] ?>">
                        <?php echo $product["product"]["name"]?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>