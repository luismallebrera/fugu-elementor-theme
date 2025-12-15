#!/bin/bash
#
# Build script for creating a distributable Fugu theme ZIP file
#
# Usage: ./bin/create-zip.sh

set -e

# Get the theme directory
THEME_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )/.." && pwd )"
THEME_NAME="fugu-elementor-theme"
BUILD_DIR="${THEME_DIR}/build"
DIST_DIR="${BUILD_DIR}/${THEME_NAME}"

echo "Building ${THEME_NAME} theme..."

# Clean previous build
if [ -d "$BUILD_DIR" ]; then
    echo "Cleaning previous build..."
    rm -rf "$BUILD_DIR"
fi

# Create build directory
mkdir -p "$DIST_DIR"

echo "Copying theme files..."

# Copy theme files (exclude development files)
rsync -av \
    --exclude='.git*' \
    --exclude='node_modules' \
    --exclude='build' \
    --exclude='bin' \
    --exclude='.DS_Store' \
    --exclude='*.log' \
    --exclude='composer.lock' \
    --exclude='package-lock.json' \
    "${THEME_DIR}/" "${DIST_DIR}/"

# Create ZIP file
cd "$BUILD_DIR"
ZIP_FILE="${THEME_NAME}.zip"

echo "Creating ZIP file: ${ZIP_FILE}"
zip -r "$ZIP_FILE" "$THEME_NAME" -q

echo "Build complete!"
echo "ZIP file: ${BUILD_DIR}/${ZIP_FILE}"
echo "Size: $(du -h "${ZIP_FILE}" | cut -f1)"
