<?php
// Add this code to your standalone PHP file
function hide_out_of_stock_products( $query ) {
    if ( ! is_admin() && $query->is_main_query() && is_shop() ) {
        $meta_query = $query->get( 'meta_query' );

        // Query for products with stock greater than 0
        $meta_query[] = array(
            'key' => '_stock',
            'value' => 0,
            'compare' => '>',
            'type' => 'NUMERIC',
        );

        // Additional query to exclude out-of-stock products
        $meta_query[] = array(
            'relation' => 'OR',
            array(
                'key' => '_stock_status',
                'value' => 'outofstock',
                'compare' => '=',
            ),
            array(
                'key' => '_stock',
                'value' => 0,
                'compare' => '=',
                'type' => 'NUMERIC',
            ),
        );

        $query->set( 'meta_query', $meta_query );
    }
}
add_action( 'pre_get_posts', 'hide_out_of_stock_products' );
?>
