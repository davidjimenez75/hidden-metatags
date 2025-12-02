# DokuWiki Metatags Plugin

A DokuWiki plugin that enables Obsidian-style tags (`#tag`) in DokuWiki, with full compatibility with Markdowku (Markdown plugin for DokuWiki).

## Overview

This plugin allows you to use Obsidian-style hashtags in your DokuWiki pages, making it easy to tag and categorize content. Tags are rendered as clickable links that search for other pages containing the same tag.

**Original Inspiration:** This project was inspired by the [hidden plugin](https://codeberg.org/gturri/hidden) from DokuWiki.

## Features

- ✅ **Obsidian-style tags**: Use `#tag` syntax just like in Obsidian
- ✅ **Nested tags**: Support for hierarchical tags like `#tag/subtag`
- ✅ **Clickable tags**: Tags are rendered as links that search for related pages
- ✅ **Metadata integration**: Tags are stored in page metadata for indexing
- ✅ **Search integration**: Tags are indexed for full-text search
- ✅ **Markdowku compatible**: Works seamlessly with Markdown syntax
- ✅ **Customizable styling**: CSS classes for custom styling
- ✅ **Dark mode support**: Automatic dark mode styling

## Installation

### Manual Installation

1. Download the plugin and extract it to your DokuWiki `lib/plugins/` directory
2. The plugin folder should be named `metatags`
3. The structure should look like: `lib/plugins/metatags/plugin.info.txt`

### Git Installation

```bash
cd lib/plugins/
git clone https://github.com/davidjimenez75/dokuwiki-metatags.git metatags
```

## Usage

### Basic Tags

Simply add tags anywhere in your text using the `#` symbol:

```
This is a page about #dokuwiki and #plugins.
```

### Nested Tags

Create hierarchical tags using forward slashes:

```
Working on #project/documentation and #project/testing.
```

### Tag Rules

- Tags must start with a letter or number after the `#`
- Valid characters: letters, numbers, underscores (`_`), hyphens (`-`), and forward slashes (`/`)
- Tags cannot contain spaces
- Examples of valid tags:
  - `#tag`
  - `#my-tag`
  - `#tag_name`
  - `#category/subcategory`
  - `#tag123`

### With Markdowku

The plugin is fully compatible with Markdowku. You can use tags in Markdown-formatted pages:

```markdown
# My Page Title

This is a page about #dokuwiki with #markdown support.

## Section with Tags

- Item with #important tag
- Item with #project/phase1 tag
```

## How It Works

1. **Parsing**: The plugin uses DokuWiki's syntax parser to detect `#tag` patterns
2. **Rendering**: Tags are rendered as styled `<span>` elements with clickable links
3. **Metadata**: Tags are stored in page metadata for search and indexing
4. **Search**: Clicking a tag searches for all pages containing that tag
5. **Indexing**: Tags are added to the search index for full-text search

## Configuration

The plugin provides several configuration options accessible through DokuWiki's Configuration Manager:

- **enable_search**: Enable/disable search links on tags (default: enabled)
- **tag_style**: Choose tag display style: default, minimal, or badge (default: default)

## Styling

The plugin includes default CSS styling for tags. You can customize the appearance by overriding these CSS classes in your template:

```css
.metatag { }              /* Container for tag */
.metatag-link { }         /* The clickable tag link */
.metatag-link:hover { }   /* Tag hover state */
```

Tags also receive individual CSS classes based on their name (with slashes replaced by hyphens):
- `#tag` → `.metatag-tag`
- `#project/docs` → `.metatag-project-docs`

## Compatibility

- **DokuWiki**: Compatible with recent DokuWiki versions
- **Markdowku**: Full compatibility with Markdown syntax
- **Other plugins**: Works alongside most DokuWiki plugins
- **PHP**: Requires PHP 7.0 or higher

## Search and Indexing

Tags are automatically:
1. Added to page metadata under `plugin_metatags` and `subject` keys
2. Indexed by DokuWiki's search indexer
3. Searchable using DokuWiki's built-in search
4. Clickable to search for related pages

## Development

### Structure

```
metatags/
├── plugin.info.txt    # Plugin metadata
├── syntax.php         # Main syntax parser
├── action.php         # Action component for metadata
├── style.css          # Default styling
├── conf/              # Configuration files
│   ├── default.php    # Default settings
│   └── metadata.php   # Configuration metadata
└── lang/              # Language files
    └── en/            # English translations
        ├── lang.php
        └── settings.php
```

### Key Components

- **syntax.php**: Parses `#tag` syntax and renders HTML
- **action.php**: Handles metadata storage and search indexing
- **style.css**: Provides default tag styling
- **conf/**: Configuration options
- **lang/**: Internationalization support

## Examples

### Simple Tagging

```
I'm learning #dokuwiki and experimenting with #plugins.
```

Renders as: I'm learning [#dokuwiki] and experimenting with [#plugins].

### Project Organization

```
# Project Documentation

Status: #project/active
Tags: #documentation #project/phase2 #important

This document covers...
```

### Combining with Markdown

```markdown
## Meeting Notes - 2025-12-02

**Topics:**
- Discussed #project/roadmap
- Reviewed #documentation needs
- Planned #development/sprint3

**Action Items:**
- Update #wiki pages
- Create #templates for new sections
```

## License

GPL 2 http://www.gnu.org/licenses/gpl-2.0.html

## Credits

- **Author**: David Jimenez
- **Inspired by**: [hidden plugin](https://codeberg.org/gturri/hidden) by gturri

## Support

For issues, questions, or contributions, please visit:
https://github.com/davidjimenez75/dokuwiki-metatags

## Changelog

### Version 1.0.0 (2025-12-02)
- Initial release
- Obsidian-style tag support (`#tag`)
- Nested tag support (`#tag/subtag`)
- Markdown/Markdowku compatibility
- Search integration
- Metadata indexing
- Customizable styling
- Dark mode support
