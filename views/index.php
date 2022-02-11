<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= plugin_dir_url(__DIR__) ?>/assets/app.css">

<div class="wrap">
	<h1>Spandiv Additional Plugin</h1>
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
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('address')" title="Click to copy!" data-key="address">&lt;?php echo do_shortcode('[spandiv key="address"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="address">Copied!</div>
                                </div>
                            </td>
                        </tr>
                        <tr><td class="text-primary"><b><p>Contact</p></b></td></tr>
                        <tr>
                            <td><p>Telephone</p></td>
                            <td>
                                <input class="form-control" type="text" name="setting[telephone]" value="<?= Spandiv_Plugin::get_value('telephone') ?>">
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('telephone')" title="Click to copy!" data-key="telephone">&lt;?php echo do_shortcode('[spandiv key="telephone"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="telephone">Copied!</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Message</p></td>
                            <td>
                                <textarea class="form-control" name="setting[message]" rows="3"><?= Spandiv_Plugin::get_value('message') ?></textarea>
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('message')" title="Click to copy!" data-key="message">&lt;?php echo do_shortcode('[spandiv key="message"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="message">Copied!</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Email</p></td>
                            <td>
                                <input class="form-control" type="email" name="setting[email]" value="<?= Spandiv_Plugin::get_value('email') ?>">
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('email')" title="Click to copy!" data-key="email">&lt;?php echo do_shortcode('[spandiv key="email"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="email">Copied!</div>
                                </div>
                            </td>
                        </tr>
                        <tr><td class="text-primary"><b><p>Social Media</p></b></td></tr>
                        <tr>
                            <td><p>Facebook</p></td>
                            <td>
                                <input class="form-control" type="text" name="setting[facebook]" value="<?= Spandiv_Plugin::get_value('facebook') ?>">
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('facebook')" title="Click to copy!" data-key="facebook">&lt;?php echo do_shortcode('[spandiv key="facebook"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="facebook">Copied!</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Twitter</p></td>
                            <td>
                                <input class="form-control" type="text" name="setting[twitter]" value="<?= Spandiv_Plugin::get_value('twitter') ?>">
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('twitter')" title="Click to copy!" data-key="twitter">&lt;?php echo do_shortcode('[spandiv key="twitter"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="twitter">Copied!</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Instagram</p></td>
                            <td>
                                <input class="form-control" type="text" name="setting[instagram]" value="<?= Spandiv_Plugin::get_value('instagram') ?>">
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('instagram')" title="Click to copy!" data-key="instagram">&lt;?php echo do_shortcode('[spandiv key="instagram"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="instagram">Copied!</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>YouTube</p></td>
                            <td>
                                <input class="form-control" type="text" name="setting[youtube]" value="<?= Spandiv_Plugin::get_value('youtube') ?>">
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('youtube')" title="Click to copy!" data-key="youtube">&lt;?php echo do_shortcode('[spandiv key="youtube"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="youtube">Copied!</div>
                                </div>
                            </td>
                        </tr>
                        <tr><td class="text-primary"><b><p>About Us</p></b></td></tr>
                        <tr>
                            <td><p>About</p></td>
                            <td>
                                <textarea class="form-control" type="text" name="setting[about]" rows="4"><?= Spandiv_Plugin::get_value('about') ?></textarea>
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('about')" title="Click to copy!" data-key="about">&lt;?php echo do_shortcode('[spandiv key="about"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="about">Copied!</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Google Maps</p></td>
                            <td>
                                <textarea class="form-control" type="text" name="setting[google_maps]" rows="3"><?= Spandiv_Plugin::get_value('google_maps') ?></textarea>
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('google_maps')" title="Click to copy!" data-key="google_maps">&lt;?php echo do_shortcode('[spandiv key="google_maps"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="google_maps">Copied!</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Google Tag Manager</p></td>
                            <td>
                                <textarea class="form-control" type="text" name="setting[google_tag_manager]" rows="3"><?= Spandiv_Plugin::get_value('google_tag_manager') ?></textarea>
                                <div class="small">
                                    <code class="shortcode" onclick="copyShortcode('google_tag_manager')" title="Click to copy!" data-key="google_tag_manager">&lt;?php echo do_shortcode('[spandiv key="google_tag_manager"]') ?&gt;</code>
                                    <div class="shortcode-message text-success d-none" data-key="google_tag_manager">Copied!</div>
                                </div>
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

<script>
	function copyShortcode(key) {
		var codeElement = document.querySelector(".shortcode[data-key=" + key + "]");
		var spanElement = document.querySelector(".shortcode-message[data-key=" + key + "]");
		
		// Copy text
		var text = codeElement.innerHTML;
		text = text.replace("&lt;", "<");
		text = text.replace("&gt;", ">");
		navigator.clipboard.writeText(text);
		
		// Remove class
		spanElement.classList.remove("d-none");
		
		// Set timeout
		setTimeout(function() {
			spanElement.classList.add("d-none");
		}, 2000);
	}
</script>