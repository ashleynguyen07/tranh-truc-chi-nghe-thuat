<?php get_header(); ?>



<div id="wpo-main-content" class="motopress-wrapper content-holder clearfix">
    <div class="background_product_cat">
        <div class="has_thumbnail" style="background: url(https://trucchigialong.vn/wp-content/uploads/2020/03/2.png) left center no-repeat;">
            <div class="container">
                <section class="title-section">
                 <h1 class="title-header">
                  <span>
                      Cửa hàng<!--End shop-->
                  </span>
              </h1>
          </section><!-- .title-section -->
          <ul class="breadcrumb breadcrumb__t"><a href="https://tranhtrucchinghethuat.com">Trang chủ</a> / Cửa hàng</ul>                        </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-9 r_layout">
            <div class="content-page">
                <div class="content_page_product">
                    <div id="wpo-filter" class="product-filter clearfix wrapper">
                        <div class="l_filter">
                            <p class="woocommerce-result-count">
                            Show 1&ndash;10 of 12 result</p>
                        </div>
                        <div class="r_filter">
                            <span>Sắp xếp theo</span>
                            <form class="woocommerce-ordering" method="get">
                             <select name="orderby" class="orderby">
                                 <option value="popularity" >Thứ tự theo mức độ phổ biến</option>
                                 <option value="rating" >Thứ tự theo điểm đánh giá</option>
                                 <option value="date"  selected='selected'>Mới nhất</option>
                                 <option value="price" >Thứ tự theo giá: thấp đến cao</option>
                                 <option value="price-desc" >Thứ tự theo giá: cao xuống thấp</option>
                             </select>
                         </form>
                     </div>
                 </div>
                 <div class="list_sanpham_chuyenmuc">
                    <div class="row list_product">   

                        <?php $ourCurrentPage = get_query_var('paged');?>
                        <?php $args = array( 
                          'post_type' => 'product',
                          'posts_per_page' => 9,
                          'paged' => $ourCurrentPage,
                          'ignore_sticky_posts' => 1);?>
                        <?php $getposts = new WP_query( $args);?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php global $product; ?>


                            <div class="col-xs-6 col-sm-6 col-md-4 list_product">
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
    <div class="wrapper clearfix product-bottom">
        <div class="pagination pagination__posts"  >

                <?php
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $getposts->max_num_pages
            ) );
            ?>
</div>
        <!-- Posts navigation -->        
      </div> 

    </div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 hidden-xs l_layout">
    <div class="sidebar_page sidebar_sanpham">
        <div id="nav_menu-3" class="visible-all-devices widget"><h3 class="title_widget"><span>Danh mục sản phẩm</span></h3><div class="menu-menu-danh-muc-san-pham-chinh-container"><ul id="menu-menu-danh-muc-san-pham-chinh-1" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-692"><a href="https://tranhtrucchinghethuat.com/">Trang chủ</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children current-menu-item current_page_item menu-item-639"><a href="https://tranhtrucchinghethuat.com/cua-hang/" aria-current="page">Cửa hàng</a>
                
         </li>
    
    
</div></div>                        </div>
</div>
</div>
</div>
</div>
<link rel='stylesheet' id='siteorigin-panels-front-css'  href='https://trucchigialong.vn/wp-content/plugins/siteorigin-panels/css/front-flex.min.css?ver=2.9.2' type='text/css' media='all' />
<style type="text/css" media="all"
id="siteorigin-panels-layouts-footer">#pgc-w5c67b9bf35627-0-0 { width:60%;width:calc(60% - ( 0.4 * 30px ) ) } #pl-w5c67b9bf35627 #panel-w5c67b9bf35627-0-0-0 , #pl-w5c67b9bf35627 #panel-w5c67b9bf35627-0-1-0 {  } #pgc-w5c67b9bf35627-0-1 { width:40%;width:calc(40% - ( 0.6 * 30px ) ) } #pl-w5c67b9bf35627 .so-panel { margin-bottom:30px } #pl-w5c67b9bf35627 .so-panel:last-child { margin-bottom:0px } #pg-w5c67b9bf35627-0.panel-no-style, #pg-w5c67b9bf35627-0.panel-has-style > .panel-row-style { -webkit-align-items:flex-start;align-items:flex-start } #pgc-w5c67b9bf35627-0-0 { align-self:auto } @media (max-width:780px){ #pg-w5c67b9bf35627-0.panel-no-style, #pg-w5c67b9bf35627-0.panel-has-style > .panel-row-style { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-w5c67b9bf35627-0 .panel-grid-cell { margin-right:0 } #pg-w5c67b9bf35627-0 .panel-grid-cell { width:100% } #pgc-w5c67b9bf35627-0-0 { margin-bottom:30px } #pl-w5c67b9bf35627 .panel-grid-cell { padding:0 } #pl-w5c67b9bf35627 .panel-grid .panel-grid-cell-empty { display:none } #pl-w5c67b9bf35627 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  } /* Layout w5c67cdaf970ef */ #pgc-w5c67cdaf970ef-0-0 { width:100%;width:calc(100% - ( 0 * 30px ) ) } #pl-w5c67cdaf970ef #panel-w5c67cdaf970ef-0-0-0 , #pl-w5c67cdaf970ef #panel-w5c67cdaf970ef-0-0-1 {  } #pl-w5c67cdaf970ef .so-panel { margin-bottom:30px } #pl-w5c67cdaf970ef .so-panel:last-child { margin-bottom:0px } #pg-w5c67cdaf970ef-0.panel-no-style, #pg-w5c67cdaf970ef-0.panel-has-style > .panel-row-style { -webkit-align-items:flex-start;align-items:flex-start } @media (max-width:780px){ #pg-w5c67cdaf970ef-0.panel-no-style, #pg-w5c67cdaf970ef-0.panel-has-style > .panel-row-style { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-w5c67cdaf970ef-0 .panel-grid-cell { margin-right:0 } #pg-w5c67cdaf970ef-0 .panel-grid-cell { width:100% } #pl-w5c67cdaf970ef .panel-grid-cell { padding:0 } #pl-w5c67cdaf970ef .panel-grid .panel-grid-cell-empty { display:none } #pl-w5c67cdaf970ef .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  } /* Layout w5c67ca445f36d */ #pgc-w5c67ca445f36d-0-0 , #pgc-w5c67ca445f36d-0-1 , #pgc-w5c67ca445f36d-0-2 { width:33.3333%;width:calc(33.3333% - ( 0.66666666666667 * 30px ) ) } #pl-w5c67ca445f36d #panel-w5c67ca445f36d-0-0-0 , #pl-w5c67ca445f36d #panel-w5c67ca445f36d-0-1-0 , #pl-w5c67ca445f36d #panel-w5c67ca445f36d-0-1-1 , #pl-w5c67ca445f36d #panel-w5c67ca445f36d-0-2-0 {  } #pl-w5c67ca445f36d .so-panel { margin-bottom:30px } #pl-w5c67ca445f36d .so-panel:last-child { margin-bottom:0px } #pg-w5c67ca445f36d-0.panel-no-style, #pg-w5c67ca445f36d-0.panel-has-style > .panel-row-style { -webkit-align-items:flex-start;align-items:flex-start } @media (max-width:780px){ #pg-w5c67ca445f36d-0.panel-no-style, #pg-w5c67ca445f36d-0.panel-has-style > .panel-row-style { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-w5c67ca445f36d-0 .panel-grid-cell { margin-right:0 } #pg-w5c67ca445f36d-0 .panel-grid-cell { width:100% } #pgc-w5c67ca445f36d-0-0 , #pgc-w5c67ca445f36d-0-1 { margin-bottom:30px } #pl-w5c67ca445f36d .panel-grid-cell { padding:0 } #pl-w5c67ca445f36d .panel-grid .panel-grid-cell-empty { display:none } #pl-w5c67ca445f36d .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  } /* Layout 165 */ #pgc-165-0-0 , #pgc-165-1-0 { width:100%;width:calc(100% - ( 0 * 30px ) ) } #pl-165 #panel-165-0-0-0 , #pl-165 #panel-165-1-0-0 {  } #pg-165-0 , #pl-165 .so-panel { margin-bottom:30px } #pl-165 .so-panel:last-child { margin-bottom:0px } #pg-165-0.panel-no-style, #pg-165-0.panel-has-style > .panel-row-style , #pg-165-1.panel-no-style, #pg-165-1.panel-has-style > .panel-row-style { -webkit-align-items:flex-start;align-items:flex-start } @media (max-width:780px){ #pg-165-0.panel-no-style, #pg-165-0.panel-has-style > .panel-row-style , #pg-165-1.panel-no-style, #pg-165-1.panel-has-style > .panel-row-style { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-165-0 .panel-grid-cell , #pg-165-1 .panel-grid-cell { margin-right:0 } #pg-165-0 .panel-grid-cell , #pg-165-1 .panel-grid-cell { width:100% } #pl-165 .panel-grid-cell { padding:0 } #pl-165 .panel-grid .panel-grid-cell-empty { display:none } #pl-165 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  }


/* Tùy chỉnh giao diện nút phân trang */

/* Thêm khoảng cách lề trên và dưới cho thanh phân trang */
.pagination {
    margin-top: -10px;
    margin-bottom: 40px;
}

.page-numbers {
    background-color: #f1f1f1;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

.page-numbers:hover {
    background-color: #ddd;
}

.page-numbers.current {
    background-color: #ecb014;
    color: white;
}

/* Responsive cho mobile */
@media (max-width: 600px) {
    .page-numbers {
        font-size: 14px;
        padding: 6px 12px;
    }
}






</style>













<?php get_footer(); ?>