# Changelog

All notable changes to the DokuWiki Metatags Plugin will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2025-12-02

### Added
- Initial release of the Metatags plugin
- Support for Obsidian-style tags using `#tag` syntax
- Support for nested/hierarchical tags using `#tag/subtag` syntax
- Automatic tag rendering as clickable search links
- Integration with DokuWiki's search functionality
- Metadata storage for tags in page metadata
- Search indexing for tags
- CSS styling with default theme
- Dark mode support for tag styling
- Configuration options:
  - `enable_search`: Enable/disable clickable tag search links
  - `tag_style`: Choose tag display style (default, minimal, badge)
- Language support (English)
- Comprehensive documentation:
  - README.md with feature overview
  - INSTALL.md with installation guide
  - EXAMPLES.md with usage examples
  - SECURITY.md with security considerations
  - CONTRIBUTING.md with contribution guidelines
- Action component for metadata and indexing
- Syntax component for tag parsing and rendering
- Sanitization functions for CSS classes and search queries
- Full compatibility with Markdowku (Markdown plugin)

### Security
- Input validation using strict regex patterns
- HTML escaping for all user-generated content
- URL encoding for search parameters
- CSS class sanitization to prevent injection
- No use of dangerous functions (eval, innerHTML, etc.)

### Documentation
- Complete README with features and usage
- Installation guide with multiple methods
- Example file with comprehensive tag usage scenarios
- Security documentation
- Contributing guidelines
- License file (GPL 2)

### Technical Details
- PHP 7.0+ compatibility
- DokuWiki plugin API compliance
- Follows DokuWiki coding standards
- Modular architecture with syntax and action components
- Extensible configuration system

## [Unreleased]

### Planned Features
- Tag cloud visualization
- Tag auto-completion in editor
- Tag suggestions based on existing tags
- Tag statistics and analytics
- Custom tag colors/themes
- Tag aliasing system
- Import/export tag data
- Multi-language tag support
- Tag hierarchy visualization
- Related tags suggestions
- Tag popularity indicators

### Planned Improvements
- Performance optimization for large wikis
- Enhanced search integration
- Better mobile responsiveness
- Accessibility improvements
- Additional language translations
- More configuration options
- Better integration with other plugins

## Version History

### Version Numbering

We use [Semantic Versioning](https://semver.org/):
- **MAJOR** version for incompatible API changes
- **MINOR** version for new functionality in a backward compatible manner
- **PATCH** version for backward compatible bug fixes

### Release Notes Format

Each release includes:
- **Added**: New features
- **Changed**: Changes to existing functionality
- **Deprecated**: Soon-to-be removed features
- **Removed**: Removed features
- **Fixed**: Bug fixes
- **Security**: Security-related changes

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md) for how to contribute to this project.

## Support

For issues, questions, or feature requests, please visit:
https://github.com/davidjimenez75/dokuwiki-metatags/issues

---

[1.0.0]: https://github.com/davidjimenez75/dokuwiki-metatags/releases/tag/v1.0.0
[Unreleased]: https://github.com/davidjimenez75/dokuwiki-metatags/compare/v1.0.0...HEAD
