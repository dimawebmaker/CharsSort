<?php


namespace CharsSort\Tests;

use CharsSort\CharsSorter;
use PHPUnit\Framework\TestCase;

final class CharSortTest extends TestCase
{
    public function testShouldReturnSortedString()
    {
        $c = new CharsSorter("αβγαβγ αβγαβγαβγ");
        $this->assertEquals("ααββγγ αααβββγγγ", $c->orderString());
    }
}