<?php


/**
*
* Display bookable product options.
* @version 3.0.0
*
**/

defined( 'ABSPATH' ) || exit;

?>

<div id="booking_product_data" class="panel woocommerce_options_panel">

    <div class="options_group show_if_bookable">

        <?php woocommerce_wp_select( array(
            'id'          => 'booking_dates',
            'class'       => 'select short booking_dates',
            'name'        => '_number_of_dates',
            'label'       => __( 'Number of dates to select', 'woocommerce-easy-booking-system' ),
            'desc_tip'    => true,
            'description' => __( 'Number of dates to select for this product.', 'woocommerce-easy-booking-system' ),
            'value'       => ! empty( $product->get_meta( '_number_of_dates' ) ) ? $product->get_meta( '_number_of_dates' ) : 'global',
            'options'     => array(
                'global' => __( 'Same as global settings', 'woocommerce-easy-booking-system' ),
                'one'    => __( 'One', 'woocommerce-easy-booking-system' ),
                'two'    => __( 'Two', 'woocommerce-easy-booking-system' )
            )
        ) ); ?>

        <div class="show_if_two_dates">

            <?php woocommerce_wp_text_input( array(
                'id'                => 'booking_duration',
                'class'             => 'booking_duration',
                'name'              => '_booking_duration',
                'label'             => __( 'Booking duration', 'woocommerce-easy-booking-system' ),
                'desc_tip'          => true,
                'description'       => __( 'Booking duration in days/nights. The price will be applied to the whole period.', 'woocommerce-easy-booking-system' ),
                'value'             => ! empty( $product->get_meta( '_booking_duration' ) ) ? $product->get_meta( '_booking_duration' ) : '',
                'placeholder'       =>  __( 'Same as global settings', 'woocommerce-easy-booking-system' ),
                'type'              => 'number',
                'custom_attributes' => array(
                    'step' => '1',
                    'min'  => '1',
                    'max'  => '366'
                ) 
            ) );

            woocommerce_wp_text_input( array(
                'id'                => 'booking_min',
                'class'             => 'booking_min',
                'name'              => '_booking_min',
                'label'             => __( 'Minimum booking duration', 'woocommerce-easy-booking-system' ),
                'desc_tip'          => 'true',
                'description'       => __( 'Minimum number of booking duration(s) to select. Leave 0 to set no minimum. Leave empty to use global settings.', 'woocommerce-easy-booking-system' ),
                'value'             => ! empty( $product->get_meta( '_booking_min' ) ) || $product->get_meta( '_booking_min' ) === '0' ? $product->get_meta( '_booking_min' ) : '',
                'placeholder'       => __( 'Same as global settings', 'woocommerce-easy-booking-system' ),
                'type'              => 'number',
                'custom_attributes' => array(
                    'step' => '1',
                    'min'  => '0',
                    'max'  => '3650'
                ) 
            ) );

            woocommerce_wp_text_input( array(
                'id'                => 'booking_max',
                'class'             => 'booking_max',
                'name'              => '_booking_max',
                'label'             => __( 'Maximum booking duration', 'woocommerce-easy-booking-system' ),
                'desc_tip'          => 'true',
                'description'       => __( 'Maximum number of booking duration(s) to select. Leave 0 to set no maximum. Leave empty to use global settings.', 'woocommerce-easy-booking-system' ),
                'value'             => ! empty( $product->get_meta( '_booking_max' ) ) || $product->get_meta( '_booking_max' ) === '0' ? $product->get_meta( '_booking_max' ) : '',
                'placeholder'       => __( 'Same as global settings', 'woocommerce-easy-booking-system' ),
                'type'              => 'number',
                'custom_attributes' => array(
                    'step' => '1',
                    'min'  => '0',
                    'max'  => '3650'
                )
            ) ); ?>

        </div>

        <?php woocommerce_wp_text_input( array(
            'id'                => 'first_available_date',
            'class'             => 'first_available_date',
            'name'              => '_first_available_date',
            'label'             => __( 'First available date', 'woocommerce-easy-booking-system' ),
            'desc_tip'          => 'true',
            'description'       => __( 'First available date, relative to the current day. Leave 0 for the current day. Leave empty to use global settings.', 'woocommerce-easy-booking-system' ),
            'value'             => ! empty( $product->get_meta( '_first_available_date' ) ) || $product->get_meta( '_first_available_date' ) === '0' ? $product->get_meta( '_first_available_date' ) : '',
            'placeholder'       => __( 'Same as global settings', 'woocommerce-easy-booking-system' ),
            'type'              => 'number',
            'custom_attributes' => array(
                'step' => '1',
                'min'  => '0',
                'max'  => '3650'
            )
        ) ); ?>

    </div>

    <?php do_action( 'easy_booking_after_booking_options', $product ); ?>
    <?php do_action( 'easy_booking_after_' . $product_type . '_booking_options', $product ); ?>

</div>