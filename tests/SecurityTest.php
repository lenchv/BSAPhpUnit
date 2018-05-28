<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use BSA\Window;
use BSA\Door;
use BSA\Security;

class SecurityTest extends TestCase
{
    public function testAverageGrades()
    {
        $windowMock = $this->getMockBuilder(Window::class)
            ->setMethods(['close'])
            ->getMock();

        $windowMock->expects($this->once())
            ->method('close');

        $doorMock = $this->getMockBuilder(Door::class)
            ->setMethods(['close'])
            ->getMock();

        $doorMock->expects($this->once())
            ->method('close');

        $security = new Security($windowMock, $doorMock);

        $security->securityOn();
    }
}