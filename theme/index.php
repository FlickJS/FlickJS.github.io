<?php get_header(); ?>
<main id="main-text">
    <div>
        <h1>
            Heading
        </h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
    </div>
    <div>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
<?php 
    $args = array(
    'post_type' => 'project',
    'posts_per_page' =>3,);
                $projects = new WP_Query($args);
                    while ($projects->have_posts()){
                                $projects->the_post(); ?>
                    <li class="splide__slide">
                        <p class="head-box">
                            <?php the_title(); ?>
                        </p>
                        <p class="text-box">
                            <?php echo get_post_field('post_content', $post_id); ?>
                        </p>
                            <?php echo get_the_post_thumbnail_url(get_the_ID()); ?>
                            <?php } wp_reset_query();?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="svg">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_5_52)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20 0C11.1637 0 4 7.16373 4 16C4 24.8363 11.1637 32 20 32C28.8363 32 36 24.8363 36 16C36 7.16373 28.8363 0 20 0" fill="#FF3859"/>
                </g>
            <defs>
                <filter id="filter0_d_5_52" x="0" y="0" width="40" height="40" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.219608 0 0 0 0 0.34902 0 0 0 0.2 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_5_52"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5_52" result="shape"/>
                </filter>
            </defs>
         </svg>
    </div>
</main>
    <?php get_footer(); ?>
</body>
</html>