# NumberedHeadings

MediaWiki extension for toggling headings autonumbering.

## What does this extension do?

This extension adds magic words `__NUMBEREDHEADINGS__` and `__NONUMBEREDHEADINGS__` to the parser. If an article contains the magic word `__NUMBEREDHEADINGS__`, automatic numbering of the headings in this page is forced, regardless of the user preference settings. If the article does not contain this magic word and contains a magic word `__NONUMBEREDHEADINGS__`, automatic numbering of the headings in this page is inhibited — again, regardless of the user preference settings. Note: If article contains both magic words, `__NUMBEREDHEADINGS__` takes precedence over `__NONUMBEREDHEADINGS__`.

## Usage

Add `__NUMBEREDHEADINGS__` or `__NONUMBEREDHEADINGS__` to any article to toggle automatic numbered of the headings in this article.

## Installation

Copy files into `$IP/extensions/NumberedHeadings` (where `$IP` is your MediaWiki installation root) and add the following line towards the end of your $IP/LocalSettings.php:

`wfLoadExtension( 'NumberedHeadings' );`
