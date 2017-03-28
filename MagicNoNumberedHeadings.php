<?php

if (!defined('MEDIAWIKI')) {
	die("This requires the MediaWiki enviroment.");
}

class MagicNoNumberedHeadings {
    static public function MagicNoNumberedHeadingsParserBeforeInternalParse(&$parser, &$text, &$stripState)
    {
        if (MagicWord::get( 'MAG_NONUMBEREDHEADINGS' )->matchAndRemove( $text ) ) {
            $parser->mOptions->setNumberHeadings(FALSE);
        }
        return true;
    }
}
