<?php
/**
 * This file contains the classes used by NumberedHeadings Mediawiki
 * extension.
 * 
 * PHP version 5
 */ 

if (!defined('MEDIAWIKI')) {
        die("This requires the MediaWiki enviroment.");
}

/**
 * NumberedHeadings class contains functions used by NumberedHeadings
 * MediaWiki extension.
 */ 
class NumberedHeadings
{
    /**
     * Function call to toggle autonumbering on hook
     * ParserBeforeInternalParse.
     */
    public static function onInternalParseBeforeLinks(
        &$parser,
        &$text,
        &$strip_state
    ) {
        if (MagicWord::get('MAG_NUMBEREDHEADINGS')->matchAndRemove($text)) {
            $parser->mOptions->setNumberHeadings(true);
        } elseif (MagicWord::get('MAG_NONUMBEREDHEADINGS')->matchAndRemove($text)) {
            $parser->mOptions->setNumberHeadings(false);
        }
        return true;
    }
}
