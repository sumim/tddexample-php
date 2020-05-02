<?php
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    public function test1()
    {
        $pc = new Product();
        $electronic = new Category();
        $pc->setCategory($electronic);
        $this->assertSame($electronic, $pc->getCategory());
    }

    public function test2()
    {
        $pc = new Product();
        $electronic = new Category();
        $pc->setCategory($electronic);
        $this->assertTrue($electronic->contains($pc));
    }
}