<?php

use MediaWiki\MediaWikiServices;

class NumberedHeadings {
	/**
	 * Function call to toggle autonumbering on hook
	 * ParserBeforeInternalParse.
	 *
	 * @param Parser &$parser
	 * @param string &$text
	 * @param string &$strip_state
	 * @return bool
	 */
	public function onInternalParseBeforeLinks(
		&$parser,
		&$text,
		&$strip_state
	) {
		$factory = MediaWikiServices::getInstance()->getMagicWordFactory();
		if ( $factory->get( 'MAG_NUMBEREDHEADINGS' )->matchAndRemove( $text ) ) {
			$parser->getOptions()->setNumberHeadings( true );
		} elseif ( $factory->get( 'MAG_NONUMBEREDHEADINGS' )->matchAndRemove( $text ) ) {
			$parser->getOptions()->setNumberHeadings( false );
		}
		return true;
	}
}
