<?php
/**
 *	PHP Files Autoloader
 *	@author  ToongeePrime <toongeeprime@gmail.com>
 *
 *	GET PHP FILES CONTAINED IN AN ARRAY OF DIRECTORIES
 *	This file should be in the root directory
 */


// The Directories Array:
$directories = [ 'inits', 'includes', 'directory3', 'otherdirectory' ];

foreach( $directories as $dir ) {
	$folder = dirname( __FILE__ ) . '/' . $dir . '/'; // Full path to the folder

	// Get all files contained in folder
	$files	=	scandir( $folder );

	foreach( $files as $file ) {
		$path = $folder . $file; // Full path to each file

		// Ensure file $path is not a directory and
		// Check that they have the php extension
		if ( ! is_dir( $path ) && pathinfo( $path )[ 'extension' ] == 'php' )
			require_once $path;
	}

}
