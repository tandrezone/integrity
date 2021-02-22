<?php
namespace App\Tests\Util;

use PHPUnit\Framework\TestCase;
use App\Utils\Challenge;

class ChallengeTest extends TestCase
{
    private Challenge $challenge;

    public function setUp(): void
    {
        $this->challenge = new Challenge();
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /**
     * @dataProvider transformData
     */
    public function testTransform($a, $b)
    {
        $result = $this->challenge->transform($a);
        $this->assertEquals($b, $result);
    }

    /**
     * @dataProvider topCharsData
     */
    public function testGetTopCharsAndOccurrences($a, $b)
    {
        $result = $this->challenge->getTopCharsAndOccurrences($a);
        $this->assertSame($result,$b);

    }

    /**
     * @dataProvider formatViewData
     */
    public function formattoView($a, $b)
    {
        $result = $this->challenge->formatToView($a);
        $this->assertSame();
    }

    public function transformData()
    {
        return array(
            array(0, 0),
            array("sssd0.,>", "0.,>"),
            array("@#$ %dfd *d+", "@#$%*+")
        );
    }

    public function topCharsData()
    {
        return array(
            array(2, [2=>1]),
            array("asdasd",["a"=>2,"s"=>2,"d"=>2]),
            array("aasdasd",["a"=>3,"s"=>2,"d"=>2])
        );
    }

    public function formatViewData()
    {
        return array(
            array([2=>1], [2,1]),
            array(["a"=>2,"s"=>2,"d"=>2],["a",2],["s"=>2],["d"=>2])
        );
    }
}