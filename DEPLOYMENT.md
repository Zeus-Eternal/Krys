# Deployment Guide - Marcia Theme 2.0.0

Complete deployment and installation guide for the Marcia WordPress theme.

## Table of Contents

1. [Prerequisites](#prerequisites)
2. [Production Build](#production-build)
3. [Deployment Methods](#deployment-methods)
4. [Initial Setup](#initial-setup)
5. [Configuration](#configuration)
6. [Post-Deployment](#post-deployment)
7. [Troubleshooting](#troubleshooting)

---

## Prerequisites

### Server Requirements

**Minimum Requirements:**
- **WordPress**: 6.6 or higher
- **PHP**: 8.0 or higher
- **MySQL**: 5.7+ or MariaDB 10.3+
- **HTTPS**: SSL certificate installed
- **Memory**: 256MB PHP memory limit

**Recommended:**
- **WordPress**: Latest version
- **PHP**: 8.2+
- **Memory**: 512MB+ PHP memory limit
- **mod_rewrite**: Enabled for pretty permalinks
- **Gzip**: Enabled for compression

### Development Tools

For building from source:
- **Node.js**: 18.0+
- **npm**: 8.0+
- **Git**: For version control

---

## Production Build

### 1. Clone Repository

```bash
# Clone the theme repository
git clone https://github.com/Zeus-Eternal/Krys.git marcia
cd marcia
```

### 2. Install Dependencies

```bash
# Install npm dependencies
npm install
```

### 3. Build Production Assets

```bash
# Build optimized production files
npm run build
```

This command:
- Minifies CSS
- Optimizes JavaScript
- Processes theme.json
- Optimizes assets
- Creates production-ready files

### 4. Create Distribution Package

```bash
# Create a clean ZIP file for distribution
npm run zip
```

Or manually create ZIP:

```bash
# Create distribution directory
mkdir -p dist

# Copy only necessary files
rsync -av --exclude-from='.gitignore' \
  --exclude='.git' \
  --exclude='node_modules' \
  --exclude='dist' \
  --exclude='*.zip' \
  . dist/marcia/

# Create ZIP file
cd dist
zip -r marcia-2.0.0.zip marcia/
```

---

## Deployment Methods

### Method 1: WordPress Admin Upload

**Best for**: End users, single site installations

1. **Download** theme ZIP file
2. Go to WordPress Admin > **Appearance > Themes**
3. Click **Add New** > **Upload Theme**
4. Choose the ZIP file
5. Click **Install Now**
6. Click **Activate**

### Method 2: FTP/SFTP Upload

**Best for**: Direct server access, manual installation

```bash
# Using SFTP
sftp user@yourdomain.com
cd /wp-content/themes/
put -r marcia/
exit
```

Or using FTP client (FileZilla, Cyberduck):
1. Connect to your server
2. Navigate to `/wp-content/themes/`
3. Upload the `marcia` folder
4. Activate via WordPress Admin

### Method 3: Git Deployment

**Best for**: Continuous deployment, version control

```bash
# SSH into server
ssh user@yourdomain.com

# Navigate to themes directory
cd /path/to/wordpress/wp-content/themes/

# Clone repository
git clone https://github.com/Zeus-Eternal/Krys.git marcia

# Enter theme directory
cd marcia

# Checkout specific version/tag
git checkout v2.0.0

# Install dependencies and build (if Node.js available)
npm install && npm run build
```

### Method 4: WP-CLI

**Best for**: Command-line deployments, automation

```bash
# Install theme from ZIP
wp theme install marcia-2.0.0.zip

# Or install from WordPress.org (once published)
wp theme install marcia

# Activate theme
wp theme activate marcia

# Check theme status
wp theme list
```

### Method 5: Managed Hosting (Kinsta, WP Engine, etc.)

Most managed hosts provide:
- Git integration
- Automated deployments
- Staging environments

**Typical workflow:**
1. Push to Git repository
2. Host auto-deploys to staging
3. Test on staging
4. Promote to production

---

## Initial Setup

### 1. Activate Theme

Via WordPress Admin:
```
Appearance > Themes > Marcia > Activate
```

Via WP-CLI:
```bash
wp theme activate marcia
```

### 2. Install Recommended Plugins

**Required for full functionality:**
- **WooCommerce** (for e-commerce features)

```bash
# Using WP-CLI
wp plugin install woocommerce --activate
```

### 3. Configure Site Editor

1. Navigate to **Appearance > Editor**
2. Customize templates as needed
3. Choose a style variation:
   - Click **Styles** (top right)
   - Click **Browse styles**
   - Select: Minimal, Bold, Luxury, Editorial, Tech, or Dark

### 4. Set Permalinks

**Important for clean URLs:**

1. Go to **Settings > Permalinks**
2. Select **Post name** structure
3. Click **Save Changes**

```bash
# Using WP-CLI
wp rewrite structure '/%postname%/'
wp rewrite flush
```

---

## Configuration

### Performance Optimization

#### 1. Enable Caching

**Plugin recommendations:**
- WP Super Cache
- W3 Total Cache
- LiteSpeed Cache (if on LiteSpeed server)

```bash
# Install caching plugin via WP-CLI
wp plugin install wp-super-cache --activate
```

#### 2. CDN Setup

If using a CDN (Cloudflare, BunnyCDN, etc.):

1. Sign up for CDN service
2. Configure DNS
3. Enable CDN in caching plugin
4. Test asset delivery

#### 3. Image Optimization

**Plugin recommendations:**
- Smush
- ShortPixel
- Imagify

```bash
# Install image optimization plugin
wp plugin install wp-smushit --activate
```

#### 4. Database Optimization

```bash
# Optimize database tables via WP-CLI
wp db optimize
```

### Security Hardening

#### 1. Update wp-config.php

```php
// Add to wp-config.php

// Security keys (generate at https://api.wordpress.org/secret-key/1.1/salt/)
define('AUTH_KEY',         'your-unique-key');
define('SECURE_AUTH_KEY',  'your-unique-key');
define('LOGGED_IN_KEY',    'your-unique-key');
define('NONCE_KEY',        'your-unique-key');
// ... etc

// Disable file editing
define('DISALLOW_FILE_EDIT', true);

// Force SSL for admin
define('FORCE_SSL_ADMIN', true);

// Limit post revisions
define('WP_POST_REVISIONS', 3);
```

#### 2. Set Proper File Permissions

```bash
# Set directory permissions
find /path/to/wordpress -type d -exec chmod 755 {} \;

# Set file permissions
find /path/to/wordpress -type f -exec chmod 644 {} \;

# Protect wp-config.php
chmod 600 wp-config.php
```

#### 3. Install Security Plugin

```bash
# Install Wordfence or similar
wp plugin install wordfence --activate
```

### Environment Variables

Create `.env` file for environment-specific settings:

```env
# .env (DO NOT commit to Git)
WP_ENVIRONMENT=production
WP_DEBUG=false
WP_DEBUG_LOG=false
WP_DEBUG_DISPLAY=false
```

---

## Post-Deployment

### Verification Checklist

- [ ] Theme activated successfully
- [ ] No PHP errors in error log
- [ ] No JavaScript console errors
- [ ] All pages load correctly
- [ ] All patterns working
- [ ] WooCommerce functioning (if installed)
- [ ] Mobile responsiveness confirmed
- [ ] Performance scores acceptable (90+)
- [ ] SSL certificate active
- [ ] Caching working
- [ ] Forms submitting correctly
- [ ] Search functioning
- [ ] 404 page displays

### Performance Testing

```bash
# Test with PageSpeed Insights
https://pagespeed.web.dev/

# Test with GTmetrix
https://gtmetrix.com/

# Test with WebPageTest
https://www.webpagetest.org/
```

### Monitoring Setup

#### 1. Enable Error Logging

```php
// Add to wp-config.php
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
```

Check logs at: `/wp-content/debug.log`

#### 2. Setup Uptime Monitoring

Services:
- Pingdom
- UptimeRobot
- StatusCake

#### 3. Enable Analytics

- Google Analytics
- Matomo (privacy-focused)
- Plausible (privacy-focused)

---

## Troubleshooting

### Common Issues

#### White Screen of Death

**Solution:**
```bash
# Check error logs
tail -f /wp-content/debug.log

# Disable all plugins
wp plugin deactivate --all

# Switch to default theme
wp theme activate twentytwentyfour

# Re-activate Marcia
wp theme activate marcia

# Enable plugins one by one
wp plugin activate plugin-name
```

#### Missing Patterns

**Solution:**
```bash
# Clear cache
wp cache flush

# Clear pattern cache (if caching plugin active)
# Varies by plugin

# Verify patterns directory exists
ls -la wp-content/themes/marcia/patterns/
```

#### Style Variations Not Showing

**Solution:**
1. Verify `styles/` directory exists
2. Check file permissions (644 for files)
3. Clear browser cache
4. Clear WordPress cache
5. Re-save theme.json

#### Performance Issues

**Solution:**
```bash
# Check query monitor
wp plugin install query-monitor --activate

# Optimize database
wp db optimize

# Regenerate thumbnails
wp media regenerate --yes

# Clear all caches
wp cache flush
wp transient delete --all
```

#### 500 Internal Server Error

**Solution:**
1. Check PHP error logs
2. Increase PHP memory limit
3. Check .htaccess syntax
4. Verify file permissions
5. Disable plugins temporarily

```php
// Increase memory limit in wp-config.php
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');
```

### Debug Mode

Enable for troubleshooting:

```php
// wp-config.php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', true);
```

**Remember to disable in production!**

---

## Rollback Procedures

### Quick Rollback

```bash
# Using WP-CLI
wp theme activate twentytwentyfour

# Or revert to previous theme version
cd wp-content/themes/
mv marcia marcia-new
mv marcia-backup marcia
```

### Database Backup

**Before deployment:**
```bash
# Backup database
wp db export backup-$(date +%Y%m%d).sql

# Backup files
tar -czf backup-files-$(date +%Y%m%d).tar.gz wp-content/themes/marcia
```

**Restore if needed:**
```bash
# Restore database
wp db import backup-20250115.sql

# Restore files
tar -xzf backup-files-20250115.tar.gz -C /path/to/wordpress/
```

---

## Staging Environment

### Recommended Workflow

```
Development → Staging → Production
```

### Staging Setup

```bash
# Create staging subdomain
# staging.yourdomain.com

# Clone production to staging
wp db export production.sql
# Import to staging database
# Copy files to staging

# Update URLs
wp search-replace 'yourdomain.com' 'staging.yourdomain.com' --all-tables
```

### Testing on Staging

1. Deploy theme to staging
2. Run full test suite (TESTING.md)
3. Fix any issues
4. Get approval
5. Deploy to production

---

## Continuous Deployment

### Using GitHub Actions

Create `.github/workflows/deploy.yml`:

```yaml
name: Deploy to Production

on:
  push:
    branches: [ main ]
    tags:
      - 'v*'

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3

      - name: Setup Node.js
        uses: actions/setup-node@v3
        with:
          node-version: '18'

      - name: Install dependencies
        run: npm ci

      - name: Build theme
        run: npm run build

      - name: Deploy to production
        uses: SamKirkland/FTP-Deploy-Action@4.3.0
        with:
          server: ${{ secrets.FTP_SERVER }}
          username: ${{ secrets.FTP_USERNAME }}
          password: ${{ secrets.FTP_PASSWORD }}
          server-dir: /wp-content/themes/marcia/
```

---

## Multisite Deployment

### Network Activation

```bash
# Activate theme network-wide
wp theme enable marcia --network

# Or via WordPress Admin:
# Network Admin > Themes > Marcia > Network Enable
```

### Per-Site Activation

```bash
# Activate for specific site
wp theme activate marcia --url=site1.example.com
```

---

## Support & Documentation

### Resources

- **Documentation**: [README.md](README.md)
- **Testing Guide**: [TESTING.md](TESTING.md)
- **Changelog**: [CHANGELOG.md](CHANGELOG.md)
- **Support Forum**: [wordpress.org/support/theme/marcia](https://wordpress.org/support/theme/marcia)
- **GitHub**: [github.com/Zeus-Eternal/Krys](https://github.com/Zeus-Eternal/Krys)

### Getting Help

1. Check documentation
2. Search support forum
3. Check GitHub issues
4. Create support ticket

---

## Deployment Checklist

- [ ] Backup database and files
- [ ] Build production assets
- [ ] Create distribution package
- [ ] Test on staging environment
- [ ] Run full test suite
- [ ] Update version numbers
- [ ] Update changelog
- [ ] Deploy to production
- [ ] Activate theme
- [ ] Configure settings
- [ ] Test all functionality
- [ ] Verify performance scores
- [ ] Enable caching
- [ ] Setup monitoring
- [ ] Document custom changes
- [ ] Train site administrators

---

**Deployment completed by**: _________________

**Date**: _________________

**Version deployed**: 2.0.0

**Environment**: ☐ Development ☐ Staging ☐ Production

**Status**: ☐ Success ☐ Issues (document below)

---

**Notes:**

[Add deployment notes, issues encountered, or special configurations here]
