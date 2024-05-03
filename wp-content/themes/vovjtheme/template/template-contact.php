<?php
/* Template Name: Contact page */
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
<?php if (have_rows('contact_details')) : ?>
    <div class="feature-area-1 space">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <?php while (have_rows('contact_details')) : the_row();
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $cta = get_sub_field('cta');
                ?>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <img src="<?php echo $icon; ?>" alt="icon">
                            </div>
                            <div class="feature-card-details">
                                <h4 class="feature-card-title">
                                    <a href="project.html"><?php echo $title; ?></a>
                                </h4>
                                <?php echo $description; ?>
                                <?php

                                if ($cta) :
                                    $link_url = $cta['url'];
                                    $link_title = $cta['title'];
                                    $link_target = $cta['target'] ? $cta['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="link-btn">
                                        <span class="link-effect">
                                            <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                            <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                        </span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/arrow-left-top.svg" alt="icon">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>


<!--==============================
    Faq Area
    ==============================-->
<?php if (have_rows('faq_list')) : ?>
    <div class="faq-area-2 space-bottom overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="accordion-area accordion" id="faqAccordion">
                        <?php
                        $faqindex = 1;
                        while (have_rows('faq_list')) : the_row();
                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer');
                        ?>
                            <div class="accordion-card style2 active">
                                <div class="accordion-header" id="collapse-item-<?php echo $faqindex; ?>">
                                    <button class="accordion-button <?php if ($faqindex !== 1) {
                                                                        echo " collapsed";
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $faqindex; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $faqindex; ?>"><?php echo $question; ?></button>
                                </div>
                                <div id="collapse-<?php echo $faqindex; ?>" class="accordion-collapse collapse <?php if ($faqindex == 1) {
                                                                                                                    echo " show";
                                                                                                                } ?>" aria-labelledby="collapse-item-<?php echo $faqindex; ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text"><?php echo $answer; ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php
                            $faqindex++;
                        endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>





<!--==============================
    Contact Area
    ==============================-->
<div class="contact-area-1 space bg-theme" id="contact__form">
    <?php
    $contact_location_link = get_field('contact_location_link');
    $contact_title = get_field('contact_title');
    $contact_description = get_field('contact_description');
    ?>
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


<!--==============================
    Marquee Area
    ==============================-->
<?php if (have_rows('marquee_text')) : ?>
    <div class="container-fluid p-0 overflow-hidden">
        <div class="slider__marquee clearfix marquee-wrap">
            <div class="marquee_mode marquee__group">
                <?php while (have_rows('marquee_text')) : the_row();
                    $text = get_sub_field('text');
                ?>
                    <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i><?php echo $text; ?></a></h6>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>