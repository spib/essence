<?php

/**
 * @author  Félix Girault <felix.girault@gmail.com>
 * @license FreeBSD License (http://opensource.org/licenses/BSD-2-Clause)
 */

namespace Essence;

use PHPUnit_Framework_TestCase;


/**
 *    Test case for Essence.
 */

class EssenceIntegrationTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function testYoutubeEmbed()
    {
        // ARRANGE
        $essence = \Essence\Essence::instance();

        // ACT

        $media = $essence->embed('http://www.youtube.com/watch?v=Cgoqrgc_0cM');

        // ASSERT

        $this->assertNotNull($media);
        $this->assertEquals('JAY-Z - Big Pimpin\' ft. UGK', $media->title);
    }

}
