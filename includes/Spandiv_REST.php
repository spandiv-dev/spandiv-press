<?php

if(!class_exists('Spandiv_REST')) {

class Spandiv_REST {
    // Get info
    function get_info($request) {
        $info = file_get_contents(home_url('wp-content/plugins/spandiv/plugin-update/examples/plugin.json'));
        $info = json_decode($info, true);
        $info['home_url'] = home_url();

        // Set response
        $response = new WP_REST_Response($info);
        $response->set_status(200);
        return $response;
    }
}

}

?>