<?php
/* Template Name: Service page */
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
    Feature Area
    ==============================-->
<div class="feature-area-1 space">
    <div class="container">
        <div class="row gy-4 align-items-center justify-content-center">

            <?php
            $featured_services = get_field('services');
            if ($featured_services) : ?>
                <?php foreach ($featured_services as $featured_service) :
                    $permalink = get_permalink($featured_service->ID);
                    $title = get_the_title($featured_service->ID);
                    $listing_icon = get_field('listing_icon', $featured_service->ID);
                    $excerpt = get_the_excerpt($featured_service->ID);
                ?>
                    <div class="col-xxl-6 col-xl-6">
                        <div class="feature-card style-grid">
                            <div class="feature-card-icon">
                                <img src="<?php echo $listing_icon; ?>" alt="icon">
                            </div>
                            <div class="feature-card-details">
                                <h4 class="feature-card-title">
                                    <a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
                                </h4>
                                <p class="feature-card-text"><?php echo $excerpt; ?></p>
                                <a href="<?php echo $permalink; ?>" class="link-btn">
                                    <span class="link-effect">
                                        <span class="effect-1">VIEW DETAILS</span>
                                        <span class="effect-1">VIEW DETAILS</span>
                                    </span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-left-top.svg" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>



<!--==============================
    Contact Area
    ==============================-->
<?php
$showhide_contact_section = get_field('showhide_contact_section_in_service_page', 'option');
$contact_title = get_field('service_page_contact_form_title', 'option');
$contact_description = get_field('service_page_contact_form_subtitle', 'option');
$contact_location_link = get_field('service_page_location_url', 'option');

if ($showhide_contact_section) : ?>
    <div class="contact-area-1 space bg-theme">
        <div class="contact-map shape-mockup wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.2s" data-left="0" data-top="-100px" data-bottom="140px">
            <iframe src="<?php echo $contact_location_link; ?>" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <div class="title-area mb-30">
                            <h2 class="sec-title"><?php echo $contact_title; ?></h2>
                            <p><?php echo $contact_description; ?></p>
                        </div>
                        <form action="https://themegenix.com/demo/frisk/mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="name" id="name" placeholder="Full name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="email" id="email" placeholder="Email address*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="website" id="website" placeholder="Website link">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="How Can We Help You*" id="contactForm" class="form-control style-border"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="btn mt-20">
                                    <span class="link-effect">
                                        <span class="effect-1">SEND MESSAGE</span>
                                        <span class="effect-1">SEND MESSAGE</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>



<!--==============================
    Marquee Area
    ==============================-->
<?php if (have_rows('marquee_text','option')) : ?>
    <div class="container-fluid p-0 overflow-hidden">
        <div class="slider__marquee clearfix marquee-wrap">
            <div class="marquee_mode marquee__group">
                <?php while (have_rows('marquee_text','option')) : the_row();
                    $text = get_sub_field('text');
                ?>
                    <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i><?php echo $text; ?></a></h6>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>



<?php get_footer(); ?>