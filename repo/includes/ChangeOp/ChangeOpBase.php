<?php

namespace Wikibase\ChangeOp;

use InvalidArgumentException;
use Wikibase\Summary;

/**
 * Base class for change operations.
 *
 * @license GPL-2.0+
 * @author Tobias Gritschacher < tobias.gritschacher@wikimedia.de >
 */
abstract class ChangeOpBase implements ChangeOp {

	/**
	 * @param Summary|null $summary
	 * @param string $action
	 * @param string $language
	 * @param string|array $args
	 *
	 * @throws InvalidArgumentException
	 */
	protected function updateSummary( Summary $summary = null, $action, $language = '', $args = '' ) {
		if ( $summary !== null ) {
			$summary->setAction( $action );
			$summary->setLanguage( $language );
			$summary->addAutoSummaryArgs( $args );
		}
	}

}
