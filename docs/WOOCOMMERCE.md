# WooCommerce Integration Guide

Complete guide for using Marcia Theme with WooCommerce.

## Table of Contents

- [Overview](#overview)
- [Requirements](#requirements)
- [Setup](#setup)
- [Templates](#templates)
- [Shop Patterns](#shop-patterns)
- [Customization](#customization)
- [Best Practices](#best-practices)
- [Troubleshooting](#troubleshooting)

## Overview

Marcia Theme includes complete WooCommerce integration with:

- ✅ Custom block-based templates
- ✅ 8+ shop-specific patterns
- ✅ Optimized product cards
- ✅ Mobile-first checkout experience
- ✅ Performance optimizations
- ✅ Accessibility compliant

## Requirements

### Minimum Requirements

- WordPress 6.6+
- WooCommerce 9.0+
- PHP 8.0+
- Modern browser with ES6 support

### Recommended

- WooCommerce Blocks plugin (latest)
- Optimized product images (WebP format)
- CDN for static assets
- Object caching (Redis/Memcached)

## Setup

### 1. Install WooCommerce

```bash
# Via WP-CLI
wp plugin install woocommerce --activate

# Or via WordPress Admin
# Plugins > Add New > Search "WooCommerce" > Install > Activate
```

### 2. Run WooCommerce Setup Wizard

Navigate to: **WooCommerce > Home > Setup wizard**

Configure:
- Store details
- Payment gateways
- Shipping zones
- Tax settings

### 3. Enable Marcia WooCommerce Features

The theme automatically:
- Enables WooCommerce support
- Loads custom templates
- Registers shop patterns
- Optimizes WooCommerce scripts

## Templates

### Shop Page (`archive-product.html`)

**Features:**
- Sidebar with filters
- Product grid (3 columns)
- Sorting options
- Active filters display
- Pagination

**Customization:**
- Adjust columns: Edit `displayLayout` in template
- Remove sidebar: Delete left column in template
- Change grid: Modify `grid-template-columns` in CSS

### Product Page (`single-product.html`)

**Features:**
- 2-column layout (image + details)
- Product gallery
- Related products
- Customer reviews
- Trust badges

**Customization:**
- Change layout: Edit columns in template
- Hide reviews: Remove reviews block
- Add custom sections: Insert blocks after product details

### Cart Page (`cart.html`)

**Features:**
- Cart items table
- Cross-sells
- Order summary sidebar
- Trust badges
- Coupon code input

**Customization:**
- Hide cross-sells: Remove cross-sells block
- Change sidebar: Edit right column
- Add upsells: Insert product blocks

### Checkout Page (`checkout.html`)

**Features:**
- Secure checkout notice
- Two-column layout
- Trust badges footer
- Express payment options
- Order summary

**Customization:**
- Simplify checkout: Remove optional blocks
- Add payment logos: Insert image blocks
- Custom messaging: Add paragraph blocks

## Shop Patterns

### Available Patterns

#### 1. Shop Hero (`marcia/shop-hero`)

Eye-catching shop homepage hero with gradient background.

**Usage:**
```
Insert Pattern > Shop > Shop Hero
```

**Customization:**
- Change colors: Edit gradient in pattern
- Update text: Click and edit headings
- Modify buttons: Edit button links

#### 2. Shop Categories (`marcia/shop-categories`)

Product category showcase with images.

**Usage:**
```
Insert Pattern > Shop > Shop Categories
```

**Best For:**
- Homepage
- Shop landing page
- Category overview page

#### 3. Featured Products (`marcia/shop-featured-products`)

Showcase featured products in grid layout.

**Usage:**
```
Insert Pattern > Shop > Featured Products
```

**Options:**
- Change product count: Edit `perPage` attribute
- Change columns: Edit `displayLayout` > `columns`
- Filter by category: Add `taxQuery` filter

#### 4. Sale Banner (`marcia/shop-sale-banner`)

Promotional banner for sales and special offers.

**Usage:**
```
Insert Pattern > Shop > Sale Banner
```

**Customization:**
- Change discount: Edit heading text
- Update colors: Select background color
- Add countdown: Insert countdown block

#### 5. Shop Newsletter (`marcia/shop-newsletter`)

Newsletter signup with discount offer.

**Usage:**
```
Insert Pattern > Shop > Shop Newsletter
```

**Integration:**
- Connect to Mailchimp
- Use Contact Form 7
- Add custom form plugin

#### 6. Trust Badges (`marcia/shop-trust-badges`)

Build customer confidence with trust indicators.

**Usage:**
```
Insert Pattern > Shop > Trust Badges
```

**Locations:**
- Above footer
- Product pages
- Checkout page
- Cart page

#### 7. New Arrivals (`marcia/shop-new-arrivals`)

Showcase latest products.

**Usage:**
```
Insert Pattern > Shop > New Arrivals
```

**Auto-Updates:**
- Automatically shows newest products
- Updates based on `orderBy: date`

#### 8. On Sale Products (`marcia/shop-on-sale`)

Highlight products currently on sale.

**Usage:**
```
Insert Pattern > Shop > On Sale Products
```

**Features:**
- Auto-filters sale products
- Shows sale badges
- Displays original + sale prices

## Customization

### Colors

#### Change Primary Shop Color

1. Go to **Appearance > Editor > Styles**
2. Click **Colors**
3. Change **Primary** color
4. Save

All shop elements update automatically.

#### Custom Product Card Colors

Edit `assets/css/blocks/woocommerce.css`:

```css
.woocommerce ul.products li.product {
	border-color: #your-color;
	background-color: #your-bg;
}
```

### Typography

#### Change Product Titles Font

1. Go to **Appearance > Editor > Styles**
2. Click **Typography**
3. Select **Headings**
4. Change font family
5. Save

### Layout

#### Change Products Per Row

Edit `archive-product.html`:

```html
<!-- Change columns from 3 to 4 -->
"displayLayout":{"type":"flex","columns":4}
```

#### Change Product Grid Gap

Edit `assets/css/blocks/woocommerce.css`:

```css
.woocommerce ul.products {
	gap: var(--wp--preset--spacing--60); /* Increase gap */
}
```

### Buttons

#### Customize Add to Cart Button

Edit `assets/css/blocks/woocommerce.css`:

```css
.woocommerce ul.products li.product .button {
	background-color: #your-color;
	border-radius: 0.5rem; /* Rounder corners */
	padding: 1rem 2rem; /* Larger button */
}
```

## Best Practices

### Performance

#### 1. Optimize Product Images

- Use WebP format
- Compress images (80% quality)
- Use correct image sizes:
  - Thumbnail: 300x300px
  - Single product: 600x600px
  - Gallery: 1200x1200px

#### 2. Enable Lazy Loading

```php
// Already enabled in theme
add_filter( 'wp_lazy_loading_enabled', '__return_true' );
```

#### 3. Minimize WooCommerce Scripts

The theme automatically:
- Dequeues unused scripts on non-shop pages
- Defers non-critical scripts
- Optimizes cart fragments

#### 4. Use Object Caching

```bash
# Install Redis Object Cache plugin
wp plugin install redis-cache --activate
wp redis enable
```

### SEO

#### 1. Product Schema

WooCommerce automatically adds:
- Product schema markup
- Price information
- Availability data
- Review ratings

#### 2. Product URLs

Configure SEO-friendly URLs:
```
Permalink: /shop/product-name/
Category: /shop/category-name/
```

#### 3. Meta Descriptions

Use Yoast SEO or RankMath for:
- Product meta descriptions
- OG images
- Twitter cards

### Accessibility

#### 1. Alt Text for Product Images

Always add descriptive alt text:
```
"Blue cotton t-shirt, front view"
```

#### 2. Keyboard Navigation

Test checkout process:
- Tab through all fields
- Use Enter to submit
- Use Space to select

#### 3. Screen Reader Testing

Test with:
- NVDA (Windows)
- JAWS (Windows)
- VoiceOver (Mac/iOS)

### Security

#### 1. SSL Certificate

**Required** for WooCommerce:
```bash
# Force HTTPS
wp config set WP_HOME 'https://yoursite.com'
wp config set WP_SITEURL 'https://yoursite.com'
```

#### 2. Regular Updates

Keep updated:
- WordPress core
- WooCommerce plugin
- Marcia theme
- Payment gateway plugins

#### 3. Strong Passwords

Require for:
- Admin accounts
- Customer accounts
- Database access

## Troubleshooting

### Common Issues

#### Products Not Showing

**Solution:**
1. Go to **WooCommerce > Settings > Products**
2. Click **Save changes** to flush rewrite rules
3. Clear all caches

#### Cart Not Updating

**Solution:**
1. Disable cart fragments caching
2. Clear browser cache
3. Disable conflicting plugins

#### Checkout Errors

**Solution:**
1. Enable WP_DEBUG to see errors
2. Check payment gateway logs
3. Test with default theme
4. Contact payment provider

#### Layout Issues

**Solution:**
1. Clear all caches
2. Regenerate CSS in Customizer
3. Check for plugin conflicts
4. Test with Twenty Twenty-Five theme

#### Performance Issues

**Solution:**
1. Enable object caching
2. Optimize product images
3. Disable unnecessary WooCommerce features
4. Use a CDN for static assets

### Debug Mode

Enable WooCommerce logging:

```php
// wp-config.php
define( 'WC_LOG_THRESHOLD', 'debug' );
```

View logs: **WooCommerce > Status > Logs**

### Getting Help

**Resources:**
- [WooCommerce Documentation](https://woocommerce.com/documentation/)
- [Marcia Support Forum](https://wordpress.org/support/theme/marcia)
- [WooCommerce Community](https://woocommerce.com/community/)

**Support Channels:**
1. Check documentation first
2. Search support forum
3. Open support ticket
4. Hire WooCommerce expert

## Advanced Customization

### Custom Product Layouts

Create custom template:

1. Copy `/templates/woocommerce/single-product.html`
2. Rename to `single-product-custom.html`
3. Edit layout
4. Assign to products via template selector

### Custom Shop Patterns

Create new pattern:

```php
<?php
/**
 * Title: Custom Shop Pattern
 * Slug: marcia/custom-shop
 * Categories: marcia-shop
 */
?>
<!-- Your blocks here -->
```

Save in: `/patterns/shop/custom-pattern.php`

### Hooks & Filters

Available hooks:

```php
// Customize product columns
add_filter( 'loop_shop_columns', function() {
	return 4; // 4 columns
});

// Customize products per page
add_filter( 'loop_shop_per_page', function() {
	return 16; // 16 products
});

// Add custom content after product
add_action( 'woocommerce_after_single_product', 'your_function' );
```

## Changelog

### Version 2.0.0
- Initial WooCommerce integration
- Custom block templates
- 8 shop patterns
- Mobile optimizations
- Performance enhancements

---

**Last Updated:** December 2024
**Theme Version:** 2.0.0
**WooCommerce Version:** 9.0+

For more help, visit our [support forum](https://wordpress.org/support/theme/marcia).
