<?php
/**
 * CSS related hooks.
 *
 * This file contains hook functions which are related to CSS.
 *
 * @package magazine-prime
 */

if (!function_exists('magazine_prime_trigger_custom_css_action')) :

    /**
     * Do action theme custom CSS.
     *
     * @since 1.0.0
     */
    function magazine_prime_trigger_custom_css_action()
    {
        $magazine_prime_enable_banner_overlay = magazine_prime_get_option('enable_overlay_option');
        ?>
        <style type="text/css">
            <?php
            /* Banner Image */
            if ( $magazine_prime_enable_banner_overlay == 1 ){
                ?>
                    .inner-header-overlay,
                    .hero-slider.overlay .slide-item .bg-image:before {
                        background: #042738;
                        filter: alpha(opacity=65);
                        opacity: 0.65;
                    }
            <?php
        } ?>
        </style>

    <?php }

endif;