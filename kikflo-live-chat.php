<?php
/**
 * Plugin Name: Kikflo Live Chat
 * Plugin URI: http://www.kikflo.com
 * Description: Kikflo Live Chat allows you to chat with visitors to your site via a customizable chat window.
 * Version: 1.0.1
 * Author: kikflo
 * Author URI: http://www.kikflo.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
function kikflolivechat() {
	wp_enqueue_script( 'kikflo-live-chat', 'https://www.kikflochat.com/flochat.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'kikflolivechat' );
