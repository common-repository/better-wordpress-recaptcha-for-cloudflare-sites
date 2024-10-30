=== Better Wordpress reCAPTCHA for CloudFlare sites ===
Contributors: daniel
Donate link: -
Tags: akismet, comments, spam, reCAPTCHA, cloudflare
Requires at least: 2.8
Tested up to: 3.3.2
Stable tag: 1.0.0
License: GPLv2 or later

This plugin utilizes reCAPTCHA (with support for Akismet) to help your blog stay clear of spams and is optimized for cloudflare sites.

== Description ==
Original plugin by Better Wordpress reCAPTCHA by OddOneOut but this plugin is optimized to work with CloudFlare powered sites

== Installation ==

1. Upload the `bwp-recaptcha` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the Plugins menu in WordPress. After activation, you should see a menu of this plugin on your left. If you can not locate it, click on Settings under the plugin's name.
3. If you don't use `comment_form()` to print the comment form, please read [this usage note](http://betterwp.net/wordpress-plugins/bwp-recaptcha/#usage). Also, if you would like to have reCAPTCHA appearing below the textarea where your visitors type their comments, simply replace `comment_form()` in `comments.php` with this:
<pre><code>
if (function_exists('bwp_capt_comment_form')) {bwp_capt_comment_form();}
</code></pre>
4. Configure the plugin, and add your API keys. You must have API keys for the current domain for this plugin to work.
5. Say goodbye to spam!

[View instructions with images](http://betterwp.net/wordpress-plugins/bwp-recaptcha/installation/).

== Frequently Asked Questions ==

-

== Screenshots ==

1. reCAPTCHA with custom theme

== Changelog ==

= 1.0.0 =
* Initial Release.

== Upgrade Notice ==

= 1.0.0 =
* Enjoy the plugin!