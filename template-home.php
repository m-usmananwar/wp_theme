<?php

/**
 * This is custom page template for about us page 
 * Template Name: HomePage Template
 */
get_header();
?>


<div class="header-image-container">
    <?php
    $image = get_field('home_header');

    ?>
    <img src="<?php echo $image ?>" alt="">
</div>
<div class="acf-title">
    <h1><?php the_field('home_title') ?></h1>
</div>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <div class="home-hero-section">
            <div class="details">
                <p><?php the_content() ?></p>

            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
<div class="homepage-posts">
    <div class="side-one">
        <h3>Latest From Tech </h3>
        <?php
        $arguments = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'technology',
            'posts_per_page' => 3,
        ];
        $technologyPosts = new WP_Query($arguments);
        ?>
        <?php if ($technologyPosts->have_posts()) : ?>
            <?php while ($technologyPosts->have_posts()) :
                $technologyPosts->the_post(); ?>
                <div class="articles">
                    <div class="image">
                        <?php the_post_thumbnail('posts-thumbnai') ?>
                    </div>
                    <div class="details">
                        <a href="<?php the_permalink() ?>">
                            <h2><?php the_title() ?></h2>
                        </a>
                        <p>
                            <?php the_excerpt() ?>
                        </p>

                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata() ?>
    </div>
    <div class="side-one">
        <h3>Latest From Gaming</h3>
        <?php
        $arguments = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'gaming',
            'posts_per_page' => 3,
        ];
        $technologyPosts = new WP_Query($arguments);
        ?>
        <?php if ($technologyPosts->have_posts()) : ?>
            <?php while ($technologyPosts->have_posts()) :
                $technologyPosts->the_post(); ?>
                <div class="articles">
                    <div class="image">
                        <?php the_post_thumbnail('posts-thumbnai') ?>
                    </div>
                    <div class="details">
                        <a href="<?php the_permalink() ?>">
                            <h2><?php the_title() ?></h2>
                        </a>
                        <p>
                            <?php the_excerpt() ?>
                        </p>

                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata() ?>
    </div>
</div>
<section class="services">
    <div class="our-services">
        <div class="heading">
            <h1>Services We Provide</h1>
        </div>
        <div class="services-section">
            <?php
            $arguments = [
                'post_type' => 'service',
                'post_per_page' => 3,
                'order' => 'ASC'
            ];
            $technologyPosts = new WP_Query($arguments);
            ?>
            <?php if ($technologyPosts->have_posts()) : ?>
                <?php while ($technologyPosts->have_posts()) :
                    $technologyPosts->the_post(); ?>
                    <div class="services-articles">
                        <div class="image">
                            <?php the_post_thumbnail('posts-thumbnai') ?>
                        </div>
                        <div class="details">
                            <a href="<?php the_permalink() ?>">
                                <h3><?php the_title() ?></h3>
                            </a>
                            <p>
                                <?php the_excerpt() ?>
                            </p>

                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata() ?>
        </div>

    </div>
</section>
<?php
get_footer();
?>