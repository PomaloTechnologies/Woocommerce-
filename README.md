# Woocommerce-
Woocommerce stock management
Add this code to your WordPress theme's functions.php file or in a custom plugin. It will ensure that only products with stock greater than 0 are visible on your WooCommerce shop page, while products with 0 stock or marked as out of stock will be hidden completely. Remember to test it on a staging site before deploying it to your live site.
The code caters for variations, single products, out of stock, and in-stock scenarios. Here's how it works:

Variations: Variations are included in the query. If a product has variations, the query will ensure that at least one variation has a stock greater than 0 for the product to be visible.

Single Products: Single products without variations are also included in the query. If a single product has a stock greater than 0, it will be visible.

Out of Stock: Products that are marked as out of stock or have a stock of 0 will be excluded from the query. They will not be visible on the shop page.

In Stock: Only products with a stock greater than 0 will be considered as in stock. These are the only products that will be visible on the shop page.

HOW TO USE THE CODE
In your WordPress files, locate functions.php file and paste the code below the existing code if they exist
