<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Environment
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

require_once JPATH_PLATFORM . '/joomla/environment/browser.php';

/**
 * Test class for JBrowser.
 *
 * @since       11.1
 */
class JBrowserTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var JBrowser
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

		$this->object = new JBrowser;
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetInstance().
	 *
	 * @return void
	 */
	public function testGetInstance()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testMatch().
	 *
	 * @return void
	 */
	public function testMatch()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetPlatform().
	 *
	 * @return void
	 */
	public function testGetPlatform()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testSetBrowser().
	 *
	 * @return void
	 */
	public function testSetBrowser()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetBrowser().
	 *
	 * @return void
	 */
	public function testGetBrowser()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetMajor().
	 *
	 * @return void
	 */
	public function testGetMajor()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetMinor().
	 *
	 * @return void
	 */
	public function testGetMinor()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetVersion().
	 *
	 * @return void
	 */
	public function testGetVersion()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetAgentString().
	 *
	 * @return void
	 */
	public function testGetAgentString()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGetHTTPProtocol().
	 *
	 * @return void
	 */
	public function testGetHTTPProtocol()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testIsViewable().
	 *
	 * @return void
	 */
	public function testIsViewable()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testIsBrowser().
	 *
	 * @return void
	 */
	public function testIsBrowser()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testIsRobot().
	 *
	 * @return void
	 */
	public function testIsRobot()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testIsMobile().
	 *
	 * @return void
	 */
	public function testIsMobile()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @covers JBrowser::isSSLConnection
	 *
	 * @return void
	 */
	public function testIsSSLConnection()
	{
		unset($_SERVER['HTTPS']);

		$this->assertThat(
			$this->object->isSSLConnection(),
			$this->equalTo(false)
		);

		$_SERVER['HTTPS'] = 'on';

		$this->assertThat(
			$this->object->isSSLConnection(),
			$this->equalTo(true)
		);
	}
}
