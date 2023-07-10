<?php
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 10, // Number of products to retrieve
    // 'product_cat'    => 'Tees', 
    // Slug of the product category from where the products will be listed
);


$products = new WP_Query($args);
?>
<section id="tshirts-section" class="section tshirts-section">
    <h2 class="heading"><?php echo $block["heading"]?></h2>
    <div class="inner">
        <div class="tshirt-wrap">
        <div class="tshirts">
            <?php foreach($products-> posts as $product){
                $product_name = $product -> post_title;
                // $product_id = $product -> ID;
                $product_id = 99;
                $regular_price = get_post_meta($product_id, '_regular_price', true);
                $sale_price = get_post_meta($product_id, '_sale_price', true);
                $product_images = get_field('product_images', $product_id);
                $product_sizes = get_field('product_sizes', $product_id);
                // var_dump($product_sizes["small_image"]["url"]);
                $gallery_image=explode(",", get_post_meta($product_id, '_product_image_gallery', true));
                $product_description = $product -> post_content;
                // var_dump($product_images);
                ?>
                <div class="tshirt" name="<?php echo $product_name ?>">
                    <div class="image">
                        <?php
                            $i = 0;
                            $face = "back";

                            foreach($product_images as $image){
                                
                                if($i == 1){$face = "front";}?>
                                <div class="card__face card__face--<?php echo $face?>">
                                    <img class="<?php echo $face?>" src="<?php echo $image['image']["url"]?>" alt="">
                                </div>
                            <?php
                                $i++;    
                            }
                            $i = 0;
                            ?>
                        <div class="shadow"></div>
                    </div>
                    <div class="name">
                        <?php echo $product_name?>
                    </div>
                    <div class="details">
                        <div class="price"><?php echo $regular_price ?>rs</div>
                        <div class="price sale"><?php echo $sale_price ?>rs</div>
                    </div>
                    <div class="display-name">
                        <?php echo $product_name?>
                    </div>
                </div>
            <?php } ?>
        </div>
        </div>
    </div>
</section>


<div class="product-modal <?php echo $product_id ?>">
    <div class="image">
    <div class="img-group" name="<?php echo $product_name?>" >
    <?php 
        // var_dump($product_sizes["small_image"]["url"] )
    ?>

        <img class="full-img small" size="small" src="<?php echo $product_sizes["small_image"]["url"]  ?>" alt="">
        <!-- <img class="full-img medium" size="medium" src="<?php echo $product_sizes["medium_image"]["url"]  ?>" alt="">
        <img class="full-img large" size="large" src="<?php echo $product_sizes["large_image"]["url"]  ?>" alt=""> -->
        </div>
    </div>

<!-- <div class="product-modal">
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
                <?php foreach($products as $product){?>
                    <div class="single-name" name="<?php echo $product_name ?>">
                        <?php echo $product_name?>
                    </div>
                <?php } ?>
            </div>
            <div class="description">
                <?php echo $product_description  ?>
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
</div> -->



