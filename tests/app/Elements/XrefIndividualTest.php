<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2025 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Elements;

use DOMDocument;
use Fisharebest\Webtrees\Factories\IndividualFactory;
use Fisharebest\Webtrees\Individual;
use Fisharebest\Webtrees\Registry;
use Fisharebest\Webtrees\TestCase;
use Fisharebest\Webtrees\Tree;
use PHPUnit\Framework\Attributes\CoversClass;
use Psr\Http\Message\ServerRequestInterface;

#[CoversClass(AbstractElement::class)]
#[CoversClass(AbstractXrefElement::class)]
#[CoversClass(XrefIndividual::class)]
class XrefIndividualTest extends TestCase
{
    public function testEdit(): void
    {
        $element = new XrefIndividual('');

        $tree = $this->createMock(Tree::class);

        $factory = $this->createMock(IndividualFactory::class);

        $factory->expects($this->once())
            ->method('make')
            ->willReturn(null);

        Registry::individualFactory($factory);

        $request = self::createRequest();

        Registry::container()->set(ServerRequestInterface::class, $request);

        $html = $element->edit('some-id', 'some-name', '@X123@', $tree);
        $dom  = new DOMDocument();
        $dom->loadHTML($html);

        $select_nodes = $dom->getElementsByTagName('select');
        self::assertEquals(1, $select_nodes->count());

        foreach ($select_nodes as $select_node) {
            $option_nodes = $select_node->getElementsByTagName('option');
            self::assertEquals(1, $option_nodes->count());
        }
    }

    public function testEscape(): void
    {
        $element = new XrefIndividual('');

        self::assertSame('@X123@', $element->escape('@X123@'));
    }

    public function testValueXrefLink(): void
    {
        $element = new XrefIndividual('');

        $record = $this->createMock(Individual::class);

        $record->expects($this->once())
            ->method('fullName')
            ->willReturn('Full Name');

        $record->expects($this->once())
            ->method('url')
            ->willReturn('https://url');

        $tree = $this->createMock(Tree::class);

        $factory = $this->createMock(IndividualFactory::class);

        $factory->expects($this->once())
            ->method('make')
            ->willReturn($record);

        Registry::individualFactory($factory);

        self::assertSame('<a href="https://url">Full Name</a>', $element->value('@X123@', $tree));
    }

    public function testValueXrefLinkWithInvalidXref(): void
    {
        $element = new XrefIndividual('');

        $tree = $this->createMock(Tree::class);

        self::assertSame('<span class="error">invalid</span>', $element->value('invalid', $tree));
    }

    public function testValueXrefLinkWithMissingRecord(): void
    {
        $element = new XrefIndividual('');

        $tree = $this->createMock(Tree::class);

        $factory = $this->createMock(IndividualFactory::class);

        $factory->expects($this->once())
            ->method('make')
            ->willReturn(null);

        Registry::individualFactory($factory);

        self::assertSame('<span class="error">@X321@</span>', $element->value('@X321@', $tree));
    }
}
