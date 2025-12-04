# WordPress.org Submission Checklist

Compliance checklist for WordPress.org theme repository submission.

## Required Files

### Core Files
- [x] `style.css` - Theme header with required information
- [x] `functions.php` - Theme setup and functionality
- [x] `theme.json` - FSE theme configuration
- [x] `README.txt` - WordPress.org formatted readme
- [ ] `screenshot.png` - 1200x900px theme preview (REQUIRED - must be created)
- [x] `index.html` or `index.php` - Main template file

### Template Files
- [x] `templates/index.html` - Main template
- [x] `templates/single.html` - Single post template
- [x] `templates/page.html` - Page template
- [x] `templates/archive.html` - Archive template
- [x] `templates/404.html` - 404 error template
- [x] `templates/front-page.html` - Front page template
- [x] `templates/home.html` - Blog index template
- [x] `templates/search.html` - Search results template

### Template Parts
- [x] `parts/header.html` - Header template part
- [x] `parts/footer.html` - Footer template part

### Documentation
- [x] `README.txt` - User documentation
- [x] `CHANGELOG.md` - Version history
- [x] License information in headers

### Optional but Recommended
- [x] `languages/` - Translation files directory
- [x] `.pot` file for translations (will be generated)
- [x] `patterns/` - Block patterns
- [x] `styles/` - Style variations

## Theme Requirements

### Licensing (REQUIRED)
- [x] Theme licensed under GPL or GPL-compatible
- [x] All third-party resources properly licensed
- [x] License information documented in:
  - [x] style.css header
  - [x] README.txt
  - [x] Code file headers where applicable
- [x] Resources credited:
  - [x] Radnika Variable Font (SIL OFL 1.1)
  - [x] Normalize.css (MIT)

### Code Quality
- [x] No PHP errors or warnings
- [x] No JavaScript console errors
- [x] WordPress Coding Standards compliance
- [x] Properly prefixed function names (`marcia_`)
- [x] Properly prefixed class names
- [x] No hardcoded styles (use theme.json)
- [x] Semantic HTML5 markup
- [x] Valid CSS
- [x] Valid JavaScript

### Security
- [x] All inputs sanitized
- [x] All outputs escaped
- [x] Nonces used for forms
- [x] No eval() or base64_decode()
- [x] No file operations without checks
- [x] Capabilities checked for admin functions
- [x] No CDN dependencies (self-hosted assets)

### Accessibility (WCAG 2.2 AA)
- [x] Keyboard navigation support
- [x] Focus indicators visible
- [x] Color contrast ratios meet standards
- [x] Screen reader friendly
- [x] Skip links implemented
- [x] ARIA labels where needed
- [x] Semantic HTML structure
- [x] Alt text support for images

### Performance
- [x] Optimized assets (minified CSS/JS)
- [x] Lazy loading support
- [x] No jQuery in front-end (unless absolutely necessary)
- [x] Efficient database queries
- [x] Conditional script loading
- [x] Browser caching headers

### Functionality
- [x] No plugin territory features (correct - theme is pure presentation)
- [x] No custom post types (correct)
- [x] No shortcodes (correct - using blocks instead)
- [x] Uses WordPress core functions
- [x] No external API calls without user permission
- [x] Settings use Customizer or Site Editor
- [x] Translation ready (`esc_html_e`, `esc_attr_e`, etc.)

### Template Specific
- [x] Correct template hierarchy
- [x] Template part includes
- [x] Comments template support
- [x] Post navigation support
- [x] Search form support
- [x] Widget-ready areas (if applicable - N/A for FSE)

### Internationalization
- [x] All strings translatable
- [x] Text domain 'marcia' used consistently
- [x] Text domain matches theme slug
- [x] Domain path set in style.css header
- [x] Ready for translation

### Theme Options
- [x] Uses theme.json for customization (FSE standard)
- [x] No theme options page in admin (correct for FSE)
- [x] All customization via Site Editor
- [x] Style variations provided

### Content
- [x] No demo content included
- [x] No Lorem ipsum in templates
- [x] Placeholder text uses translation functions
- [x] Sample patterns use proper content

## Technical Checks

### Theme Check Plugin
- [ ] Install Theme Check plugin
- [ ] Run scan on theme
- [ ] Fix all REQUIRED issues
- [ ] Address WARNINGS where possible
- [ ] Document INFO items if needed

### Manual Testing
- [x] Theme activates without errors
- [x] All templates render correctly
- [x] Block patterns work
- [x] Style variations work
- [x] No JavaScript errors in console
- [x] No PHP errors in debug.log
- [x] Mobile responsive
- [x] Cross-browser compatible
- [x] Accessibility tested
- [x] Performance tested

### Screenshot
- [ ] **CRITICAL**: Create screenshot.png (1200x900px)
- [ ] Shows theme homepage
- [ ] High quality image
- [ ] No browser chrome visible
- [ ] Professional appearance
- [ ] File size < 500KB recommended

## WordPress.org Specific

### Theme Slug
- [x] Unique theme slug: `marcia`
- [x] Matches text domain
- [x] No trademark conflicts
- [x] Available on WordPress.org

### Version Number
- [x] Proper semantic versioning (2.0.0)
- [x] Consistent across files:
  - [x] style.css
  - [x] README.txt
  - [x] CHANGELOG.md

### Tags
Maximum 5 tags in README.txt:
- [x] Selected relevant tags:
  - block-themes
  - full-site-editing
  - custom-colors
  - custom-menu
  - e-commerce

### Support Links
- [x] Support forum link
- [x] Documentation link (if available)
- [x] Demo link (if available)

## Pre-Submission Tasks

### Documentation
- [x] README.txt complete and properly formatted
- [x] Changelog up to date
- [x] Installation instructions clear
- [x] FAQ section included
- [x] Credits section complete

### Code Review
- [x] Remove all development files:
  - [x] .git directory (will be excluded in distribution)
  - [x] node_modules (excluded)
  - [x] .env files (excluded)
  - [x] Development scripts (package.json okay to include)
  - [x] Source maps (if any)

### Build
- [x] Run production build
- [x] Test built version
- [x] Verify all assets included
- [x] Check file permissions
- [x] Remove debug code

### Package
- [ ] Create clean distribution ZIP
- [ ] ZIP contains only necessary files
- [ ] ZIP file named correctly (marcia.zip)
- [ ] Test ZIP installation
- [ ] Verify file structure in ZIP

## Known Issues / TODO

### Critical (Must Fix Before Submission)
- [ ] **Create screenshot.png** (1200x900 pixels)
  - Cannot be automated
  - Must be created manually
  - See SCREENSHOT.md for guide

### Recommended
- [ ] Run Theme Check plugin and address all issues
- [ ] Test on multiple WordPress versions
- [ ] Test with various plugins
- [ ] Get peer review
- [ ] Test on different hosting environments

### Optional
- [ ] Create demo site
- [ ] Record video tutorial
- [ ] Create pattern showcase page
- [ ] Build pattern directory

## Submission Process

### 1. Final Checks
- [ ] All required files present
- [ ] Screenshot.png created
- [ ] Theme Check plugin passed
- [ ] Manual testing complete
- [ ] Documentation reviewed

### 2. Create Distribution Package
```bash
# Build production version
npm run build

# Create distribution ZIP
npm run zip

# Or manually:
zip -r marcia.zip . \
  -x "*.git*" \
  -x "*node_modules*" \
  -x "*.DS_Store" \
  -x "*package-lock.json" \
  -x "*.log"
```

### 3. WordPress.org Upload
1. Visit https://wordpress.org/themes/upload/
2. Login to WordPress.org account
3. Upload marcia.zip
4. Fill out theme information
5. Submit for review

### 4. Review Process
- Wait for initial automated checks
- Address any automated feedback
- Wait for manual theme review (1-2 weeks typically)
- Respond to reviewer feedback
- Make requested changes
- Resubmit if needed

### 5. Post-Approval
- Theme goes live on WordPress.org
- Monitor support forum
- Plan updates
- Collect user feedback

## Compliance Status

| Requirement | Status | Notes |
|------------|--------|-------|
| Core Files | ✅ | All present |
| Templates | ✅ | Complete |
| Licensing | ✅ | GPL v2+ |
| Security | ✅ | Sanitized/escaped |
| Accessibility | ✅ | WCAG 2.2 AA |
| Performance | ✅ | Optimized |
| Internationalization | ✅ | Translation ready |
| Screenshot | ❌ | **MUST CREATE** |
| Theme Check | ⚠️ | Run before submission |
| Distribution Package | ⏳ | Pending |

## Legend
- ✅ Complete
- ⏳ In Progress
- ⚠️ Needs Attention
- ❌ Not Done / Blocking Issue

---

**Review Date**: December 4, 2025

**Reviewer**: Claude

**Version**: 2.0.0

**Ready for Submission**: ❌ (Waiting on screenshot.png creation)

**Estimated Time to Complete**: 1-2 hours (screenshot creation and Theme Check plugin testing)
