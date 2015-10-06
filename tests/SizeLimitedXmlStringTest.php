<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 06/10/15
 * Time: 15:03
 */

namespace CultuurNet\UDB3SilexEntryAPI;

class SizeLimitedXmlStringTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_validates_the_file_size()
    {
        $this->setExpectedException(\CultuurNet\UDB3SilexEntryAPI\TooLargeException::class);
        $xml = new SizeLimitedXmlString(file_get_contents(__DIR__.'/TooLarge.xml'));
    }
}
