# Redactor I plugin for Craft CMS

This plugin provides a Redactor “I”-powered rich text field type for [Craft CMS](http://craftcms.com), for sites that are not ready to make the switch to Redactor II.

## Installation

To install Redactor I, copy the redactori/ folder into craft/plugins/, and then go to Settings → Plugins and click the “Install” button next to “Redactor I”.

The plugin will automatically convert all existing Rich Text fields to its own “Rich Text (Redactor I)” field type on install, and vise-versa on uninstall. Note that as long as the plugin is installed, any new rich text fields should be created using the “Rich Text (Redactor I)” field type rather than “Rich Text”. Running both old and new versions of Redactor side-by-side will cause CSS and JavaScript conflicts.

## Configuration

Redactor I used different configuration options than Redactor II, so you will need to ensure that your config files in craft/config/redactor are compatible with Redactor I while using this plugin.

If your config files have already been updated for Redactor II, you can reverse-implement the changes described in [this support article](https://craftcms.com/help/redactor-ii-configs).

If you’re starting a new site from scratch, you can copy the Simple.json and Standard.json files found within [config/redactor/](config/redactor/) into your site’s craft/config/redactor/ folder.

## Changelog

### 1.0.2

* Added support for adding custom hashes to entry URLs alongside the reference hash, e.g. `href="my/entry#foo#entry:123:url"`.

### 1.0.1

* Implemented Craft 2.5's `getPluginUrl` and `getDocumentationUrl` methods.

### 1.0.0

* Initial release
