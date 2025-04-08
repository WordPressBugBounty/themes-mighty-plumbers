<?php

/**
 * Title: Product Archive Template
 * Slug: mighty-plumbers/template-shop
 * Categories: template
 * Inserter: false
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/banner_image.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"60px","left":"0","right":"0"}}},"layout":{"inherit":true,"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:60px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"gradient":"primary-gradient-alt","layout":{"type":"constrained","contentSize":"100%"},"fontSize":"xx-large"} -->
    <div class="wp-block-group has-primary-gradient-alt-gradient-background has-background has-xx-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($mighty_plumbers_images[0]) ?>","id":7665,"dimRatio":80,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":260,"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover" style="min-height:260px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-7665" alt="" src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color"} /-->

                    <!-- wp:woocommerce/breadcrumbs {"textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}}} /-->
                </div>
                <!-- /wp:group -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:woocommerce/store-notices /-->

        <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"40px"}}}} -->
        <div class="wp-block-columns" style="margin-top:60px"><!-- wp:column {"width":"25%"} -->
            <div class="wp-block-column" style="flex-basis:25%"><!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
                <div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}}} -->
                    <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Filter by price', 'mighty-plumbers') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:woocommerce/price-filter {"showInputFields":false,"heading":"","lock":{"remove":true},"textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} -->
                    <div class="wp-block-woocommerce-price-filter is-loading has-heading-color-color has-text-color has-link-color"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
                    <!-- /wp:woocommerce/price-filter -->
                </div>
                <!-- /wp:woocommerce/filter-wrapper -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}}} -->
                    <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Browse by Category', 'mighty-plumbers') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:woocommerce/product-categories {"hasCount":false,"isHierarchical":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"className":"mighty-plumbers-products-category-filter"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
                <div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}}} -->
                    <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Filter by Color', 'mighty-plumbers') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:woocommerce/attribute-filter {"attributeId":1,"heading":"","lock":{"remove":true},"textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} -->
                    <div class="wp-block-woocommerce-attribute-filter is-loading has-foreground-color has-text-color has-link-color"></div>
                    <!-- /wp:woocommerce/attribute-filter -->
                </div>
                <!-- /wp:woocommerce/filter-wrapper -->

                <!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
                <div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}}} -->
                    <h5 class="wp-block-heading" style="font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Filter by Size', 'mighty-plumbers') ?></h5>
                    <!-- /wp:heading -->

                    <!-- wp:woocommerce/attribute-filter {"attributeId":2,"heading":"","lock":{"remove":true},"textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} -->
                    <div class="wp-block-woocommerce-attribute-filter is-loading has-foreground-color has-text-color has-link-color"></div>
                    <!-- /wp:woocommerce/attribute-filter -->
                </div>
                <!-- /wp:woocommerce/filter-wrapper -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"75%"} -->
            <div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"className":"alignwide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group alignwide"><!-- wp:woocommerce/product-results-count /-->

                    <!-- wp:woocommerce/catalog-sorting {"fontSize":"normal","textColor":"heading-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:query {"queryId":3,"query":{"perPage":"9","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
                <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"32px"}},"className":"products-block-post-template","layout":{"type":"grid","columnCount":3},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"mighty-plumbers-product-box","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group mighty-plumbers-product-box"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"14px"}}},"className":"mighty-plumbers-product-image","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group mighty-plumbers-product-image" style="margin-bottom:14px"><!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"300px","style":{"border":{"radius":"0px"}}} /-->

                            <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"1px"}}},"className":"mighty-plumbers-product-buttons"} -->
                            <div class="wp-block-columns mighty-plumbers-product-buttons"><!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"mighty-plumbers-cart-button","textColor":"light-color","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /--></div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-terms {"term":"product_cat","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-small"} /-->

                        <!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"4px","left":"0","right":"0","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"18px"}},"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

                        <!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"3px","bottom":"0px","left":"0","right":"0"}}}} /-->

                        <!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"top":"10px","bottom":"0","left":"0","right":"0"}}}} /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->

                    <!-- wp:query-pagination -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->

                    <!-- wp:query-no-results -->
                    <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                    <p></p>
                    <!-- /wp:paragraph -->
                    <!-- /wp:query-no-results -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->