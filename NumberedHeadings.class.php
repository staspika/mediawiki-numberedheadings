<?php
 
if (!defined('MEDIAWIKI')) {
        die("This requires the MediaWiki enviroment.");
}

class NumberedHeadings { 
    static public function onMagicWordMagicWords(&$magicWords)
    {
        $magicWords[] = 'MAG_NUMBEREDHEADINGS';
        return true;
    }
     
    static public function onMagicWordwgVariableIDs(&$wgVariableIDs)
    {
        $wgVariableIDs[] = 'MAG_NUMBEREDHEADINGS';
        return true;
    }
     
    #function MagicNumberedHeadingsParserBeforeInternalParse($parser, $text, $stripState)
    static public function onInternalParseBeforeLinks(&$parser, &$text, &$stripState)
    {
        if (MagicWord::get( 'MAG_NUMBEREDHEADINGS' )->matchAndRemove( $text ) )
        {
                $parser->mOptions->setNumberHeadings(true);
        }
        return true;
    }
    static public function onParserBeforeInternalParse(&$parser, &$text, &$stripState)
    {
        if (MagicWord::get( 'MAG_NONUMBEREDHEADINGS' )->matchAndRemove( $text ) ) {
            $parser->mOptions->setNumberHeadings(FALSE);
        }
        return true;
    }
}
