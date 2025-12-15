# Fugu Elementor Theme

A minimal WordPress theme with full Elementor Theme Builder support.

## Description

Fugu is a lightweight WordPress theme designed to work seamlessly with Elementor Page Builder. It provides a clean foundation for building custom websites using Elementor's powerful Theme Builder features.

## Features

- Full Elementor Theme Builder support
- Minimal and lightweight code
- Clean, semantic HTML5 markup
- Responsive design ready
- SEO friendly
- Translation ready
- WordPress coding standards compliant

## Requirements

- WordPress 5.0 or higher
- PHP 7.0 or higher
- Elementor plugin (recommended)

## Installation

1. Download the theme ZIP file
2. Go to WordPress Admin → Appearance → Themes → Add New
3. Click "Upload Theme" and select the ZIP file
4. Click "Install Now" and then "Activate"

## Building

To create a distributable ZIP file:

```bash
./bin/create-zip.sh
```

The ZIP file will be created in the `build` directory.

## Elementor Integration

This theme registers all core Elementor locations, allowing you to customize:

- Header
- Footer
- Single post template
- Archive template
- And more

Simply install Elementor Pro and use Theme Builder to customize these locations.

## Development

The theme follows WordPress coding standards and best practices:

- All output is properly escaped
- Internationalization ready
- Semantic HTML5 structure
- Minimal CSS (style via Elementor)

## License

This theme is licensed under the GNU General Public License v2 or later.

## Credits

- Created by Luis Mallebrera
- Built for use with Elementor