<?php

namespace spec\Bootstrapper;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LabelSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Bootstrapper\Label');
    }

    function it_can_be_rendered()
    {
        $this->render()->shouldBe("<span class='label label-default'></span>");
    }

    function it_can_be_given_contents()
    {
        $this->withContents('foo')->render()->shouldBe("<span class='label label-default'>foo</span>");
    }

    function it_can_be_given_a_type()
    {
        $types = ['primary','success','info','warning','danger'];

        foreach ($types as $type) {
            $this->$type()->render()->shouldBe("<span class='label label-{$type}'></span>");
        }
    }

    function it_can_be_created_in_one_go()
    {
        $this->create('foo', 'bar')->render()->shouldBe("<span class='label bar'>foo</span>");
    }

}
