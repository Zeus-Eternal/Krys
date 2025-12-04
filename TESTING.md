# Testing Checklist - Marcia Theme 2.0.0

Complete quality assurance checklist for the Marcia WordPress theme before launch.

## Pre-Testing Setup

- [ ] Fresh WordPress 6.6+ installation
- [ ] PHP 8.0+ environment
- [ ] Test on staging environment first
- [ ] Backup existing data
- [ ] Install required plugins (WooCommerce for e-commerce tests)

---

## 1. Installation & Activation

### Basic Installation
- [ ] Theme installs without errors
- [ ] Theme activates successfully
- [ ] No PHP errors in debug.log
- [ ] No JavaScript console errors
- [ ] All assets load correctly

### Requirements Check
- [ ] WordPress 6.6+ required
- [ ] PHP 8.0+ required
- [ ] Works with latest WordPress version
- [ ] Compatible with WordPress multisite

---

## 2. Full Site Editing (FSE)

### Site Editor Access
- [ ] Site Editor opens without errors (Appearance > Editor)
- [ ] All templates visible and accessible
- [ ] Template parts load correctly
- [ ] Style variations appear in sidebar
- [ ] No console errors in editor

### Templates
- [ ] Index template renders
- [ ] Front Page template works
- [ ] Single Post template displays correctly
- [ ] Page template functions
- [ ] Archive template shows posts
- [ ] Search template displays results
- [ ] 404 template renders
- [ ] Blank template (no header/footer) works

### Template Parts
- [ ] Header displays correctly
- [ ] Footer displays correctly
- [ ] Can edit template parts
- [ ] Template parts save changes

### Block Patterns
- [ ] All 50+ patterns appear in inserter
- [ ] Patterns categorized correctly
- [ ] Hidden patterns don't appear in inserter
- [ ] Patterns insert without errors
- [ ] Pattern preview images display

---

## 3. Style Variations

Test each style variation:

### Minimal
- [ ] Activates without errors
- [ ] Blue primary color applies
- [ ] Typography changes apply
- [ ] Spacing is correct

### Bold
- [ ] Activates successfully
- [ ] Strong typography renders
- [ ] Red/orange colors apply
- [ ] Uppercase headings work

### Luxury
- [ ] Activates correctly
- [ ] Gold accents display
- [ ] Light font weights render
- [ ] Cream backgrounds apply

### Editorial
- [ ] Activates without issues
- [ ] Strong headings display
- [ ] Publishing fonts load
- [ ] Style is appropriate

### Tech
- [ ] Dark theme applies
- [ ] Blue/purple gradients render
- [ ] Neon accents display
- [ ] Contrast is sufficient

### Dark
- [ ] Full dark mode applies
- [ ] Light text readable
- [ ] Contrast ratios meet WCAG
- [ ] All elements visible

---

## 4. Pattern Library Testing

Test all 50+ patterns across categories:

### Hero Patterns (5)
- [ ] hero-minimal inserts and displays
- [ ] hero-split renders correctly
- [ ] hero-video (test with/without video)
- [ ] hero-gradient displays properly
- [ ] hero-centered aligns correctly

### Blog Patterns (8)
- [ ] blog-grid shows 3 columns
- [ ] blog-featured displays large post
- [ ] blog-magazine layout works
- [ ] blog-sidebar shows sidebar correctly
- [ ] blog-single-hero renders on posts
- [ ] blog-archive-header displays
- [ ] blog-author-bio shows info
- [ ] blog-related-posts shows related

### CTA Patterns (4)
- [ ] cta-centered displays centered
- [ ] cta-split renders split layout
- [ ] cta-boxed shows card style
- [ ] cta-banner displays compact

### Pricing Patterns (3)
- [ ] pricing-basic shows 3 tiers
- [ ] pricing-comparison table renders
- [ ] pricing-toggle displays options

### Team Patterns (2)
- [ ] team-grid shows 3 columns
- [ ] team-cards displays bios

### Testimonials (3)
- [ ] testimonials-grid shows 3 columns
- [ ] testimonials-slider displays single
- [ ] testimonials-featured shows story

### Content Layouts (3)
- [ ] content-grid shows 3 columns
- [ ] content-two-column splits correctly
- [ ] content-sidebar displays sidebar

### Features (4)
- [ ] features-grid icon grid works
- [ ] features-list 2-column displays
- [ ] features-cards shows cards
- [ ] features-alternating rows alternate

### Contact Patterns (3)
- [ ] contact-simple displays form
- [ ] contact-split shows map area
- [ ] contact-card displays card

### Stats Patterns (2)
- [ ] stats-numbers displays large numbers
- [ ] stats-cards shows icon cards

### Gallery Patterns (3)
- [ ] gallery-grid shows grid
- [ ] gallery-masonry varying heights work
- [ ] gallery-featured shows hero + thumbs

### Shop Patterns (8)
*Requires WooCommerce*
- [ ] shop-hero displays correctly
- [ ] shop-categories shows categories
- [ ] shop-featured-products displays
- [ ] shop-sale-banner renders
- [ ] shop-newsletter displays form
- [ ] shop-trust-badges shows badges
- [ ] shop-new-arrivals displays products
- [ ] shop-on-sale shows sale items

---

## 5. WooCommerce Integration

*Requires WooCommerce plugin*

### Installation
- [ ] Theme supports WooCommerce
- [ ] No conflicts with WooCommerce
- [ ] WooCommerce setup wizard completes

### Templates
- [ ] Shop page (archive-product.html) displays
- [ ] Product page (single-product.html) works
- [ ] Cart page renders correctly
- [ ] Checkout page functions properly
- [ ] Product filters work on shop page

### Functionality
- [ ] Add to cart works
- [ ] Cart updates correctly
- [ ] Checkout process completes
- [ ] Product images display
- [ ] Product gallery works
- [ ] Related products show
- [ ] Product reviews display

### Conditional Loading
- [ ] WooCommerce scripts don't load on blog pages
- [ ] WooCommerce styles load only on shop pages
- [ ] Cart fragments work when needed

---

## 6. Responsive Design

Test at multiple breakpoints:

### Mobile (< 768px)
- [ ] Layout stacks correctly
- [ ] Text is readable
- [ ] Buttons are touch-friendly (44px+)
- [ ] Navigation works on mobile
- [ ] Images scale appropriately
- [ ] No horizontal scroll
- [ ] Patterns adapt to mobile

### Tablet (768px - 1024px)
- [ ] Layout adjusts appropriately
- [ ] Grid columns reduce correctly
- [ ] Touch targets adequate
- [ ] Images scale properly

### Desktop (> 1024px)
- [ ] Full layout displays
- [ ] Max-width constraints work
- [ ] White space is balanced
- [ ] All elements aligned

### Tested Devices
- [ ] iPhone (Safari)
- [ ] Android phone (Chrome)
- [ ] iPad (Safari)
- [ ] Desktop (Chrome)
- [ ] Desktop (Firefox)
- [ ] Desktop (Edge)
- [ ] Desktop (Safari)

---

## 7. Performance Testing

### Page Speed
- [ ] PageSpeed Insights score 90+
- [ ] First Contentful Paint < 1.8s
- [ ] Largest Contentful Paint < 2.5s
- [ ] Total Blocking Time < 200ms
- [ ] Cumulative Layout Shift < 0.1

### Optimizations Working
- [ ] Images lazy load
- [ ] Fonts preload correctly
- [ ] CSS is minified
- [ ] JavaScript is deferred
- [ ] Gzip compression enabled
- [ ] Browser caching headers set
- [ ] No render-blocking resources

### Load Testing
- [ ] Homepage loads < 1 second
- [ ] Blog page loads quickly
- [ ] Shop page loads efficiently
- [ ] Single post loads fast
- [ ] WooCommerce pages performant

---

## 8. Accessibility (WCAG 2.2 AA)

### Keyboard Navigation
- [ ] Can tab through all interactive elements
- [ ] Focus indicators visible
- [ ] Skip links work
- [ ] Keyboard traps absent
- [ ] Modal/dialog keyboard accessible

### Screen Readers
- [ ] Screen reader test (NVDA/JAWS)
- [ ] Semantic HTML structure
- [ ] Headings in logical order
- [ ] Links have descriptive text
- [ ] Images have alt text
- [ ] Form labels associated
- [ ] ARIA labels where needed

### Color & Contrast
- [ ] Text contrast ratio ≥ 4.5:1
- [ ] Large text contrast ≥ 3:1
- [ ] UI elements contrast ≥ 3:1
- [ ] Information not color-only
- [ ] Works in high contrast mode

### Forms
- [ ] All inputs have labels
- [ ] Error messages clear
- [ ] Required fields indicated
- [ ] Error states accessible

### Tools Used
- [ ] WAVE accessibility checker
- [ ] axe DevTools
- [ ] Lighthouse accessibility audit
- [ ] Color contrast checker
- [ ] Keyboard-only navigation test

---

## 9. Browser Compatibility

### Chrome
- [ ] Latest version works
- [ ] Previous version works
- [ ] No console errors

### Firefox
- [ ] Latest version works
- [ ] Previous version works
- [ ] No console errors

### Safari
- [ ] Latest version works
- [ ] Previous version works
- [ ] No console errors
- [ ] iOS Safari works

### Edge
- [ ] Latest version works
- [ ] Previous version works
- [ ] No console errors

---

## 10. Content Testing

### Text Content
- [ ] All text translatable
- [ ] Special characters display
- [ ] Long words wrap correctly
- [ ] Very long titles handled
- [ ] Empty states handled

### Images
- [ ] Standard images display
- [ ] Large images scale
- [ ] Small images display
- [ ] Missing images handled
- [ ] WebP format supported
- [ ] AVIF format supported

### Videos
- [ ] Embedded videos work
- [ ] Video backgrounds function
- [ ] Autoplay respects settings

---

## 11. Internationalization (i18n)

### Translation Ready
- [ ] All strings translatable
- [ ] Text domain 'marcia' used
- [ ] Strings properly escaped
- [ ] POT file generates
- [ ] Plurals handled correctly

### RTL Support
- [ ] RTL languages display correctly
- [ ] Layout mirrors properly
- [ ] Icons flip appropriately
- [ ] Text aligns correctly

---

## 12. Security

### Code Security
- [ ] All outputs escaped
- [ ] All inputs sanitized
- [ ] Nonces used for forms
- [ ] No eval() used
- [ ] No direct file access
- [ ] Capabilities checked

### Headers & Settings
- [ ] XML-RPC disabled
- [ ] WordPress version removed
- [ ] File editing disabled
- [ ] No exposed sensitive data

---

## 13. SEO

### On-Page SEO
- [ ] Semantic HTML5 structure
- [ ] Proper heading hierarchy
- [ ] Meta descriptions support
- [ ] Open Graph tags
- [ ] Schema markup support

### Technical SEO
- [ ] Clean URLs
- [ ] Sitemap compatibility
- [ ] Robots.txt compatible
- [ ] Fast load times
- [ ] Mobile-friendly

---

## 14. WordPress.org Requirements

### Theme Check Plugin
- [ ] Run Theme Check plugin
- [ ] No required issues
- [ ] Address warnings
- [ ] Clean scan result

### Required Files
- [ ] readme.txt present
- [ ] screenshot.png present (1200x900px)
- [ ] style.css with proper header
- [ ] theme.json v3 valid
- [ ] All templates valid HTML

### Licensing
- [ ] GPL-compatible license
- [ ] All resources licensed
- [ ] License documented
- [ ] Credits included

### Functionality
- [ ] No plugin territory features
- [ ] No custom post types
- [ ] No shortcodes
- [ ] Uses WordPress APIs
- [ ] No external requests

---

## 15. Documentation

- [ ] README.md complete
- [ ] README.txt for WordPress.org
- [ ] CHANGELOG.md updated
- [ ] CONTRIBUTING.md present
- [ ] WooCommerce docs complete
- [ ] Inline code comments
- [ ] Pattern usage examples

---

## 16. Final Checks

### Git & Version Control
- [ ] All changes committed
- [ ] Version numbers updated
- [ ] Changelog updated
- [ ] Tags created
- [ ] Branch clean

### Distribution
- [ ] Build production assets
- [ ] Create distribution ZIP
- [ ] ZIP structure correct
- [ ] File permissions correct
- [ ] No development files included
- [ ] File size reasonable (< 2MB)

### Support
- [ ] Support documentation ready
- [ ] FAQ answers prepared
- [ ] Common issues documented
- [ ] Contact method established

---

## Testing Sign-Off

| Test Category | Status | Tester | Date |
|--------------|--------|---------|------|
| Installation | ☐ | | |
| FSE | ☐ | | |
| Style Variations | ☐ | | |
| Pattern Library | ☐ | | |
| WooCommerce | ☐ | | |
| Responsive | ☐ | | |
| Performance | ☐ | | |
| Accessibility | ☐ | | |
| Browsers | ☐ | | |
| Content | ☐ | | |
| i18n/RTL | ☐ | | |
| Security | ☐ | | |
| SEO | ☐ | | |
| WordPress.org | ☐ | | |
| Documentation | ☐ | | |

---

## Issues Found

| Issue | Severity | Status | Notes |
|-------|----------|--------|-------|
| | | | |

---

## Notes & Recommendations

[Add any additional notes, recommendations, or observations here]

---

**Testing completed by**: _________________

**Date**: _________________

**Version tested**: 2.0.0

**Approved for launch**: ☐ Yes ☐ No
