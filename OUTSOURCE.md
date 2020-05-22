# Guidelines for Outsource

You will be provided with a wp-content folder and sql file which will have all required plugins installed, as well as the **hypercore** parent theme and **hypercore-child** theme.

## Hypercore Theme Options

All theme options live in the WordPress Customizer under the tab **Theme Options**. Options of note which you may need are below.

### Color Palette

**Please set these as best you can** - they will help you style the site in a way that is easy to change in the future. These options add CSS custom properties to the main body tag.

```html
<body style="--theme-primary: ''; --theme-secondary: ''; --theme-accent: ''; --theme-accent-action: '';"></body>
```

Those CSS properties should be used as much as possible when styling the site.

#### Don't Do

```css
.a-button {
  background-color: '#maincolorhexcode'
}
```

#### Instead Do

```css
.a-button {
  background-color: var(--theme-primary);
}
```

## Hypercore Hooks

## Hypercore SiteOrigin Widgets (Page Builder Elements)