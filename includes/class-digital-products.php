<?php
if (!defined('ABSPATH')) exit;

class WC_Digital_Products {

    public function __construct() {
        add_action('woocommerce_order_status_completed', [$this, 'generate_license_keys']);
    }

    public function generate_license_keys($order_id) {
        $order = wc_get_order($order_id);
        foreach ($order->get_items() as $item) {
            if ($item->get_product()->is_downloadable()) {
                $license = strtoupper(substr(md5(uniqid(rand(), true)), 0, 16));
                $item->add_meta_data('license_key', $license, true);
                $item->save();
            }
        }
    }
}
