<?php

namespace RuchitViitorCloud\FirstPackage\Tests;


use PHPUnit\Framework\TestCase;
use RuchitViitorCloud\FirstPackage\FirstPackage;

class FirstPackageTest extends  TestCase
{
    /** @test */
    public function it_returns_a_first_package()
    {
        $quotes = new FirstPackage();

        $quote = $quotes->getRandomQuotes();

        $this->assertSame("No guts, no story",$quote);
    }
}