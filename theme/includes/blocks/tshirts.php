<section id="tshirts-section" class="section tshirts-section">
    <h2 class="heading"><?php echo $block["heading"]?></h2>
    <div class="inner">
        <div class="tshirt-wrap">
        <div class="tshirts">
            <?php foreach($block["products"] as $product){?>
                <div class="tshirt" name="<?php echo $product["product"]["name"] ?>">
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
            <div class="img-group" name="<?php echo $product["product"]["name"]?>" >
                <img class="full-img small" size="small" src="<?php echo $product["product"]["small"]?>" alt="">
                <img class="full-img medium" size="medium" src="<?php echo $product["product"]["medium"]?>" alt="">
                <img class="full-img large" size="large" src="<?php echo $product["product"]["large"]?>" alt="">
            </div>
        <?php } ?>
    </div>
    <div class="window">
        <div class="wrapper">
            <div class="name">
                <?php foreach($block["products"] as $product){?>
                    <div class="single-name" name="<?php echo $product["product"]["name"] ?>">
                        <?php echo $product["product"]["name"]?>
                    </div>
                <?php } ?>
            </div>
            <div class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quidem minus omnis cupiditate illo unde mollitia alias, quam quia sunt commodi dolorum quod dolorem nemo repellat iusto. Quam dolor autem sed, enim soluta hic. Dicta ex voluptatibus facilis nobis quidem delectus libero quam consequatur molestiae?
            </div>
            <div class="qty">
                <div class="minus">-</div>
                <div class="number">9</div>
                <div class="plus">+</div>
            </div>
            <div class="size-buttons">
                <div class="size-btn " size="small">
                    <div class="size">small</div>
                    <div class="person">mister bigger</div>
                </div>
                <div class="size-btn " size="medium">
                    <div class="size">medium</div>
                    <div class="person">sindh ginger</div>
                </div>
                <div class="size-btn " size="large">
                    <div class="size">large</div>
                    <div class="person">boss potato stinker</div>
                </div>
            </div>
            <div class="add-to-cart">add to cart</div>
            <div class="close-modal">close modal</div>
        </div>
    </div>
</div>