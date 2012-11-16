<?php

namespace Wikibase\Test;

/**
 * Tests for the SpecialItemDisambiguation class.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @since 0.1
 *
 * @ingroup Wikibase
 * @ingroup Test
 *
 * @group Wikibase
 * @group SpecialPage
 * @group WikibaseSpecialPage
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 * @author Daniel Kinzler
 */
class SpecialItemDisambiguationTest extends SpecialPageTestBase {

	protected function newSpecialPage() {
		return new \SpecialItemDisambiguation();
	}

	public function testExecute() {
		//TODO: Actually verify that the output is correct.
		//      Currently this just tests that there is no fatal error.

		list( $output, ) = $this->executeSpecialPage( '' );
		$this->assertTrue( true, 'Calling execute without any subpage value' );

		list( $output, ) = $this->executeSpecialPage( 'en/oHai' );
		$this->assertTrue( true, 'Calling execute with a subpage value' ); //TODO: assert output
	}

}
