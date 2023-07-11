<?php
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 10, // Number of products to retrieve
    'product_cat'    => 'Tees', 
    // Slug of the product category from where the products will be listed
);


$products = new WP_Query($args);


$variable_product = wc_get_product(99);
// $variations = $variable_product->get_available_variations();

if ($variable_product->is_type('variable')) {
    // Retrieve the variations
    $variations = $variable_product->get_available_variations();
    // var_dump($variations);


}
var_dump(do_shortcode('[wooswatches attribute="size"]'));

?>





<section id="tshirts-section" class="section tshirts-section">
    <h2 class="heading"><?php echo $block["heading"]?></h2>
    <div class="inner">
        <div class="tshirt-wrap">
        <div class="tshirts">
            <?php foreach($products-> posts as $product){
                $product_name = $product -> post_title;
                $product_id = $product -> ID;
                $regular_price = get_post_meta($product_id, '_regular_price', true);
                $sale_price = get_post_meta($product_id, '_sale_price', true);
                $product_images = get_field('product_images', $product_id);
                $product_sizes = get_field('product_sizes', $product_id);
                $gallery_image=explode(",", get_post_meta($product_id, '_product_image_gallery', true));
                $product_description = $product -> post_content;
                ?>
                <div class="tshirt" name=".<?php echo str_replace(' ', '', $product_name) ?>">
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

<?php foreach($products-> posts as $product){?>
<div class="product-modal <?php echo str_replace(' ', '', $product_name) ?>">
    <div class="img-group">
        <?php foreach($product_sizes as $sizeImg){?>
            <img class="full-img" src="<?php echo $sizeImg["url"]?>" alt=""> 
        <?php } ?>
    </div>
    <div class="window">
        <?php 
        // echo do_shortcode("[product_variation attribute='size' show_option_none='Choose a size']")
        ?>
    </div>

</div>
<?php } ?>



