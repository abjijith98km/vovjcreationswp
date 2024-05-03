<?php
/* Template Name: Project page */
/* Template Post Type: page */
?>
<?php get_header(); ?>


<!--==============================
    Breadcumb
    ============================== -->
<?php
$banner_image = get_field('banner_image');
$banner_title = get_field('banner_title');
?>
<div class="breadcumb-wrapper" data-bg-src="<?php echo esc_url($banner_image['url']); ?>">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?php echo $banner_title; ?></h1>
        </div>
    </div>
</div>

<!--==============================
        Portfolio Area
    ==============================-->
<div class="portfolio-area-1 space overflow-hidden mt-140-" data-bg-src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/portfolio-1-bg.png">
    <?php
    $projects_listing = get_field('project_list');
    ?>
    <div class="container">

        <div class="row justify-content-between masonary-active">


            <?php
            $projectsindex = 1;
            if ($projects_listing) : ?>
                <?php foreach ($projects_listing as $featured_post) :
                    $permalink = get_permalink($featured_post->ID);
                    $title = get_the_title($featured_post->ID);
                    $listing_image = get_field('listing_image', $featured_post->ID);
                    $service_used = get_field('service_used', $featured_post->ID);
                    $projectexcerpt = get_the_excerpt();
                ?>

                    <div class="col-lg-<?php if ($projectsindex == 1) {
                                            echo "6 ";
                                        } else if ($projectsindex == 2) {
                                            echo  "6 ";
                                        } else if ($projectsindex == 3) {
                                            echo "7 ";
                                        } else {
                                            echo "5 ";
                                        } ?> filter-item">
                        <div class="portfolio-wrap <?php if ($projectsindex !== 2) {
                                                        echo ' mt-lg-140';
                                                    } ?>">
                            <div class="portfolio-thumb wow img-custom-anim-top animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <a href="<?php echo $permalink; ?>">
                                    <img src="<?php echo esc_url($listing_image['url']); ?>" alt="<?php echo esc_attr($listing_image['alt']); ?>">
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <ul class="portfolio-meta">
                                    <?php echo $service_used; ?>
                                </ul>
                                <h3 class="portfolio-title"><a href="<?php echo $permalink; ?>">
                                        <?php echo $title; ?></a></h3>
                                <a href="<?php echo $permalink; ?>" class="link-btn">
                                    <span class="link-effect">
                                        <span class="effect-1">VIEW PROJECT</span>
                                        <span class="effect-1">VIEW PROJECT</span>
                                    </span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-left-top.svg" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php $projectsindex++;
                endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</div>


<!--==============================
    Marquee Area
    ==============================-->
<?php if (have_rows('marquee_text_portfolio_page')) : ?>
    <div class="container-fluid p-0 overflow-hidden">
        <div class="slider__marquee clearfix marquee-wrap">
            <div class="marquee_mode marquee__group">
                <?php while (have_rows('marquee_text_portfolio_page')) : the_row();
                    $text = get_sub_field('text');
                ?>
                    <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i><?php echo $text; ?></a></h6>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>