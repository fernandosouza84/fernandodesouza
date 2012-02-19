<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_InfoCard
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: AllTests.php 23775 2011-03-01 17:25:24Z ralph $
 */

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Zend_InfoCard_AllTests::main');
}

require_once 'Zend/InfoCard/XmlParsingTest.php';
require_once 'Zend/InfoCard/ProcessTest.php';
require_once 'Zend/InfoCard/AssertionTest.php';
require_once 'Zend/InfoCard/CipherTest.php';

/**
 * @category   Zend
 * @package    Zend_InfoCard
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_InfoCard
 */
class Zend_InfoCard_AllTests
{
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite("Zend Framework - Zend_InfoCard");

        if(extension_loaded('openssl')) {
            $suite->addTestSuite('Zend_InfoCard_AssertionTest');
            $suite->addTestSuite('Zend_InfoCard_ProcessTest');
            $suite->addTestSuite('Zend_InfoCard_XmlParsingTest');
            $suite->addTestSuite('Zend_InfoCard_CipherTest');
        }

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Zend_InfoCard_AllTests::main') {
    Zend_InfoCard_AllTests::main();
}
