<?php

/*
 * This file is copied as amu-plugin into new WP installs to reroute normal
 * mails into log entries.
 */

function wp_mail( $to ) {
	// Log for testing purposes
	WP_CLI::log( "WP-CLI test suite: Sent email to {$to}." );
}

