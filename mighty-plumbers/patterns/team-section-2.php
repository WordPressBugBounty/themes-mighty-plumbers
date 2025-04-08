<?php

/**
 * Title: Team Section 2
 * Slug: mighty-plumbers/team-section-2
 * Categories: mighty-plumbers
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/team_1.jpg',
    $mighty_plumbers_url . 'assets/images/team_2.jpg',
    $mighty_plumbers_url . 'assets/images/team_3.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"className":"mighty-plumbers-team-overlap","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group mighty-plumbers-team-overlap" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"}}},"gradient":"light-shade-color","className":"mighty-plumbers-fade-up","layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group mighty-plumbers-fade-up has-light-shade-color-gradient-background has-background" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e('Meet Our Team', 'mighty-plumbers') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'mighty-plumbers') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"54px"},"blockGap":{"left":"32px"}}}} -->
    <div class="wp-block-columns" style="margin-top:54px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"mighty-plumbers-team-box is-style-mighty-plumbers-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group mighty-plumbers-team-box is-style-mighty-plumbers-boxshadow-medium has-light-color-background-color has-background" style="border-radius:20px;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:image {"id":131,"width":"160px","height":"160px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" alt="" class="wp-image-131" style="border-radius:100px;object-fit:cover;width:160px;height:160px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4} -->
                    <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('John Doe', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Entrepreneur', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}}} -->
                    <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#6A6A6A","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"className":"is-style-logos-only"} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"spotify"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"wordpress"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"mighty-plumbers-team-box is-style-mighty-plumbers-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group mighty-plumbers-team-box is-style-mighty-plumbers-boxshadow-medium has-light-color-background-color has-background" style="border-radius:20px;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:image {"id":466,"width":"160px","height":"160px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[1]) ?>" alt="" class="wp-image-466" style="border-radius:100px;object-fit:cover;width:160px;height:160px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4} -->
                    <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('Eliana Peppr', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Entrepreneur', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}}} -->
                    <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#6A6A6A","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"className":"is-style-logos-only"} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"spotify"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"}},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"mighty-plumbers-team-box is-style-mighty-plumbers-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group mighty-plumbers-team-box is-style-mighty-plumbers-boxshadow-medium has-light-color-background-color has-background" style="border-radius:20px;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:image {"id":467,"width":"160px","height":"160px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"100px"}}} -->
                <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[1]) ?>" alt="" class="wp-image-467" style="border-radius:100px;object-fit:cover;width:160px;height:160px" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4} -->
                    <h4 class="wp-block-heading has-text-align-center"><?php esc_html_e('Goodman Thank', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Entrepreneur', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|40"}}}} -->
                    <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#6A6A6A","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"className":"is-style-logos-only"} -->
                    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"spotify"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"dribbble"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->