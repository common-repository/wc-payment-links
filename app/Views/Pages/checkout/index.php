<?php
/**
 * template: wp-content/plugins/wc-payment-link/app/Views/Pages/checkout/index.php
 */

 if ( ! defined( 'ABSPATH' ) ) exit; 
?>
<title><?php echo esc_html(get_the_title());?></title>
<?php get_header(); ?>

<div>
    <?php wc_print_notices(); ?>
    <div class="woocommerce">
        <?php echo do_shortcode('[woocommerce_checkout]'); ?>
    </div>
</div>

<?php get_footer(); ?>