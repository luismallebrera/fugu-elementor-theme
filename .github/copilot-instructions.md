# Copilot Instructions for Fugu Elementor Theme

## Project Overview

This is a WordPress theme with full Elementor Theme Builder support. The theme registers all core Elementor locations and is designed to work seamlessly with the Elementor page builder.

## Development Guidelines

### WordPress and Elementor Best Practices

- Follow WordPress coding standards and best practices
- Ensure full compatibility with Elementor Theme Builder
- Register all core Elementor locations properly
- Maintain backward compatibility with WordPress and Elementor versions

### Security Practices

**CRITICAL**: Security is paramount. Always follow these security guidelines:

- **Output Escaping**: All `bloginfo()` output must be escaped using `esc_html(get_bloginfo())` instead of direct `bloginfo()` calls
- **Data Sanitization**: Always sanitize user input and escape output appropriately
- **SQL Queries**: Use prepared statements for all database queries
- **Nonces**: Use WordPress nonces for form submissions and AJAX requests
- **Capability Checks**: Verify user capabilities before performing privileged operations

### Code Quality

- Write clean, maintainable, and well-documented code
- Follow WordPress coding standards (WPCS)
- Use meaningful variable and function names
- Add inline comments only when necessary to explain complex logic
- Keep functions small and focused on a single responsibility

### File Structure

- Theme files should follow WordPress theme hierarchy
- Custom functionality should be properly organized
- Use WordPress hooks and filters instead of modifying core files
- Separate business logic from presentation when possible

### Testing and Building

- **Build Process**: Use `./bin/create-zip.sh` from repository root to build the distributable theme ZIP file
- Test all changes in a local WordPress installation with Elementor installed
- Verify compatibility with different WordPress and Elementor versions
- Test responsive design across different screen sizes

### Performance

- Optimize assets (CSS, JS, images) for production
- Minimize database queries
- Use WordPress transients for caching when appropriate
- Lazy load images and scripts when possible
- Enqueue scripts and styles properly using WordPress functions

### Accessibility

- Follow WCAG 2.1 guidelines
- Ensure proper semantic HTML structure
- Include appropriate ARIA labels where needed
- Test with screen readers and keyboard navigation

### Version Control

- Write clear, descriptive commit messages
- Keep commits focused and atomic
- Reference issue numbers in commit messages when applicable
- Don't commit build artifacts or dependencies to the repository

## Common Patterns

### Escaping Output

```php
// Good ✓
echo esc_html(get_bloginfo('name'));
echo esc_url(get_bloginfo('url'));

// Bad ✗
bloginfo('name');
echo get_bloginfo('name');
```

### Enqueuing Assets

```php
function fugu_enqueue_scripts() {
    wp_enqueue_style('fugu-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('fugu-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'fugu_enqueue_scripts');
```

### Elementor Integration

- Use Elementor's template system properly
- Register theme locations using Elementor's API
- Respect Elementor's design system and widgets
- Test with Elementor's preview mode

## When Making Changes

1. **Understand the Context**: Review related code before making changes
2. **Test Thoroughly**: Test in a WordPress environment with Elementor
3. **Follow Conventions**: Match existing code style and patterns
4. **Document Changes**: Update documentation if needed
5. **Security First**: Always consider security implications
6. **Build and Verify**: Use the build script to create distribution packages

## Resources

- [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/)
- [WordPress Theme Development](https://developer.wordpress.org/themes/)
- [Elementor Developer Documentation](https://developers.elementor.com/)
- [WordPress Security Best Practices](https://developer.wordpress.org/apis/security/)
