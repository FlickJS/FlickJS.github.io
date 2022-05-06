<?php get_header(); ?>	
		<content>
	
	<br><br><br>
	<div class="container padding-bottom">
    <div class="row">
	
	<?php 
        $args = array(
		'cat' => 5,
        'post_type' => 'post',
        'posts_per_page' => 1,
        );
        
        $blogposts = new WP_Query($args);
        
        while ($blogposts->have_posts()){
            $blogposts->the_post();
        
	?>
        <div class="col-md-6">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="<?php echo the_permalink(); ?>">
                                                <img class="img-fluid img-custom"
                                                     src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                                                    >
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <a href="<?php echo the_permalink(); ?>">
                                                                                       <a class="p-1 badge badge-primary rounded-0" href="<?php echo the_permalink(); ?>">Najnowszy Wpis</a>
                                                <h2 class="h3 post-title text-white my-1"><?php the_title(); ?></h2>
                                            </a>
                                            <div class="news-meta">
                                                    <span class="news-author">Napisany w dniu </span>
                                                <span class="news-date"> <?php echo get_the_date( 'd-m-Y' ); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    
                              </div>
   <?php } wp_reset_query();?>

               
                 <div class="col-md-6">
                <div class="row">
               
               	<?php 
        $args = array(
		'cat' => 6,
        'post_type' => 'post',
        'posts_per_page' => 4,
        );
        
        $blogposts = new WP_Query($args);
        
        while ($blogposts->have_posts()){
            $blogposts->the_post();
        
	?>

                           <div class="col-md-6">
                    <div id="featured" class="carousel slide carousel" data-ride="carousel" style="padding-bottom: 20px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="<?php echo the_permalink(); ?>">
                                                <img class="img-fluid img-custom-right"
                                                     src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                                                    >
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <a href="<?php echo the_permalink(); ?>">
                                                                                       <a class="p-1 badge badge-primary rounded-0" href="<?php echo the_permalink(); ?>">Ostatni Wpis</a>
                                                <h2 class="h3 post-title text-white my-1"><?php the_title(); ?></h2>
                                            </a>
                                            <div class="news-meta">
                                                <span class="news-author">Napisany w dniu </span>
                                                <span class="news-date"> <?php echo get_the_date( 'd-m-Y' ); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                                      
               
   <?php } wp_reset_query();?>

                </div>
                              </div>
        </div>
    </div>

    



 
	</content>

<?php get_footer(); ?>