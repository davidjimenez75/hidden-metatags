# Installation Guide

This guide provides detailed installation instructions for the DokuWiki Metatags Plugin.

## Requirements

- DokuWiki (tested with recent versions)
- PHP 7.0 or higher
- Write access to the DokuWiki plugins directory

## Installation Methods

### Method 1: Extension Manager (Recommended)

1. Log in to your DokuWiki as administrator
2. Go to Admin → Extension Manager
3. Search for "metatags"
4. Click "Install"
5. The plugin will be automatically downloaded and installed

### Method 2: Manual Installation

1. Download the plugin from GitHub:
   ```bash
   wget https://github.com/davidjimenez75/dokuwiki-metatags/archive/refs/heads/main.zip
   ```

2. Extract to your DokuWiki plugins directory:
   ```bash
   unzip main.zip
   mv dokuwiki-metatags-main /path/to/dokuwiki/lib/plugins/metatags
   ```

3. Verify the installation:
   ```bash
   ls -la /path/to/dokuwiki/lib/plugins/metatags/
   ```

   You should see:
   - plugin.info.txt
   - syntax.php
   - action.php
   - style.css
   - conf/
   - lang/

### Method 3: Git Clone

1. Navigate to your DokuWiki plugins directory:
   ```bash
   cd /path/to/dokuwiki/lib/plugins/
   ```

2. Clone the repository:
   ```bash
   git clone https://github.com/davidjimenez75/dokuwiki-metatags.git metatags
   ```

3. Verify the installation:
   ```bash
   cd metatags
   git status
   ```

## Post-Installation

### 1. Verify Installation

1. Log in to DokuWiki as administrator
2. Go to Admin → Extension Manager
3. Look for "Metatags Plugin" in the list of installed plugins
4. Ensure it shows as "enabled"

### 2. Configure Settings (Optional)

1. Go to Admin → Configuration Manager
2. Search for "metatags"
3. Adjust settings as needed:
   - **enable_search**: Enable/disable clickable tag search links
   - **tag_style**: Choose display style (default, minimal, or badge)

### 3. Test the Plugin

Create a test page with some tags:

```
====== Test Page ======

This is a test page with #dokuwiki and #metatags.

Let's try nested tags: #test/installation #test/verification
```

Save the page and verify:
- Tags are displayed with styling
- Tags are clickable (if search is enabled)
- Clicking a tag searches for related pages

## Integration with Markdowku

If you're using the Markdowku plugin for Markdown support:

1. Ensure Markdowku is installed and enabled
2. The metatags plugin will automatically work with Markdown syntax
3. You can use tags in Markdown-formatted pages

Example test page:

```markdown
# Test Page with Markdown

This page uses **Markdown** syntax with #tags.

## Features

- Works with #markdown
- Supports #nested/tags
- Compatible with #dokuwiki
```

## Troubleshooting

### Plugin Not Showing in Extension Manager

**Solution**: Clear DokuWiki cache
```bash
rm -rf /path/to/dokuwiki/data/cache/*
```

Or use Admin → Additional Plugins → Cache Manager → Purge Cache

### Tags Not Rendering

**Possible causes:**
1. Plugin not enabled
   - Go to Extension Manager and enable it

2. Cache issue
   - Clear cache as described above

3. Syntax conflict
   - Check if other plugins might interfere
   - Adjust plugin sort order if needed

### Tags Not Searchable

**Solution**: Rebuild the search index
1. Go to Admin → Search Index Manager
2. Click "Clear index"
3. Click "Add new pages"
4. Wait for indexing to complete

### Style Not Applied

**Solution**: Clear browser cache and DokuWiki cache
```bash
# Clear DokuWiki cache
rm -rf /path/to/dokuwiki/data/cache/*

# Then refresh browser (Ctrl+F5 or Cmd+Shift+R)
```

## Updating

### Via Extension Manager

1. Go to Admin → Extension Manager
2. Look for available updates
3. Click "Update" next to the metatags plugin

### Via Git

```bash
cd /path/to/dokuwiki/lib/plugins/metatags
git pull origin main
```

### Manual Update

1. Backup current installation
2. Download new version
3. Extract and replace existing files
4. Clear cache

## Uninstallation

### Via Extension Manager

1. Go to Admin → Extension Manager
2. Find "Metatags Plugin"
3. Click "Uninstall"

### Manual Uninstallation

```bash
rm -rf /path/to/dokuwiki/lib/plugins/metatags
```

Then clear the cache:
```bash
rm -rf /path/to/dokuwiki/data/cache/*
```

## Permissions

Ensure proper file permissions:

```bash
# Set ownership (adjust user:group as needed)
chown -R www-data:www-data /path/to/dokuwiki/lib/plugins/metatags

# Set permissions
chmod -R 755 /path/to/dokuwiki/lib/plugins/metatags
```

## Security Notes

- The plugin sanitizes all user input
- Tags are escaped before rendering
- No user-executable code is allowed in tags
- Search queries are properly encoded

## Support

If you encounter issues:

1. Check the troubleshooting section above
2. Review the examples in EXAMPLES.md
3. Visit the GitHub repository: https://github.com/davidjimenez75/dokuwiki-metatags
4. Open an issue with:
   - DokuWiki version
   - PHP version
   - Error messages
   - Steps to reproduce

## Next Steps

After installation:

1. Read the README.md for feature overview
2. Review EXAMPLES.md for usage examples
3. Customize styling in your template if desired
4. Start tagging your pages!

Happy tagging! 🏷️
