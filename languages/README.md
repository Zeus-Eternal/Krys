# Marcia Theme Translations

This directory contains translation files for the Marcia theme.

## Translation Files

- `marcia.pot` - Translation template file (will be generated)
- Language-specific `.po` and `.mo` files

## How to Translate

### For Translators

1. **Download the .pot file** from this directory
2. **Use a translation tool** like [Poedit](https://poedit.net/)
3. **Create a new translation** from the .pot template
4. **Save your translation** as `marcia-{locale}.po` and `marcia-{locale}.mo`
   - Examples: `marcia-es_ES.po`, `marcia-fr_FR.po`, `marcia-de_DE.po`
5. **Submit your translation** via pull request or contact us

### Translation Tools

- [Poedit](https://poedit.net/) - Desktop translation editor
- [Loco Translate](https://wordpress.org/plugins/loco-translate/) - WordPress plugin
- [GlotPress](https://translate.wordpress.org/) - WordPress.org translation platform

## Available Languages

Currently available translations:
- English (default)

## Translation Status

Help us translate Marcia into your language!

| Language | Status | Contributors |
|----------|--------|--------------|
| English  | 100%   | Core team    |

## Contributing Translations

We welcome translation contributions! Please see [CONTRIBUTING.md](../CONTRIBUTING.md) for guidelines.

### Translation Workflow

1. Fork the repository
2. Create a new branch: `git checkout -b translation/your-language`
3. Add your translation files
4. Submit a pull request

## Generating the POT File

For developers:

```bash
# Using WP-CLI
wp i18n make-pot . languages/marcia.pot

# Or using npm script (if configured)
npm run makepot
```

## Text Domain

All translatable strings use the `marcia` text domain:

```php
__( 'Translatable text', 'marcia' )
esc_html__( 'Translatable text', 'marcia' )
esc_attr__( 'Translatable text', 'marcia' )
_e( 'Translatable text', 'marcia' )
esc_html_e( 'Translatable text', 'marcia' )
```

## RTL Languages

Marcia includes RTL (Right-to-Left) language support for:
- Arabic
- Hebrew
- Persian
- Urdu
- And other RTL languages

## Questions?

If you have questions about translating Marcia:
- Open an [issue](https://github.com/Zeus-Eternal/Krys/issues)
- Contact us via the [support forum](https://wordpress.org/support/theme/marcia)

## Credits

Thank you to all our translators!
