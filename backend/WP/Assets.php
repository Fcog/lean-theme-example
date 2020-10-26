<?php

namespace Lean\WP;

/**
 * 3rd party JS/CSS enqueue.
 */
class Assets {
	/**
	 * Init.
	 */
	public static function init() {
		add_action( 'wp_enqueue_scripts', [ __CLASS__, 'add_fonts' ] );
		add_action( 'wp_enqueue_scripts', [ __CLASS__, 'add_bootstrap' ] );
		add_action( 'wp_enqueue_scripts', [ __CLASS__, 'add_jquery' ] );
	}

	/**
	 * Add Google Fonts.
	 */
	public static function add_fonts() {
		wp_enqueue_style(
			'fonts',
			'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap',
			[],
			'1.0.0'
		);
	}

	/**
	 * Add bootstrap JS.
	 */
	public static function add_bootstrap() {
		wp_enqueue_script(
			'bootstrap',
			get_stylesheet_directory_uri() . '/frontend/static/js/bootstrap.min.js',
			[
				'jquery-2',
			],
			'1.0.0',
			true
		);

		wp_enqueue_style(
			'bootstrap',
			'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
			[],
			'1.0.0'
		);
	}

	/**
	 * Add jquery JS.
	 */
	public static function add_jquery() {
		wp_enqueue_script(
			'jquery-2',
			get_stylesheet_directory_uri() . '/frontend/static/js/jquery-3.2.1.slim.min.js',
			[],
			'1.0.0',
			true
		);
	}
}
