=== BNS Inline Asides Extended ===
Contributors: cais
Donate link: http://buynowshop.com
Tags: posts, pages, content, shortcode, plugin-only
Requires at least: 3.6
Tested up to: 4.1
Stable tag: 0.1
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

This plugin will allow you to style sections of the post, or page, content with added emphasis by leveraging a style element from the active theme.

== Description ==

This plugin is specifically written as an extension to work with the BNS Inline Asides plugin.
The essential premise is to allow you to nest an `aside-nested` shortcode within the `aside` shortcode and retain all functionality.

== Installation ==

This section describes how to install the plugin and get it working.

1. Go to the "Plugins" menu in the Administration Panels ("dashboard").
2. Click the 'Add New' link.
3. Click the "Upload Plugin" link.
4. Browse for the bns-inline-asides-extended.zip file on your computer; upload; and, install accordingly.
5. Activate.

Please read this article for further assistance: http://wpfirstaid.com/2009/12/plugin-installation/

----

= Usage =
This plugin makes use of WordPress Shortcode API (additional information can be found in the codex here: http://codex.wordpress.org/Shortcode_API)

The basic shortcode usage is `[aside-nested]CONTENT[/aside-nested]`. The default values of the shortcode are type: aside; and, status: open.

* `[aside-nested]CONTENT[/aside-nested] = [aside-nested type="aside" status="open"]CONTENT[/aside-nested]`

To use the `[aside-nested]` shortcode and have it initially "closed" any status other than "open" will work as the plugin will change the status to "closed" if it is not equal to "open".

The pre-defined aside types currently included:

* Note - uses the theme element's default text color on a Light Grey background
* Rant - uses black text on a red background with a non-repeating flame graphic
* Changelog - sets the font to monospace, reminiscent of type written notes
* Footnote - uses lower-case roman numerals when the items are written using an (HTML) ordered list
* Nota Bene (NB) - italicizes the text within the aside
* Black text on a transparent background with a non-repeating hat graphic
* Correction - Black text on a transparent background with a non-repeating checkbox graphic
* Update - Black text on a transparent background with a non-repeating circular arrow graphic

See the frequently asked questions section for how to add your own custom type.

== Frequently Asked Questions ==

= Why doesn't the "Rant" type work with the "H" tags? =
Not all possible combinations of existing BNS Inline Aside types have been set as defaults.
Please feel free to add the bns-inline-asides-custom-stylesheet.css option and create your own combinations ...
... and let us know about them. We would be very happy to consider adding them as defaults.

= How can I style the plugin output? =
To add your own custom aside type styles you might consider creating a new stylesheet in this plugin's folder using the name: bnsia-custom-types.css

The plugin will create a class name from the custom aside type you use in your shortcode. For example, `[aside type="bacon"]` will generate these classes you can style:

* .open-aside.bacon
* .close-aside.bacon
* .bnsia.aside.bacon
* blockquote.aside.bacon

This method can also be used to over-write the Pre-Defined Aside Types styles as the bnsia-custom-types.css file loads after the main stylesheet.

The bnsia-custom-types.css stylesheet should not be over-written by updates.

= How do I use the 'show' and 'hide' parameters? =
If you do not want to use the default 'show' and 'hide' parameters, you can change them to your own preference in each instance of the shortcode. If you want your aside type to be dynamically inserted into the message simply use the `%s` placeholder in your custom message.

Here are some examples:

* `[aside-nested type="bacon" show="Want to see my <em>%s</em>?" status="closed"]`
* `[aside-nested type="soup" hide="No %s for you!"]`

== Screenshots ==
TBA

== Other Notes ==

= Copyright 2014  Edward Caissie  (email : edward.caissie@gmail.com) =

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 2,
  as published by the Free Software Foundation.

  You may NOT assume that you can use any other version of the GPL.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

  The license for this software can also likely be found here:
  http://www.gnu.org/licenses/gpl-2.0.html

== Upgrade Notice ==
Please stay current with your WordPress installation, your active theme, and your plugins.

== Changelog ==
= 0.1 =
* Initial Release