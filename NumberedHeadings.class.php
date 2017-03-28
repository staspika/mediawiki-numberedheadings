<?php
 
if (!defined('MEDIAWIKI')) {
        die("This requires the MediaWiki enviroment.");
}

class NumberedHeadings { 
   #function MagicNumberedHeadingsParserBeforeInternalParse($parser, $text, $stripState)
    static public function onParserBeforeInternalParse(&$parser, &$text, &$stripState)
    {
        if (MagicWord::get( 'MAG_NUMBEREDHEADINGS' )->matchAndRemove( $text ) ) {
            $parser->mOptions->setNumberHeadings(true);
        }
        elseif (MagicWord::get( 'MAG_NONUMBEREDHEADINGS' )->matchAndRemove( $text ) ) {
            $parser->mOptions->setNumberHeadings(FALSE);
        }
    return true;
    }
}
