#!/usr/bin/env bash
# Create a distributable ZIP of the Fugu Elementor Theme
# Usage: ./create-zip.sh

set -e

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ROOT_DIR="$(dirname "$SCRIPT_DIR")"
THEME_DIR="$ROOT_DIR/fugu-elementor-theme"
OUTPUT_ZIP="$ROOT_DIR/fugu-elementor-theme.zip"

if [ ! -d "$THEME_DIR" ]; then
  echo "Error: Theme directory not found at $THEME_DIR"
  exit 1
fi

# Remove old ZIP if it exists
if [ -f "$OUTPUT_ZIP" ]; then
  echo "Removing existing ZIP file..."
  rm "$OUTPUT_ZIP"
fi

echo "Creating ZIP archive..."
cd "$ROOT_DIR"
zip -r "fugu-elementor-theme.zip" "fugu-elementor-theme" \
  -x "*.git*" \
  -x "*node_modules*" \
  -x "*.DS_Store" \
  -x "*.zip"

echo ""
echo "✓ Created: $OUTPUT_ZIP"
ls -lh "$OUTPUT_ZIP"
echo ""
echo "The theme ZIP is ready for distribution!"
echo "You can now upload this to WordPress or attach it to a GitHub release."
