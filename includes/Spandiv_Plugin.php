<?php

if(!class_exists('Spandiv_Plugin')) {

class Spandiv_Plugin {
    // Get root URL
    static function root_url() {
        return "https://spandiv.xyz";
    }

    // Get plugin URL
    static function plugin_url($file) {
        return plugins_url($file, __DIR__);
    }

    // Get plugin directory path
    static function plugin_dir_path($file) {
        return plugin_dir_path(__DIR__) . $file;
    }

    // Get setting value
    static function get_value($key) {
        global $wpdb;
        $table_settings = $wpdb->prefix . 'spandiv';
        $data = $wpdb->get_results("SELECT * FROM $table_settings WHERE setting_key='{$key}'");
        if(count($data) > 0)
            return $data[0]->setting_value;
        else
            return '';
    }
	
    // Sync member
    static function sync_member() {
        $api_params = array(
            'url' => home_url()
        );
        $response = wp_remote_post("https://spandiv.xyz/wp-json/spandiv/v1/sync-member", array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));
    }

    // Create table
    function create_table() {
        global $wpdb;
        $table = $wpdb->prefix . 'spandiv';
        $sql = "CREATE TABLE IF NOT EXISTS `$table` (
            `setting_id` int(11) NOT NULL AUTO_INCREMENT,
            `setting_key` varchar(255) DEFAULT NULL,
            `setting_value` text DEFAULT NULL,
            PRIMARY KEY(setting_id)
            ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
        ";
        if($wpdb->get_var("SHOW TABLES LIKE '$table'") != $table) {
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }
    }

    // Add admin page
    function add_admin_page() {
        add_menu_page(
            'Spandiv', // Page title
            'Spandiv', // Menu title
            'manage_options', // Capability
            'spandiv', // Menu slug
            array('Spandiv_Plugin', 'crud_page'), // Callable
            'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2IiBmaWxsPSIjYTdhYWFkIiBjbGFzcz0ic3BhbmRpdi1nZWFyIj4NCjxwYXRoIGNsYXNzPSJzdDAiIGZpbGw9IiNhN2FhYWQiIGQ9Ik04LDBDMy42LDAsMCwzLjYsMCw4czMuNiw4LDgsOHM4LTMuNiw4LThTMTIuNCwwLDgsMHogTTUuNCw0YzAuNS0wLjcsMS4zLTEuMSwyLjEtMS4yYzAuMiwwLDAuNCwwLDAuNiwwaDMuMg0KCWMwLDAuOC0wLjMsMS42LTAuOSwyLjJDOS45LDUuNSw5LjMsNS44LDguNiw1LjljLTAuMiwwLTAuNSwwLTAuNywwYy0xLjEsMC0yLjEsMC0zLjIsMEM0LjcsNS4yLDQuOSw0LjUsNS40LDR6IE03LjgsNi40DQoJYzAuMywwLDAuNiwwLDAuOSwwYzAuOCwwLjEsMS42LDAuNiwyLDEuMmMwLjQsMC41LDAuNiwxLjIsMC42LDEuOWMtMSwwLTIuMSwwLTMuMSwwYy0wLjMsMC0wLjUsMC0wLjgsMEM2LjYsOS40LDUuOSw5LDUuNCw4LjQNCgljLTAuNS0wLjYtMC43LTEuMy0wLjctMkM1LjcsNi40LDYuNyw2LjQsNy44LDYuNHogTTEwLjYsMTIuMWMtMC41LDAuNi0xLjMsMS0yLjEsMS4xYy0wLjIsMC0wLjQsMC0wLjYsMEg0LjdjMC0wLjYsMC4yLTEuMiwwLjUtMS43DQoJYzAuNC0wLjYsMS0xLjEsMS42LTEuM2MwLjMtMC4xLDAuNy0wLjIsMS4xLTAuMmMxLjIsMCwyLjMsMCwzLjUsMEMxMS4zLDEwLjgsMTEuMSwxMS41LDEwLjYsMTIuMXoiLz4NCjwvc3ZnPg0K' // Icon URL
			
        );
    }

    // Callable CRUD page
    function crud_page() {
        global $wpdb;
        $table_settings = $wpdb->prefix . 'spandiv';

        // If submit form
        if(isset($_POST['submit'])) {
            // Loop settings
            foreach($_POST['setting'] as $key=>$setting) {
                // Get setting by key
                $count = count($wpdb->get_results("SELECT * FROM $table_settings WHERE setting_key='{$key}'"));
                // If exists: update data
                if($count > 0)
                    $wpdb->query("UPDATE $table_settings SET setting_value='{$setting}' WHERE setting_key='{$key}'");
                // If no exists: insert data
                else
                    $wpdb->query("INSERT INTO $table_settings(setting_key,setting_value) VALUES('{$key}','{$setting}')");
            }
        }

        // View
        include_once(self::plugin_dir_path('views/index.php'));
		
        // Sync member
        self::sync_member();
    }

    // Get setting value for shortcode
    static function get_value_for_shortcode($attr) {
        $args = shortcode_atts(array(
            'key' => '',
        ), $attr );

        global $wpdb;
        $table_settings = $wpdb->prefix . 'spandiv';
        $data = $wpdb->get_results("SELECT * FROM $table_settings WHERE setting_key='{$args["key"]}'");
        if(count($data) > 0)
            return $data[0]->setting_value;
        else
            return '';
    }

    // Banner ads
    function general_admin_notice() {
        global $pagenow;
        $admin_pages = [ 'index.php', 'edit.php', 'plugins.php', 'themes.php', 'admin.php' ];
        if ( in_array( $pagenow, $admin_pages ) ) { ?>
            <link rel="stylesheet" href="<?= plugin_dir_url(__DIR__) ?>/assets/app.css">
            <div class="notice notice-warning is-dismissible rounded-3 d-flex position-relative" style="overflow:hidden;">
                <div>
                    <p style="line-height: 10px;" class="text-primary"><b>Spandiv</b></p>
                    <p style="line-height: 10px;">Jasa pembuatan website terbaik dan termurah <a href="https://spandiv.xyz/" target="_blank">Klik disini</a></p>
                </div>
                <picture style="right: 0; left: auto; position: absolute; pointer-events: none; min-height: 100%; display: block; top: -35px">
                    <img alt="Spandiv Campaign" src="<?= plugin_dir_url(__DIR__) ?>/assets/banner.png" decoding="async" style="width: 180px; display: block; height: 100%; max-width: initial;">
                </picture>
            </div>
        <?php }
    }
}

}

?>
