
<div class="col-xs-6 col-sm-6 col-md-3 list_product">
    <div class="product-block product-grid">
        <div class="product-inner">
            <div class="image">
                <a href="<?php the_permalink(); ?>"
                    data-images="https://trucchigialong.vn/wp-content/uploads/2021/03/1-2.jpg"
                    product-id="1758">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array( 'class' =>'thumnail') ); ?>
                </a>
            </div>
            <div class="product-meta">
                <div class="woocommerce woocommerce-product-rating"
                itemprop="aggregateRating" itemscope
                itemtype="http://schema.org/AggregateRating">                                                                  
            </div>
            <div class="name">
                <a href="<?php the_permalink(); ?>"
                    product-id="1758"><?php the_title(); ?></a>
                </div>
                <div class="price">
                    <div itemprop="offers" itemscope
                    itemtype="http://schema.org/Offer"
                    class="pricelist">
                    <ins>Liên hệ</ins>
                    <meta itemprop="price" content="" />
                    <meta itemprop="priceCurrency" content="VND" />
                    <link itemprop="availability"
                    href="http://schema.org/InStock" />
                </div>
            </div>
            <div class="action_custom">
                <div class="readmore"><a
                    href="<?php the_permalink(); ?>"
                    title="Xem chi tiết"><i class="fa fa-eye"
                    aria-hidden="true"></i> <span>Xem
                    chi tiết</span></a></div>
                    <div class="add-to-cart"><a
                        href="<?php the_permalink(); ?>"
                        title="Giỏ hàng"><i
                        class="fa fa-shopping-bag"
                        aria-hidden="true"></i> <span>Giỏ
                        hàng</span></a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>