<!DOCTYPE HTML>
<html lang="pl">
    <head>
         <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
    </head>
      <script>

    </script>
    <body>
		
		<nav class="navbar navbar-expand-lg navbar-light ">
  <nav class="navbar navbar-light">
  <a class="navbar-brand-1" href="#">
   <span class="hola"> Telefon: +(48)665-444-333 I E-mail: redakcja@aleksandrow-lodzki.pl</span>
  </a>
</nav>
  <div class="collapse navbar-collapse " >
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="hola-1">
		<i class="fab fa-facebook-square"></i>
	<i class="fab fa-twitter-square"></i>
	<i class="fas fa-rss-square"></i>
	<i class="fas fa-map-marker-alt"></i></span></a>
	
      </li>
    </ul>
  </div>
</nav>
	
	<nav class="navbar navbar-expand-lg navbar-light navbar-inverse">
  <nav class="navbar navbar-light">
  <a class="navbar-brand" href="#">
    <img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="100" height="auto" class="d-inline-block align-top" alt="wykonane przez fiipa">
Telewizja Aleksandrów  </a>
</nav>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"> 
        <a class="nav-link" href="<?php echo site_url(''); ?>">
         STRONA GŁOWNA</a>
      </li>
      <li class="nav-item active-button">
        <a class="nav-link active-button" href="<?php echo site_url('/blog'); ?>">WIADOMOŚCI</a>
      </li>
	    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/week'); ?>">TYDZIEŃ REPORTERÓW</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/contact'); ?>">KONTAKT</a>
      </li>
    </ul>
  </div>
</nav>
		<content>
	
	<br><br><br>
	<div class="container padding-bottom">

    <!--Start code-->
    <div class="row">
	
	<?php 

        while (have_posts()){
            the_post();
        
	?>
        <div class="col-md-4 padding-blog">
                        <div class="carousel-inner">
                                <div class="carousel-item active">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="<?php echo the_permalink(); ?>">
                                                <img class="img-fluid img-custom-blog" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
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

               
        </div>
    </div>
  

<?php wpex_pagination(); ?>
	</content>

<?php get_footer(); ?>