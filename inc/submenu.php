<?php
add_action('admin_menu', 'rzs_donation_menu');
function rzs_donation_menu() {
    add_menu_page(
        'Donation',
        'Donation',
        'manage_options',
        'donation',
        'rzs_donation',
        'dashicons-money',
        7

    );
}

function rzs_donation(){

}
