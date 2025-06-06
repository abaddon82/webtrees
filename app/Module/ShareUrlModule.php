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

namespace Fisharebest\Webtrees\Module;

use Fisharebest\Webtrees\GedcomRecord;
use Fisharebest\Webtrees\I18N;

use function view;

class ShareUrlModule extends AbstractModule implements ModuleShareInterface
{
    use ModuleShareTrait;

    public function title(): string
    {
        return I18N::translate('Share the URL');
    }

    public function description(): string
    {
        return I18N::translate('Copy the URL of the record to the clipboard');
    }

    /**
     * HTML to include in the share links page.
     *
     * @param GedcomRecord $record
     *
     * @return string
     */
    public function share(GedcomRecord $record): string
    {
        return view('modules/share-url/share', ['record' => $record]);
    }
}
