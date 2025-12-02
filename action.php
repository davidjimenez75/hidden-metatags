<?php
/**
 * DokuWiki Plugin metatags (Action Component)
 *
 * Handles metadata indexing for tags
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  David Jimenez
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) {
    die();
}

class action_plugin_metatags extends DokuWiki_Action_Plugin
{
    /**
     * Registers a callback function for a given event
     *
     * @param Doku_Event_Handler $controller DokuWiki's event controller object
     * @return void
     */
    public function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('INDEXER_PAGE_ADD', 'BEFORE', $this, 'handleIndexer');
        $controller->register_hook('PARSER_METADATA_RENDER', 'AFTER', $this, 'handleMetadata');
    }

    /**
     * Handle indexer event to add tags to the search index
     *
     * @param Doku_Event $event  Event object
     * @param mixed      $param  Optional parameter passed when event was registered
     * @return void
     */
    public function handleIndexer(Doku_Event $event, $param)
    {
        // Get the page metadata
        $id = $event->data['page'];
        $metadata = p_get_metadata($id);
        
        // Add tags to the index
        if (isset($metadata['plugin_metatags']) && is_array($metadata['plugin_metatags'])) {
            foreach ($metadata['plugin_metatags'] as $tag) {
                // Add tag to the page text for indexing (with # prefix)
                $event->data['body'] .= ' #' . $tag;
            }
        }
    }

    /**
     * Handle metadata render event
     *
     * @param Doku_Event $event  Event object
     * @param mixed      $param  Optional parameter passed when event was registered
     * @return void
     */
    public function handleMetadata(Doku_Event $event, $param)
    {
        // Ensure tags are properly stored in metadata
        if (isset($event->data['current']['plugin_metatags'])) {
            $tags = $event->data['current']['plugin_metatags'];
            
            // Deduplicate tags
            $tags = array_unique($tags);
            
            // Store back to metadata
            $event->data['current']['plugin_metatags'] = $tags;
        }
    }
}
