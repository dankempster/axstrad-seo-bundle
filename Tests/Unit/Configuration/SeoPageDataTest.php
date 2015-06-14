<?php
namespace Axstrad\Bundle\SeoBundle\Tests\Unit\Configuration;
use Axstrad\Bundle\SeoBundle\Configuration\SeoPageData;

/**
 * @package AxstradSeoBundle
 * @subpackage Tests
 */
class SeoPageDataTest extends \PHPUnit_Framework_TestCase
{
    public function testNameIsSetByConstructor()
    {
        $fixture = new SeoPageData(array('name' => 'foobar'));

        $this->assertEquals(
            'foobar',
            $fixture->name
        );
    }
}