# Fugu Elementor Starter Theme

A minimal, Elementor-ready WordPress starter theme designed for the Fugu project. This theme provides full support for Elementor and Elementor Pro Theme Builder, allowing you to create custom headers, footers, single post templates, archive pages, and 404 pages using Elementor's drag-and-drop interface.

## Features

- **Elementor Theme Builder Support**: Register all core Elementor locations (header, footer, single, archive, 404)
- **Lightweight & Clean**: Minimal code for maximum performance
- **Responsive**: Mobile-first design approach
- **Standards Compliant**: Follows WordPress coding standards
- **Demo Content Included**: Pre-built Elementor kit and homepage template for quick start

## Installation

### Method 1: Manual Installation

1. Download the theme ZIP file from the [latest release](../../releases/latest)
2. In your WordPress admin panel, navigate to **Appearance > Themes**
3. Click **Add New** and then **Upload Theme**
4. Choose the `fugu-elementor-theme.zip` file and click **Install Now**
5. Once installed, click **Activate**

### Method 2: FTP Installation

1. Download and extract the theme ZIP file
2. Upload the `fugu-elementor-theme` folder to `/wp-content/themes/` on your server
3. In your WordPress admin panel, navigate to **Appearance > Themes**
4. Find "Fugu Elementor Starter" and click **Activate**

## Importing Demo Content

The theme includes demo Elementor content to help you get started quickly.

### Import the Elementor Kit

1. Ensure Elementor is installed and activated
2. Navigate to **Elementor > Tools > Import Kit**
3. Click **Choose File** and select `fugu-elementor-theme/elementor-kit/demo-kit.json`
4. Click **Import** and wait for the process to complete
5. The kit includes:
   - Global colors (Primary: #0a6cff, Secondary: #ffffff, Text: #333333, Accent: #f7f7f7)
   - Typography settings (Roboto and Roboto Slab fonts)
   - Site settings and breakpoints

### Import the Homepage Template

1. Navigate to **Templates > Saved Templates** in WordPress admin
2. Click **Import Templates**
3. Select `fugu-elementor-theme/templates/homepage-template.json`
4. Click **Import Now**
5. Create a new page or edit an existing one
6. Click **Edit with Elementor**
7. Click the folder icon to open Templates Library
8. Find "Homepage Template" in **My Templates** tab and click **Insert**

The homepage template includes:
- Hero section with heading, text, and CTA button
- Features section with three feature blocks
- Call-to-action section

## Using Elementor Theme Builder

This theme fully supports Elementor Pro's Theme Builder feature:

### Create Custom Header

1. Navigate to **Templates > Theme Builder**
2. Click **Add New** under Header
3. Design your header using Elementor
4. Set display conditions (e.g., Entire Site)
5. Publish the template

### Create Custom Footer

1. Navigate to **Templates > Theme Builder**
2. Click **Add New** under Footer
3. Design your footer using Elementor
4. Set display conditions (e.g., Entire Site)
5. Publish the template

### Create Custom Single Post Template

1. Navigate to **Templates > Theme Builder**
2. Click **Add New** under Single
3. Design your post template using Elementor
4. Set display conditions (e.g., All Singles)
5. Publish the template

### Other Template Types

You can also create custom templates for:
- Archive pages
- 404 error pages
- Search results pages
- Product pages (with WooCommerce)

## Theme Customization

### Menus

1. Navigate to **Appearance > Menus**
2. Create a menu and assign it to "Primary Menu" location
3. The menu will appear in the default header (when no Elementor header template is active)

### Logo

1. Navigate to **Appearance > Customize > Site Identity**
2. Upload your logo under "Logo"
3. The logo will appear in the default header (when no Elementor header template is active)

### Footer Widgets

1. Navigate to **Appearance > Widgets**
2. Add widgets to the "Footer Widgets" area
3. Widgets will appear in the default footer (when no Elementor footer template is active)

## Creating a Release ZIP

To create a distributable ZIP file of this theme:

1. Navigate to the root of this repository
2. Run the build script:
   ```bash
   cd bin
   ./create-zip.sh
   ```
3. The script will create `fugu-elementor-theme.zip` in the current directory
4. This ZIP file is ready to be uploaded to WordPress or distributed

Alternatively, you can manually create a ZIP:
```bash
zip -r fugu-elementor-theme.zip fugu-elementor-theme/ -x "*.git*" -x "*node_modules*" -x "*.DS_Store"
```

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- Elementor (free version) - Required for Elementor features
- Elementor Pro - Required for Theme Builder features (header, footer, etc.)

## Support

For issues, questions, or contributions, please visit the [GitHub repository](https://github.com/luismallebrera/fugu-elementor-theme).

## License

This theme is licensed under the GNU General Public License v2 or later.

## Credits

- Built with [Elementor](https://elementor.com/)
- Developed for the Fugu project
