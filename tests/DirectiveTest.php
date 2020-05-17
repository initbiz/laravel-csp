<?php

namespace OFFLINE\Csp\Tests;

use OFFLINE\Csp\Directive;

class DirectiveTest extends TestCase
{
    /** @test */
    public function it_can_determine_if_a_directive_is_valid()
    {
        $this->assertTrue(Directive::isValid(Directive::BASE));

        $this->assertFalse(Directive::isValid('invalid'));
    }
}
