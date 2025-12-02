# Contributing to DokuWiki Metatags Plugin

Thank you for your interest in contributing to the Metatags plugin! This document provides guidelines for contributing.

## How to Contribute

### Reporting Bugs

If you find a bug, please open an issue on GitHub with:

1. **Clear title**: Describe the issue briefly
2. **Description**: Detailed explanation of the problem
3. **Steps to reproduce**: How to trigger the bug
4. **Expected behavior**: What should happen
5. **Actual behavior**: What actually happens
6. **Environment**:
   - DokuWiki version
   - PHP version
   - Plugin version
   - Browser (if relevant)
7. **Screenshots**: If applicable

### Suggesting Features

Feature suggestions are welcome! Please open an issue with:

1. **Use case**: Why is this feature needed?
2. **Description**: What should the feature do?
3. **Examples**: How would users interact with it?
4. **Alternatives**: Have you considered other approaches?

### Contributing Code

We welcome code contributions! Here's how:

#### 1. Fork and Clone

```bash
git clone https://github.com/YOUR-USERNAME/dokuwiki-metatags.git
cd dokuwiki-metatags
```

#### 2. Create a Branch

```bash
git checkout -b feature/your-feature-name
# or
git checkout -b fix/issue-description
```

Use descriptive branch names:
- `feature/nested-tag-colors` for new features
- `fix/search-encoding` for bug fixes
- `docs/installation-guide` for documentation

#### 3. Make Your Changes

- Follow the existing code style
- Add comments for complex logic
- Update documentation if needed
- Test your changes thoroughly

#### 4. Test Your Changes

Before submitting:

```bash
# Check PHP syntax
php -l syntax.php
php -l action.php

# Test with a DokuWiki instance
# Install the plugin and verify:
# - Tags render correctly
# - Search works
# - No PHP errors in logs
# - No JavaScript console errors
```

#### 5. Commit Your Changes

Write clear commit messages:

```bash
git add .
git commit -m "Add support for tag aliases

- Implement alias system for tags
- Update metadata handling
- Add configuration options
- Update documentation"
```

Good commit messages:
- Start with a verb (Add, Fix, Update, Remove)
- Be specific about what changed
- Include context if needed
- Reference issues: "Fix #123: Tag encoding issue"

#### 6. Push and Create Pull Request

```bash
git push origin feature/your-feature-name
```

Then create a pull request on GitHub with:
- Clear description of changes
- Link to related issues
- Testing performed
- Screenshots (if UI changes)

## Code Style Guidelines

### PHP Style

Follow DokuWiki plugin conventions:

```php
<?php
/**
 * Description of what this file does
 *
 * @license GPL 2
 * @author  Your Name
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) {
    die();
}

class action_plugin_metatags extends DokuWiki_Action_Plugin
{
    /**
     * Method description
     *
     * @param Type $param Description
     * @return Type Description
     */
    public function methodName($param)
    {
        // Implementation
    }
}
```

**Guidelines:**
- Use 4 spaces for indentation (no tabs)
- Opening braces on same line for functions
- Clear, descriptive variable names
- Comment complex logic
- Use type hints where appropriate (PHP 7+)

### CSS Style

```css
/* Component name */
.metatag {
    property: value;
    another-property: value;
}

/* Modifier */
.metatag-link {
    property: value;
}
```

**Guidelines:**
- Use meaningful class names
- Group related properties
- Include comments for complex styles
- Support dark mode where appropriate

### Documentation Style

- Use Markdown for documentation
- Clear headings and sections
- Code examples with syntax highlighting
- List steps numerically for procedures
- Include screenshots for visual features

## Development Setup

### Local Testing Environment

1. **Install DokuWiki**:
   ```bash
   wget https://download.dokuwiki.org/src/dokuwiki/dokuwiki-stable.tgz
   tar xzf dokuwiki-stable.tgz
   cd dokuwiki
   ```

2. **Install Plugin**:
   ```bash
   cd lib/plugins/
   ln -s /path/to/your/metatags metatags
   ```

3. **Configure Web Server**:
   - Point web server to DokuWiki directory
   - Ensure PHP is configured
   - Access via browser to complete setup

4. **Test Changes**:
   - Create test pages with tags
   - Verify rendering and functionality
   - Check metadata and search

### Testing Checklist

Before submitting code, verify:

- [ ] PHP syntax is valid (`php -l *.php`)
- [ ] No PHP warnings or errors
- [ ] Tags render correctly in page view
- [ ] Tags are clickable (if enabled)
- [ ] Search returns correct results
- [ ] Metadata is stored properly
- [ ] Works with Markdowku/Markdown
- [ ] CSS styling applied correctly
- [ ] No JavaScript console errors
- [ ] Works in multiple browsers
- [ ] Documentation updated if needed

## Pull Request Process

1. **Before Submitting**:
   - Ensure all tests pass
   - Update documentation
   - Add yourself to contributors if desired

2. **PR Review**:
   - Maintainers will review your PR
   - Address any feedback or requested changes
   - Be patient - reviews may take time

3. **After Approval**:
   - PR will be merged by maintainer
   - Your contribution will be in the next release
   - You'll be credited in the changelog

## Code Review Guidelines

When reviewing PRs, consider:

- **Functionality**: Does it work as intended?
- **Security**: Are there security implications?
- **Performance**: Could it be optimized?
- **Compatibility**: Works with DokuWiki versions?
- **Code quality**: Readable, maintainable?
- **Documentation**: Is it documented?
- **Tests**: Are changes tested?

## Community Guidelines

- Be respectful and constructive
- Help others learn and grow
- Welcome newcomers
- Focus on the issue, not the person
- Assume good intentions
- Follow the code of conduct

## Getting Help

If you need help:

1. Check existing documentation
2. Search closed issues
3. Ask in GitHub discussions
4. Open an issue with your question

## Areas Needing Contribution

We especially welcome contributions in:

- **Testing**: More comprehensive tests
- **Documentation**: Tutorials, examples, translations
- **Features**: Tag suggestions, auto-completion, tag cloud
- **Performance**: Optimization for large wikis
- **Compatibility**: Testing with different DokuWiki versions
- **Accessibility**: Improving accessibility features

## Translation

To add a new language:

1. Copy `lang/en/` to `lang/XX/` (XX = language code)
2. Translate strings in `lang.php` and `settings.php`
3. Test with DokuWiki in that language
4. Submit PR with translation

## Versioning

We use semantic versioning (MAJOR.MINOR.PATCH):

- **MAJOR**: Breaking changes
- **MINOR**: New features (backward compatible)
- **PATCH**: Bug fixes

## Release Process

For maintainers:

1. Update version in `plugin.info.txt`
2. Update CHANGELOG.md
3. Create git tag: `git tag v1.x.x`
4. Push tag: `git push origin v1.x.x`
5. Create GitHub release with notes

## License

By contributing, you agree that your contributions will be licensed under GPL 2, the same license as the project.

## Questions?

Feel free to open an issue or reach out to the maintainers.

Thank you for contributing! 🙏
