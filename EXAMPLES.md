# Metatags Plugin Examples

This file demonstrates various use cases for the metatags plugin.

## Basic Examples

### Single Tags

Here's a page about #dokuwiki with some #plugins.

### Multiple Tags

This page covers #webdev, #php, #javascript, and #documentation.

### Tags in Sentences

I'm working on #project today and need to update the #wiki.

## Nested Tag Examples

### Project Organization

Current focus: #project/documentation
Previous work: #project/development
Next phase: #project/testing

### Content Categories

Filed under: #content/tutorials/beginner
Also see: #content/reference/api

### Topics and Subtopics

Technologies: #tech/frontend/react #tech/backend/nodejs #tech/database/mongodb

## Markdown Compatibility Examples

### With Headers

# Documentation Page #important

This is a high-priority page tagged with #documentation and #reference.

### With Lists

Topics to cover:
- #installation guide
- #configuration options
- #troubleshooting tips
- #advanced/customization

### With Code Blocks

When discussing #codeexamples, you might include:

```php
// Example code
function myFunction() {
    // Implementation
}
```

Tags: #php #programming #examples

### With Links and Emphasis

**Important**: See the #guidelines for more info about **#bestpractices**.

*Note*: The #workflow requires #approval before #deployment.

## Complex Examples

### Meeting Notes Template

# Team Meeting - 2025-12-02

**Attendees**: Development Team
**Tags**: #meetings #team/development #planning

**Agenda**:
1. Review #project/status
2. Discuss #blockers and #issues
3. Plan #sprint/next

**Decisions**:
- Approved #feature/newui design
- Scheduled #review/code for Friday
- Updated #documentation/api

**Action Items**:
- @john: Complete #task/database migration
- @jane: Update #wiki/userguide
- @bob: Fix #bug/critical issues

### Knowledge Base Article

# How to Configure DokuWiki Plugins #howto #tutorial

**Category**: #documentation/admin
**Difficulty**: #level/intermediate
**Last Updated**: #status/current

This guide covers #installation, #configuration, and #troubleshooting for DokuWiki plugins.

**Prerequisites**:
- #access/admin rights
- #knowledge/php basics
- #tools/ftp or SSH access

**Related Topics**:
- #security/permissions
- #performance/optimization
- #backup/recovery

## Edge Cases

### Tags with Numbers

Version #v1.0.0 is different from #version2.

### Tags with Underscores and Hyphens

Using #snake_case and #kebab-case tags.

### Multiple Tags Together

Tags:#tag1#tag2#tag3 (not recommended, use spaces: #tag1 #tag2 #tag3)

### Tags at Line Start

#beginning
This tag is at the start of a line.

### Tags at Line End

This tag is at the end of a line #ending

### Tags in Parentheses

Some information (#meta #internal) within parentheses.

## Search Examples

After tagging pages, you can:

1. Click on any tag (e.g., #dokuwiki) to search for all pages with that tag
2. Use DokuWiki search to find: `#project/documentation`
3. Combine with other search terms: `#important meeting notes`

## Invalid Tag Examples

These will NOT be recognized as tags:

- # (just a hash symbol)
- #123 (starting with a number - wait, this WILL work!)
- # space (space after hash)
- #tag with spaces (spaces in tag)
- ##doubletag (double hash - only first # counts)

## Best Practices

### Consistent Naming

Use consistent tag naming conventions:
- Lowercase: #project, #important, #documentation
- Or CamelCase: #ProjectName, #ImportantTask
- Decide on one style and stick to it

### Hierarchical Organization

Use nested tags for better organization:
- #project/alpha, #project/beta, #project/gamma
- #docs/user, #docs/admin, #docs/dev

### Meaningful Tags

Choose descriptive tags:
- Good: #security/authentication, #feature/search, #bug/critical
- Less useful: #misc, #stuff, #things

### Don't Over-Tag

Balance is key:
- Good: 3-7 relevant tags per page
- Too many: 20+ tags makes finding content harder

## Summary

The metatags plugin brings Obsidian-style tagging to DokuWiki, making it easy to:
- Organize content with #tags
- Create hierarchies with #nested/tags
- Search and discover related #content
- Work seamlessly with #markdown via Markdowku

Happy tagging! #dokuwiki #metatags #productivity
