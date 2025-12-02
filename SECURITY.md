# Security

## Security Considerations

The Metatags plugin has been designed with security as a priority. This document outlines the security measures implemented.

## Input Validation

- **Tag Pattern Matching**: Tags are validated using a strict regex pattern that only allows:
  - Letters (a-z, A-Z)
  - Numbers (0-9)
  - Underscores (_)
  - Hyphens (-)
  - Forward slashes (/) for nested tags
  
- **No Arbitrary Input**: The pattern prevents arbitrary code or script injection through tag names.

## Output Escaping

All user-generated content is properly escaped before rendering:

1. **HTML Escaping**: The `hsc()` function (DokuWiki's HTML special chars) is used for:
   - Tag display text
   - HTML attribute values (title)
   - Any user-controlled content

2. **URL Encoding**: Search parameters are properly encoded using `rawurlencode()` to prevent URL injection attacks.

3. **CSS Class Sanitization**: Tag names used in CSS classes are sanitized to remove special characters, preventing CSS injection.

## XSS Prevention

Cross-Site Scripting (XSS) attacks are prevented through:

- Consistent use of output escaping functions
- No use of `innerHTML`, `eval()`, or similar dangerous functions
- Proper HTML attribute quoting
- No direct DOM manipulation with user input

## SQL Injection

The plugin does not perform direct database operations:

- Uses DokuWiki's metadata system
- No SQL queries are constructed
- No database access beyond what DokuWiki provides

## Path Traversal

The plugin has no file system operations:

- Does not read or write files directly
- Does not accept file paths from users
- Relies entirely on DokuWiki's page system

## CSRF Protection

Cross-Site Request Forgery is not a concern because:

- The plugin only renders tags (read-only operation)
- No state-changing operations are performed
- No form submissions or data modifications

## Information Disclosure

- Only public page content is processed
- No sensitive information is exposed
- Tag metadata is only as accessible as the page itself

## Authentication & Authorization

- Relies on DokuWiki's built-in access control
- No custom authentication logic
- Respects DokuWiki's page permissions

## Security Review Checklist

- [x] Input validation with strict regex patterns
- [x] Output escaping with hsc() for all user content
- [x] URL encoding for search parameters
- [x] CSS class name sanitization
- [x] No SQL queries or database access
- [x] No file system operations
- [x] No state-changing operations (CSRF-safe)
- [x] No custom authentication logic
- [x] XSS prevention through proper escaping
- [x] No use of dangerous functions (eval, innerHTML, etc.)

## Reporting Security Issues

If you discover a security vulnerability, please report it by:

1. **Do NOT** open a public GitHub issue
2. Email the maintainer directly (see plugin.info.txt for contact)
3. Include:
   - Description of the vulnerability
   - Steps to reproduce
   - Potential impact
   - Suggested fix (if available)

We take security seriously and will respond promptly to legitimate security concerns.

## Security Updates

When security updates are released:

- They will be clearly marked in the changelog
- Users will be notified through DokuWiki's extension manager
- We recommend keeping the plugin updated to the latest version

## Best Practices for Users

1. Keep DokuWiki and all plugins updated
2. Use proper access controls on pages
3. Review and moderate user-generated content
4. Monitor search patterns for suspicious activity
5. Regular security audits of your DokuWiki installation

## Security Standards Compliance

This plugin follows:

- OWASP Top 10 security guidelines
- DokuWiki plugin security best practices
- Secure coding standards for PHP

## Code Review

The plugin code is open source and available for security review at:
https://github.com/davidjimenez75/dokuwiki-metatags

Community security reviews are welcome and appreciated.

## Last Security Review

- **Date**: 2025-12-02
- **Version**: 1.0.0
- **Result**: No vulnerabilities identified
- **Reviewer**: Automated security scanning + manual review

## License

This security document is part of the Metatags plugin and is licensed under GPL 2.
