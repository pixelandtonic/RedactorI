:warning: **This plugin is no longer officially supported, as browser updates are beginning to leave the old Redactor “I” codebase in the dust. We recommend [uninstalling](#uninstallation) the plugin and returning to Craft’s built-in Redactor II editor.**

---

# Redactor I plugin for Craft CMS

This plugin provides a Redactor “I”-powered rich text field type for [Craft CMS](http://craftcms.com), for sites that are not ready to make the switch to Redactor II.

## Requirements

Redactor I requires Craft CMS 2.6 or later.

## Installation

To install Redactor I, copy the redactori/ folder into craft/plugins/, and then go to Settings → Plugins and click the “Install” button next to “Redactor I”.

The plugin will automatically convert all existing Rich Text fields to its own “Rich Text (Redactor I)” field type on install, and vise-versa on uninstall. Note that as long as the plugin is installed, any new rich text fields should be created using the “Rich Text (Redactor I)” field type rather than “Rich Text”. Running both old and new versions of Redactor side-by-side will cause CSS and JavaScript conflicts.

## Configuration

Redactor I used different configuration options than Redactor II, so you will need to ensure that your config files in craft/config/redactor are compatible with Redactor I while using this plugin.

If your config files have already been updated for Redactor II, you can reverse-implement the changes described in [this support article](https://craftcms.com/help/redactor-ii-configs).

If you’re starting a new site from scratch, you can copy the Simple.json and Standard.json files found within [config/redactor/](config/redactor/) into your site’s craft/config/redactor/ folder.

## Uninstallation

To uninstall Redactor I and go back to using Craft’s built-in Redactor II editor, simply go to Settings → Plugins and click the “Uninstall” button next to “Redactor I”.

## Changelog

### 1.1.1

* Fixed a bug where unordered lists in Rich Text fields weren’t getting bullets.
* Fixed a bug where ordered lists were getting indented `40px` rather than `2em`.

### 1.1.0

* Redactor I now requires Craft CMS 2.6 or later.
* Added support for the [addRichTextLinkOptions](https://craftcms.com/docs/plugins/hooks-reference#addRichTextLinkOptions) hook, enabling plugins to register custom Link menu options.
* Added support for the `file` toolbar button, replacing the “Link to an asset” Link menu option.
* Added a new “Available Asset Sources” field setting, making it possible to customize which asset sources should be available when selecting images or files.
* Added a new “Available Image Transforms” field setting, making it possible to customize which image transforms are available when selecting images.
* Fixed an error that occurred on Edit Field pages in Craft CMS 2.6.
* Fixed a bug where dragging an image onto Redactor I fields would show a progress bar, even though drag-uploading is not supported.

### 1.0.2

* Added support for adding custom hashes to entry URLs alongside the reference hash, e.g. `href="my/entry#foo#entry:123:url"`.

### 1.0.1

* Implemented Craft 2.5's `getPluginUrl` and `getDocumentationUrl` methods.

### 1.0.0

* Initial release
