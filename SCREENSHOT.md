# Theme Screenshot Guide

## Requirements

For WordPress.org theme submission, a screenshot is required:

- **Filename**: `screenshot.png`
- **Size**: 1200 x 900 pixels (4:3 aspect ratio)
- **Format**: PNG (recommended) or JPG
- **Location**: Theme root directory
- **Content**: Show the theme's front-end appearance
- **Quality**: High-resolution, clear representation

## Creating the Screenshot

### Recommended Approach

1. **Setup Demo Site**
   - Install WordPress locally or on staging
   - Activate the Marcia theme
   - Use one of the style variations (Minimal recommended for screenshot)

2. **Create Homepage**
   - Use patterns to build an attractive homepage:
     - Add `hero-split` or `hero-gradient` pattern
     - Add `features-cards` pattern
     - Add `testimonials-grid` pattern
     - Add `cta-boxed` pattern
   - Add sample content with images

3. **Capture Screenshot**
   - Set browser window to desktop size (1920x1080 or larger)
   - Open homepage in browser
   - Use screenshot tool:
     - **Mac**: Cmd + Shift + 4
     - **Windows**: Snipping Tool or Win + Shift + S
     - **Browser Extension**: Full Page Screen Capture
     - **Online Tool**: screencapture.com

4. **Edit Screenshot**
   - Open in image editor (Photoshop, GIMP, Figma, Canva)
   - Crop to 1200 x 900 pixels
   - Ensure high quality
   - Save as PNG
   - Optimize file size (recommended < 500KB)

5. **Place Screenshot**
   ```bash
   # Move screenshot to theme root
   mv screenshot.png /path/to/themes/marcia/
   ```

### Screenshot Content Suggestions

**Include:**
- ✅ Header with navigation
- ✅ Hero section with compelling headline
- ✅ 2-3 content sections showcasing patterns
- ✅ Consistent typography and spacing
- ✅ Good quality images
- ✅ Brand colors prominent

**Avoid:**
- ❌ Lorem ipsum text
- ❌ Broken images
- ❌ Browser chrome/toolbars
- ❌ Personal information
- ❌ Copyrighted images without permission
- ❌ Low resolution or pixelated content

### Example Homepage Structure

```
┌─────────────────────────────────────┐
│  Logo              Navigation        │ Header
├─────────────────────────────────────┤
│                                     │
│       Hero Section                  │ Hero (hero-gradient)
│    "Build Something Amazing"        │ - Headline
│                                     │ - Subheading
│          [CTA Button]               │ - Call-to-action
│                                     │
├─────────────────────────────────────┤
│                                     │
│  Features (3 columns with icons)    │ Features (features-cards)
│   ⚡Lightning    🎨Design    🛡️Secure│
│                                     │
├─────────────────────────────────────┤
│                                     │
│     Testimonials (3 cards)          │ Testimonials
│   "Great theme!" - John Doe         │ (testimonials-grid)
│                                     │
└─────────────────────────────────────┘
```

## Tools for Screenshot Creation

### Image Editors
- **Photoshop** (Adobe)
- **GIMP** (Free, open-source)
- **Figma** (Free for individuals)
- **Canva** (Free tier available)
- **Affinity Photo**

### Screenshot Tools
- **Firefox**: Built-in screenshot tool
- **Chrome**: DevTools screenshot
- **Nimbus Screenshot** (Browser extension)
- **Awesome Screenshot** (Browser extension)
- **Full Page Screen Capture** (Chrome extension)

### Optimization Tools
- **TinyPNG** - https://tinypng.com/
- **ImageOptim** (Mac) - Free
- **Squoosh** - https://squoosh.app/
- **SVGO** (for SVG)

## Checklist

Before finalizing screenshot:

- [ ] Dimensions are exactly 1200 x 900 pixels
- [ ] File format is PNG
- [ ] File named `screenshot.png`
- [ ] Located in theme root directory
- [ ] File size < 500KB
- [ ] No browser UI visible
- [ ] All images loaded and displaying
- [ ] Text is readable and professional
- [ ] Colors represent theme accurately
- [ ] Layout is responsive-looking
- [ ] No Lorem ipsum or placeholder text
- [ ] All fonts loaded correctly
- [ ] No broken elements
- [ ] Represents homepage/front page
- [ ] Shows best theme features

## Style Variation Screenshots

While only one screenshot.png is required for WordPress.org, you may want to create additional screenshots for documentation:

```
screenshots/
├── screenshot-minimal.png       # Minimal variation
├── screenshot-bold.png          # Bold variation
├── screenshot-luxury.png        # Luxury variation
├── screenshot-editorial.png     # Editorial variation
├── screenshot-tech.png          # Tech variation
└── screenshot-dark.png          # Dark variation
```

These can be used in:
- Theme documentation
- Marketing materials
- WordPress.org theme preview
- GitHub README

## WordPress.org Preview Images

WordPress.org also accepts additional preview images:

- Create 4-8 additional screenshots
- Show different pages/features:
  - Blog layout
  - Shop page (WooCommerce)
  - Pattern library showcase
  - Mobile view
  - Single post
  - Style variations
- Name them: `screenshot-1.png`, `screenshot-2.png`, etc.
- Same dimensions: 1200 x 900 pixels

## Sample Content

Use high-quality, license-free images:

### Image Resources
- **Unsplash** - https://unsplash.com/ (Free)
- **Pexels** - https://pexels.com/ (Free)
- **Pixabay** - https://pixabay.com/ (Free)
- **Burst by Shopify** - https://burst.shopify.com/ (Free)

### Text Content
- Use real, professional copy (not Lorem ipsum)
- Keep it concise and compelling
- Showcase theme typography
- Use action-oriented language

## Quality Standards

### Resolution
- Minimum: 1200 x 900 pixels
- Recommended: Use retina quality source (2400 x 1800) then downscale
- Sharp, not blurry
- No pixelation

### Composition
- Balanced layout
- Good use of white space
- Clear focal points
- Professional appearance

### Color
- Accurate theme colors
- Good contrast
- Cohesive color scheme
- Brand consistent

## Validation

Before submission, validate screenshot:

```bash
# Check dimensions (Mac/Linux)
sips -g pixelWidth -g pixelHeight screenshot.png

# Check file size
ls -lh screenshot.png

# Expected output:
# pixelWidth: 1200
# pixelHeight: 900
# Size: < 500KB
```

## Notes

- Screenshot is the first impression of your theme
- Take time to make it professional and compelling
- Test different homepage layouts
- Get feedback before finalizing
- Update screenshot when theme design changes significantly

## Resources

- [WordPress Theme Handbook - Screenshots](https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/#screenshots)
- [Theme Review Requirements](https://make.wordpress.org/themes/handbook/review/required/)
- [Best Practices for Theme Screenshots](https://make.wordpress.org/themes/handbook/review/screenshots/)

---

**Current Status**: Screenshot placeholder documentation created.

**Action Required**: Create actual screenshot.png file (1200 x 900 pixels) showing theme homepage.

**Recommended Tool**: Use browser developer tools or Full Page Screen Capture extension to capture demo homepage, then crop/resize to 1200x900px using image editor.
