<?php
/* Template Name: About page */
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
    Counter Area 02
    ==============================-->
<div class="counter-area-1 space overflow-hidden">
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
    Why Choose Us Area
    ==============================-->
<div class="why-area-1 space bg-theme">
    <?php
    $intro_featured_image = get_field('intro_featured_image');
    $intro_title = get_field('intro_title');
    $intro_content = get_field('intro_content'); ?>
    <div class="why-img-1-1 shape-mockup wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
        <img src="<?php echo esc_url($intro_featured_image['url']); ?>" alt="<?php echo esc_attr($intro_featured_image['alt']); ?>">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title-area mb-45">
                    <h2 class="sec-title"><?php echo $intro_title; ?></h2>
                </div>
                <?php echo $intro_content; ?>
            </div>
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
    <div class="client-area-2 overflow-hidden space-bottom- space-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <ul class="client-list-wrap">

                        <?php foreach ($our_brands_box as $image) : ?>
                            <li>
                                <a>
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

                <?php if (have_rows('our_team_list')) : ?>
                    <?php while (have_rows('our_team_list')) : the_row();
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
    Contact Area
    ==============================-->
<?php
$showhide_contact_section = get_field('showhide_contact_section');
$contact_title = get_field('contact_title');
$contact_description = get_field('contact_description');
$contact_location_link = get_field('contact_location_link');

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


<?php get_footer(); ?>