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
        <a class="nav-link " href="<?php echo site_url(''); ?>">
         STRONA GŁOWNA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/blog'); ?>">WIADOMOŚCI</a>
      </li>
	    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/week'); ?>">TYDZIEŃ REPORTERÓW</a>
      </li>
      <li class="nav-item active-button">
        <a class="nav-link active-button" href="<?php echo site_url('/contact'); ?>">KONTAKT</a>
      </li>
    </ul>
  </div>
</nav>
<section id="contact">
	        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><h21>Kontakt</h21></div>
            </div>
            <br>
	            <div class="row">
	               <div class="col-md-6 text-center"><p1>Telefon: +(42) 27 00 343</p1> <br>
	               <p2>E-mail: redakcja@aleksandrow-lodzki.pl</p2><br>
	                <p2>Nasz Adres: ul. Kościuszki 4, 95-070 Aleksandrów Łódzki</p2>
                   <br><br>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.2544009012045!2d19.30298018632554!3d51.819783037927245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471bb49c0e6f3a23%3A0xa372aadf0e53098d!2zUGxhYyBLb8WbY2l1c3praSA0LCA5NS0wNzAgQWxla3NhbmRyw7N3IMWBw7Nkemtp!5e0!3m2!1spl!2spl!4v1575827540056!5m2!1spl!2spl" width="500" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

	               
	               </div>
	               <div class="col-md-6 text-center"><p1>Formularz kontaktowy:</p1>
				   <?php echo do_shortcode( '[contact-form-7 id="12" title="Formularz 1"]' ); ?>
	               <br><br>

	               </div>
	               
	            </div>
	        </div>
	    
	</section>
<?php get_footer(); ?>