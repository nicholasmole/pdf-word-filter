<?php
 /**
 * Plugin Name: PDF Word Filter
 * Description: Adds a pdf filter to Media PAge
 * Version: 1.0x
 * Author: Nick Mole
 * Text Domain: pwfilter-pdf-word-filter
 */



/**
* add custom "mime types" (file supertypes)
* @param array $post_mime_types
* @return array
*/
function pwfilter_filterPostMimeTypes($post_mime_types) {
    $post_mime_types['application/pdf'] = array('PDF', 'Manage PDFs', _n_noop('PDF <span class="count">(%s)</span>', 'PDFs <span class="count">(%s)</span>'));
    $post_mime_types['application/msword'] = array('Word Docs', 'Manage Word Docs', _n_noop('Word DOC <span class="count">(%s)</span>', 'Word Docs <span class="count">(%s)</span>'));
    return $post_mime_types;
}
add_filter('post_mime_types', 'pwfilter_filterPostMimeTypes');

