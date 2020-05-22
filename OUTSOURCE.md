# Guidelines for Outsource

You will be provided with a wp-content folder and sql file which will have all required plugins installed, as well as the **hypercore** parent theme and **hypercore-child** theme.

**Note: When modifying the child theme, use [hooks](#hypercore-hooks) rather than copying and modifying the parent theme template files, especially layout files like sidebar, header, footer. hypercore is very much in active develpment and copying/modifying parent theme files can cause problems with future updates.**

# Table of Contents

* [Theme Options](#hypercore-theme-options)
* [Shortcodes](#hypercore-shortcodes)
* [Hooks (Actions/Filters)](#hypercore-hooks)
* [SiteOrigin Widgets (Page Builder Elements)](#hypercore-siteorigin-widgets-page-builder-elements)

# Hypercore Theme Options

All hypercore theme options live in the WordPress Customizer under the tab **Theme Options**. Options of note which you may need are below.

## Logo/Favicon

The logo and favicon should be set in the main site identity options found in **Customizer->Site Identity**.

Site title and tagline can also be changed there.

## Color Palette

**Please set these as best you can** - they will help you style the site in a way that is easy to change in the future. These options add CSS custom properties to the main body tag.

```html
<body style="--theme-primary: ''; --theme-secondary: ''; --theme-accent: ''; --theme-accent-action: '';"></body>
```

Those CSS properties should be used as much as possible when styling the site.

### Don't Do

```css
.a-button {
  background-color: '#maincolorhexcode'
}
```

### Instead Do

```css
.a-button {
  background-color: var(--theme-primary);
}
```

## Social Links

Fill these out as applicable. They are used to power social links in the footer and page builder element.

## Header

hypercore comes with two basic header options:

* two rows, first row logo on left, freeform content on right, second row main nav
* one row, logo on left, main nav on right

If these options are not enough, please use [filters/actions](#hypercore-hooks) to change/extend the theme.

## Business Info

Please fill this out as completely as you can.

# Hypercore Shortcodes

Use the following shortcodes as much as possible, they're designed to make it easy to transition between hosting environments.

* **[hyper-toggle]**: Adds a hamburger toggle which displays the nav attached to the 'Mobile Menu' location
* **[site_url]**: Return site_url()
* **[site_name]**: Returns WP site title
* **[site_copyright]**: Returns "©currentyear WP site title"
* **[phone_number]**: Returns phone number set in theme options

# Hypercore Hooks

## Actions

* **hypercore_custom_header**: if used, will override everything between <header></header> tags
* **hypercore_custom_header_content**: if used, will override header content (logo and content next it)
* **hypercore_before_header**: called right before output of header tag
* **hypercore_before_header_inner**: called right after output of header tag
* **hypercore_after_header_inner**: called right before close of header tag
* **hypercore_after_header**: called right after close of header tag
* **hypercore_after_titlebar**: called right after title bar is output
* **hypercore_before_the_content**: called just inside main tag
* **hypercore_before_footer**: called right before output of footer tag
* **hypercore_after_footer_start**: called right inside the footer tag
* **hypercore_footer**: allows you to override default footer with your own custom html
* **hypercore_before_footer_end**: called right before close of footer tag
* **hypercore_filter_the_title**: allows you to filter the title returned by hypercore_get_the_title()

## Filters

* **override_hypercore_title_bar**: allows filtering of default title bar HTML - return false to disable default title bar
* **hypercore_sidebar_html**: allows filtering of sidebar HTML
* **hypercore_terms_privacy_sitemap_links**: allows filtering terms/privacy/sitemap links in footer.
* **hypercore_footer_after_logo**: allows filtering of text/html after footer logo. Default output is copyright text.
* **hypercore_noonereadsthis_html**: allows filtering of terms/privacy/sitemap bar HTML
* Page Builder Elements
    * **hypercore_phone_cta_icon**: allows filtering icon added to phone cta page builder element. Filtered value is an array of icon and family

# Hypercore SiteOrigin Widgets (Page Builder Elements)

As much as possible, the hypercore SO widgets should be preferred.

## Accordion

Basic accordion element - doesn't load jQuery so is more ideal for page speed.

## Checklist

Use this element when you need to add a Font Awesome icon to a checklist, or you need a multi-column checklist.

## Image CTA

This renders and image with title/text/button over an image.

## Phone CTA

This renders a basic block with a phone number and optional sub-title.

## Social Links

This renders links/icons for social links set in theme options.

## Tabs

Basic tabs element, loads no jQuery and has very basic styling for performance reasons. The styling can be easily enhanced.