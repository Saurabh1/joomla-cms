<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Crypt
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JCrypt.
 * Generated by PHPUnit on 2012-03-21 at 21:17:14.
 *
 * @since       11.1
 */
class JCryptTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var JCrypt
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

		$this->object = new JCrypt;
	}

	/**
	 * Test...
	 *
	 * @todo Implement testDecrypt().
	 *
	 * @return void
	 */
	public function testDecrypt()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testEncrypt().
	 *
	 * @return void
	 */
	public function testEncrypt()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testGenerateKey().
	 *
	 * @return void
	 */
	public function testGenerateKey()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @todo Implement testSetKey().
	 *
	 * @return void
	 */
	public function testSetKey()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * Test...
	 *
	 * @return void
	 */
	public function testGenRandomBytes()
	{
		// We're just testing wether the value has the expected length.
		// We obviously can't test the result since it's random.

		$randomBytes16 = JCrypt::genRandomBytes();
		$this->assertEquals(strlen($randomBytes16), 16);

		$randomBytes8 = JCrypt::genRandomBytes(8);
		$this->assertEquals(strlen($randomBytes8), 8);

		$randomBytes17 = JCrypt::genRandomBytes(17);
		$this->assertEquals(strlen($randomBytes17), 17);
	}
}
