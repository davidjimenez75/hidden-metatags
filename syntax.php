<?php
/**
 * DokuWiki Plugin metatags (Syntax Component)
 *
 * Support for Obsidian-style tags (#tag) in DokuWiki
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  David Jimenez
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) {
    die();
}

class syntax_plugin_metatags extends DokuWiki_Syntax_Plugin
{
    /**
     * What kind of syntax are we?
     */
    public function getType()
    {
        return 'substition';
    }

    /**
     * What about paragraphs?
     */
    public function getPType()
    {
        return 'normal';
    }

    /**
     * Where to sort in?
     */
    public function getSort()
    {
        return 305;
    }

    /**
     * Connect lookup pattern to lexer.
     *
     * @param string $mode Parser mode
     */
    public function connectTo($mode)
    {
        // Match Obsidian-style tags: #tag or #tag/subtag
        // Tags can contain letters, numbers, underscores, hyphens, and forward slashes
        // Must start with a letter or number after the #
        $this->Lexer->addSpecialPattern('#[a-zA-Z0-9][a-zA-Z0-9_/\-]*', $mode, 'plugin_metatags');
    }

    /**
     * Handle matches of the metatags syntax
     *
     * @param string       $match   The match of the syntax
     * @param int          $state   The state of the handler
     * @param int          $pos     The position in the document
     * @param Doku_Handler $handler The handler
     * @return array Data for the renderer
     */
    public function handle($match, $state, $pos, Doku_Handler $handler)
    {
        // Remove the leading # and return the tag
        $tag = substr($match, 1);
        
        return array(
            'tag' => $tag,
            'original' => $match
        );
    }

    /**
     * Render xhtml output or metadata
     *
     * @param string        $mode     Renderer mode (supported modes: xhtml, metadata)
     * @param Doku_Renderer $renderer The renderer
     * @param array         $data     The data from the handler() function
     * @return bool If rendering was successful.
     */
    public function render($mode, Doku_Renderer $renderer, $data)
    {
        if ($mode == 'xhtml') {
            $tag = $data['tag'];
            $original = $data['original'];
            
            // Sanitize tag for use in CSS class and search
            $cssTag = $this->sanitizeTagForCss($tag);
            $searchTag = $this->sanitizeTagForSearch($tag);
            
            // Render the tag as a clickable link
            $renderer->doc .= '<span class="metatag metatag-' . $cssTag . '">';
            $renderer->doc .= '<a href="' . wl('', array('do' => 'search', 'id' => $searchTag)) . '" ';
            $renderer->doc .= 'class="metatag-link" title="Search for pages tagged with ' . hsc($tag) . '">';
            $renderer->doc .= hsc($original);
            $renderer->doc .= '</a>';
            $renderer->doc .= '</span>';
            
            return true;
        } elseif ($mode == 'metadata') {
            // Store tags in metadata for indexing
            if (!isset($renderer->meta['plugin_metatags'])) {
                $renderer->meta['plugin_metatags'] = array();
            }
            
            $tag = $data['tag'];
            $renderer->meta['plugin_metatags'][] = $tag;
            
            // Also add to subject metadata for compatibility
            if (!isset($renderer->meta['subject'])) {
                $renderer->meta['subject'] = array();
            }
            
            if (!in_array($tag, $renderer->meta['subject'])) {
                $renderer->meta['subject'][] = $tag;
            }
            
            return true;
        }
        
        return false;
    }
    
    /**
     * Sanitize tag name for use in CSS class names
     *
     * @param string $tag The tag name
     * @return string Sanitized tag name
     */
    private function sanitizeTagForCss($tag)
    {
        // Replace slashes with dashes for CSS class names
        $sanitized = str_replace('/', '-', $tag);
        // Remove any remaining special characters
        $sanitized = preg_replace('/[^a-zA-Z0-9\-_]/', '', $sanitized);
        return $sanitized;
    }
    
    /**
     * Sanitize tag name for search queries
     *
     * @param string $tag The tag name
     * @return string Sanitized tag for search
     */
    private function sanitizeTagForSearch($tag)
    {
        // Keep the tag as-is but encode for URL
        return rawurlencode('#' . $tag);
    }
}
