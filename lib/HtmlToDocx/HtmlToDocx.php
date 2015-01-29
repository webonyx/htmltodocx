<?php

namespace HtmlToDocx;

require_once __DIR__ . '/src/h2d_htmlconverter.php';
require_once __DIR__ . '/src/styles.inc';
require_once __DIR__ . '/src/simple_html_dom.php';

class HtmlToDocx
{
    /**
     * Wrapper for htmltodocx_insert_html_recursive()
     * - inserts the initial defaults.
     *
     * @param $phpword_element
     *   PHPWord object
     * @param mixed $html_dom_array
     *   SimpleHTMLDom object
     * @param mixed $state
     *   State
     */
    public static function insertHtml(&$phpword_element, $html_dom_array, &$state = array())
    {
        return htmltodocx_insert_html($phpword_element, $html_dom_array, $state);
    }


    /**
     *  get html dom from string
     * @param $str
     * @param bool $lowercase
     * @param bool $forceTagsClosed
     * @param string $target_charset
     * @param bool $stripRN
     * @param string $defaultBRText
     * @param string $defaultSpanText
     * @return bool|simple_html_dom
     */
    public static function getHtml($str, $lowercase = true, $forceTagsClosed = true,
                                        $target_charset = DEFAULT_TARGET_CHARSET, $stripRN = true,
                                        $defaultBRText = DEFAULT_BR_TEXT, $defaultSpanText = DEFAULT_SPAN_TEXT
    )
    {
        $dom = new \simple_html_dom(null, $lowercase, $forceTagsClosed, $target_charset, $stripRN, $defaultBRText, $defaultSpanText);
        if (empty($str) || strlen($str) > MAX_FILE_SIZE) {
            $dom->clear();
            return false;
        }
        $dom->load($str, $lowercase, $stripRN);
        return $dom;
    }

    /**
     * dump html dom tree
     * @param $node
     * @param bool $show_attr
     * @param int $deep
     */
    public static function dumpHtmlTree($node, $show_attr = true, $deep = 0)
    {
        $node->dump($node);
    }
}

