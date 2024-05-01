<?php
/* Template Name: Home page */
/* Template Post Type: page */
?>
<?php get_header(); ?>
<!--==============================
    Hero Area
    ==============================-->
<div class="hero-wrapper hero-1" id="hero">
    <?php
    $banner_title_1 = get_field('banner_title_1');
    $banner_title_2 = get_field('banner_title_2');
    $banner_description = get_field('banner_description');
    $banner_cta = get_field('banner_cta');
    $banner_bottom_card = get_field('banner_bottom_card');
    ?>
    <div class="container">
        <div class="hero-style1">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="hero-title wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.1s"><?php echo $banner_title_1; ?></h1>

                    <h1 class="hero-title text-lg-end wow img-custom-anim-right animated" data-wow-duration="1.7s" data-wow-delay="0.1s"><?php echo $banner_title_2; ?></h1>
                </div>
                <div class="col-lg-6 offset-lg-6">
                    <p class="hero-text wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.1s"><?php echo $banner_description; ?></p>
                    <?php
                    if ($banner_cta) :
                        $link_url = $banner_cta['url'];
                        $link_title = $banner_cta['title'];
                        $link_target = $banner_cta['target'] ? $banner_cta['target'] : '_self';
                    ?>
                        <div class="btn-group fade_right">
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn wow img-custom-anim-right animated">
                                <span class="link-effect">
                                    <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                    <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                </span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($banner_bottom_card) : ?>
                <div class="hero-year-tag wow img-custom-anim-left animated">
                    <img src="<?php echo esc_url($banner_bottom_card['image']['url']); ?>" alt="<?php echo esc_attr($banner_bottom_card['image']['alt']); ?>">
                    <h6><?php echo $banner_bottom_card["title"]; ?></h6>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->



<!--==============================
    About Area
    ==============================-->
<div class="about-area-1 space bg-theme">
    <?php
    $about_us_featured_image = get_field('about_us_featured_image');
    $about_us_title = get_field('about_us_title');
    $about_us_cta = get_field('about_us_cta');
    $about_us_description = get_field('about_us_description');
    ?>
    <div class="about-img-1-1 shape-mockup img-custom-anim-left wow animated" data-left="0" data-top="-100px" data-bottom="140px" data-wow-duration="1.5s" data-wow-delay="0.1s">
        <img src="<?php echo esc_url($about_us_featured_image['url']); ?>" alt="<?php echo esc_attr($about_us_featured_image['alt']); ?>">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6">
                <div class="overflow-hidden">
                    <div class="about-content-wrap ">
                        <div class="title-area mb-0">
                            <h2 class="sec-title"><?php echo $about_us_title; ?></h2>
                            <div class="sec-text mt-35">
                                <?php echo $about_us_description; ?>
                            </div>
                            <?php
                            if ($about_us_cta) :
                                $link_url = $about_us_cta['url'];
                                $link_title = $about_us_cta['title'];
                                $link_target = $about_us_cta['target'] ? $about_us_cta['target'] : '_self';
                            ?>

                                <div class="btn-wrap mt-50">
                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="link-btn">
                                        <span class="link-effect">
                                            <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                            <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                        </span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-left-top.svg" alt="icon">
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--==============================
    Counter Area 02
    ==============================-->
<div class="counter-area-1 space-bottom overflow-hidden mt-lg-140">
    <div class="container">
        <div class="row gy-40 align-items-center justify-content-lg-between justify-content-center">
            <?php if (have_rows('our_achievements')) : ?>
                <?php while (have_rows('our_achievements')) : the_row();
                    $title = get_sub_field('title');
                    $title_suffix = get_sub_field('title_suffix');
                    $subtitle = get_sub_field('subtitle');
                    $description = get_sub_field('description');
                ?>
                    <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                        <div class="counter-card">
                            <h3 class="counter-card_number">
                                <span class="counter-number"><?php echo $title; ?></span><?php echo $title_suffix; ?>
                            </h3>
                            <h4 class="counter-card_title"><?php echo $subtitle; ?></h4>
                            <p class="counter-card_text"><?php echo $description; ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>


        </div>
    </div>
</div>
<!--==============================
    Client Area
    ==============================-->
<?php
$our_brands_box = get_field('our_brands_box');
if ($our_brands_box) :
?>
    <div class="client-area-2 overflow-hidden space-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <ul class="client-list-wrap">

                        <?php foreach ($our_brands_box as $image) : ?>
                            <li>
                                <a >
                                    <span class="link-effect">
                                        <span class="effect-1"><img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="img"></span>
                                        <span class="effect-1"><img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="img"></span>
                                    </span>
                                </a>
                            </li>
                        <?php endforeach; ?>


                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<!--==============================
        Portfolio Area
    ==============================-->
<div class="portfolio-area-1 space-bottom overflow-hidden mt-140-" data-bg-src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/portfolio-1-bg.png">
    <?php
    $projects_listing = get_field('projects_listing');
    $projects_redirect_cta = get_field('projects_redirect_cta');
    $projects_title = get_field('projects_title');
    ?>
    <div class="container">
        <div class="title-area text-center- ">
            <h2 class="sec-title"><?php echo $projects_title; ?></h2>
        </div>
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
            <?php
            if ($projects_redirect_cta) :
                $link_url = $projects_redirect_cta['url'];
                $link_title = $projects_redirect_cta['title'];
                $link_target = $projects_redirect_cta['target'] ? $projects_redirect_cta['target'] : '_self';
            ?>
                <div class="col-auto filter-item">
                    <div class="btn-wrap mt-140">
                        <a class="circle-btn btn gsap-magnetic mx-lg-5" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                            <span class="link-effect">
                                <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                            </span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--==============================
    Faq Area
    ==============================-->
<div class="faq-area-1 space overflow-hidden">
    <?php
    $services_title = get_field('services_title');
    $services_listing = get_field('services_listing');
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="title-area text-center ">
                    <h2 class="sec-title"><?php echo $services_title; ?></h2>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="accordion-area accordion" id="faqAccordion">
                    <?php
                    $serviceindex = 1;
                    if ($services_listing) : ?>
                        <?php foreach ($services_listing as $featured_post) :
                            $permalink = get_permalink($featured_post->ID);
                            $title = get_the_title($featured_post->ID);
                            $excerpt = get_the_excerpt($featured_post->ID);
                        ?>

                            <div class="accordion-card <?php if ($serviceindex == 1) {
                                                            echo ' active ';
                                                        } ?>">
                                <div class="accordion-header" id="collapse-item-<?php echo $serviceindex; ?>">
                                    <button class="accordion-button <?php if ($serviceindex !== 1) {
                                                                        echo 'collapsed';
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $serviceindex; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $serviceindex; ?>"><span class="faq-number"><?php if ($serviceindex < 10) {
                                                                                                                                                                                                                                                                                    echo "0";
                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                echo $serviceindex; ?></span><?php echo $title; ?></button>
                                </div>
                                <div id="collapse-<?php echo $serviceindex; ?>" class="accordion-collapse collapse <?php if ($serviceindex == 1) {
                                                                                                                        echo ' show';
                                                                                                                    } ?>" aria-labelledby="collapse-item-<?php echo $serviceindex; ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text"><?php echo $excerpt; ?></p>
                                        <div class="btn-wrap mt-50">
                                            <a href="<?php echo $permalink; ?>" class="link-btn">
                                                <span class="link-effect">
                                                    <span class="effect-1">Learn More</span>
                                                    <span class="effect-1">Learn More</span>
                                                </span>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-left-top.svg" alt="icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $serviceindex++;
                        endforeach; ?>
                    <?php endif; ?>





                </div>
            </div>
        </div>
    </div>
</div>



<!--==============================
    Team Area
    ==============================-->
<?php

$showhide_team_section = get_field('showhide_team_section');
$team_title = get_field('team_title');
if ($showhide_team_section) : ?>
    <div class="team-area-1 space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <h2 class="sec-title"><?php echo $team_title; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gy-4 justify-content-center">

                <?php if (have_rows('slides')) : ?>
                    <?php while (have_rows('slides')) : the_row();
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                        $designation = get_sub_field('designation');
                    ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-card">
                                <div class="team-card_img">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                                <div class="team-card_content">
                                    <h3 class="team-card_title"><?php echo $name; ?></h3>
                                    <span class="team-card_desig"><?php echo $designation; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<!--==============================
    Testimonial Area
    ==============================-->
<div class="testimonial-area-1 space bg-theme">
    <?php
    $testimonials_featured_image = get_field('testimonials_featured_image');
    $testimonials_title = get_field('testimonials_title');
    $testimonials_list = get_field('testimonials_list');

    ?>
    <div class="testimonial-img-1-1 shape-mockup wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
        <img src="<?php echo esc_url($testimonials_featured_image['url']); ?>" alt=" <?php echo esc_attr($testimonials_featured_image['alt']); ?>">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-area ">
                    <h2 class="sec-title"><?php echo $testimonials_title; ?></h2>
                </div>
                <div class="quote-icon ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/quote.svg" alt="icon">
                </div>
                <div class="row global-carousel testi-slider1" data-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true">

                    <?php if (have_rows('testimonials_list')) : ?>
                        <?php while (have_rows('testimonials_list')) : the_row();
                            $content = get_sub_field('content');
                            $name = get_sub_field('name');
                            $designation = get_sub_field('designation');
                        ?>



                            <div class="col-lg-4">
                                <div class="testi-box ">
                                    <p class="testi-box_text"><?php echo $content; ?></p>
                                    <div class="testi-box_profile">
                                        <h4 class="testi-box_name"><?php echo $name; ?> </h4>
                                        <span class="testi-box_desig"><?php echo $designation; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>


                </div>
            </div>
        </div>

    </div>
</div>

<!--==============================
    Blog Area
    ==============================-->
<?php
$showhide_blogs_section = get_field('showhide_blogs_section');
$blogs_title = get_field('blogs_title');
$blogs_list = get_field('blogs_list');
if ($showhide_blogs_section) : ?>
    <section class="blog-area space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-6 col-lg-8">
                    <div class="title-area text-center">
                        <h2 class="sec-title"><?php echo $blogs_title; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row gy-40 justify-content-center">

                <?php

                if ($blogs_list) : ?>
                    <?php foreach ($blogs_list as $featured_post) :
                        $permalink = get_permalink($featured_post->ID);
                        $title = get_the_title($featured_post->ID);
                        $listing_image = get_field('listing_image', $featured_post->ID);
                        $blog_category = get_field('blog_category', $featured_post->ID);
                        $custom_field = get_the_excerpt();
                    ?>
                        <li>
                            <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
                            <span>A custom field from this post: <?php echo esc_html($custom_field); ?></span>
                        </li>
                    <?php endforeach; ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="<?php echo esc_url($permalink); ?>">
                                    <img src="<?php esc_url($listing_image['url']); ?>" alt="<?php esc_attr($listing_image['alt']); ?>">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta-item blog-meta">
                                    <a>March 26, 2024</a>
                                    <a><?php echo $blog_category; ?></a>
                                </div>
                                <h4 class="blog-title"><a href="<?php echo esc_url($permalink); ?>"><?php echo $title; ?></a></h4>
                                <a href="<?php echo esc_url($permalink); ?>" class="link-btn">
                                    <span class="link-effect">
                                        <span class="effect-1">READ MORE</span>
                                        <span class="effect-1">READ MORE</span>
                                    </span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-left-top.svg" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
<?php endif; ?>


<?php get_footer(); ?>