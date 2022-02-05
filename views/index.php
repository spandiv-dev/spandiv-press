<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= plugin_dir_url(__DIR__) ?>/assets/app.css">

<div class="wrap">
    <div class="heading">
        <h3>
            <span>Spandiv</span>
            <span>Additional Plugin</span>
        </h3>
    </div>

    <div class="row">
        <div class="col-lg-9">
            <table class="table bg-white table-borderless rounded-3 shadow-sm">
                <thead class="border-bottom">
                    <tr>
                        <th hidden></th>
                        <th><p>Name</p></th>
                        <th><p>Content</p></th>
                    </tr>
                </thead>
                <form action="" method="post">
                    <tbody>
                        <tr>
                            <td><p>Address</p></td>
                            <td>
                                <textarea class="form-control" rows="3" name="setting[address]"><?= Spandiv_Plugin::get_value('address') ?></textarea>
                                <div class="small"><code title="Shortcode">[s_get key="address"]</code></div>
                            </td>
                        </tr>
                        <tr><td class="text-primary"><b><p>Contact</p></b></td></tr>
                        <tr>
                            <td><p>Telephone</p></td>
                            <td>
                                <input class="form-control" type="text" name="setting[telephone]" value="<?= Spandiv_Plugin::get_value('telephone') ?>">
                                <div class="small"><code title="Shortcode">[s_get key="telephone"]</code></div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Message</p></td>
                            <td>
                                <textarea class="form-control" name="setting[message]" rows="3"><?= Spandiv_Plugin::get_value('message') ?></textarea>
                                <div class="small"><code title="Shortcode">[s_get key="message"]</code></div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Email</p></td>
                            <td>
                                <input class="form-control" type="email" name="setting[email]" value="<?= Spandiv_Plugin::get_value('email') ?>">
                                <div class="small"><code title="Shortcode">[s_get key="email"]</code></div>
                            </td>
                        </tr>
                        <tr><td class="text-primary"><b><p>Social Media</p></b></td></tr>
                        <tr>
                            <td><p>Facebook</p></td>
                            <td>
                                <input class="form-control" type="text" name="setting[facebook]" value="<?= Spandiv_Plugin::get_value('facebook') ?>">
                                <div class="small"><code title="Shortcode">[s_get key="facebook"]</code></div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Twitter</p></td>
                            <td>
                                <input class="form-control" type="text" name="setting[twitter]" value="<?= Spandiv_Plugin::get_value('twitter') ?>">
                                <div class="small"><code title="Shortcode">[s_get key="twitter"]</code></div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Instagram</p></td>
                            <td>
                                <input class="form-control" type="text" name="setting[instagram]" value="<?= Spandiv_Plugin::get_value('instagram') ?>">
                                <div class="small"><code title="Shortcode">[s_get key="instagram"]</code></div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>YouTube</p></td>
                            <td>
                                <input class="form-control" type="text" name="setting[youtube]" value="<?= Spandiv_Plugin::get_value('youtube') ?>">
                                <div class="small"><code title="Shortcode">[s_get key="youtube"]</code></div>
                            </td>
                        </tr>
                        <tr><td class="text-primary"><b><p>About Us</p></b></td></tr>
                        <tr>
                            <td><p>About</p></td>
                            <td>
                                <textarea class="form-control" type="text" name="setting[about]" rows="4"><?= Spandiv_Plugin::get_value('about') ?></textarea>
                                <div class="small"><code title="Shortcode">[s_get key="about"]</code></div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Google Maps</p></td>
                            <td>
                                <textarea class="form-control" type="text" name="setting[google_maps]" rows="3"><?= Spandiv_Plugin::get_value('google_maps') ?></textarea>
                                <div class="small"><code title="Shortcode">[s_get key="google_maps"]</code></div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Google Tag Manager</p></td>
                            <td>
                                <textarea class="form-control" type="text" name="setting[google_tag_manager]" rows="3"><?= Spandiv_Plugin::get_value('google_tag_manager') ?></textarea>
                                <div class="small"><code title="Shortcode">[s_get key="google_tag_manager"]</code></div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>  
                            <td></td>
                            <td><button type="submit" name="submit" class="btn btn-primary float-end px-3 rounded-3">Save</button></td>
                        </tr>
                    </tfoot>
                </form>  
            </table>
        </div>

        <?php include('sidebar.php'); ?>

    </div>
</div>