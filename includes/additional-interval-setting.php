<?php
add_filter( 'woocommerce_subscription_settings','woo_additional_sub_intervals_plugin', 10, 2 );
function woo_additional_sub_intervals_plugin( $settings ) {

    $settings[] = array(
      'title' => __( 'Additional Subscription Intervals', 'woo_additional_sub_intervals' ),
      'type' => 'title',
      'id' => 'additional_interval_settings',
    );

        // Checkbox 
        $settings[] = array(
          'title'    => __( 'Enable/disable additional subscription intervals', 'woocommerce' ),
          'desc'     => __( 'Enable Subscription intervals (7 to 13)', 'woo_additional_sub_intervals' ),
          'id'       => 'additional_interval_options',
          'default'  => 'no',
          'type'     => 'checkbox',
          'desc_tip' => true,
          'css'      => 'width:500px;',
          'desc_tip'        => __( ' By default, with WooCommerce Subscriptions you can charge recurring amount every 1st to 6th interval. This setting enables 7th to 13th interval option.', 'woocommerce' ),
        );


    $settings[] = array( 'type' => 'sectionend', 'id' => 'additional_interval_settings' );
    return $settings;
}

