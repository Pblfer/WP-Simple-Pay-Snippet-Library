<?php
/**
 * Plugin Name: WP Simple Pay - Form Specific Filters
 * Plugin URI: https://wpsimplepay.com
 * Description: Change certain settings for a specific form for WP Simple Pay
 * Version: 1.0
 */

/**
 * In this example, we'll see how to change certain settings for a specific form ID
 */

/**
 * WP Simple Pay allows for customization of pretty much any form setting you see in the admin area. You can also
 * change these settings with form specific filters so that you can control one form separately from the other forms
 * on your website.
 *
 * The format for adding a form specific filter is like this:
 *
 * simpay_form_{form_id}_{setting}
 *
 * Using that formula we can change the amount of the form ID 157 by using a filter like this:
 *
 * simpay_form_157_amount
 *
 * And the whole filter would look like the function below
 */

function simpay_custom_form_157_amount() {

	// Change the amount to $5.00
	return 5.00;
}
add_filter( 'simpay_form_157_amount', 'simpay_custom_form_157_amount' );


/**
 * List of available settings for the _{setting} suffix of the formula explained above:
 *
 * test_mode
 * test_secret_key
 * test_publishable_key
 * live_secret_key
 * live_publishable_key
 * payment_success_page
 * payment_failure_page
 * locale
 * date_format
 * currency
 * currency_position
 * tax_percent
 * decimal_separator
 * thousand_separator
 * payment_button_style
 * apply_button_style
 * amount_type
 * amount
 * minimum_amount
 * default_amount
 * custom_amount_label
 * statement_descriptor
 * company_name
 * item_description
 * image_url
 * enable_remember_me
 * checkout_button_text
 * verify_zip
 * enable_billing_address
 * enable_shipping_address
 * enable_bitcoin
 * enable_alipay
 * enable_alipay_reusable
 * subscription_type
 * single_plan
 * subscription_display_type
 * default_plan
 * plans
 * subscription_custom_amount
 * subscription_minimum_amount
 * subscription_default_amount
 * subscription_interval
 * subscription_frequency
 * subscription_custom_amount_label
 * subscription_setup_fee
 */
