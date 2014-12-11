<?php
/*
Plugin Name: BNS Inline Asides Extended
Plugin URI: http://buynowshop.com/plugins/bns-inline-asides/
Description: This plugin is specifically written as an extension to work with the BNS Inline Asides plugin.
Version: 0.1
Text Domain: bns-inline-asides-extended
Author: Edward Caissie
Author URI: http://edwardcaissie.com/
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/**
 * BNS Inline Asides Extended
 *
 * Extends the BNS Inline Asides plugin
 *
 * @package        BNS_Inline_Asides_Extended
 * @version        0.1
 *
 * @link           http://buynowshop.com/plugins/bns-inline-asides-extended/
 * @link           https://github.com/Cais/bns-inline-asides-extended/
 * @link           http://wordpress.org/extend/plugins/bns-inline-asides-extended/
 *
 * @author         Edward Caissie <edward.caissie@gmail.com>
 * @copyright      Copyright (c) 2014, Edward Caissie
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * /** Let's begin ... */
class BNS_Inline_Asides_Extended {
	/**
	 * Constructor
	 *
	 * @package     BNS_Inline_Asides_Extended
	 * @since       0.1
	 *
	 * @internal    Requires BNS Inline Asides
	 * @link        http://buynowshop.com/plugins/bns-inline-asides/
	 * @internal    Requires WordPress version 3.6
	 * @internal    @uses shortcode_atts - uses optional filter variable
	 *
	 * @uses        BNS_Inline_Asides_Extended::add_bnsia
	 * @uses        add_shortcode
	 */
	function __construct() {

		/**
		 * Add Shortcode
		 * @example  [aside]text[/aside]
		 * @internal default type="Aside"
		 * @internal default element='' (an empty string)
		 * @internal default status="open"
		 * @internal default show="To see the <em>%s</em> click here."
		 * @internal default hide="To hide the <em>%s</em> click here."
		 */
		add_shortcode( 'aside-nested', array( $this, 'add_bnsia' ) );

	}

	/** End function - constructor */

	/**
	 * Add BNS Inline Asides
	 * Using the global variable available from BNS Inline Asides class add the
	 * method that is used as the shortcode callback
	 *
	 * @package BNS_Inline_Asides_Extended
	 * @since   0.1
	 *
	 * @uses    BNS_Inline_Asides::bns_inline_asides_shortcode;
	 *
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	function add_bnsia( $atts, $content ) {

		global $bns_inline_asides;

		/** Sanity check, makes sure that BNS Inline Asides is active */
		if ( ! empty( $bns_inline_asides ) ) {

			return $bns_inline_asides->bns_inline_asides_shortcode( $atts, $content );

		} else {

			return null;

		}
		/** End if - is not empty */
	}
}

/** @var object $bns_inline_asides_extended - instantiate class */
$bns_inline_asides_extended = new BNS_Inline_Asides_Extended();