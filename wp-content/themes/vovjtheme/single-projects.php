<?php
// The Template for displaying all single posts.
get_header(); ?>
<!--==============================
    Breadcumb
    ============================== -->
<div class="breadcumb-wrapper style2 bg-smoke">
    <div class="container-fluid">
        <div class="breadcumb-content">
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/projects">Projects</a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Project Details Page Area
    ==============================-->
<div class="project-details-page-area space pt-5">
    <div class="container">
        <div class="row global-carousel default" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true" data-md-arrows="true">

            <?php
            $banner_slider = get_field('banner_slider');
            if ($banner_slider) : ?>
                <?php foreach ($banner_slider as $image) : ?>
                    <div class="col-xl-12">
                        <div class="project-inner-thumb mb-80 wow img-custom-anim-top animated">
                            <img class="w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
        <div class="row justify-content-between flex-row-reverse">
            <div class="col-xl-3 col-lg-4">
                <div class="project-details-info mb-lg-0 mb-40">
                    <ul class="list-wrap">
                        <li><span>Category:</span><?php the_field('work_category'); ?></li>
                        <li><span>Stack:</span><?php the_field('listing_stack'); ?></li>
                        <li><span>Service:</span><?php the_field('service_used'); ?></li>
                        <li><span>Client:</span><?php the_field('client_name'); ?></li>
                        <?php
                        $live_url = get_field('live_url');
                        if ($live_url) :
                            $link_url = $live_url['url'];
                            $link_title = $live_url['title'];
                            $link_target = $live_url['target'] ? $live_url['target'] : '_self';
                        ?>
                            <li><span>Live URL:</span><a class="" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <?php the_field('content_area'); ?> </div>
            <!-- <div class="col-lg-12">
                <div class="inner__page-nav space-top mt-n1 mb-n1">
                    <a href="#" class="nav-btn">
                        <i class="fa fa-arrow-left"></i> <span><span class="link-effect">
                                <span class="effect-1">Previous Post</span>
                                <span class="effect-1">Previous Post</span>
                            </span></span>
                    </a>
                    <a href="#" class="nav-btn"><span><span class="link-effect">
                                <span class="effect-1">Next Post</span>
                                <span class="effect-1">Next Post</span>
                            </span></span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
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
$contact_title = get_field('portfolio_page_contact_form_title', 'option');
$contact_description = get_field('portfolio_page_contact_form_title', 'option');
$contact_location_link = get_field('service_page_location_url', 'option');

// if ($showhide_contact_section) :
?>
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
<?php
// endif;
?>
<!--==============================
    Marquee Area
    ==============================-->
<?php if (have_rows('portfolio_page_marquee_text','option')) : ?>
    <div class="container-fluid p-0 overflow-hidden">
        <div class="slider__marquee clearfix marquee-wrap">
            <div class="marquee_mode marquee__group">
                <?php while (have_rows('portfolio_page_marquee_text','option')) : the_row();
                    $text = get_sub_field('text');
                ?>
                    <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i><?php echo $text; ?></a></h6>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>