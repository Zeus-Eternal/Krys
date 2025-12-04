# Contributing to Marcia Theme

Thank you for your interest in contributing to Marcia! We welcome contributions from the community.

## Table of Contents

- [Code of Conduct](#code-of-conduct)
- [Getting Started](#getting-started)
- [Development Setup](#development-setup)
- [How to Contribute](#how-to-contribute)
- [Coding Standards](#coding-standards)
- [Submitting Changes](#submitting-changes)
- [Reporting Bugs](#reporting-bugs)
- [Feature Requests](#feature-requests)

## Code of Conduct

This project follows the [WordPress Community Code of Conduct](https://make.wordpress.org/handbook/community-code-of-conduct/). By participating, you agree to uphold this code.

## Getting Started

1. **Fork the repository** on GitHub
2. **Clone your fork** locally:
   ```bash
   git clone https://github.com/YOUR-USERNAME/Krys.git
   cd Krys
   ```
3. **Create a branch** for your changes:
   ```bash
   git checkout -b feature/your-feature-name
   ```

## Development Setup

### Prerequisites

- Node.js 18.x or higher
- npm 9.x or higher
- PHP 8.0 or higher
- WordPress 6.6 or higher

### Installation

1. Install dependencies:
   ```bash
   npm install
   ```

2. Start development mode:
   ```bash
   npm run dev
   ```

3. Build for production:
   ```bash
   npm run build
   ```

## How to Contribute

### Types of Contributions

We welcome various types of contributions:

- **Bug fixes** - Fix issues and improve stability
- **Features** - Add new functionality
- **Patterns** - Create new block patterns
- **Documentation** - Improve or add documentation
- **Translations** - Help translate the theme
- **Performance** - Optimize code for better performance
- **Accessibility** - Improve accessibility compliance

### Development Workflow

1. **Choose an issue** or create a new one
2. **Discuss** your approach in the issue
3. **Develop** your changes locally
4. **Test** thoroughly
5. **Submit** a pull request

## Coding Standards

### PHP

- Follow [WordPress PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/)
- Use tabs for indentation
- Document all functions with PHPDoc
- Prefix all function names with `marcia_`

### CSS

- Follow [WordPress CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/)
- Use tabs for indentation
- Mobile-first approach
- Use CSS custom properties from theme.json

### JavaScript

- Follow [WordPress JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/)
- Use ES6+ syntax
- No jQuery
- Use WordPress Interactivity API when needed

### HTML

- Semantic HTML5
- Accessible markup (WCAG 2.2 AA)
- Use WordPress block markup for patterns

## Testing Your Changes

Before submitting, ensure:

1. **Lint your code:**
   ```bash
   npm run lint
   ```

2. **Fix linting issues:**
   ```bash
   npm run lint:fix
   ```

3. **Test in multiple browsers:**
   - Chrome
   - Firefox
   - Safari
   - Edge

4. **Test accessibility:**
   - Keyboard navigation
   - Screen reader compatibility
   - Color contrast

5. **Test performance:**
   - PageSpeed Insights
   - Lighthouse
   - Core Web Vitals

## Submitting Changes

### Pull Request Process

1. **Update documentation** if needed
2. **Add tests** for new features
3. **Update CHANGELOG.md** with your changes
4. **Commit your changes:**
   ```bash
   git commit -m "feat: add new hero pattern"
   ```

5. **Push to your fork:**
   ```bash
   git push origin feature/your-feature-name
   ```

6. **Open a Pull Request** on GitHub

### Commit Message Guidelines

We follow [Conventional Commits](https://www.conventionalcommits.org/):

```
<type>(<scope>): <subject>

<body>

<footer>
```

**Types:**
- `feat`: New feature
- `fix`: Bug fix
- `docs`: Documentation changes
- `style`: Code formatting
- `refactor`: Code restructuring
- `perf`: Performance improvements
- `test`: Adding tests
- `chore`: Maintenance tasks

**Examples:**
```
feat(patterns): add pricing table pattern
fix(navigation): resolve mobile menu alignment issue
docs(readme): update installation instructions
perf(images): implement lazy loading
```

### Pull Request Guidelines

- **One feature per PR** - Keep changes focused
- **Clear description** - Explain what and why
- **Link related issues** - Reference issue numbers
- **Screenshots** - Include for visual changes
- **Test results** - Share testing outcomes

## Reporting Bugs

### Before Reporting

1. **Search existing issues** - Check if already reported
2. **Test with default theme** - Verify it's theme-specific
3. **Disable plugins** - Rule out plugin conflicts
4. **Check browser console** - Look for JavaScript errors

### Bug Report Template

```markdown
**Describe the bug**
A clear description of the bug.

**To Reproduce**
Steps to reproduce:
1. Go to '...'
2. Click on '...'
3. See error

**Expected behavior**
What you expected to happen.

**Screenshots**
If applicable, add screenshots.

**Environment:**
- WordPress version:
- Marcia version:
- Browser:
- Device:

**Additional context**
Any other relevant information.
```

## Feature Requests

We welcome feature suggestions! Please:

1. **Check existing requests** first
2. **Provide use case** - Explain the problem it solves
3. **Consider alternatives** - What other solutions exist?
4. **Add mockups** - Visual examples help

### Feature Request Template

```markdown
**Is your feature request related to a problem?**
Describe the problem.

**Describe the solution**
What would you like to see?

**Describe alternatives**
Other approaches you've considered.

**Additional context**
Mockups, examples, etc.
```

## Creating Block Patterns

### Pattern Guidelines

1. **Use core blocks** only
2. **Inherit theme styles** from theme.json
3. **Mobile-first** responsive design
4. **Accessible markup** - WCAG 2.2 AA
5. **Keep it simple** - Under 10KB
6. **Add translations** - Use `esc_html_e()` for text

### Pattern Template

```php
<?php
/**
 * Title: Pattern Name
 * Slug: marcia/pattern-slug
 * Categories: marcia-category
 * Description: Brief description of the pattern
 *
 * @package Marcia
 * @since 2.0.0
 */
?>
<!-- Block markup here -->
```

## Questions?

If you have questions:

- Open a [GitHub Discussion](https://github.com/Zeus-Eternal/Krys/discussions)
- Visit [WordPress.org Support Forum](https://wordpress.org/support/theme/marcia)
- Check the [documentation](https://github.com/Zeus-Eternal/Krys/wiki)

## License

By contributing, you agree that your contributions will be licensed under the GPL v2 or later.

---

Thank you for contributing to Marcia! 🎉
