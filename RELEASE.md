# Creating a GitHub Release

This guide explains how to create a GitHub release with the theme ZIP file attached.

## Prerequisites

1. Ensure all changes are committed and pushed to the repository
2. Create the theme ZIP file by running:
   ```bash
   ./bin/create-zip.sh
   ```

## Steps to Create a Release

### Option 1: Using GitHub Web Interface

1. Navigate to the repository on GitHub: https://github.com/luismallebrera/fugu-elementor-theme

2. Click on **Releases** (in the right sidebar or under the Code tab)

3. Click **Draft a new release**

4. Fill in the release details:
   - **Tag version**: `v1.0.0` (or appropriate version number)
   - **Release title**: `Fugu Elementor Starter Theme v1.0.0`
   - **Description**: Use the template below

5. Attach the ZIP file:
   - Click **Attach binaries by dropping them here or selecting them**
   - Select `fugu-elementor-theme.zip` from the repository root

6. Click **Publish release**

### Option 2: Using GitHub CLI

If you have GitHub CLI installed and authenticated:

```bash
# Create the release
gh release create v1.0.0 \
  --title "Fugu Elementor Starter Theme v1.0.0" \
  --notes-file RELEASE_NOTES.md \
  fugu-elementor-theme.zip

# Or create a draft release
gh release create v1.0.0 \
  --title "Fugu Elementor Starter Theme v1.0.0" \
  --notes-file RELEASE_NOTES.md \
  --draft \
  fugu-elementor-theme.zip
```

## Release Description Template

```markdown
# Fugu Elementor Starter Theme v1.0.0

A minimal, Elementor-ready WordPress starter theme for building beautiful websites.

## Features

- ✅ Full Elementor Theme Builder support
- ✅ Register all core Elementor locations (header, footer, single, archive, 404)
- ✅ Pre-built demo Elementor kit with colors and typography
- ✅ Homepage template with hero, features, and CTA sections
- ✅ Lightweight and clean code
- ✅ Responsive design
- ✅ Standards compliant

## Installation

1. Download `fugu-elementor-theme.zip` from this release
2. In WordPress admin, go to **Appearance > Themes**
3. Click **Add New** then **Upload Theme**
4. Choose the downloaded ZIP file and click **Install Now**
5. Activate the theme

## Demo Content

The theme includes:
- **Elementor Kit** (`elementor-kit/demo-kit.json`) - Global colors and typography
- **Homepage Template** (`templates/homepage-template.json`) - Ready-to-use homepage

See the [README](https://github.com/luismallebrera/fugu-elementor-theme/blob/main/fugu-elementor-theme/README.md) for import instructions.

## Requirements

- WordPress 5.0+
- PHP 7.4+
- Elementor plugin

## Documentation

Full documentation is available in the [theme README](https://github.com/luismallebrera/fugu-elementor-theme/blob/main/fugu-elementor-theme/README.md).

## What's Included

- Core theme files (style.css, functions.php, header.php, footer.php)
- Template files (index.php, page.php, single.php, archive.php, 404.php)
- Template parts
- Demo Elementor kit JSON
- Homepage template JSON
- Comprehensive documentation
```

## After Release

Once the release is published:

1. Verify the ZIP file is attached and downloadable
2. Test the download and installation in WordPress
3. Update the main README if needed to point to the latest release
4. Share the release with users

## Version Numbering

Follow [Semantic Versioning](https://semver.org/):
- **Major version** (v2.0.0): Breaking changes
- **Minor version** (v1.1.0): New features, backward compatible
- **Patch version** (v1.0.1): Bug fixes, backward compatible
