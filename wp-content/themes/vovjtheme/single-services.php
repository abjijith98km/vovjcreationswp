<?php
// The Template for displaying all single posts.
get_header(); ?>
<?php
// if(have_posts()):
//     while(have_Posts()):the_post(); 
//         $img = wp_get_attachment_url(get_post_thumbnail_id($post->ID), "full");
//             the_content();
//     endwhile;
// endif;
// wp_reset_query();
?>
<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper style2 bg-smoke">
    <div class="container-fluid">
        <div class="breadcumb-content">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/services">Services</a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Service Details Page Area
    ==============================-->
<div class="service-details-page-area space pt-5">
    <?php $banner_image = get_field('banner_image');
    $content_area = get_field('content_area'); ?>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12">
                <div class="service-inner-thumb mb-80 wow img-custom-anim-top animated">
                    <img class="w-100" src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>">
                </div>
            </div>
            <div class="col-xl-8">
                <?php echo $content_area; ?>
            </div>
            <!-- <div class="col-lg-12">
                <div class="video-area-1 mt-80 mb-80">
                    <div class="video-wrap">
                        <div class="jarallax" data-bg-src="assets/img/normal/video_2-2.png">
                        </div>
                        <a href="https://www.youtube.com/watch?v=vvNwlRLjLkU" class="play-btn popup-video background-image">
                        </a>
                    </div>
                </div>
            </div> -->

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
<?php if (have_rows('marquee_text_service_detail_page', 'option')) : ?>
    <div class="container-fluid p-0 overflow-hidden">
        <div class="slider__marquee clearfix marquee-wrap">
            <div class="marquee_mode marquee__group">
                <?php while (have_rows('marquee_text_service_detail_page', 'option')) : the_row();
                    $text = get_sub_field('text');
                ?>
                    <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i><?php echo $text; ?></a></h6>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>