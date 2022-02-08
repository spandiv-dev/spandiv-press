<?php

// banner ads
function general_admin_notice(){
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

/*
$result = file_get_contents("https://spandiv-dddf8-default-rtdb.asia-southeast1.firebasedatabase.app/status.json");
$status = json_decode($result, true);
if ($status['active'] == 1) {
  add_action('admin_notices', 'general_admin_notice');
}
*/

$root_url = "https://spandiv.xyz";
if($root_url != home_url()) {
  $result = file_get_contents($root_url."/wp-json/spandiv/v1/get-member?url=" . home_url());
  $result = json_decode($result, true);
  if($result['member_banner'] == 1) {
    add_action('admin_notices', 'general_admin_notice');
  }
}
else {
  add_action('admin_notices', 'general_admin_notice');
}

?>