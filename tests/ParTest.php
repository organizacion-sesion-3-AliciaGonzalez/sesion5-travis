<?php
use PHPUnit\Framework\TestCase;
require 'par.php';

class ParTest extends TestCase
{
    private $par;
 
    protected function setUp(): void
    {
        $this->par = new Par();
    }
 
    protected function tearDown(): void
    {
        $this->par = NULL;
    }
 
    public function testTrue(): void
    {
        $result = $this->par->parell(2);
        $this->assertEquals(true, $result);
    }

    public function testFalse(): void
    {
        $result = $this->par->parell(3);
        $this->assertEquals(false, $result);
    }
 
    public function testaltretrue(): void
    {
        $result = $this->par->parell(100);
        $this->assertEquals(true, $result);
    }

 public function testaltreFalse(): void
    {
        $result = $this->par->parell(233);
        $this->assertEquals(false, $result);
    }

}
