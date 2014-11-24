<?php

/**
 * Plugin Name: GitHub Updater Test plugin
 * Author: Coen Jacobs
 * Author URI: http://coenjacobs.me
 * Version: 0.3
 */

add_action( 'init', 'gh_updater_test_plugin' );

function gh_updater_test_plugin() {
	if ( is_admin() ) {
		include( 'github-updater.php');

		$config = array(
			'slug'               => plugin_basename( __FILE__ ),
			'proper_folder_name' => 'github-updater-test-plugin',
			'api_url'            => 'https://api.github.com/repos/coenjacobs/github-updater-test-plugin',
			'raw_url'            => 'https://raw.github.com/coenjacobs/github-updater-test-plugin/master',
			'github_url'         => 'https://github.com/coenjacobs/github-updater-test-plugin',
			'zip_url'            => 'https://github.com/coenjacobs/github-updater-test-plugin/zipball/master',
			'sslverify'          => true,
			'requires'           => '4.0',
			'tested'             => '4.0',
			'readme'             => 'README.md',
			'access_token'       => '',
		);

		new WP_GitHub_Updater( $config );
	}
}