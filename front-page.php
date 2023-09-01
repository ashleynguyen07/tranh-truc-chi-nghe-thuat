<?php get_header(); ?>

<?php $banner = get_field('banner');?>





<div class="motopress-wrapper content-holder clearfix">
    <div id="pl-64" class="panel-layout">
        <div id="pg-64-0" class="panel-grid panel-has-style">
            <div class="banner_home panel-row-style panel-row-style-for-64-0">
                <div id="pgc-64-0-0" class="panel-grid-cell">
                    <div id="panel-64-0-0-0"
                    class="so-panel widget widget_metaslider_widget panel-first-child panel-last-child"
                    data-index="0">
                    <div id="metaslider-id-61" style="max-width: 1600px;"
                    class="ml-slider-3-28-3 metaslider metaslider-flex metaslider-61 ml-slider">
                    <div id="metaslider_container_61">
                        <div id="metaslider_61">
                            <ul aria-live="polite" class="slides">
                                <li style="display: block; width: 100%;" class="slide-265 ms-image"><img
                                    src="<?php echo get_template_directory_uri() . '/images/cover2.jpg'; ?>"
                                    height="600" width="1600" alt="" class="slider-61 slide-265"
                                    title="90939788_820660035008258_4574515550381670400_n_result" />
                                    <div class="caption-wrap">
                                        <div class="caption">
                                            <div class="title">
                                                <?php echo $banner['title'];?>
                                            </div>
                                            <div class="desc">Nghệ thuật tranh Giấy cao cấp của người Việt
                                            </div><a href="http://tranhtrucchinghethuat.com/cua-hang">Xem
                                            thêm</a>
                                        </div>
                                    </div>
                                </li>
                                        <!-- <li style="display: none; width: 100%;" class="slide-1684 ms-image"><img
                                                src="https://trucchigialong.vn/wp-content/uploads/2022/04/53728054_2084331141687305_1489788197792645120_n-1600x600.jpg"
                                                height="600" width="1600" alt="" class="slider-61 slide-1684"
                                                title="53728054_2084331141687305_1489788197792645120_n" /></li> -->
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-64-1" class="panel-grid panel-has-style">
                    <div class="new_home panel-row-style panel-row-style-for-64-1">
                        <div id="pgc-64-1-0" class="panel-grid-cell">
                            <div id="panel-64-1-0-0"
                            class="so-panel widget widget_siteorigin-panels-builder panel-first-child panel-last-child"
                            data-index="1">
                            <div class="container panel-widget-style panel-widget-style-for-64-1-0-0">
                                <div id="pl-w604f23605d357" class="panel-layout">
                                    <div id="pg-w604f23605d357-0" class="panel-grid panel-no-style">
                                        <div id="pgc-w604f23605d357-0-0" class="panel-grid-cell">
                                            <div id="panel-w604f23605d357-0-0-0"
                                            class="so-panel widget widget_sow-editor panel-first-child" data-index="0">
                                            <div
                                            class="text_custom panel-widget-style panel-widget-style-for-w604f23605d357-0-0-0">
                                            <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                                <h3 class="widget-title">Sản phẩm nổi bật</h3>
                                                <div class="siteorigin-widget-tinymce textwidget">
                                                    <div class="textwidget">
                                                        <p style="text-align: center;">Những&nbsp;tin
                                                            tức&nbsp;và&nbsp;sự kiện&nbsp;mới sẽ liên tục được đăng
                                                            tải trong chuyên mục này. Chúng tôi sẽ chia sẻ với các
                                                        bạn những thông&nbsp;tin mới liên quan tới Trúc chỉ</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div id="panel-w604f23605d357-0-0-1"
                                    class="widget_text so-panel widget widget_custom_html panel-last-child"
                                    data-index="1">
                                    <div class="textwidget custom-html-widget">
                                        <div class="woocommerce jcarousel_template_">


                                            <?php
                                            $tax_query[] = array(
                                                'taxonomy' => 'product_visibility',
                                                'field'    => 'name',
                                                'terms'    => 'featured',
                                                'operator' => 'IN',
                                            );
                                            ?>

                                            
                                            <?php $args = array( 
                                                'post_type' => 'product',
                                                'posts_per_page' => 8,
                                                'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
                                            <?php $getposts = new WP_query( $args);?>
                                            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                                <?php global $product; ?>


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
                                                        <?php endwhile; wp_reset_postdata(); ?>







                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="pg-64-2" class="panel-grid panel-has-style">
        <div class="new_home panel-row-style panel-row-style-for-64-2">
            <div id="pgc-64-2-0" class="panel-grid-cell">
                <div id="panel-64-2-0-0"
                class="so-panel widget widget_siteorigin-panels-builder panel-first-child panel-last-child"
                data-index="2">
                <div class="container panel-widget-style panel-widget-style-for-64-2-0-0">
                    <div id="pl-w625a8ff10e3fd" class="panel-layout">
                        <div id="pg-w625a8ff10e3fd-0" class="panel-grid panel-no-style">
                            <div id="pgc-w625a8ff10e3fd-0-0" class="panel-grid-cell">
                                <div id="panel-w625a8ff10e3fd-0-0-0"
                                class="so-panel widget widget_sow-editor panel-first-child" data-index="0">
                                <div
                                class="text_custom panel-widget-style panel-widget-style-for-w625a8ff10e3fd-0-0-0">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <h3 class="widget-title">Sản phẩm liên quan</h3>
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <div class="textwidget">
                                            <p style="text-align: center;">Những&nbsp;tin
                                                tức&nbsp;và&nbsp;sự kiện&nbsp;mới sẽ liên tục được đăng
                                                tải trong chuyên mục này. Chúng tôi sẽ chia sẻ với các
                                            bạn những thông&nbsp;tin mới liên quan tới Trúc chỉ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="panel-w625a8ff10e3fd-0-0-1"
                        class="widget_text so-panel widget widget_custom_html panel-last-child"
                        data-index="1">
                        <div class="textwidget custom-html-widget">
                            <div class="sanpham_banchay row">

                                <?php $args = array( 'post_type' => 'product','posts_per_page' => 8,'ignore_sticky_posts' => 1);?>
                        <?php $getposts = new WP_query( $args);?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php global $product; ?>




                                <div class="col-xs-6 col-sm-6 col-md-3 list_product">
                                    <div class="product-block product-grid">
                                        <div class="product-inner">
                                            <div class="image">
                                                <a href="<?php the_permalink(); ?>"
                                                data-images="https://trucchigialong.vn/wp-content/uploads/2021/01/262879288_703683483928876_2250462704290972911_n.jpg"
                                                product-id="384">
                                                <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array( 'class' =>'thumnail') ); ?>
                                            </a>
                                        </div>
                                        <div class="product-meta">
                                            <div class="woocommerce woocommerce-product-rating"
                                            itemprop="aggregateRating" itemscope
                                            itemtype="http://schema.org/AggregateRating">
                                                                    <!-- <div class="star-rating"
                                                                        title="Được xếp hạng 0 5 sao">
                                                                        <span style="width:0%">
                                                                            <strong itemprop="ratingValue"
                                                                                class="rating">0</strong> out of 5
                                                                        </span>
                                                                    </div> -->
                                                                </div>
                                                                <div class="name">
                                                                    <a href="<?php the_permalink(); ?>"
                                                                    product-id="384"><?php the_title(); ?></a>
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
                                                    

<?php endwhile; wp_reset_postdata(); ?>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pg-64-3" class="panel-grid panel-has-style">
        <div class="gioithieu panel-row-style panel-row-style-for-64-3">
            <div id="pgc-64-3-0" class="panel-grid-cell">
                <div id="panel-64-3-0-0"
                class="so-panel widget widget_siteorigin-panels-builder panel-first-child panel-last-child"
                data-index="3">
                <div class="container panel-widget-style panel-widget-style-for-64-3-0-0">
                    <div id="pl-w649bdfb3402ef" class="panel-layout">
                        <div id="pg-w649bdfb3402ef-0" class="panel-grid panel-no-style">
                            <div id="pgc-w649bdfb3402ef-0-0" class="panel-grid-cell">
                                <div id="panel-w649bdfb3402ef-0-0-0"
                                class="so-panel widget widget_media_image panel-first-child panel-last-child"
                                data-index="0"><img width="1728" height="1152"
                                src="https://trucchigialong.vn/wp-content/uploads/2020/03/8.jpg"
                                class="image wp-image-445  attachment-full size-full" alt="" loading="lazy"
                                style="max-width: 100%; height: auto;"
                                srcset="https://trucchigialong.vn/wp-content/uploads/2020/03/8.jpg 1728w, https://trucchigialong.vn/wp-content/uploads/2020/03/8-600x400.jpg 600w, https://trucchigialong.vn/wp-content/uploads/2020/03/8-768x512.jpg 768w, https://trucchigialong.vn/wp-content/uploads/2020/03/8-1536x1024.jpg 1536w"
                                sizes="(max-width: 1728px) 100vw, 1728px" /></div>
                            </div>
                            <div id="pgc-w649bdfb3402ef-0-1" class="panel-grid-cell">
                                <div id="panel-w649bdfb3402ef-0-1-0"
                                class="so-panel widget widget_sow-editor panel-first-child panel-last-child"
                                data-index="1">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p>Không chỉ đơn giản là những hình vẽ bình thường, từ đôi bàn tay
                                            khéo léo của các nghệ nhân đã tạo ra những tác phẩm hoàn mỹ độc
                                            bản bằng cách vẽ chỉ có tại Trúc chỉ. Mọi bức tranh được vẽ hoàn
                                            toàn bằng áp lực nước, những nét vẽ đậm nhạt của bức tranh cho
                                            ra độ nông, sâu của từng sản phẩm. Mỗi sản phẩm được hoàn thành
                                            thành mất đến 420h làm việc liên tục, đòi hỏi sự chính xác cao
                                            độ để ch<span class="text_exposed_show">o ra những kiệt tác chỉ
                                            có duy nhất từng Gia chủ sở hữu</span></p>
                                            <p><a href="https://tranhtrucchinghethuat.com/gioi-thieu/">Xem chi tiết</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="pg-64-4" class="panel-grid panel-has-style">
    <div class="danhgia_nhanxet panel-row-style panel-row-style-for-64-4">
        <div id="pgc-64-4-0" class="panel-grid-cell">
            <div id="panel-64-4-0-0" class="so-panel widget widget_sow-editor panel-first-child" data-index="4">
                <div class="container text_custom panel-widget-style panel-widget-style-for-64-4-0-0">
                    <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <h3 class="widget-title">Đánh giá, nhận xét khách hàng</h3>
                        <div class="siteorigin-widget-tinymce textwidget">
                            <div class="textwidget">
                                <p style="text-align: center;">Khách hàng nói gì về Tranh Trúc Chỉ Nghệ Thuật</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="panel-64-4-0-1" class="widget_text so-panel widget widget_custom_html panel-last-child"
            data-index="5">
            <div class="widget_text container panel-widget-style panel-widget-style-for-64-4-0-1">
                <div class="textwidget custom-html-widget">
                    <div class="list_nhanxet_template ">
                        <div class=" list_nhanxet">
                            <div class="content_nhanxet">
                                <div class="top_nhanxet">
                                    <div class="nhanxet">Tôi cần một bức tranh để trang trí cho phòng thờ
                                        Phật của gia đình tôi. Được một người bạn giới thiệu mà tôi biết đến
                                    Trúc chỉ nghệ thuật.... </div>
                                </div>
                                <div class="bottom_nhanxet">
                                    <figure class="featured-thumbnail thumbnail">
                                        <a href="https://trucchigialong.vn/danh-gia/hoang-phuong-thao/"><img
                                            src="https://trucchigialong.vn/wp-content/uploads/2020/03/89242572_1763205727149361_2538022451539869696_n-50x50.jpg"
                                            width="" height="" alt="Hoàng Phương Thảo" /></a>
                                        </figure>
                                        <div class="post-list_h"><a class="post-title"
                                            href="">Hoàng
                                        Phương Thảo</a></div>
                                        <div class="form_review">Hạ Long</div>
                                    </div>
                                </div>
                            </div>
                            <div class=" list_nhanxet">
                                <div class="content_nhanxet">
                                    <div class="top_nhanxet">
                                        <div class="nhanxet">Việc tìm kiếm một bức tranh Trúc chỉ ưng ý của tôi
                                            cũng không tốn nhiều thời gian, nhờ tư vấn của cô bạn thân đã mua
                                        tranh Trúc chỉ... </div>
                                    </div>
                                    <div class="bottom_nhanxet">
                                        <figure class="featured-thumbnail thumbnail">
                                            <a href=""><img
                                                src="https://trucchigialong.vn/wp-content/uploads/2019/02/55869481_2706608562699530_4770723086825684992_o-50x50.jpg"
                                                width="" height="" alt="Vũ Thùy Dương" /></a>
                                            </figure>
                                            <div class="post-list_h"><a class="post-title"
                                                href="">Vũ Thùy
                                            Dương</a></div>
                                            <div class="form_review">Nội trợ</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" list_nhanxet">
                                    <div class="content_nhanxet">
                                        <div class="top_nhanxet">
                                            <div class="nhanxet">Tranh Trúc chỉ của bên bạn rất đẹp, tôi chưa bao
                                                giờ thấy 1 sản phẩm nghệ thuật nào đẹp như thế này. Tôi rất ủng hộ
                                            và tin tưởng... </div>
                                        </div>
                                        <div class="bottom_nhanxet">
                                            <figure class="featured-thumbnail thumbnail">
                                                <a href=""><img
                                                    src="https://trucchigialong.vn/wp-content/uploads/2019/02/82619877_2439224122886622_3200870900429750272_n-50x50.jpg"
                                                    width="" height="" alt="Đặng Thành Nam" /></a>
                                                </figure>
                                                <div class="post-list_h"><a class="post-title"
                                                    href="">Đặng
                                                Thành Nam</a></div>
                                                <div class="form_review">Nhân viên văn phòng</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </div>
</div>
</div>
</div>



<?php get_footer(); ?>