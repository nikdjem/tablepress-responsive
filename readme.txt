=== TablePress Responsive Stacked ===
Contributors: Nikolay Djemerenov
Tags: tablepress, responsive, tables, mobile, css, javascript
Requires at least: 5.0
Tested up to: 6.6
Stable tag: 1.1
Requires PHP: 7.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Makes TablePress tables responsive by converting them into a stacked mobile-friendly layout. No manual editing required.

== Description ==

This plugin makes TablePress tables **responsive** by automatically converting them into a **stacked layout on mobile devices** (≤768px).  
Instead of scrolling horizontally, each row is displayed as a block, with the column header shown above each cell.

Features:
* Automatically detects TablePress tables
* Converts them into a stacked layout on small screens
* No need to manually add `data-label` attributes
* Lightweight CSS + JS solution
* Works with any TablePress table

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/tablepress-responsive/` directory, or install the plugin via the WordPress **Plugins → Add New → Upload Plugin** screen.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. That’s it! Your TablePress tables are now responsive.

== Frequently Asked Questions ==

= Does this replace the TablePress Responsive Extension? =
This plugin is a lightweight alternative. It only provides a "stacked" responsive view for small screens.

= Do I need to add data-label attributes manually? =
No. The plugin automatically generates them based on your table headers.

= Will it work with any theme? =
Yes. It only targets `.tablepress` tables.

== Screenshots ==

1. Desktop view of a TablePress table.
2. Mobile stacked view.

== Changelog ==

= 1.1 =
* Added CSS enqueue inside the plugin (no need to paste manually).
* Improved compatibility with different themes.

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.1 =
CSS is now included in the plugin itself. Please update for better compatibility.

== License ==

This plugin is released under the GPLv2 or later.