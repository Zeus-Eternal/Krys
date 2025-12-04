# Marcia Theme 2025

A next-generation WordPress block theme built for performance, flexibility, and modern web standards.

![Version](https://img.shields.io/badge/version-2.0.0-blue)
![WordPress](https://img.shields.io/badge/WordPress-6.6%2B-brightgreen)
![PHP](https://img.shields.io/badge/PHP-8.0%2B-purple)
![License](https://img.shields.io/badge/license-GPLv2-orange)

## Overview

Marcia is a 100% block-native WordPress theme designed with Full Site Editing (FSE), offering unprecedented flexibility and performance. Built for 2025 web standards with Core Web Vitals optimization, accessibility compliance, and a comprehensive design system.

### Key Features

- **🎨 50+ Block Patterns** - Production-ready patterns across 11 categories
- **🎭 6 Style Variations** - Complete design systems (Minimal, Bold, Luxury, Editorial, Tech, Dark)
- **⚡ Performance First** - Sub-1s load times, 90+ PageSpeed scores
- **🛍️ WooCommerce Ready** - Complete e-commerce integration with block templates
- **♿ WCAG 2.2 AA** - Full accessibility compliance
- **📱 Mobile First** - Responsive design optimized for all devices
- **🌍 Translation Ready** - Multilingual and RTL support
- **🎯 Zero jQuery** - Modern JavaScript, minimal dependencies

## Requirements

- **WordPress**: 6.6 or higher
- **PHP**: 8.0 or higher
- **Node.js**: 18+ (for development)
- **npm**: 8+ (for development)

## Quick Start

### Installation

#### Via WordPress Admin

1. Download the theme ZIP file
2. Go to **Appearance > Themes > Add New**
3. Click **Upload Theme** and select the ZIP file
4. Click **Install Now**, then **Activate**

#### Manual Installation

```bash
cd wp-content/themes/
git clone https://github.com/Zeus-Eternal/Krys.git marcia
cd marcia
npm install
npm run build
```

### Initial Setup

1. **Activate Theme**: Go to Appearance > Themes
2. **Customize Design**: Visit Appearance > Editor
3. **Browse Patterns**: Click "+" in the editor, select "Patterns"
4. **Try Style Variations**: In the Site Editor, click "Styles" > "Browse styles"

## Architecture

### File Structure

```
marcia/
├── assets/              # Theme assets
│   ├── css/            # Stylesheets
│   │   ├── base.css    # Base styles
│   │   ├── editor.css  # Editor styles
│   │   └── blocks/     # Block-specific CSS
│   ├── js/             # JavaScript files
│   └── fonts/          # Font files
├── inc/                # PHP includes
│   ├── block-patterns.php
│   ├── block-styles.php
│   ├── editor-config.php
│   ├── performance.php
│   └── woocommerce.php
├── parts/              # Template parts
│   ├── header.html
│   └── footer.html
├── patterns/           # Block patterns (50+)
│   ├── blog/          # Blog patterns (8)
│   ├── hero/          # Hero patterns (5)
│   ├── cta/           # CTA patterns (4)
│   ├── pricing/       # Pricing patterns (3)
│   ├── team/          # Team patterns (2)
│   ├── testimonials/  # Testimonial patterns (3)
│   ├── content/       # Content layouts (3)
│   ├── features/      # Feature sections (4)
│   ├── contact/       # Contact patterns (3)
│   ├── stats/         # Statistics (2)
│   ├── gallery/       # Gallery patterns (3)
│   └── shop/          # WooCommerce patterns (8)
├── styles/             # Style variations (6)
│   ├── minimal.json
│   ├── bold.json
│   ├── luxury.json
│   ├── editorial.json
│   ├── tech.json
│   └── dark.json
├── templates/          # Block templates
│   ├── index.html
│   ├── front-page.html
│   ├── single.html
│   ├── page.html
│   ├── archive.html
│   └── woocommerce/   # WooCommerce templates
├── theme.json          # Design system configuration
├── functions.php       # Theme setup
├── style.css          # Theme header
└── README.md          # This file
```

### Design System

All design tokens are defined in `theme.json`:

- **Colors**: 20-color palette with semantic naming
- **Typography**: Fluid type scale (12px - 80px)
- **Spacing**: 8-point grid system (10px - 150px)
- **Shadows**: 3 elevation levels
- **Gradients**: 3 predefined gradients
- **Breakpoints**: Mobile-first responsive design

## Block Patterns

### Categories (50+ Patterns)

#### Hero Patterns (5)
- `hero-minimal` - Clean minimal hero
- `hero-split` - Split layout with image
- `hero-video` - Video background
- `hero-gradient` - Gradient with stats
- `hero-centered` - Centered content

#### Blog Patterns (8)
- `blog-grid` - 3-column post grid
- `blog-featured` - Large featured post
- `blog-magazine` - Editorial layout
- `blog-sidebar` - Posts with sidebar
- `blog-single-hero` - Single post hero
- `blog-archive-header` - Archive header
- `blog-author-bio` - Author information
- `blog-related-posts` - Related posts grid

#### CTA Patterns (4)
- `cta-centered` - Centered call-to-action
- `cta-split` - Split layout CTA
- `cta-boxed` - Boxed card CTA
- `cta-banner` - Compact banner

#### Pricing Patterns (3)
- `pricing-basic` - 3-tier pricing table
- `pricing-comparison` - Feature comparison
- `pricing-toggle` - Monthly/annual toggle

#### Team Patterns (2)
- `team-grid` - Simple grid
- `team-cards` - Detailed cards with bios

#### Testimonials (3)
- `testimonials-grid` - 3-column grid
- `testimonials-slider` - Single large testimonial
- `testimonials-featured` - Featured story

#### Content Layouts (3)
- `content-grid` - 3-column cards
- `content-two-column` - Split feature
- `content-sidebar` - Content with sidebar

#### Features (4)
- `features-grid` - Icon grid
- `features-list` - 2-column list
- `features-cards` - Feature cards
- `features-alternating` - Alternating rows

#### Contact Patterns (3)
- `contact-simple` - Simple contact
- `contact-split` - Contact with map
- `contact-card` - Form card

#### Stats Patterns (2)
- `stats-numbers` - Large numbers
- `stats-cards` - Stats with icons

#### Gallery Patterns (3)
- `gallery-grid` - Simple grid
- `gallery-masonry` - Masonry layout
- `gallery-featured` - Featured + thumbnails

#### Shop Patterns (8)
- `shop-hero` - Shop homepage hero
- `shop-categories` - Category showcase
- `shop-featured-products` - Featured products
- `shop-sale-banner` - Promotional banner
- `shop-newsletter` - Newsletter signup
- `shop-trust-badges` - Trust indicators
- `shop-new-arrivals` - Latest products
- `shop-on-sale` - Sale products

### Using Patterns

In the block editor:
1. Click the "**+**" button
2. Select "**Patterns**"
3. Browse by category or search
4. Click to insert

## Style Variations

Switch between 6 complete design systems:

### 1. Minimal
Clean, modern design with blue primary color and generous whitespace.

### 2. Bold
Strong typography, uppercase headings, red/orange color scheme.

### 3. Luxury
Elegant design with gold accents, light font weights, cream backgrounds.

### 4. Editorial
Publishing-focused with strong headings and traditional serif fonts.

### 5. Tech
Dark theme with blue/purple gradients and neon accents.

### 6. Dark
Complete dark mode with dark backgrounds and light text.

### Activating Variations

1. Open Site Editor (Appearance > Editor)
2. Click "**Styles**" in top right
3. Click "**Browse styles**"
4. Select your preferred variation

## WooCommerce Integration

### Templates Included

- `archive-product.html` - Shop page with filters
- `single-product.html` - Product page
- `cart.html` - Shopping cart
- `checkout.html` - Checkout page

### Shop Patterns

8 WooCommerce-specific patterns for building custom shop layouts.

### Setup

1. Install and activate WooCommerce
2. Run WooCommerce setup wizard
3. Theme templates automatically apply
4. Customize via Site Editor

See [docs/WOOCOMMERCE.md](docs/WOOCOMMERCE.md) for detailed documentation.

## Performance Optimizations

### Built-in Features

- ✅ **Critical CSS** inlining
- ✅ **Lazy loading** for images
- ✅ **WebP/AVIF** support
- ✅ **Font preloading** and optimization
- ✅ **Conditional loading** (WooCommerce only on shop pages)
- ✅ **Minimal JavaScript** (< 10KB)
- ✅ **Query optimization** for faster database queries
- ✅ **Gzip compression** enabled
- ✅ **Cache-control** headers
- ✅ **Heartbeat API** optimization
- ✅ **Embed scripts** disabled
- ✅ **Query strings** removed from static resources

### Expected Scores

- **PageSpeed**: 90-100
- **GTmetrix**: A grade
- **Load Time**: < 1 second
- **Total Size**: < 100KB (without images)

## Development

### Prerequisites

```bash
node -v  # 18+
npm -v   # 8+
php -v   # 8.0+
```

### Setup Development Environment

```bash
# Clone repository
git clone https://github.com/Zeus-Eternal/Krys.git marcia
cd marcia

# Install dependencies
npm install

# Start development mode
npm run start

# Build for production
npm run build
```

### Available Scripts

```bash
npm run start       # Start development with watch mode
npm run build       # Build production assets
npm run lint:css    # Lint CSS files
npm run lint:js     # Lint JavaScript files
npm run format      # Format code with Prettier
npm run zip         # Create distribution ZIP
```

### Coding Standards

- **PHP**: WordPress Coding Standards (PHPCS)
- **CSS**: PostCSS with modern features
- **JavaScript**: ES6+ with eslint
- **Accessibility**: WCAG 2.2 AA compliance

## Customization

### Colors

Edit `theme.json`:

```json
{
  "settings": {
    "color": {
      "palette": [
        {
          "slug": "primary",
          "color": "#007cba",
          "name": "Primary"
        }
      ]
    }
  }
}
```

### Typography

```json
{
  "settings": {
    "typography": {
      "fontFamilies": [
        {
          "fontFamily": "Your Font, sans-serif",
          "slug": "body",
          "name": "Body"
        }
      ]
    }
  }
}
```

### Spacing

```json
{
  "settings": {
    "spacing": {
      "spacingSizes": [
        {
          "slug": "custom",
          "size": "2rem",
          "name": "Custom"
        }
      ]
    }
  }
}
```

## Translation

### Making Theme Translation-Ready

```bash
# Generate POT file
wp i18n make-pot . languages/marcia.pot

# Create translation
msgfmt languages/marcia-es_ES.po -o languages/marcia-es_ES.mo
```

### Available Languages

- English (default)
- Ready for community translations

## Browser Support

- ✅ Chrome (last 2 versions)
- ✅ Firefox (last 2 versions)
- ✅ Safari (last 2 versions)
- ✅ Edge (last 2 versions)
- ✅ iOS Safari (last 2 versions)
- ✅ Android Chrome (last 2 versions)

## Accessibility

### WCAG 2.2 AA Compliance

- ✅ Semantic HTML5
- ✅ Keyboard navigation
- ✅ Screen reader optimized
- ✅ Color contrast ratios
- ✅ Focus indicators
- ✅ Skip links
- ✅ ARIA labels
- ✅ Alt text support

## Support & Documentation

- **Documentation**: [docs/](docs/)
- **WordPress Forum**: [wordpress.org/support/theme/marcia](https://wordpress.org/support/theme/marcia)
- **GitHub Issues**: [github.com/Zeus-Eternal/Krys/issues](https://github.com/Zeus-Eternal/Krys/issues)
- **Contributing**: See [CONTRIBUTING.md](CONTRIBUTING.md)

## Changelog

### Version 2.0.0 (2025-01-15)

#### Added
- ✨ 50+ block patterns across 11 categories
- ✨ 6 complete style variations
- ✨ Full WooCommerce integration
- ✨ Advanced performance optimizations
- ✨ WCAG 2.2 AA accessibility compliance
- ✨ Variable font implementation
- ✨ Comprehensive theme.json design system

#### Performance
- ⚡ Sub-1s load times
- ⚡ Conditional WooCommerce loading
- ⚡ Critical CSS inlining
- ⚡ Optimized font loading
- ⚡ Database query optimization

#### Security
- 🔒 XML-RPC disabled by default
- 🔒 Remove WordPress version
- 🔒 Sanitized user inputs
- 🔒 Escaped outputs

See [CHANGELOG.md](CHANGELOG.md) for complete history.

## License

Marcia Theme is licensed under the [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html).

### Third-Party Resources

- **Radnika Variable Font**: [SIL Open Font License 1.1](https://scripts.sil.org/OFL)
- **Normalize.css**: [MIT License](https://opensource.org/licenses/MIT)
- **WordPress**: [GPLv2](https://www.gnu.org/licenses/gpl-2.0.html)

## Credits

Developed by the Marcia Theme team.

Special thanks to:
- WordPress Block Editor team
- WooCommerce team
- WordPress theme review team
- Open source community

## Contributing

We welcome contributions! Please see [CONTRIBUTING.md](CONTRIBUTING.md) for guidelines.

## Roadmap

### Planned Features
- [ ] Additional pattern categories
- [ ] More style variations
- [ ] Pattern presets library
- [ ] Enhanced animation options
- [ ] Advanced customization panel
- [ ] Demo import functionality

---

**Made with ❤️ for WordPress**
