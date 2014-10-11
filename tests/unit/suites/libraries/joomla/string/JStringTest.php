<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  String
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

require_once 'TestHelpers/JString-helper-dataset.php';

/**
 * Test class for JString.
 * Generated by PHPUnit on 2009-10-26 at 22:29:34.
 *
 * @since       11.3
 */
class JStringTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var    JString
	 * @since  11.2
	 */
	protected $object;

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getIncrementData()
	{
		return JStringTest_DataSet::$increment;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrposData()
	{
		return JStringTest_DataSet::$strposTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrrposData()
	{
		return JStringTest_DataSet::$strrposTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getSubstrData()
	{
		return JStringTest_DataSet::$substrTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrtolowerData()
	{
		return JStringTest_DataSet::$strtolowerTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrtoupperData()
	{
		return JStringTest_DataSet::$strtoupperTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrlenData()
	{
		return JStringTest_DataSet::$strlenTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStr_ireplaceData()
	{
		return JStringTest_DataSet::$str_ireplaceTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStr_splitData()
	{
		return JStringTest_DataSet::$str_splitTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrcasecmpData()
	{
		return JStringTest_DataSet::$strcasecmpTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrcmpData()
	{
		return JStringTest_DataSet::$strcmpTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrcspnData()
	{
		return JStringTest_DataSet::$strcspnTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStristrData()
	{
		return JStringTest_DataSet::$stristrTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrrevData()
	{
		return JStringTest_DataSet::$strrevTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getStrspnData()
	{
		return JStringTest_DataSet::$strspnTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getSubstr_replaceData()
	{
		return JStringTest_DataSet::$substr_replaceTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getLtrimData()
	{
		return JStringTest_DataSet::$ltrimTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getRtrimData()
	{
		return JStringTest_DataSet::$rtrimTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getTrimData()
	{
		return JStringTest_DataSet::$trimTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getUcfirstData()
	{
		return JStringTest_DataSet::$ucfirstTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getUcwordsData()
	{
		return JStringTest_DataSet::$ucwordsTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getTranscodeData()
	{
		return JStringTest_DataSet::$transcodeTests;
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 */
	public function getValidData()
	{
		return JStringTest_DataSet::$validTests;
	}

	/**
	 * Test...
	 *
	 * @param   string  $string    @todo
	 * @param   string  $style     @todo
	 * @param   string  $number    @todo
	 * @param   string  $expected  @todo
	 *
	 * @return  void
	 *
	 * @dataProvider  getIncrementData
	 * @since   11.2
	 * @covers  JString::increment
	 */
	public function testIncrement($string, $style, $number, $expected)
	{
		$this->assertThat(
			JString::increment($string, $style, $number),
			$this->equalTo($expected)
		);
	}

	// @codingStandardsIgnoreStart
	// @todo Arguments with default values must be at the end of the argument list

	/**
	 * Test...
	 *
	 * @param   string   $haystack  @todo
	 * @param   string   $needle    @todo
	 * @param   integer  $offset    @todo
	 * @param   string   $expect    @todo
	 *
	 * @return  void
	 *
	 * @dataProvider  getStrposData
	 * @since   11.2
	 * @covers  JString::strpos
	 */
	public function testStrpos($haystack, $needle, $offset = 0, $expect)
	{
		$actual = JString::strpos($haystack, $needle, $offset);
		$this->assertEquals($expect, $actual);
	}

	// @codingStandardsIgnoreEnd

	// @codingStandardsIgnoreStart
	// @todo Arguments with default values must be at the end of the argument list

	/**
	 * Test...
	 *
	 * @param   string   $haystack  @todo
	 * @param   string   $needle    @todo
	 * @param   integer  $offset    @todo
	 * @param   string   $expect    @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStrrposData
	 * @since   11.2
	 * @covers  JString::strrpos
	 */
	public function testStrrpos($haystack, $needle, $offset = 0, $expect)
	{
		$actual = JString::strrpos($haystack, $needle, $offset);
		$this->assertEquals($expect, $actual);
	}

	// @codingStandardsIgnoreEnd

	// @codingStandardsIgnoreStart
	// @todo Arguments with default values must be at the end of the argument list

	/**
	 * Test...
	 *
	 * @param   string    $string  @todo
	 * @param   string    $start   @todo
	 * @param   bool|int  $length  @todo
	 * @param   string    $expect  @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getSubstrData
	 * @since   11.2
	 * @covers  JString::substr
	 */
	public function testSubstr($string, $start, $length = false, $expect)
	{
		$actual = JString::substr($string, $start, $length);
		$this->assertEquals($expect, $actual);
	}

	// @codingStandardsIgnoreEnd

	/**
	 * Test...
	 *
	 * @param   string  $string  @todo
	 * @param   string  $expect  @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStrtolowerData
	 * @since   11.2
	 * @covers  JString::strtolower
	 */
	public function testStrtolower($string, $expect)
	{
		$actual = JString::strtolower($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string  @todo
	 * @param   string  $expect  @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStrtoupperData
	 * @since   11.2
	 * @covers  JString::strtoupper
	 */
	public function testStrtoupper($string, $expect)
	{
		$actual = JString::strtoupper($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string  @todo
	 * @param   string  $expect  @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStrlenData
	 * @since   11.2
	 * @covers  JString::strlen
	 */
	public function testStrlen($string, $expect)
	{
		$actual = JString::strlen($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string   $search   @todo
	 * @param   string   $replace  @todo
	 * @param   string   $subject  @todo
	 * @param   integer  $count    @todo
	 * @param   string   $expect   @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStr_ireplaceData
	 * @since   11.2
	 * @covers  JString::str_ireplace
	 */
	public function testStr_ireplace($search, $replace, $subject, $count, $expect)
	{
		$actual = JString::str_ireplace($search, $replace, $subject, $count);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string        @todo
	 * @param   string  $split_length  @todo
	 * @param   string  $expect        @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStr_splitData
	 * @since   11.2
	 * @covers  JString::str_split
	 */
	public function testStr_split($string, $split_length, $expect)
	{
		$actual = JString::str_split($string, $split_length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string1  @todo
	 * @param   string  $string2  @todo
	 * @param   string  $locale   @todo
	 * @param   string  $expect   @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStrcasecmpData
	 * @since   11.2
	 * @covers  JString::strcasecmp
	 */
	public function testStrcasecmp($string1, $string2, $locale, $expect)
	{
		// Convert the $locale param to a string if it is an array
		if (is_array($locale))
		{
			$locale = "'" . implode("', '", $locale) . "'";
		}

		if (substr(php_uname(), 0, 6) == 'Darwin' && $locale != false)
		{
			$this->markTestSkipped('Darwin bug prevents foreign conversion from working properly');
		}
		elseif ($locale != false && !setlocale(LC_COLLATE, $locale))
		{
			$this->markTestSkipped("Locale {$locale} is not available.");
		}
		else
		{
			$actual = JString::strcasecmp($string1, $string2, $locale);

			if ($actual != 0)
			{
				$actual = $actual / abs($actual);
			}

			$this->assertEquals($expect, $actual);
		}
	}

	/**
	 * Test...
	 *
	 * @param   string  $string1  @todo
	 * @param   string  $string2  @todo
	 * @param   string  $locale   @todo
	 * @param   string  $expect   @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStrcmpData
	 * @since   11.2
	 * @covers  JString::strcmp
	 */
	public function testStrcmp($string1, $string2, $locale, $expect)
	{
		// Convert the $locale param to a string if it is an array
		if (is_array($locale))
		{
			$locale = "'" . implode("', '", $locale) . "'";
		}

		if (substr(php_uname(), 0, 6) == 'Darwin' && $locale != false)
		{
			$this->markTestSkipped('Darwin bug prevents foreign conversion from working properly');
		}
		elseif ($locale != false && !setlocale(LC_COLLATE, $locale))
		{
			// If the locale is not available, we can't have to transcode the string and can't reliably compare it.
			$this->markTestSkipped("Locale {$locale} is not available.");
		}
		else
		{
			$actual = JString::strcmp($string1, $string2, $locale);

			if ($actual != 0)
			{
				$actual = $actual / abs($actual);
			}

			$this->assertEquals($expect, $actual);
		}
	}

	/**
	 * Test...
	 *
	 * @param   string   $haystack  @todo
	 * @param   string   $needles   @todo
	 * @param   integer  $start     @todo
	 * @param   integer  $len       @todo
	 * @param   string   $expect    @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStrcspnData
	 * @since   11.2
	 * @covers  JString::strcspn
	 */
	public function testStrcspn($haystack, $needles, $start, $len, $expect)
	{
		$actual = JString::strcspn($haystack, $needles, $start, $len);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $haystack  @todo
	 * @param   string  $needle    @todo
	 * @param   string  $expect    @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStristrData
	 * @since   11.2
	 * @covers  JString::stristr
	 */
	public function testStristr($haystack, $needle, $expect)
	{
		$actual = JString::stristr($haystack, $needle);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string  @todo
	 * @param   string  $expect  @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStrrevData
	 * @since   11.2
	 * @covers  JString::strrev
	 */
	public function testStrrev($string, $expect)
	{
		$actual = JString::strrev($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string   $subject  @todo
	 * @param   string   $mask     @todo
	 * @param   integer  $start    @todo
	 * @param   integer  $length   @todo
	 * @param   string   $expect   @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getStrspnData
	 * @since   11.2
	 * @covers  JString::strspn
	 */
	public function testStrspn($subject, $mask, $start, $length, $expect)
	{
		$actual = JString::strspn($subject, $mask, $start, $length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string   $string       @todo
	 * @param   string   $replacement  @todo
	 * @param   integer  $start        @todo
	 * @param   integer  $length       @todo
	 * @param   string   $expect       @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getSubstr_replaceData
	 * @since   11.2
	 * @covers  JString::substr_replace
	 */
	public function testSubstr_replace($string, $replacement, $start, $length, $expect)
	{
		$actual = JString::substr_replace($string, $replacement, $start, $length);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string    @todo
	 * @param   string  $charlist  @todo
	 * @param   string  $expect    @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getLtrimData
	 * @since   11.2
	 * @covers  JString::ltrim
	 */
	public function testLtrim($string, $charlist, $expect)
	{
		if ($charlist === null)
		{
			$actual = JString::ltrim($string);
		}
		else
		{
			$actual = JString::ltrim($string, $charlist);
		}
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string    @todo
	 * @param   string  $charlist  @todo
	 * @param   string  $expect    @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getRtrimData
	 * @since   11.2
	 * @covers  JString::rtrim
	 */
	public function testRtrim($string, $charlist, $expect)
	{
		if ($charlist === null)
		{
			$actual = JString::rtrim($string);
		}
		else
		{
			$actual = JString::rtrim($string, $charlist);
		}
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string    @todo
	 * @param   string  $charlist  @todo
	 * @param   string  $expect    @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getTrimData
	 * @since   11.2
	 * @covers  JString::trim
	 */
	public function testTrim($string, $charlist, $expect)
	{
		if ($charlist === null)
		{
			$actual = JString::trim($string);
		}
		else
		{
			$actual = JString::trim($string, $charlist);
		}
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string        @todo
	 * @param   string  $delimiter     @todo
	 * @param   string  $newDelimiter  @todo
	 * @param   string  $expect        @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getUcfirstData
	 * @since   11.2
	 * @covers  JString::ucfirst
	 */
	public function testUcfirst($string, $delimiter, $newDelimiter, $expect)
	{
		$actual = JString::ucfirst($string, $delimiter, $newDelimiter);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string  @todo
	 * @param   string  $expect  @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getUcwordsData
	 * @since   11.2
	 * @covers  JString::ucwords
	 */
	public function testUcwords($string, $expect)
	{
		$actual = JString::ucwords($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $source         @todo
	 * @param   string  $from_encoding  @todo
	 * @param   string  $to_encoding    @todo
	 * @param   string  $expect         @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getTranscodeData
	 * @since   11.2
	 * @covers  JString::transcode
	 */
	public function testTranscode($source, $from_encoding, $to_encoding, $expect)
	{
		$actual = JString::transcode($source, $from_encoding, $to_encoding);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string  @todo
	 * @param   string  $expect  @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getValidData
	 * @since   11.2
	 * @covers  JString::valid
	 */
	public function testValid($string, $expect)
	{
		$actual = JString::valid($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @param   string  $string  @todo
	 * @param   string  $expect  @todo
	 *
	 * @return  array
	 *
	 * @dataProvider  getValidData
	 * @since   11.2
	 * @covers  JString::compliant
	 */
	public function testCompliant($string, $expect)
	{
		$actual = JString::compliant($string);
		$this->assertEquals($expect, $actual);
	}

	/**
	 * Test...
	 *
	 * @return  array
	 *
	 * @since   11.2
	 * @covers  JString::parse_url
	 */
	public function testParse_Url()
	{
		$url = 'http://localhost/joomla_development/j16_trunk/administrator/index.php?option=com_contact&view=contact&layout=edit&id=5';
		$expected = parse_url($url);
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

		// Test all parts of query
		$url = 'https://john:doe@www.google.com:80/folder/page.html#id?var=kay&var2=key&true';
		$expected = parse_url($url);
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

		// Test special characters in URL
		$url = 'http://joomla.org/mytestpath/È';
		$expected = parse_url($url);

		// Fix up path for UTF-8 characters
		$expected['path'] = '/mytestpath/È';
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

		// Test special characters in URL
		$url = 'http://mydomain.com/!*\'();:@&=+$,/?%#[]" \\';
		$expected = parse_url($url);
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

		// Test url encoding in URL
		$url = 'http://mydomain.com/%21%2A%27%28%29%3B%3A%40%26%3D%24%2C%2F%3F%25%23%5B%22%20%5C';
		$expected = parse_url($url);
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

		// Test a mix of the above
		$url = 'http://john:doe@mydomain.com:80/%È21%25È3*%(';
		$expected = parse_url($url);

		// Fix up path for UTF-8 characters
		$expected['path'] = '/%È21%25È3*%(';
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');

		// Test invalild URL
		$url = 'http:///mydomain.com';
		$expected = parse_url($url);
		$actual = JString::parse_url($url);
		$this->assertEquals($expected, $actual, 'Line: ' . __LINE__ . ' Results should be equal');
	}
}
