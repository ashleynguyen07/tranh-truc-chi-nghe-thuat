<?php get_header(); ?>



<div class="motopress-wrapper content-holder clearfix">	 	
	<div class="background_product_cat">
		<div class="has_thumbnail" style="background: url(https://trucchigialong.vn/wp-content/uploads/2019/02/bg-page_03.jpg) left center no-repeat;">
			<div class="container">
				<section class="title-section">
					<h1 class="title-header">
						<span>
							Tin tức	
						</span>
					</h1>
				</section><!-- .title-section -->
				<ol vocab="http://schema.org/" typeof="BreadcrumbList" class="breadcrumb breadcrumb__t"><li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="https://tranhtrucchinghethuat.com"><span property="name">Home</span><meta property="position" content="1"></a></li><li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="https://tranhtrucchinghethuat.com/tin-tuc/"><span property="name">Tin tức</span><meta property="position" content="2"></a></li></ol>                </div>
			</div>
		</div>
		<div class="container">
			<div class="content-page">
				<div class="row list_post_category">	

					<?php if (have_posts()): ?>
						<?php while (have_posts()) : the_post(); ?>
							
							<div class="content_item">
								<figure class="featured-thumbnail thumbnail">
									<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('full'); ?> </a>
								</figure>
								<div class="post_meta">
									<div class="post-list_h"><a class="post-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Hướng dẫn trang trí nhà cửa chi tiết theo từng cung mệnh gia chủ"><?php the_title(); ?></a></div>
									<div class="excerpt"><?php the_excerpt();?></div>
									<div class="action_post">
										<div class="time"><i class="fa fa-clock-o"></i><span class="day">15</span><span class="month">/08</span><span class="year">/2023</span></div>
										<div class="readmore"><a class="post-title" href="<?php the_permalink(); ?>" rel="bookmark" title="Hướng dẫn trang trí nhà cửa chi tiết theo từng cung mệnh gia chủ">Xem thêm</a></div>
									</div>
								</div>
							</div>
							
						<?php endwhile; ?>
					<?php endif; ?>



				</div>		
			</div>
		</div>
	</div>



	<?php get_footer(); ?>