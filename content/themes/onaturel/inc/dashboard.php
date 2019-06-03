<?php

function onaturel_add_dashboard_widgets()
{
    wp_add_dashboard_widget(
        'onaturel_add_dashboard_widgets_dash',
        'Projet oNaturel',
        'onaturel_dashboard_widget_function'

    );
    
}
function onaturel_dashboard_widget_function()
{
    ?>
    <h3>Un site fait par Helio Cruz, Miles, Max </h3>
    <p>Voulez-vous nos employer ?</p>
    <p>www.oclock.io</p>
    <?php       

}

add_action ('wp_dashboard_setup', 'onaturel_add_dashboard_widgets');


function remove_dashboard_meta() {
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}

add_action('wp_dashboard_setup', 'remove_dashboard_meta');


remove_action('welcome_panel', 'wp_welcome_panel');