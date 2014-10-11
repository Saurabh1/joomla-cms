<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Document
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JDocumentRenderer.
 *
 * @since       11.1
 */
class JDocumentRendererTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var    JDocumentRenderer
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		parent::setUp();

		$doc = new JDocument;
		$this->object = new JDocumentRenderer($doc);
	}

	/**
	 * Test JDocumentRenderer::render().
	 *
	 * Empty test because the base class does nothing
	 *
	 * @since 11.3
	 *
	 * @return void
	 */
	public function testRender()
	{
		$this->assertThat(
			$this->object->render('test'),
			$this->equalTo(null)
		);
	}

	/**
	 * Test JDocumentRenderer::getContentType().
	 *
	 * @since 11.3
	 *
	 * @return void
	 */
	public function testGetContentType()
	{
		$this->assertThat(
			$this->object->getContentType(),
			$this->equalTo('text/html')
		);
	}
}
