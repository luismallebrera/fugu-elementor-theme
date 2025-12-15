#!/usr/bin/env bash
# Usage: ./create-zip.sh fugu-elementor-theme
THEME_DIR=${1:-fugu-elementor-theme}
ZIP_NAME="${THEME_DIR}.zip"

if [ ! -d "$THEME_DIR" ]; then
  echo "Directory $THEME_DIR does not exist."
  exit 1
fi

zip -r "$ZIP_NAME" "$THEME_DIR"
echo "Created $ZIP_NAME"
