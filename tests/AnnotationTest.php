<?php

use PHPUnit\Framework\TestCase;

class AnnotationTest extends TestCase
{
    /**
     * @beforeClass
     */
    public static function executeFirst()
    {
        echo __METHOD__ . PHP_EOL;
    }

    /**
     * @before
     */
    public function beforeEveryTest()
    {
        echo __METHOD__ . PHP_EOL;
    }

    /**
     * @test
     */
    public function first()
    {
        $this->assertTrue(true);
        echo __METHOD__ . PHP_EOL;
        return 1;
    }

    /**
     * @test
     * @depends first
     */
    public function second($a)
    {
        $this->assertEquals(1, $a);
        echo __METHOD__ . PHP_EOL;
        return 2;
    }

    /**
     * @test
     * @depends second
     * @expectedException Exception
     */
    public function third($a)
    {
        $this->assertEquals(2, $a);
        echo __METHOD__ . PHP_EOL;
        throw new \Exception;
    }

    /**
     * @test
     * @dataProvider getData
     */
    public function fourth($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
        echo __METHOD__ . PHP_EOL;
    }

    /**
     * @after
     */
    public function afterEveryTest()
    {
        echo __METHOD__ . PHP_EOL;
    }

    /**
     * @afterClass
     */
    public static function executeLast()
    {
        echo __METHOD__ . PHP_EOL;
    }

    public function getData()
    {
        return [
            [1, 1, 2],
            [2, 3, 5]
        ];
    }
}