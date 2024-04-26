   <!--==============================
        Footer Area
    ==============================-->
   <footer class="footer-wrapper footer-layout1 overflow-hidden bg-smoke">
       <div class="container">
           <div class="footer-top space">
               <div class="row align-items-center justify-content-between">
                   <div class="col-lg-6">
                       <h2 class="footer-top-title">
                           <?php echo get_field("footer_heading", "option"); ?>
                       </h2>
                   </div>
                   <div class="col-lg-5">
                       <div class="footer-top-wrap">
                           <p class="mb-30"><?php echo get_field("footer_description", "option"); ?></p>
                           <?php
                            $footer_cta = get_field('footer_cta', 'option');
                            if ($footer_cta) :
                                $link_url = $footer_cta['url'];
                                $link_title = $footer_cta['title'];
                                $link_target = $footer_cta['target'] ? $footer_cta['target'] : '_self';
                            ?>
                               <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="btn">
                                   <span class="link-effect">
                                       <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                       <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                   </span>
                               </a>
                           <?php endif; ?>
                       </div>
                   </div>
               </div>
           </div>
           <div class="footer-menu-area">
               <div class="row gy-3 justify-content-between">
                   <div class="col-xxl-6 col-lg-7">
                       <?php if (have_rows('footer_quick_links', 'option')) : ?>
                           <ul class="footer-menu-list">
                               <?php while (have_rows('footer_quick_links', 'option')) : the_row();
                                    $link = get_sub_field('link');
                                    if ($link) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    endif;
                                ?>
                                   <li>
                                       <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                           <span class="link-effect">
                                               <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                               <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                           </span>
                                       </a>
                                   </li>
                               <?php endwhile; ?>
                           </ul>
                       <?php endif; ?>
                   </div>
                   <div class="col-xxl-6 col-lg-5 text-lg-end">
                       <?php if (have_rows('footer_other_links', 'option')) : ?>
                           <ul class="footer-menu-list">
                               <?php while (have_rows('footer_other_links', 'option')) : the_row();
                                    $link = get_sub_field('link');
                                    if ($link) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    endif;
                                ?>
                                   <li>
                                       <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                           <span class="link-effect">
                                               <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                               <span class="effect-1"><?php echo esc_html($link_title); ?></span>
                                           </span>
                                       </a>
                                   </li>
                               <?php endwhile; ?>
                           </ul>
                       <?php endif; ?>
                   </div>
               </div>
           </div>
       </div>
       <div class="copyright-wrap">
           <div class="container">
               <div class="row gy-3 justify-content-between align-items-center">
                   <div class="col-md-6">
                       <div class="social-btn style3">
                           <?php if (have_rows('header_social_media', 'option')) : ?>
                               <?php while (have_rows('header_social_media', 'option')) : the_row();
                                    $type = get_sub_field('type');
                                    $link = get_sub_field('link');

                                ?>
                                   <a href="<?php echo esc_url($link); ?>" target="_blank">
                                       <span class="link-effect">
                                           <span class="effect-1"><i class="fab fa-<?php echo $type; ?>"></i></span>
                                           <span class="effect-1"><i class="fab fa-<?php echo $type; ?>"></i></span>
                                       </span>
                                   </a>
                               <?php endwhile; ?>
                           <?php endif; ?>

                       </div>
                   </div>
                   <div class="col-md-6 align-self-center text-lg-end">
                       <p class="copyright-text"><?php echo get_field('copy_right_text', 'option'); ?>
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </footer>

   <!--********************************
			Code End  Here
	******************************** -->

   <!-- Scroll To Top -->
   <div class="scroll-top">
       <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
           <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
       </svg>
   </div>
   <?php wp_footer(); ?>
   </body>

   </html>