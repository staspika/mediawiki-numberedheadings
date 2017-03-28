<?php
 
if (!defined('MEDIAWIKI')) {
        die("This requires the MediaWiki enviroment.");
}

class MagicNumberedHeadings { 
    static public function MagicNumberedHeadingsMagicWordMagicWords(&$magicWords)
    {
        $magicWords[] = 'MAG_NUMBEREDHEADINGS';
        return true;
    }
     
    static public function MagicNumberedHeadingsMagicWordwgVariableIDs(&$wgVariableIDs)
    {
        $wgVariableIDs[] = 'MAG_NUMBEREDHEADINGS';
        return true;
    }
     
    #function MagicNumberedHeadingsParserBeforeInternalParse($parser, $text, $stripState)
    static public function MagicNumberedHeadingsInternalParseBeforeLinks(&$parser, &$text, &$stripState)
    {
        if (MagicWord::get( 'MAG_NUMBEREDHEADINGS' )->matchAndRemove( $text ) )
        {
                $parser->mOptions->setNumberHeadings(true);
        }
        return true;
    }
}
