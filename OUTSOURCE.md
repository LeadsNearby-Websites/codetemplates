# Guidelines for Outsource

You will be provided with a wp-content folder and sql file which will have all required plugins installed, as well as the **hypercore** parent theme and **hypercore-child** theme.

**Note: When modifying the child theme, use [hooks](#hypercore-hooks) rather than copying and modifying the parent theme template files, especially layout files like sidebar, header, footer. hypercore is very much in active develpment and copying/modifying parent theme files can cause problems with future updates.**

# Table of Contents

* [Theme Options](#hypercore-theme-options)
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

# Hypercore Hooks

# Hypercore SiteOrigin Widgets (Page Builder Elements)